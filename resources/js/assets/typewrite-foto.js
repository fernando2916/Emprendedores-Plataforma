import Typewriter from 'typewriter-effect/dist/core';

function startTypewriterEffect() {

  
  const target = document.getElementById('typewriter-foto');
  
  if (target) {
    new Typewriter(target, {
      loop: true,
      delay: 70,
    })
  .typeString('Fotografía Corporativa')
  .pauseFor(1000)
  .deleteAll()
  .typeString('Fotografía de Retrato')
  .pauseFor(1000)
  .deleteAll()
  .typeString('Fotografía de Producto')
  .pauseFor(1000)
  .deleteAll()
  .typeString('Fotografía en Estudio')
  .pauseFor(1000)
  .deleteAll()
  .start();
}

}
 document.addEventListener('DOMContentLoaded', startTypewriterEffect);

    // 🟢 Volver a iniciar efecto al navegar con wire:navigate
    window.addEventListener('livewire:navigated', () => {
        startTypewriterEffect();
    });