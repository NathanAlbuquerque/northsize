import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;
import.meta.glob([
    '../images/**',
    // '../videos/banner-video.mp4',
]);

Alpine.start();
