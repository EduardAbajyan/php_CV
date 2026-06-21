document.addEventListener("DOMContentLoaded", function () {
  function getPageHeight() {
    const doc = document.documentElement;
    const body = document.body;

    return Math.max(
      doc.scrollHeight,
      doc.offsetHeight,
      doc.clientHeight,
      body ? body.scrollHeight : 0,
      body ? body.offsetHeight : 0,
      window.innerHeight,
    );
  }

  function setViewportVars() {
    let width = window.innerWidth;
    const pageHeight = getPageHeight();
    let height = pageHeight;
    if (width * 10 < height << 4) {
      height = (width * 10) >>> 4;
    } else if (width * 10 > height << 4) {
      width = (height << 4) / 10;
    }
    document.documentElement.style.setProperty("--vw", width + "px");
    document.documentElement.style.setProperty(
      "--page-height",
      pageHeight + "px",
    );
    document.documentElement.style.setProperty("--vh", height + "px");
  }
  setViewportVars();
  // Prevent multiple initializations
  if (window.pageResizeInitialized) {
    console.log("Page navigation already initialized, skipping...");
  } else {
    window.pageResizeInitialized = true;
    initPageNavigation();
  }

  function initPageNavigation() {
    window.addEventListener("resize", setViewportVars);
  }
});