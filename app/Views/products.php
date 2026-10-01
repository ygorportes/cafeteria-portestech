<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>

<section class="container">
  <div class="col">
    <div class="row mb-5 product-box">
      <div class="col-5 text-center">
        <img class="img-fluid img-product" src="<?= base_url('assets/images/coffe-01.png') ?>" alt="Café espresso">
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
        <img class="img-fluid img-product" src="<?= base_url('assets/images/coffe-02.png') ?>" alt="Café com leite">
      </div>
    </div>

    <div class="row mb-5 product-box">
      <div class="col-5 text-center">
        <img class="img-fluid img-product" src="<?= base_url('assets/images/coffe-03.png') ?>" alt="Cappuccino">
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
        <img class="img-fluid img-product" src="<?= base_url('assets/images/coffe-04.png') ?>" alt="Chá gelado">
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>