import './bootstrap';
// Slick Carousel
import './carousel-banner-main';

import Alpine from 'alpinejs';

window.Alpine = Alpine;
import.meta.glob([
    '../images/**',
]);

Alpine.start();
