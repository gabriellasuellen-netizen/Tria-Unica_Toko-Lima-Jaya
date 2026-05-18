document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".fade-left");
  // untuk menampillkan teks paragraf 1 per 1 saat masuk ke hal tentang
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add("show");
          }, i * 500);
        }
      });
    },
    { threshold: 0.3 },
  );

  items.forEach((el) => observer.observe(el));

  // HAMBURGER 
  const hamburger = document.getElementById("hamburger");
  const menu = document.getElementById("menu");

  if (hamburger && menu) {
    hamburger.addEventListener("click", () => {
      menu.classList.toggle("active");
    });
  }
});
