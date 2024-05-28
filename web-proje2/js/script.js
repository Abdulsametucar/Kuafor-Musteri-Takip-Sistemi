// scripts.js

document.addEventListener("DOMContentLoaded", function () {
  // Form doğrulama örneği
  const forms = document.querySelectorAll("form");

  forms.forEach((form) => {
    form.addEventListener("submit", function (event) {
      const adSoyad = form.querySelector('input[name="ad_soyad"]');
      const telefon = form.querySelector('input[name="telefon"]');
      const eposta = form.querySelector('input[name="eposta"]');
      const randevuTarihi = form.querySelector('input[name="randevu_tarihi"]');

      if (!adSoyad.value || !telefon.value || !randevuTarihi.value) {
        alert("Lütfen gerekli alanları doldurunuz.");
        event.preventDefault();
      }

      if (eposta && eposta.value && !validateEmail(eposta.value)) {
        alert("Lütfen geçerli bir e-posta adresi giriniz.");
        event.preventDefault();
      }
    });
  });

  // E-posta doğrulama fonksiyonu
  function validateEmail(email) {
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(String(email).toLowerCase());
  }

  // Gelecekte eklenebilecek başka etkileşimler
});
