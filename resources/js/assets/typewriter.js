import Typewriter from 'typewriter-effect/dist/core';

const target = document.getElementById('typewriter');

if (target) {
  new Typewriter(target, {
    loop: true,
    delay: 70,
  })
  .typeString('Identidad Corporativa')
  .pauseFor(1000)
  .deleteAll()
  .typeString('Imagen Corporativa')
  .pauseFor(1000)
  .deleteAll()
  .typeString('Ilustración')
  .pauseFor(1000)
  .deleteAll()
  .typeString('Pre-prensa')
  .pauseFor(1000)
  .deleteAll()
  .typeString('Editorial')
  .pauseFor(1000)
  .deleteAll()
  .typeString('Tipografía')
  .pauseFor(1000)
  .deleteAll()
  .start();
}