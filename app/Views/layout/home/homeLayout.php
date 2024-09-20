<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?= $this->include('layout/link'); ?>

  <style>
    .input-group-text {
      cursor: pointer;
    }
  </style>

  <title>ERP | UNIBI</title>
</head>

<body>

  <div>
    <?= $this->include('layout/home/header'); ?>

    <div class="page-content">
      <?= $this->renderSection('content'); ?>
    </div>

    <?= $this->include('layout/home/footer'); ?>
  </div>

  <?= $this->include('layout/script'); ?>
</body>

</html>