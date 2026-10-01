<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>

<section class="container product-box py-5">
  <div class="row">
    <div class="col-5 text-center">
      <img class="img-fluid img-product" src="<?= base_url('assets/images/room.png') ?>" alt="Interior Cafeteria PortesTech">
    </div>
    <div class="col-6">
      <p class="location-title mb-0">Cafeteria PortesTech</p>
      <p class="location-subtitle">321 Coffee & Code Street, Manhattan, NY</p>
      <p class="mb-3">Seu próximo commit pode esperar. Primeiro, um café. Encontre a Cafeteria PortesTech em Manhattan.</p>

      <div class="d-flex align-items-center mb-3">
        <img src="<?= base_url('assets/images/phone.png') ?>" alt="Phone">
        <p class="location-subtitle ms-3">
          <a class="nav-link" href="tel:+1 (212) 555-0147">+1 (212) 555-0147</a>
        </p>
      </div>
      <div class="d-flex align-items-center mb-3">
        <img src="<?= base_url('assets/images/email.png') ?>" alt="Email">
        <p class="location-subtitle ms-3">
          <a class="nav-link" href="mailto:contact@cafeteriaportestech.com">contact@cafeteriaportestech.com</a>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="container product-box py-5">
  <div class="row">
    <div class="col text-center">
      <img class="img-fluid img-product" src="<?= base_url('assets/images/map.png') ?>" alt="Map">
    </div>
  </div>
</section>

<?= $this->endSection() ?>