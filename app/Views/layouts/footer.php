<?php
helper('array');

["identitas_instansi" => $identitas, "kontak" => $kontak, "media_sosial" => $media_sosial] = json_decode((model(App\Models\Meta::class)->getDatas('main'))[0]["meta"], true);
?>
<footer class="py-8 px-7 bg-slate-900">
    <!-- Footer Details -->
    <div class="footer-details mb-9 md:mb-6 grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="slogan">
            <div class="identity flex flex-col sm:flex-row gap-2.5 sm:gap-2 text-white">
                <!-- Logo -->
                <figure class="logo shrink-0">
                    <?= img(["src" => $identitas["logo"], "alt" => 'Logo ' . $identitas["slug_instansi"], "class" => 'w-15 sm:w-13.75 md:w-10 lg:w-12.5 aspect-square']) ?>
                </figure>
                <!-- Akhir Logo -->
                <!-- Company Name -->
                <div class="name flex flex-col justify-around md:justify-between">
                    <h1 class="leading-5.5 sm:leading-4 text-lg sm:text-base md:text-sm"><?= $identitas["nama"] ?></h1>
                    <span class="font-regular md:text-xs"><?= $identitas["kabupaten"] ?></span>
                </div>
                <!-- Akhir Company Name -->
            </div>
            <div class="slogan-text mt-3 text-sm md:text-xs text-white/75">
                <p class="text-pretty tracking-wide"><?= $identitas["motto_footer"] ?></p>
            </div>
        </div>
        <div class="fast-link">
            <span class="font-title text-lg sm:text-base md:text-sm text-white">Tautan Cepat</span>
            <nav class="mt-3 flex flex-col gap-1.5 md:text-xs text-white/75">
                <a href="#" class="w-fit transition duration-100 hover:text-blue-400 active:text-blue-400">Profil</a>
                <a href="#" class="w-fit transition duration-100 hover:text-blue-400 active:text-blue-400">Anggota</a>
                <a href="#" class="w-fit transition duration-100 hover:text-blue-400 active:text-blue-400">Peraturan Daerah</a>
                <a href="#" class="w-fit transition duration-100 hover:text-blue-400 active:text-blue-400">Agenda Rapat</a>
                <a href="#" class="w-fit transition duration-100 hover:text-blue-400 active:text-blue-400">Laporan Kegiatan</a>
            </nav>
        </div>
        <div class="footer-services">
            <span class="font-title text-lg sm:text-base md:text-sm text-white">Layanan</span>
            <nav class="mt-3 flex flex-col gap-1.5 md:text-xs text-white/75">
                <a href="#" class="w-fit transition duration-100 hover:text-blue-400 active:text-blue-400">Aspirasi Masyarakat</a>
                <a href="#" class="w-fit transition duration-100 hover:text-blue-400 active:text-blue-400">Informasi Publik</a>
                <a href="#" class="w-fit transition duration-100 hover:text-blue-400 active:text-blue-400">Pengaduan</a>
                <a href="#" class="w-fit transition duration-100 hover:text-blue-400 active:text-blue-400">Transparansi</a>
                <a href="#" class="w-fit transition duration-100 hover:text-blue-400 active:text-blue-400">FAQ</a>
            </nav>
        </div>
        <div class="footer-contacts">
            <span class="font-title text-lg sm:text-base md:text-sm text-white">Kontak</span>
            <div class="my-5 md:my-3 flex flex-col gap-2.5 md:text-xs text-white/75">
                <span class="flex gap-2.5 md:gap-1"><span><?= icon('location-outline-mini') ?></span><?= $kontak["lokasi"] ?></span>
                <span class="flex gap-2.5 md:gap-1"><span><?= icon('phone-outline-mini') ?></span><?= $kontak["telp/fax"] ?></span>
                <?php foreach ($kontak["email"] as $email): ?>
                    <span class="flex gap-2.5 md:gap-1"><span><?= icon('envelope-outline-mini') ?></span><?= $email ?></span>
                <?php endforeach ?>
            </div>
            <span class="font-regular text-lg sm:text-base md:text-sm text-white">Ikuti Kami</span>
            <div class="media-socials mt-4.5 md:mt-3 flex gap-5 md:gap-2.5 text-white">
                <a href="<?= $media_sosial["facebook"] ?>" target="_blank" class="py-2 px-2 bg-slate-800 rounded-xl transition duration-150 ease-in hover:bg-blue-600 active:text-blue-600" title="Facebook Resmi DPRD Batang Hari"><?= icon('facebook', ["class" => 'size-3']) ?></a>
                <a href="<?= $media_sosial["instagram"] ?>" target="_blank" class="py-2 px-2 bg-slate-800 rounded-xl transition duration-150 ease-in hover:bg-pink-500 active:text-pink-500" title="Instagram Resmi DPRD Batang Hari"><?= icon('instagram', ["class" => 'size-3']) ?></a>
                <a href="<?= $media_sosial["youtube"] ?>" target="_blank" class="py-2 px-2 bg-slate-800 rounded-xl transition duration-150 ease-in hover:bg-red-500 active:text-red-500" title="YouTube Resmi DPRD Batang Hari"><?= icon('youtube', ["class" => 'size-3']) ?></a>
            </div>
        </div>
    </div>
    <!-- Akhir Footer Details -->
    <!-- Barrier -->
    <hr class="text-gray-700">
    <!-- More Footer Details -->
    <div class="more-footer-details mt-8 md:mt-7 flex flex-col md:flex-row justify-between items-center text-white/75 md:text-sm text-center md:text-left">
        <!-- Copyright & Information Developers -->
        <div class="copy flex flex-col gap-0.5 font-regular text-pretty">
            <span>&copy; Copyright 2026 <?= $identitas["slug_instansi"] ?>. Seluruh hak cipta dilindungi.</span>
            <span>Dikembangkan oleh IT <?= $identitas["slug_instansi"] ?>.</span>
        </div>
        <div class="mt-8 sm:mt-3 md:mt-0 flex gap-7">
            <a href="#" class="font-regular transition duration-100 hover:text-blue-400 active:text-blue-400">Kebijakan Privasi</a>
            <a href="#" class="font-regular transition duration-100 hover:text-blue-400 active:text-blue-400">Syarat & Ketentuan</a>
            <a href="#" class="font-regular transition duration-100 hover:text-blue-400 active:text-blue-400">Sitemap</a>
        </div>
    </div>
    <!-- Akhir Footer Details -->
</footer>