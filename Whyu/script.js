const radioPutih = document.getElementById("putih");
const radioHitam = document.getElementById("hitam");

radioPutih.addEventListener("change", () => {
  document.body.classList.remove("hitam");
  document.body.classList.add("putih");
});

radioHitam.addEventListener("change", () => {
  document.body.classList.remove("putih");
  document.body.classList.add("hitam");
});

//animasi contac me
let start = null;
const element = document.getElementById("contact");

function animate(timestamp) {
  if (!start) start = timestamp;
  const progress = timestamp - start;
  element.style.opacity = Math.min(progress / 1000, 1); // Fade in over 1 second
  if (progress < 1000) {
    requestAnimationFrame(animate);
  }
}

requestAnimationFrame(animate);
