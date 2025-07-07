import './bootstrap';
import './assets/string_to_slug';
import './assets/preview_image';
import './assets/preview_images';
import './assets/quill';
import './assets/typewriter';
import './assets/slider';

document.addEventListener('livewire:navigated', () => {
    // Volver a inicializar Flowbite después de cada navegación interna
    if (typeof initFlowbite === 'function') {
        initFlowbite();
    }
});
