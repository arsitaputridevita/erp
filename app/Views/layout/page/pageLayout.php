<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ERP | UNIBI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?= $this->include('layout/link'); ?>
</head>

<body>
  <?= $this->include('layout/page/header'); ?>
  <?= $this->include('layout/page/sidebar'); ?>

  <main id="main" class="main">
    <?= $this->renderSection('content') ?>
  </main>

  <?= $this->include('layout/page/footer'); ?>

  <?= $this->include('layout/script'); ?>
</body>

</html>