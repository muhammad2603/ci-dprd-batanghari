<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | Dewan Perwakilan Rakyat Daerah Kabupaten Batang Hari</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/tailwindcss/tailwind-utils.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/fonts.css') ?>">
</head>

<body>
    <?= $this->include('layouts/header') ?>
    <main class="main-content">
        <?= $this->renderSection('content') ?>
    </main>
    <?= $this->include('layouts/footer') ?>

</body>

</html>