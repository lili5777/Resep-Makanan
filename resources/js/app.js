import './bootstrap';
import Alpine from "alpinejs";
import Swiper from "swiper/bundle";

window.Alpine = Alpine;

Alpine.start();


// Initialize Swiper
const swiper = new Swiper('.swiper-container', {
  // Konfigurasi Swiper.js sesuai kebutuhan Anda
});
