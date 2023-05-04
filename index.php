<!doctype html>
<html lang="es" data-bs-theme="auto">
  <head><script src="./assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./estilos/sign-in2.css" rel="stylesheet">
    <title>LOGIN</title>
  </head>
<body class="text-center w-100   m-auto">  
  <main class="form-signin ">
    <h1 class="h3 mb-3 fw-normal">Inicio de sesion</h1>
      <form action="login.php" method="post">
        <div class="form-floating">
          <div class="input-group">
          <input type="text" name="usuario" placeholder="Usuario" class="form-control">
          </div>
          <div class="input-group py-2">
          <input type="password" name="pass" placeholder="Password" class="form-control">
          </div>
        </div>
        <button class="w-50 btn btn-lg btn-primary" type="submit" name="entrar">Ingreasar</button>
      </form>
  </main>
</body>
</html>