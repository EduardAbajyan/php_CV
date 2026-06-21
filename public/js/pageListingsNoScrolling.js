import {
  variables,
  nextpage,
  previouspage,
  wheelListings,
  touchlistings,
} from "./pageListings.js";

// Prevent multiple initializations
if (window.NoScrollInitialized) {
  console.log("Page navigation already initialized, skipping...");
} else {
  window.NoScrollInitialized = true;
  window.pageListingsInitialized = false;
  initPageNavigation();
}

function initPageNavigation() {
  window.removeEventListener("wheel", wheelListings, { passive: false });
  window.removeEventListener("touchend", touchlistings, { passive: false });
  window.addEventListener("wheel", wheelListingsX, { passive: false });
  window.addEventListener("touchend", touchlistingsX, { passive: false });

  // Mouse wheel / trackpad scrolling
  function wheelListingsX(e) {
    if (variables.isNavigating) return;

    // Accumulate wheel delta
    variables.wheelDeltaAccumulatorX += e.deltaX;
    variables.wheelDeltaAccumulatorY += e.deltaY;
    // Clear existing timeout
    if (variables.wheelTimeout) {
      clearTimeout(variables.wheelTimeout);
    }

    // Set a timeout to reset the wheel delta accumulator
    variables.wheelTimeout = setTimeout(() => {
      const absWheelX = Math.abs(variables.wheelDeltaAccumulatorX);
      const absWheelY = Math.abs(variables.wheelDeltaAccumulatorY);
      const angleFromXAxisDeg =
        (Math.atan2(absWheelY, absWheelX) * 180) / Math.PI;

      if (
        absWheelX > variables.WHEEL_THRESHOLD &&
        angleFromXAxisDeg <= variables.AXIS_ANGLE_TOLERANCE_DEG
      ) {
        if (variables.wheelDeltaAccumulatorX > 0) {
          // Scrolling right
          nextpage();
        } else {
          // Scrolling left
          previouspage();
        }
      }
      variables.wheelDeltaAccumulatorX = 0;
      variables.wheelDeltaAccumulatorY = 0;
      variables.wheelTimeout = null;
    }, variables.WHEEL_DEBOUNCE);
  }

  function touchlistingsX(e) {
    if (variables.isNavigating) return;

    const touchEndX = e.changedTouches[0].clientX;
    const diffX = touchEndX - variables.touchStartX;
    const touchEndY = e.changedTouches[0].clientY;
    const diffY = touchEndY - variables.touchStartY;
    const absDiffX = Math.abs(diffX);
    const absDiffY = Math.abs(diffY);
    const angleFromXAxisDeg = (Math.atan2(absDiffY, absDiffX) * 180) / Math.PI;

    if (
      absDiffX > variables.TOUCH_SWIPE_THRESHOLD &&
      angleFromXAxisDeg <= variables.AXIS_ANGLE_TOLERANCE_DEG
    ) {
      if (diffX > 0) {
        // Swipe right
        previouspage();
      } else {
        // Swipe left
        nextpage();
      }
    }
  }
} // End of initPageNavigation
