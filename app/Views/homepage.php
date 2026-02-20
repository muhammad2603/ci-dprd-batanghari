<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<?php
// Select Hero Slider Beranda from DB
$heroSlider = model(App\Models\HeroSliderBeranda::class)->getDatas();
// Select Information Services from DB
$informationServices = model(App\Models\LayananInformasi::class)->getDatas('nama, deskripsi_singkat, internal_link, eksternal_link, icon, warna');
// Select Berita from DB
$news = model(App\Models\Berita::class)->getDatas();
// Select meta_pages for homepage (beranda)
["bg_img" => $bg_img, "motto" => $motto, "title" => $title, "deskripsi" => $deskripsi] = json_decode((model(App\Models\Meta::class)->getDatas())[0]["meta"], true)["about_section"];
// Select meta_links
[$meta_link_public_service, $meta_link_about_us, $meta_link_news] = model(App\Models\MetaLinks::class)->getDatas(["Layanan Publik", "Tentang Kami", "Berita"]);
// Select sambutan_sekretaris
$sambutan_sekretaris = (model(App\Models\SambutanSekretaris::class)->getDatas())[0]["sambutan"];
?>
<!-- Slider Main Container -->
<section class="swiper w-full min-h-87 h-87 sm:min-h-82.5 sm:h-82.5 md:h-120 lg:h-[calc(100vh-82.67px)] overflow-hidden" id="swiperWrapper">
    <!-- @SwiperJS -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach ($heroSlider as $slide): ?>
            <figure class="h-full swiper-slide invisible">
                <img src="<?= esc($slide["img"]) ?>" alt="Gambar <?= $slide["judul"] ?? $slide["badge"] ?>" class="w-full h-full object-cover aspect-video <?= !is_null($slide["judul"]) ? "brightness-35" : "" ?> overflow-hidden" loading="lazy">
                <div class="swiper-lazy-preloader"></div>
                <div class="slider-informations w-[80%] sm:w-[66%] md:w-[50%] 2xl:w-[65%] absolute top-[50%] left-24 -translate-y-[50%] text-white text-pretty">
                    <?php if (!is_null($slide["badge"]) && !is_null($slide["judul"])): ?>
                        <span class="type-berita py-1 px-5 bg-blue-600 font-regular font-semibold text-sm tracking-wide rounded-full inset-shadow-xs inset-shadow-blue-300"><?= esc($slide["badge"]) ?></span>
                    <?php endif ?>
                    <?php if (!is_null($slide["judul"])): ?>
                        <h2 class="mt-4 lg:mt-3.5 text-3xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl lg:leading-13 xl:leading-15 text-shadow-md"><?= esc($slide["judul"]) ?></h2>
                    <?php endif ?>
                    <?php if (!is_null($slide["deskripsi_singkat"])): ?>
                        <p class="sm:mt-3 md:mt-5 hidden sm:block text-sm md:text-lg xl:text-base 2xl:text-lg leading-5.5 2xl:leading-6 text-shadow-md"><?= esc($slide["deskripsi_singkat"]) ?></p>
                    <?php endif ?>
                    <?php if (!is_null($slide["link"])): ?>
                        <a href="<?= $slide["link"] ?>" class="mt-5 md:mt-10 w-fit py-2 px-3.5 sm:py-2.5 sm:px-3 flex items-center gap-1.5 bg-blue-600 font-regular text-sm group rounded-md">Baca Selengkapnya <?= icon('arrow-right-mini') ?></a>
                    <?php endif ?>
                </div>
            </figure>
        <?php endforeach ?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    <!-- If we need navigation buttons -->
    <div class="custom-button-prev hidden md:block p-2 absolute top-[50%] left-7 bg-gray-400/30 z-999 text-white border border-solid border-white/40 rounded-full backdrop-blur-md cursor-pointer focus:outline-blue-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 aspect-square">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </div>
    <div class="custom-button-next hidden md:block p-2 absolute top-[50%] right-7 bg-gray-400/30 z-999 text-white border border-solid border-white/40 rounded-full backdrop-blur-md cursor-pointer focus:outline-blue-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 aspect-square">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>
    </div>
</section>
<!-- Akhir Slider Main Container -->
<!-- Section About -->
<section class="w-full py-18 sm:py-24 lg:py-38 lg:px-12 px-7 bg-[url(<?= esc($bg_img) ?>)] bg-no-repeat bg-cover">
    <!-- Layer Text -->
    <div class="layer-text w-full sm:w-2/3 2xl:w-[80%] text-white">
        <!-- Slogan -->
        <span class="font-regular py-1 px-3 bg-blue-200/60 font-semibold text-sm md:text-sm text-shadow-sm tracking-wider rounded-full mix-blend-lighten"><?= esc($motto) ?></span>
        <!-- Company Name -->
        <h2 class="my-4 md:my-6 lg:my-5 text-4xl lg:text-5xl xl:text-6xl tracking-wider lg:leading-14 xl:leading-17 text-shadow-lg uppercase"><?= esc($title) ?></h2>
        <!-- Paragraph About Company -->
        <p class="text-shadow-lg text-lg sm:text-base xl:text-lg"><?= esc($deskripsi) ?></p>
        <!-- Links -->
        <div class="links mt-5 flex gap-4.5 sm:gap-4">
            <!-- Link Public Service -->
            <a href="<?= esc($meta_link_public_service["slug"]) ?>" class="py-2 md:py-2.5 px-3.5 md:px-4 flex gap-2 items-center bg-white text-base text-blue-500 transition duration-150 ease-in hover:bg-blue-500 hover:text-white rounded-lg">
                <span><?= esc($meta_link_public_service["name"]) ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 align-middle">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
            <!-- Link for All Details About Company -->
            <a href="<?= esc($meta_link_about_us["slug"]) ?>" class="py-2 md:py-2.5 px-3.5 md:px-4 bg-gray-100/20 text-base border border-solid border-white/50 rounded-lg backdrop-blur-xs transition duration-150 hover:bg-gray-100/40 hover:backdrop-blur-md"><?= esc($meta_link_about_us["name"]) ?></a>
        </div>
    </div>
</section>
<!-- Akhir Section About -->
<!-- Section Pimpinan -->
<section class="w-full py-18 sm:py-24 lg:py-38 lg:px-12 px-7 bg-white">
    <h2 class="relative mb-8 text-3xl text-center after:absolute after:-bottom-4 after:left-[50%] after:-translate-[50%] after:w-[10%] after:h-1 after:bg-blue-500 after:rounded-full">Pimpinan DPRD</h2>
    <p class="text-gray-500/90 text-center">
        Ketua dan Wakil Ketua DPRD Kabupaten Batang Hari
    </p>
    <!-- Cards -->
    <div class="leaders-card mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3 items-stretch">
        <!-- Wakil Ketua I -->
        <div class="bg-white rounded-2xl shadow-md transition-shadow p-6 text-center xl:scale-90 order-2 lg:order-1">
            <figure class="w-75 md:w-62.5 aspect-square mx-auto rounded-xl overflow-hidden mb-4 lg:scale-90 xl:scale-100">
                <img src="assets/images/waka-i-dprd-batanghari-round.webp"
                    class="w-full h-full object-cover"
                    alt="Wakil Ketua I DPRD Batang Hari"
                    loading="lazy">
            </figure>
            <h3 class="font-title font-semibold text-lg text-gray-800">
                Hj. El Firsta Nopsiamti AR, S.H.
            </h3>
            <p class="text-blue-600 text-sm font-medium">
                Wakil Ketua I
            </p>
        </div>
        <!-- Ketua (highlight) -->
        <div class="bg-white rounded-2xl shadow-md ring-2 ring-blue-600/40 p-6 text-center md:col-span-2 lg:col-span-1 order-1 lg:order-2">
            <figure class="w-75 lg:w-full xl:w-75 aspect-square mx-auto rounded-xl overflow-hidden mb-4 lg:scale-105 xl:scale-100">
                <img src="assets/images/ketua-dprd-batanghari-round.webp"
                    class="w-full h-full object-cover"
                    alt="Ketua DPRD Batang Hari"
                    loading="lazy">
            </figure>

            <h3 class="font-title font-semibold text-xl text-gray-900">
                Rahmad Hasrofi, S.E.
            </h3>
            <p class="text-blue-600 font-semibold">
                Ketua DPRD
            </p>
        </div>
        <!-- Wakil Ketua II -->
        <div class="bg-white rounded-2xl shadow-md transition-shadow p-6 text-center xl:scale-90 order-3">
            <figure class="w-75 md:w-62.5 aspect-square mx-auto rounded-xl overflow-hidden mb-4 lg:scale-90 xl:scale-100">
                <img src="assets/images/waka-ii-dprd-batanghari-round.webp"
                    class="w-full h-full object-cover"
                    alt="Wakil Ketua II DPRD Batang Hari"
                    loading="lazy">
            </figure>

            <h3 class="font-title font-semibold text-lg text-gray-800">
                Muhammad Firdaus
            </h3>
            <p class="text-blue-600 text-sm font-medium">
                Wakil Ketua II
            </p>
        </div>
    </div>
</section>
<!-- Akhir Section Pimpinan -->
<!-- Section Services Information -->
<section class="services-information mt-5 py-24 lg:px-12 px-7 bg-gray-100/90">
    <!-- Title Section -->
    <h2 class="mb-3 text-3xl text-center">Layanan & Informasi</h2>
    <!-- Paragraph Section -->
    <p class="text-gray-500/90 text-center">Akses cepat ke berbagai layanan DPRD Batang Hari</p>
    <!-- List Services -->
    <div class="services mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6.5 sm:gap-5.5">
        <?php foreach ($informationServices as $service): ?>
            <div class="service peraturan bg-white rounded-xl shadow-sm transition duration-100 hover:shadow-md">
                <a href="<?= esc($service["internal_link"]) ?? esc($service["eksternal_link"]) ?>" class="py-6 px-5 block group">
                    <div class="<?= esc($service["warna"]) ?> icon-service-wrapper w-fit p-2 border border-solid rounded-lg transition duration-50 group-hover:scale-105">
                        <?= icon($service["icon"], ['class' => 'size-6 text-white']) ?>
                    </div>
                    <div class="service-details mt-2.5">
                        <h3 class="text-lg sm:text-base transition duration-150 ease-in group-hover:text-blue-500 group-active:text-blue-500"><?= esc($service["nama"]) ?></h3>
                        <p class="text-base sm:text-sm mt-1 text-gray-500/90"><?= esc($service["deskripsi_singkat"]) ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
    <!-- Akhir List Services -->
</section>
<!-- Akhir Section Services Information -->
<!-- Section Sambutan Sekwan -->
<section class="sambutan-sekwan py-24 lg:px-12 px-7">
    <!-- Title Section -->
    <h2 class="relative mb-3 text-3xl text-center after:absolute after:-bottom-4 after:left-[50%] after:-translate-[50%] after:w-[10%] after:h-1 after:bg-blue-500 after:rounded-full">Sambutan Sekretaris DPRD</h2>
    <!-- Greeting Text -->
    <div class="sambutan-teks mt-4.5 sm:mt-12 pt-12 grid grid-cols-1 md:grid-cols-2 gap-13 sm:gap-10 md:gap-4 lg:gap-2">
        <!-- Figure Image Secretary DPRD -->
        <figure class="w-full sm:w-100 h-fit relative mx-auto rounded-xl overflow-hidden">
            <!-- Image -->
            <img src="<?= base_url('assets/images/foto-sekwan-dprd-batang-hari.webp') ?>" alt="Sekretaris DPRD Kabupaten Batang Hari" class="w-full h-full aspect-4/5 brightness-115 select-none">
            <!-- Figcaption Image -->
            <div class="caption-img absolute bottom-0 w-full pt-12 pb-4 px-4 font-regular text-center bg-linear-[to_bottom,transparent_15%,rgba(0,0,0,.70)_80%,rgba(0,0,0,.95)]">
                <!-- Secretary Name -->
                <figcaption class="font-semibold text-white tracking-wider text-2xl sm:text-lg">Muhammad Ali, S.E.</figcaption>
                <!-- Job Title -->
                <span class="mt-0.5 block text-lg sm:text-sm text-blue-300 text-shadow-md text-shadow-blue-200/15 tracking-wide">Sekretaris DPRD</span>
            </div>
        </figure>
        <!-- Text Wrapper -->
        <div class="text-sambutan-wrapper">
            <!-- Ikon Block Quotes -->
            <?= icon('block-quotes', ["class" => 'size-8 relative -top-[18px] text-blue-200']) ?>
            <!-- Sambutan Sekretaris -->
            <?= $sambutan_sekretaris ?>
            <!-- Barrier -->
            <hr class="text-neutral-300">
            <!-- Secretary About -->
            <div class="names mt-4 flex flex-col items-end font-regular">
                <!-- Name -->
                <span class="text-lg font-semibold">Muhammad Ali, S.E.</span>
                <!-- Job Title -->
                <span class="text-base sm:text-sm">Sekretaris DPRD Batang Hari</span>
            </div>
        </div>
    </div>
    <!-- Akhir Greeting Text -->
</section>
<!-- Akhir Section Sambutan Sekwan -->
<!-- Section Berita -->
<section class="berita py-24 lg:px-12 px-7">
    <!-- Header Section -->
    <div class="header-section flex justify-between">
        <!-- Title Section -->
        <div class="title">
            <h2 class="mb-0.5 text-3xl">Berita Terkini</h2>
            <p class="text-gray-500/90">Informasi terbaru seputar kegiatan DPRD</p>
        </div>
        <!-- Link Section -->
        <a href="<?= esc($meta_link_news["slug"]) ?>" class="py-2 sm:py-1.5 px-3 flex items-center gap-1.5 self-end sm:self-center font-regular sm:text-sm text-blue-600 rounded-lg hover:bg-blue-100 active:bg-blue-100 group">Lihat Semua <?= icon('arrow-right-mini') ?></a>
    </div>
    <!-- Akhir Header Section -->
    <!-- List Berita -->
    <div class="list-berita mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 sm:gap-6 lg:gap-8">
        <?php foreach ($news as $n): ?>
            <?php
            // destructuring array assoc from result get_time_dif()
            ["hari" => $hari_diff, "jam" => $jam_diff, "menit" => $menit_diff, "tanggal_asli" => $real_datetime] = get_time_diff($n["tanggal_publish"]);
            // set information upload
            $upload_info = ($menit_diff < 60 ? $menit_diff . " menit yang lalu" : ($jam_diff < 24 ? $jam_diff . " jam yang lalu" : ($hari_diff < 31 ? $hari_diff . " hari yang lalu" : $real_datetime)));
            ?>
            <article class="rounded-lg overflow-hidden shadow-sm group transition duration-100 hover:shadow-md">
                <a href="<?= esc($n["slug"]) ?>">
                    <figure class="relative overflow-hidden">
                        <img loading="lazy" src="<?= esc($n["thumbnail"]) ?>" alt="<?= esc($n["judul"]) ?>" class="w-full h-46 aspect-video object-cover object-center transition duration-200 ease-in group-hover:scale-105" />
                        <span class="type-berita absolute top-3 left-3 py-1 px-5 bg-blue-600 font-regular font-semibold text-sm sm:text-xs text-white tracking-wide rounded-full inset-shadow-xs inset-shadow-blue-300"><?= $n["kategori"] ?></span>
                    </figure>
                    <div class="desc-berita p-5">
                        <span class="upload-time mb-2 flex gap-1 font-regular sm:text-xs text-gray-500/90">
                            <?= icon('clock-outline') ?>
                            <span><time datetime="<?= $n["tanggal_publish"] ?>"><?= $upload_info ?></time></span>
                        </span>
                        <h3 class="mb-2 text-lg transition duration-150 ease-in group-hover:text-blue-500"><?= esc($n["judul"]) ?></h3>
                        <p class="mb-4.5 md:mb-3 text-base md:text-sm text-gray-500/90"><?= esc($n["deskripsi_singkat"]) ?></p>
                        <span class="flex items-center gap-1.5 font-regular text-base md:text-sm text-blue-600">Baca Selengkapnya <?= icon('arrow-right-mini') ?></span>
                    </div>
                </a>
            </article>
        <?php endforeach ?>
    </div>
    <!-- Akhir List Berita -->
</section>
<!-- Akhir Section Berita -->
<!-- Section Statistik Pencapaian -->
<section class="statistic-results py-16 px-7 bg-linear-to-br from-blue-600 to-blue-900 from-20% to-100% text-white">
    <!-- Title Section -->
    <h2 class="mb-3 text-3xl text-center">Statistik & Pencapaian</h2>
    <!-- Paragraph Section -->
    <p class="text-center">Data dan Pencapaian DPRD Batang Hari dalam melayani masyarakat</p>
    <!-- Statistics -->
    <div class="statistics mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 sm:gap-5">
        <div class="dprd-members py-6 flex flex-col items-center gap-2 bg-white/15 border border-solid border-white/40 rounded-xl backdrop-blur-xl group transition duration-150 ease-in hover:bg-white/30 active:bg-white/30">
            <div class="icon-statistic w-fit p-3 bg-linear-to-br from-blue-500 to-blue-700 rounded-full transition duration-150 group-hover:scale-105 group-active:scale-105">
                <?= icon('users', ['class' => 'size-6 text-white']) ?>
            </div>
            <span class="mt-1 font-regular font-semibold text-3xl tracking-wider">45</span>
            <span class="font-regular text-lg md:text-sm">Anggota DPRD</span>
        </div>
        <div class="peraturan-daerah py-6 flex flex-col items-center gap-2 bg-white/15 border border-solid border-white/40 rounded-xl backdrop-blur-xl group transition duration-150 ease-in hover:bg-white/30 active:bg-white/30">
            <div class="icon-statistic w-fit p-3 bg-linear-to-br from-emerald-500 to-emerald-600 rounded-full transition duration-150 group-hover:scale-105 group-active:scale-105">
                <?= icon('document', ['class' => 'size-6 text-white']) ?>
            </div>
            <span class="mt-1 font-regular font-semibold text-3xl tracking-wider">127</span>
            <span class="font-regular text-lg md:text-sm">Peraturan Daerah</span>
        </div>
        <div class="peraturan-daerah py-6 flex flex-col items-center gap-2 bg-white/15 border border-solid border-white/40 rounded-xl backdrop-blur-xl group transition duration-150 ease-in hover:bg-white/30 active:bg-white/30">
            <div class="icon-statistic w-fit p-3 bg-linear-to-br from-purple-500 to-purple-700 rounded-full transition duration-150 group-hover:scale-105 group-active:scale-105">
                <?= icon('checklist', ['class' => 'size-6 text-white']) ?>
            </div>
            <span class="mt-1 font-regular font-semibold text-3xl tracking-wider">86</span>
            <span class="font-regular text-lg md:text-sm">Aspirasi Ditindaklanjuti</span>
        </div>
        <div class="total-rapat-tahunan py-6 flex flex-col items-center gap-2 bg-white/15 border border-solid border-white/40 rounded-xl backdrop-blur-xl group transition duration-150 ease-in hover:bg-white/30 active:bg-white/30">
            <div class="icon-statistic w-fit p-3 bg-linear-to-br from-orange-500 to-orange-700 rounded-full transition duration-150 group-hover:scale-105 group-active:scale-105">
                <?= icon('calendar', ['class' => 'size-6 text-white']) ?>
            </div>
            <span class="mt-1 font-regular font-semibold text-3xl tracking-wider">52</span>
            <span class="font-regular text-lg md:text-sm">Rapat Tahun Ini</span>
        </div>
    </div>
    <!-- Akhir Statistics -->
</section>
<!-- Akhir Section Statistik Pencapaian -->
<!-- Swiper JS -->
<script src="<?= base_url('assets/libs/swiper/swiper-bundle.js') ?>"></script>
<!-- Script Slider Init -->
<script src="<?= base_url('assets/js/swiper-init.js') ?>"></script>
<!-- Swiper CSS -->
<link rel="stylesheet" href="<?= base_url('assets/libs/swiper/swiper-bundle.css') ?>">
<?= $this->endSection() ?>