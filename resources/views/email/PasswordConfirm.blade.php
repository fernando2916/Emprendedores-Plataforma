<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
<style>
    body {
    background-color: #000c1f;
    color: white;
  }

  main {
    height: 100vh;
  }

  .contenedor {
    display: flex;
    flex-direction: column;
    padding: 2.5rem;
  }

  .fondo {
    background-color: #00122e;
    justify-content: center;
    border-radius: 1rem;
  }

  .imagen {
    justify-content: center;
    align-items: center;
    display: flex;
    margin-inline: auto;
    margin: .75rem;
  }
  img {
    max-width: 100%;
    height: auto;
    width: 4rem;
  }
  .contenedor-saludo {
    margin: 0.75rem;
    
  }

  p {
    font-size: 1.125rem;
    line-height: 1.5rem;
  }

  .saludo {
    font-size: 18px;
    line-height: 20px;
    font-weight: 800;
  }

  .codigo {
    font-size: 1.5rem;
    font-weight: 800;
    margin: .5rem;
  }

  .prec {
    font-size: 15px;
    margin: .5rem;
  }

  .btn {
    margin: 1.25rem 0;
    margin-inline: auto;
    display: flex;
    justify-content: center;
  }

  .link {
    color: white;
    text-decoration: none;
    font-weight: 600;
    background-color: #6e004c;
    border-radius: 6px;
    padding: 0.75rem 0.5rem;
    width: 100%;
    cursor: pointer;
    text-align: center;
    font-size: 1.25rem;
  }

</style>
</head>
<body>
  <main>
    <div class="contenedor">
      <div class="fondo">

        <div class="imagen">
          <img src="{{ asset('images/icono.png')}} " alt="icono de la empresa">
        </div>
        <div class="contenedor-saludo">

          <p class="">Hola
            <span class="saludo">{{ $user->nombre_completo }}:
            </span>
            <p class="">
              Recibimos tu solicitud para cambiar tu contraseña.
            </p>
          </p>
          <div class="">
            <span class="saludo">¿No solicitaste esto?</span>            
            <p class="prec">Si recibiste este correo electrónico, pero no estás intentando restablecer tu contraseña, puedes ignorarlo. No se ha realizado ningún cambio en tu cuenta.
            </p>
           
            <div class="btn">

              <a class="link"
                href="{{ env("APP_URL") . "/auth/nueva-contraseña/" . $user->verification_id}} ">
                Cambiar contraseña
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </main>

</body>
</html>