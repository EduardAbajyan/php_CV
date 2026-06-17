function resizeAboutMeImage() {
  let containerWidth = document.getElementById("imageAboutMe").offsetWidth;
  let containerHeight = document.getElementById("imageAboutMe").offsetHeight;
  let imageWidth = (containerWidth >>> 3) * 7;
  let imageHeight = (containerHeight >>> 3) * 7;

  if (containerWidth * 4 > containerHeight * 3)
    imageWidth = (imageHeight * 3) >>> 2;
  else if (containerWidth * 4 < containerHeight * 3)
    imageHeight = (imageWidth << 2) / 3;

  let img = document.querySelector("#imageAboutMe .frame img");
  img.style.width = imageWidth + "px";
  img.style.height = imageHeight + "px";
}
document.addEventListener("DOMContentLoaded", function () {
  resizeAboutMeImage();
  window.addEventListener("resize", resizeAboutMeImage);
});
resizeAboutMeImage();