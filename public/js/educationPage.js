window.addEventListener("DOMContentLoaded", function () {
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

  function getEducationImageDimensions() {
    const educationHeader = document.getElementById("educationHeader");
    if (!educationHeader) {
      return { width: 0, height: 0 };
    }

    const containerWidth = educationHeader.offsetWidth;
    const width = (containerWidth >>> 2) * 3;
    const height = width * 0.6667;

    return { width, height };
  }

  function resizeEducationHeaderImg() {
    const educationHeader = document.getElementById("educationHeader");
    if (!educationHeader) return;

    const { width: imageWidth, height: imageHeight } =
      getEducationImageDimensions();

    console.log("Container width:", educationHeader.offsetWidth);
    console.log("Calculated image width:", imageWidth);
    console.log("Calculated image height:", imageHeight);

    let imgs = document.querySelectorAll("#educationHeader img");

    imgs.forEach((img) => {
      img.style.width = imageWidth + "px";
      img.style.height = imageHeight + "px";
    });
  }

  resizeEducationHeaderImg();
  window.addEventListener("resize", resizeEducationHeaderImg); // Calculate and set remaining height CSS variable
  function setRemainingHeight() {
    const educationHeader = document.getElementById("educationHeader");
    if (educationHeader) {
      const headerHeight = educationHeader.offsetHeight;
      const remainingHeight = Math.max(0, getPageHeight() - headerHeight);
      document.documentElement.style.setProperty(
        "--rem-height",
        remainingHeight + "px",
      );
      console.log("Header height:", headerHeight);
      console.log("Remaining height set to:", remainingHeight + "px");
    }
  }

  // Set initial height and update on resize
  setRemainingHeight();
  window.addEventListener("resize", setRemainingHeight);

  let listItems = document.getElementsByTagName("li");
  const images = document.getElementById("imageContainer");
  const imagesUrl = images.getAttribute("data-info");
  console.log("Image container URL:", imagesUrl);
  console.log("Found list items:", listItems.length);

  function preloadSizedImage(src, alt) {
    return new Promise((resolve, reject) => {
      const img = new Image();
      const { width, height } = getEducationImageDimensions();

      if (width && height) {
        img.style.width = width + "px";
        img.style.height = height + "px";
      }
      img.alt = alt;

      img.onload = () => {
        resolve(img);
      };

      img.onerror = reject;
      img.src = src;
    });
  }

  async function renderEducationImages(imageNames) {
    const loadedImages = await Promise.all(
      imageNames.map((name) => {
        const src = imagesUrl + "/" + name.trim() + ".jpg";
        return preloadSizedImage(src, "Education Image");
      }),
    );

    images.innerHTML = "";
    loadedImages.forEach((img, index) => {
      if (loadedImages.length > 1) {
        img.style.marginTop = "calc(var(--vh, 100vh) * 0.02)";
        img.style.border = "1px solid #3f2215";
        img.style.borderRadius = "10px";
        img.style.transition = "all 0.4s ease";
        img.style.boxShadow = "0 4px 12px rgba(63, 34, 21, 0.15)";
        img.style.animation = "fadeInScale 0.8s ease-out";
      }
      if (loadedImages.length > 1 && index === 0) {
        img.style.marginTop = "0";
      }
      images.appendChild(img);
    });
  }

  for (let i = 0; i < listItems.length; i++) {
    listItems[i].addEventListener("click", function () {
      console.log("List item clicked!");
      let info = this.getAttribute("data-info");
      console.log("Data-info value:", info);
      if (!info) {
        return;
      }

      const imageNames = info.indexOf(",") === -1 ? [info] : info.split(",");

      renderEducationImages(imageNames)
        .then(() => {
          resizeEducationHeaderImg();
        })
        .catch((error) => {
          console.error("Failed to load education image(s):", error);
        });
    });
  }
});
