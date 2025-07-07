import Swiper from 'swiper';
import {Pagination, Autoplay} from 'swiper/modules'
/* Swiper */
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/autoplay';

// Inicializa Swiper (puedes mover esto al DOMContentLoaded o Alpine/Livewire hook si prefieres)
document.addEventListener('DOMContentLoaded', () => {
  new Swiper('.mySwiper', {
    modules: [Autoplay, Pagination],
    loop: true,
    autoplay: true,
    speed: 400,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});
