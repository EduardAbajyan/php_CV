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
    document.documentElement.style.setProperty(
      "--vw",
      window.innerWidth + "px"
    );
    const pageHeight = getPageHeight();
    document.documentElement.style.setProperty(
      "--page-height",
      pageHeight + "px",
    );
    document.documentElement.style.setProperty("--vh", pageHeight + "px");
  }
  setViewportVars();
  window.addEventListener("resize", setViewportVars);
});
