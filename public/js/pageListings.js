import "./pageListingButtons.js";

// Prevent multiple initializations
if (window.pageListingsInitialized) {
  console.log("Page navigation already initialized, skipping...");
} else {
  window.pageListingsInitialized = true;
  initPageNavigation();
}

export let variables = {
  isNavigating: false,
  NAVIGATION_COOLDOWN: 600, // ms - increased cooldown
  MIN_PAGE: 1,
  MAX_PAGE: 7,

  // Wheel event handling constants
  WHEEL_DEBOUNCE: 150, // ms
  WHEEL_THRESHOLD: 50, // Minimum accumulated delta to trigger

  // Touch swipe constants
  TOUCH_SWIPE_THRESHOLD: 50,
  AXIS_ANGLE_TOLERANCE_DEG: 15,
  touchStartX: 0,
  touchStartY: 0,

  // Wheel event handling with debouncing
  wheelDeltaAccumulatorX: 0,
  wheelDeltaAccumulatorY: 0,
  wheelTimeout: null,
};

// Helper functions
function getBaseUrl() {
  const protocol = window.location.protocol;
  const host = window.location.host;
  return `${protocol}//${host}`;
}

function getCurrentPage() {
  const path = window.location.pathname;
  const match = path.match(/\/page(\d+)/);
  return match ? parseInt(match[1]) : 1;
}

function navigateToPage(page) {
  if (variables.isNavigating) return;

  variables.isNavigating = true;
  const baseUrl = getBaseUrl();

  if (page < variables.MIN_PAGE) {
    page = variables.MIN_PAGE;
  } else if (page > variables.MAX_PAGE) {
    // Loop back to page1 when going past max
    page = variables.MIN_PAGE;
  }

  window.location.href = `${baseUrl}/page${page}`;

  // Reset gate after cooldown (in case navigation is cancelled)
  setTimeout(() => {
    variables.isNavigating = false;
  }, variables.NAVIGATION_COOLDOWN);
}

export function nextpage() {
  const currentPage = getCurrentPage();
  navigateToPage(currentPage + 1);
}

export function previouspage() {
  const currentPage = getCurrentPage();
  navigateToPage(currentPage - 1);
}

export function wheelListings(e) {
  e.preventDefault();

  if (variables.isNavigating) return;

  // Accumulate wheel delta
  variables.wheelDeltaAccumulatorX += e.deltaX;
  variables.wheelDeltaAccumulatorY += e.deltaY;

  // Clear existing timeout
  if (variables.wheelTimeout) {
    clearTimeout(variables.wheelTimeout);
  }

  // Set new timeout to process accumulated delta
  variables.wheelTimeout = setTimeout(() => {
    const absWheelX = Math.abs(variables.wheelDeltaAccumulatorX);
    const absWheelY = Math.abs(variables.wheelDeltaAccumulatorY);
    const angleFromXAxisDeg =
      (Math.atan2(absWheelY, absWheelX) * 180) / Math.PI;
    const angleTolerance = variables.AXIS_ANGLE_TOLERANCE_DEG;
    const isHorizontalScroll = angleFromXAxisDeg <= angleTolerance;
    const isVerticalScroll = angleFromXAxisDeg >= 90 - angleTolerance;

    if (isVerticalScroll && absWheelY >= variables.WHEEL_THRESHOLD) {
      if (variables.wheelDeltaAccumulatorY > 0) {
        nextpage();
      } else {
        previouspage();
      }
    } else if (isHorizontalScroll && absWheelX >= variables.WHEEL_THRESHOLD) {
      if (variables.wheelDeltaAccumulatorX > 0) {
        nextpage();
      } else {
        previouspage();
      }
    }
    // Reset accumulator
    variables.wheelDeltaAccumulatorX = 0;
    variables.wheelDeltaAccumulatorY = 0;
    variables.wheelTimeout = null;
  }, variables.WHEEL_DEBOUNCE);
}

export function touchlistings(e) {
  if (variables.isNavigating) return;

  const touchEndX = e.changedTouches[0].clientX;
  const diffX = touchEndX - variables.touchStartX;
  const touchEndY = e.changedTouches[0].clientY;
  const diffY = touchEndY - variables.touchStartY;
  const absDiffX = Math.abs(diffX);
  const absDiffY = Math.abs(diffY);

  if (
    absDiffX < variables.TOUCH_SWIPE_THRESHOLD &&
    absDiffY < variables.TOUCH_SWIPE_THRESHOLD
  ) {
    return;
  }

  const angleFromXAxisDeg = (Math.atan2(absDiffY, absDiffX) * 180) / Math.PI;
  const angleTolerance = variables.AXIS_ANGLE_TOLERANCE_DEG;
  const isHorizontalSwipe = angleFromXAxisDeg <= angleTolerance;
  const isVerticalSwipe = angleFromXAxisDeg >= 90 - angleTolerance;

  if (isVerticalSwipe && absDiffY > variables.TOUCH_SWIPE_THRESHOLD) {
    if (diffY > 0) {
      // Swipe down
      previouspage();
    } else {
      // Swipe up
      nextpage();
    }
  } else if (isHorizontalSwipe && absDiffX > variables.TOUCH_SWIPE_THRESHOLD) {
    if (diffX > 0) {
      // Swipe right
      previouspage();
    } else {
      // Swipe left
      nextpage();
    }
  }
}

function initPageNavigation() {
  const scrollY = window.scrollY;
  document.body.style.position = "fixed";
  document.body.style.top = `-${scrollY}px`;
  document.body.style.width = "100%";
  document.body.style.overflowX = "hidden";

  window.addEventListener("wheel", wheelListings, { passive: false });

  // Touch swipe detection
  document.body.addEventListener(
    "touchstart",
    (e) => {
      variables.touchStartY = e.touches[0].clientY;
      variables.touchStartX = e.touches[0].clientX;
    },
    { passive: true },
  );

  window.addEventListener("touchend", touchlistings, { passive: false });

  // Keyboard arrow keys
  document.addEventListener("keydown", (e) => {
    if (variables.isNavigating) return;

    if (e.key === "ArrowUp" || e.key === "ArrowLeft") {
      previouspage();
    } else if (e.key === "ArrowDown" || e.key === "ArrowRight") {
      nextpage();
    }
  });
} // End of initPageNavigation
