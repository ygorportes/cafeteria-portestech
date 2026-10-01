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
        <a href="<?= site_url('/') ?>">
          <img src="<?= base_url('assets/images/logo.png') ?>" alt="Cafeteria PortesTech Logo">
        </a>
      </div>
      <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
        <div><a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a></div>
        <div><a class="nav-link ms-5" href="<?= site_url('products') ?>">Produtos</a></div>
        <div><a class="nav-link ms-5" href="<?= site_url('location') ?>">Onde estamos?</a></div>
      </div>
    </div>
  </nav>

  <section class="container">
    <div class="col">
      <div class="row mb-5 product-box">
        <div class="col-5 text-center">
          <img class="img-fluid img-product" src="<?= base_url('assets/images/coffe-01.png') ?>" alt="">
        </div>
        <div class="col-7 p-5">
          <h1 class="mb-3 product-text-color">Espresso</h1>
          <p class="mb-3">Intenso, encorpado e aromático, preparado na medida certa para começar o dia com energia.</p>
          <h2 class="mt-3 product-text-color">R$ 8,00</h2>
        </div>
      </div>

      <div class="row mb-5 product-box">
        <div class="col-7 p-5">
          <h1 class="mb-3 product-text-color">Café com Leite</h1>
          <p class="mb-3">Café espresso combinado com leite cremoso, trazendo um sabor suave e equilibrado para qualquer momento.</p>
          <h2 class="mt-3 product-text-color">R$ 12,00</h2>
        </div>
        <div class="col-5 text-center">
          <img class="img-fluid img-product" src="<?= base_url('assets/images/coffe-02.png') ?>" alt="">
        </div>
      </div>

      <div class="row mb-5 product-box">
        <div class="col-5 text-center">
          <img class="img-fluid img-product" src="<?= base_url('assets/images/coffe-03.png') ?>" alt="">
        </div>
        <div class="col-7 p-5">
          <h1 class="mb-3 product-text-color">Cappuccino</h1>
          <p class="mb-3">Espresso, leite vaporizado e uma camada cremosa de espuma, finalizados com um toque especial de canela.</p>
          <h2 class="mt-3 product-text-color">R$ 15,00</h2>
        </div>
      </div>

      <div class="row mb-5 product-box">
        <div class="col-7 p-5">
          <h1 class="mb-3 product-text-color">Chá Gelado</h1>
          <p class="mb-3">Refrescante e leve, preparado com chá selecionado e servido gelado para deixar seu dia mais agradável.</p>
          <h2 class="mt-3 product-text-color">R$ 17,00</h2>
        </div>
        <div class="col-5 text-center">
          <img class="img-fluid img-product" src="<?= base_url('assets/images/coffe-04.png') ?>" alt="">
        </div>
      </div>
    </div>
  </section>

  <footer class="container-fluid mt-5">
    <div class="row justify-content-center">
      <div class="col-6 d-flex flex-row justify-content-center">
        <div class="text-center mx-4">
          <a href="#"><img src="<?= base_url('assets/images/instagram.png') ?>" alt="Instagram"></a>
        </div>
        <div class="text-center mx-4">
          <a href="#"><img src="<?= base_url('assets/images/facebook.png') ?>" alt="Facebook"></a>
        </div>
        <div class="text-center mx-4">
          <a href="#"><img src="<?= base_url('assets/images/whatsapp.png') ?>" alt="WhatsApp"></a>
        </div>
      </div>
    </div>

    <div class="col mt-4">
      <div class="col text-center">
        <span>Todos os direitos reservados. &copy; <?= date('Y') ?></span>
      </div>
    </div>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>