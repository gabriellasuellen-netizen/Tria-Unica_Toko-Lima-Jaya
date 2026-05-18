document.addEventListener("DOMContentLoaded", () => {
  //  GALERI
  const track = document.querySelector(".track");
  const slides = document.querySelectorAll(".slide");
  const dots = document.querySelectorAll(".dotgaleri");

  let index = 0;
  let interval;
  let startX = 0;

  function update() {
    track.style.transform = `translateX(-${index * 100}%)`;

    slides.forEach((s) => s.classList.remove("active"));
    dots.forEach((d) => d.classList.remove("active"));

    slides[index].classList.add("active");
    dots[index].classList.add("active");
  }

  function startAuto() {
    stopAuto();
    interval = setInterval(() => {
      index = (index + 1) % slides.length;
      update();
    }, 3000);
  }

  function stopAuto() {
    clearInterval(interval);
  }

  // DOT CLICK
  dots.forEach((dot) => {
    dot.addEventListener("click", () => {
      stopAuto();
      index = parseInt(dot.dataset.index);
      update();
      startAuto();
    });
  });

  // DRAG (desktop)
  track.addEventListener("mousedown", (e) => {
    stopAuto();
    startX = e.clientX;
  });

  track.addEventListener("mouseup", (e) => {
    let diff = e.clientX - startX;

    if (diff > 50 && index > 0) index--;
    if (diff < -50 && index < slides.length - 1) index++;

    update();
    startAuto();
  });

  // TOUCH (mobile)
  track.addEventListener("touchstart", (e) => {
    stopAuto();
    startX = e.touches[0].clientX;
  });

  track.addEventListener("touchend", (e) => {
    let diff = e.changedTouches[0].clientX - startX;

    if (diff > 50 && index > 0) index--;
    if (diff < -50 && index < slides.length - 1) index++;

    update();
    startAuto();
  });

  update();
  startAuto();

  // HAMBURGER BUTTON
  const hamburger = document.getElementById("hamburger");
  const menu = document.getElementById("menu");

  if (hamburger && menu) {
    hamburger.addEventListener("click", () => {
      menu.classList.toggle("active");
    });
  }

  // SCROLL BUTTON
  const scrollBtn = document.getElementById("scrollBtn");
  const kategori = document.getElementById("kategori");

  if (scrollBtn && kategori) {
    scrollBtn.addEventListener("click", () => {
      kategori.scrollIntoView({ behavior: "smooth" });
    });
  }
});
