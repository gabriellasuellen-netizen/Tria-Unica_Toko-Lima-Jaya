const container = document.querySelector(".all-container");
const leftArrow = document.querySelector(".scroll-arrow.left");
const rightArrow = document.querySelector(".scroll-arrow.right");

// klik panah
rightArrow.addEventListener("click", () => {
  container.scrollLeft += 300;
});

leftArrow.addEventListener("click", () => {
  container.scrollLeft -= 300;
});

// Untuk cek posisi scroll, jika scroll mentok di kanan maka panah kiri muncul
// jika scroll mentok di kiri maka panah kanan muncul
function updateArrows() {
  const maxScroll = container.scrollWidth - container.clientWidth;

  if (container.scrollLeft <= 0) {
    leftArrow.style.display = "none";
  } else {
    leftArrow.style.display = "flex";
  }

  if (container.scrollLeft >= maxScroll - 5) {
    rightArrow.style.display = "none";
  } else {
    rightArrow.style.display = "flex";
  }
}

// jalan saat scroll & load
container.addEventListener("scroll", updateArrows);
window.addEventListener("load", updateArrows);

// HAMBURGER
const hamburger = document.getElementById("hamburger");
const menu = document.getElementById("menu");

if (hamburger && menu) {
  hamburger.addEventListener("click", () => {
    menu.classList.toggle("active");
  });
}
