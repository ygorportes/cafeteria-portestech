<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>" type="image.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
 
  <title>Cafeteria PortesTech</title>
</head>
<body>
  <nav class="container-fluid">
    <div class="row align-items-center">
      <div class="col p-3">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Cafeteria PortesTech Logo">
      </div>
      <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
          <div><a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a></div>
          <div><a class="nav-link ms-5" href="<?= site_url('products') ?>">Produtos</a></div>
          <div><a class="nav-link ms-5" href="<?= site_url('location') ?>">Onde estamos?</a></div>
      </div>
    </div>

  </nav>

  
  <h1>HOME</h1>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>