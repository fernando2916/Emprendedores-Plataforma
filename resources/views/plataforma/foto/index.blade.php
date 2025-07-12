@extends('components.layouts.principal')

@section('titutlo')
Fotografía |
@endsection

@section('contenido')
<div class="relative bg-cover md:h-[45rem] lg:h-[65rem]">
  <img src="{{ asset('images/backgroundfoto.webp') }}" alt="" class="opacity-70 h-full object-cover w-full">
  <div class="absolute w-full h-full flex flex-col top-0 items-center justify-center ">
    <div class="text-center p-3 space-y-3 md:space-y-7 relative lg:-top-24">
      <span class=" font-bold text-sm md:text-3xl">
        Agencia de fotografía
      </span>
      <h3 class="text-2xl text-link-300 dark:text-link-100 md:text-7xl xl:text-9xl font-extrabold">
        <span id="typewriter-foto"></span>
      </h3>
      <p class="text-lg md:text-4xl">
        Dominando la fotografía de la A a la Z!
      </p>
    </div>
  </div>
</div>

<section class="max-w-7xl mx-5 lg:mx-auto my-10">
  <h3 class="text-center text-3xl md:text-4xl font-semibold">
    Información relevante
  </h3>

  <div class="grid grid-cols-12 gap-5 mt-5">
    <div class="col-span-full md:col-span-6 ">
      <img src="{{ asset('images/fotografia.webp') }}" alt="" class="rounded-md">
    </div>
    <div class="col-span-full md:col-span-6">
      <div>
        <h2 class="text-center text-3xl font-semibold">Agencia de Fotografía</h2>
        <p class="text-lg text-justify pt-2">En <strong>Emprendedores Foto</strong> generamos <strong>sesiones
            fotográficas</strong> para captar la atención visual de tu cliente.</p>
        <p class="text-lg text-justify pt-2">No importa si es en un banner en una página web, una foto de tu servicio o
          producto en acción o un anuncio en tu local, etc. La fotografía está presente y es clave para que puedas
          mostrar el valor de tu marca hacia tus potenciales clientes, e incluso puede dar la confianza que necesita
          para generar una compra contigo.</p>
      </div>
    </div>
  </div>
</section>

<section class="p-5 lg:mx-auto my-10 bg-light-300 dark:bg-cont-100">
  <h2 class="mb-14 text-2xl md:text-5xl font-semibold text-center px-10">Expertos en fotografía profesional</h2>
  <div class="grid grid-cols-12 p-6 md:mt-10 items-center max-w-7xl mx-auto ">
    <div class="col-span-full lg:col-span-6">
      <img src="{{ asset('images/sesion.webp') }}" alt="diseñadora" class="w-[85%]" />
    </div>
    <div class="col-span-full lg:col-span-6">
      <h2 class="font-semibold text-3xl md:text-5xl">¿Por qué es necesario invertir en fotografía profesionales?</h2>
      <p class="text-justify mt-10 text-lg">
        Las fotografías de los productos que vendes en tu tienda en línea son tan importantes que pueden marcar la
        diferencia entre como te percibe el usuario como alguien confiable y con mucha credibilidad a que no se fíen de
        ti y no te compren nada.
      </p>
      <p class="text-justify mt-10 text-lg">
        Invertir en
        <span class="font-semibold mx-1">
          fotografía profesional de producto puede incrementar tus ventas y atraer más clientes.
        </span>
        Incluso, pueden disminuir las devoluciones, pues la gente tendrá una mejor vista de los productos, aunque no los
        pueda tocar.
      </p>
      <p class="text-justify mt-10 text-lg">
        <span class="font-semibold mx-1">
          Analiza en cómo quieres que vean tu marca.
        </span>
        No cabe duda que, para impulsar un negocio, es necesario invertir de manera sabia. No titubees, ofrece calidad
        en tu sitio y verás cómo tu reputación en línea crece. Además, generarás una mejor fidelidad con los clientes
        que ya tienes.
      </p>
      <p class="text-justify mt-10 text-lg">
        Existen estudios que afirman que el 92% de los usuarios otorgan más confianza a una web con una buena calidad
        visual. De hecho, permanecen más tiempo visitándola si la calidad visual es buena.
      </p>
    </div>
  </div>
</section>

<section>
  <div class="grid grid-cols-12 p-6 md:mt-10 items-center max-w-7xl mx-auto ">
    <div class="col-span-full lg:col-span-6 order-last">
      <img src="{{ asset('images/software.webp') }}" alt="diseñador" class="w-[75%]" />
    </div>
    <div class="col-span-full lg:col-span-6">
      <h2 class="font-semibold text-3xl md:text-5xl">Profesionales en Diseño Gráfico en México</h2>
      <p class="text-justify mt-10 text-lg">
        Ya sea que esté buscando lanzar un nuevo negocio o simplemente un
        rebrand existente,
        <span class="font-semibold mx-1">
          el diseño gráfico es esencial para el éxito.
        </span>
        Puede comenzar con
        <span class="font-semibold mx-1">
          una imagen cautivadora que capturará la atención de sus usuarios
        </span>
        y conduzca a una página de destino bien diseñada o fotos de
        productos. También conduce a un correo electrónico de seguimiento,
        publicaciones sociales, infografías y más. Estos son solo algunos de
        los muchos beneficios de contratar una agencia de diseño gráfico
        profesional.
      </p>
      <div class="grid grid-cols-2 mx-auto p-5 gap-5">
        <div class="mt-5">
          <i class="fa-solid fa-camera text-7xl my-5"></i>
          <h3 class="text-2xl font-bold">Atractivo Visual</h3>
          <p class="text-justify">
            En el mundo digital es imposible tocar los productos, es por eso que es fundamental mejorar toda la experiencia de compra a través de distintas tomas del producto que permitan tener el impacto necesario para que el usuario tome la decisión de comprar el producto.
          </p>
        </div>
        <div class="mt-5">
          <i class="fa-solid fa-dollar text-7xl my-5"></i>
          <h3 class="text-2xl font-bold">Incrementa tus Ventas</h3>
          <p class="text-justify">
            La compra de productos a través de una tienda virtual en estos tiempos es muy común, es por eso que los usuarios al momento de hacer una compra, lo primero que ven son las fotos de los productos y si estos tienen una excelente calidad visual se puede convertir en una venta potencial.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="grid grid-cols-1 md:grid-cols-2 mx-auto p-5 max-w-7xl">
    <div class="">
      <p class="text-justify p-2 text-xl lg:mx-10">
        Las fotos capturan la atención de los compradores.
        <span class="font-semibold">
          Los compradores quieren asegurarse de que el producto coincida con sus expectativas. 
        </span>
        Pueden estar buscando un color, tamaño o estilo particular. En tal caso, una buena foto de producto puede ayudarles a comprender mejor los productos.
      </p>
      <p class="text-justify p-2 text-xl lg:mx-10">
        Esto asegura una mejor experiencia de compra para el cliente. Además,
        <span class="font-semibold">
          las fotografías de productos ayudan a las empresas a destacarse de sus competidores. 
        </span>
        Los resultados de la fotografía de productos profesionales pueden ser altamente gratificantes.
      </p>
    </div>
    <div class="">
      <p class="text-justify p-2 text-xl lg:mx-10">
        <span class="font-semibold">
          La buena fotografía del producto mejora la tasa de conversión de su sitio web de comercio electrónico. 
        </span>
         Ayuda en las campañas de marketing y establece la identidad de la marca. Atrae nuevos clientes. Debe invertir en la fotografía de productos profesionales para aumentar las ventas. Es una parte importante del comercio electrónico. Y en esta época, las personas son más visuales que nunca. Y como no pueden interactuar directamente con el producto, se basan en fotografías de productos.
      </p>
      <p class="text-justify p-2 text-xl lg:mx-10">
       Además, las fotografías de buena calidad pueden aumentar sus ventas hasta en un 30%.
      </p>
    </div>
    
  </div>
</section>

@endsection