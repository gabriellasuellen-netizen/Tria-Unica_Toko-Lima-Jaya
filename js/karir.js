document.addEventListener("DOMContentLoaded", () => {
  // HAMBURGER BUTTON
  const hamburger = document.getElementById("hamburger");
  const menu = document.getElementById("menu");

  if (hamburger && menu) {
    hamburger.addEventListener("click", () => {
      menu.classList.toggle("active");
    });
  }

  const jobButtons = document.querySelectorAll(".job-btn");
  const posisiInput = document.getElementById("posisi");

  jobButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const posisi = btn.dataset.job;

      posisiInput.value = posisi;
    });
  });

  // FORM

  const form = document.getElementById("applyForm");
  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const requiredInputs = form.querySelectorAll("[required]");

    let kosong = false;

    requiredInputs.forEach((input) => {
      if (input.value.trim() === "") {
        kosong = true;
      }
    });

    // notif jika ada data kosong
    if (kosong) {
      alert("Harap isi semua data terlebih dahulu.");
      return;
    }

    const nama = document.getElementById("nama").value;
    const umur = document.getElementById("umur").value;
    const alamat = document.getElementById("alamat").value;
    const telepon = document.getElementById("telepon").value;
    const email = document.getElementById("email").value;
    const posisi = document.getElementById("posisi").value;
    const tentang = document.getElementById("tentang").value;

    const pesan = `Halo, saya ingin melamar kerja di Lima Jaya.

    Nama: ${nama}
    Umur: ${umur}
    Alamat: ${alamat}
    WhatsApp: ${telepon}
    Email: ${email}
    Posisi: ${posisi}

    Tentang Saya:
    ${tentang}`;

  });
});
