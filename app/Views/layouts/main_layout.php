<?php helper('html') ?>
<!DOCTYPE html>
<html lang="en" class="text-[14px] lg:text-[16px] xl:text-base 2xl:text-[22px]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ganti Theme Color dengan warna yang sesuai, ini bekerja untuk Chrome Mobile -->
    <meta name="theme-color" content="oklch(62.3% 0.214 259.815)">
    <title><?= $title ?> | Dewan Perwakilan Rakyat Daerah Kabupaten Batang Hari</title>
    <!-- Jangan gunakan ini dilingkungan produksi -->
    <!-- Gunakan CSS ini dilingkungan produksi: link_tag('assets/css/tailwindcss/tailwind-utils.css') -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Fonts CSS -->
    <?= link_tag('assets/css/fonts.css') ?>
    <!-- Gunakan preload jika gambar tersebut berukuran besar -->
    <!-- Tambahkan logika preload disetiap halaman yang membutuhkannya -->
    <link rel="preload" as="image" href="<?= base_url('assets/images/backgrounds/bg-gedung-dprd-batang-hari.webp') ?>">
</head>

<body>
    <!-- Header Component -->
    <?= $this->include('layouts/header') ?>
    <!-- Main Content -->
    <main class="main-content grid grid-cols-1 gap-0">
        <?= $this->renderSection('content') ?>
    </main>
    <!-- Footer Component -->
    <?= $this->include('layouts/footer') ?>
    <!-- Bottom Navigation -->
    <?= $this->include('layouts/bottom-navigation') ?>
    <!-- Button CTA Back-to-Top -->
    <button type="button" id="backToTop" class="fixed bottom-5 right-5 p-2 bg-neutral-50 border border-solid border-neutral-300 rounded-full cursor-pointer hover:border-neutral-400 z-999999" aria-label="Kembali ke atas" tabindex="-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>
    </button>
</body>

</html>