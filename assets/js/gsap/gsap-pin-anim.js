(function ($) {
  "use strict";

  // Listing All Animation Functions For Frontend
  function int_all_animations() {
    gsap_fixed_elements();
  }

  // Initialize All Animations - use native event listener to avoid jQuery 5 compatibility issues
  // The error "Permission denied to access property 'apply'" occurs with jQuery 5 when using $(window).on()
  function initOnLoad() {
    if (document.readyState === "complete") {
      // Page already loaded, run immediately
      int_all_animations();
    } else {
      // Use native addEventListener instead of jQuery to avoid permission errors
      if (window.addEventListener) {
        window.addEventListener("load", int_all_animations, false);
      } else if (window.attachEvent) {
        // Fallback for older IE
        window.attachEvent("onload", int_all_animations);
      }
    }
  }

  // Initialize when DOM is ready
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initOnLoad);
  } else {
    initOnLoad();
  }

  // Fixed Elements on Scroll
  function gsap_fixed_elements() {
    const scrollFixedTarget = document.querySelectorAll(".gsap-pin-fixed-boxed, .gsap-pin-fixed-fullwidth");

    if (scrollFixedTarget.length === 0) return;

    gsap.registerPlugin(ScrollTrigger);

    scrollFixedTarget.forEach((container) => {
      let stopUnder = container.dataset.stopUnder;

      if (stopUnder === "mobile") {
        stopUnder = 767;
      } else if (stopUnder === "tablet") {
        stopUnder = 991;
      } else if (stopUnder === "laptop") {
        stopUnder = 1199;
      } else {
        stopUnder = 0;
      }

      if (window.innerWidth <= stopUnder) {
        return;
      }

      const elements = container.querySelectorAll(".gsap-pin-fixed-boxed > .e-con-inner > *, .gsap-pin-fixed-fullwidth > *");

      // Scroll Trigger Loop
      elements.forEach((element, index) => {
        const startClass = Array.from(container.classList).find((className) => className.startsWith("start-"));
        const startOffset = startClass ? parseInt(startClass.split("-")[1]) : 40;

        gsap.set(element, {
          force3D: true,
        });
        element.style.willChange = "transform";
        setTimeout(() => {
          ScrollTrigger.create({
            trigger: element,
            start: `top-=${startOffset + 80}`,
            end: `top-=${startOffset}`,
            onEnter: () => {
              const idParts = `${container.id}-trigger-${index}`.split("-");
              const lastPart = parseInt(idParts[idParts.length - 1]);
              const previousSpacer = document.querySelector(`.pin-spacer--trigger-${lastPart - 1}`);
              if (previousSpacer) {
                previousSpacer.classList.add("spacer-before-active");
              }
            },
            onLeaveBack: () => {
              const idParts = `${container.id}-trigger-${index}`.split("-");
              const lastPart = parseInt(idParts[idParts.length - 1]);
              const previousSpacer = document.querySelector(`.pin-spacer--trigger-${lastPart - 1}`);
              if (previousSpacer) {
                previousSpacer.classList.remove("spacer-before-active");
              }
            },
          });
          ScrollTrigger.create({
            trigger: element,
            start: `top-=${startOffset}`,
            end: `bottom top+=${element.offsetHeight + startOffset}`,
            endTrigger: container,
            pin: true,
            pinSpacing: false,
            id: `${container.id}-trigger-${index}`,
            invalidateOnRefresh: true,
          });
        }, 10);
      });
    });
  }
})(jQuery);
