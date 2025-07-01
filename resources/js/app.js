import './bootstrap';
import './assets/string_to_slug';
import './assets/preview_image';
import './assets/quill';

document.addEventListener('livewire:navigated', () => {
    // Volver a inicializar Flowbite después de cada navegación interna
    if (typeof initFlowbite === 'function') {
        initFlowbite();
    }
});
