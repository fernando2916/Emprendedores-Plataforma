import './bootstrap';

document.addEventListener('livewire:navigated', () => {
    // Volver a inicializar Flowbite después de cada navegación interna
    if (typeof initFlowbite === 'function') {
        initFlowbite();
    }
});
