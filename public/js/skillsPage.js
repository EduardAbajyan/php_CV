document.addEventListener("DOMContentLoaded", function () {
  function equalizeImageHeights() {
    const skillItems = document.querySelectorAll(
      ".page5 > .row > #skillsList > .skill-category .row ul li .card img"
    );

    skillItems.forEach((img) => {
      img.style.height = "";
    });

    let maxHeight = 0;

    skillItems.forEach((img) => {
      if (img.naturalHeight > 0 && img.naturalHeight > maxHeight) {
        maxHeight = img.naturalHeight;
      }
    });

    if (maxHeight === 0) {
      return;
    }

    skillItems.forEach((img) => {
      img.style.height = maxHeight + "px";
      img.style.objectFit = "cover";
    });

    return maxHeight;
  }

  document
    .querySelectorAll(
      ".page5 > .row > #skillsList > .skill-category .row ul li .card img",
    )
    .forEach((img) => {
      img.addEventListener("load", equalizeImageHeights);
    });

  requestAnimationFrame(equalizeImageHeights);
  window.addEventListener("load", equalizeImageHeights);
  window.addEventListener("resize", equalizeImageHeights);
});

document.querySelectorAll(".skill-item").forEach((item) => {
  item.addEventListener("click", (e) => {
    console.log(item.dataset.info);

    const popupInfo = document.createElement("div");
    const darkOverlay = document.createElement("div");
    darkOverlay.classList.add("dark-overlay");

    popupInfo.classList.add("skill-info-content");
    popupInfo.innerHTML = `
    <img src="${item.querySelector("img").src}" alt="Skill Image" />
    <p>${item.dataset.info}</p>
    `;

    document.body.appendChild(darkOverlay);
    document.body.appendChild(popupInfo);

    darkOverlay.addEventListener("click", () => {
      document.body.removeChild(popupInfo);
      document.body.removeChild(darkOverlay);
    });
  });
});
