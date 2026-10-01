<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
<section class="container-fluid bg-color-02">
  <div class="row">
    <div class="col text-center p-5">
      <div class="mb-5">
        <img class="img-fluid img" src="<?= base_url('assets/images/main-01.png') ?>" alt="Sua melhor Cafeteria Dev!">
      </div>
      <div class="text-center">
        <h5 class="mb-5">Transformando café em código!</h5>
        <a class="btn-products" href="<?= site_url('products') ?>">Produtos</a>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>