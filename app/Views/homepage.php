<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<!-- Slider Main Container -->
<section class="swiper w-full min-h-87 h-87 sm:min-h-82.5 sm:h-82.5 md:h-120 lg:min-h-screen lg:h-screen aspect-video md:aspect-auto overflow-hidden" id="swiperWrapper">
    <!-- @SwiperJS -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <figure class="h-full swiper-slide invisible">
            <img src="https://www.mediainvestigasi.net/wp-content/uploads/2024/09/IMG-20240901-WA0024.jpg" alt="" class="w-full h-screen object-cover aspect-video brightness-35 overflow-hidden" loading="lazy">
            <div class="swiper-lazy-preloader"></div>
            <div class="slider-informations w-[80%] sm:w-[66%] md:w-[50%] 2xl:w-[65%] absolute top-[48%] md:top-[50%] lg:top-[55%] left-7 sm:left-16 md:left-24 -translate-y-[50%] text-white text-pretty">
                <span class="type-berita py-1 px-5 bg-blue-600 font-regular font-semibold text-sm tracking-wide rounded-full inset-shadow-xs inset-shadow-blue-300">Rapat</span>
                <h2 class="mt-4 lg:mt-3.5 text-3xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl lg:leading-13 xl:leading-15 text-shadow-md">Pelantikan Anggota DPRD Periode 2024-2029</h2>
                <p class="sm:mt-3 md:mt-5 hidden sm:block text-sm md:text-lg xl:text-base 2xl:text-lg leading-5.5 2xl:leading-6 text-shadow-md">Pelantikan Anggota DPRD yang baru dengan komitmen melayani masyarakat dengan dedikasi tinggi</p>
                <a href="#" class="mt-5 md:mt-10 w-fit py-2 px-3.5 sm:py-2.5 sm:px-3 flex items-center gap-1.5 bg-blue-600 font-regular text-sm group rounded-md">Baca Selengkapnya <?= icon('arrow-right-mini') ?></a>
            </div>
        </figure>
        <figure class="h-full swiper-slide">
            <img src="https://cdn.antaranews.com/cache/1200x800/2025/04/29/IMG-20250429-WA0003_2.jpg" alt="" class="w-full h-screen object-cover aspect-video brightness-35 overflow-hidden" loading="lazy">
            <div class="swiper-lazy-preloader"></div>
            <div class="slider-informations w-[80%] sm:w-[66%] md:w-[50%] 2xl:w-[65%] absolute top-[48%] md:top-[50%] lg:top-[55%] left-7 sm:left-16 md:left-24 -translate-y-[50%] text-white text-pretty">
                <span class="type-berita py-1 px-5 bg-blue-600 font-regular font-semibold text-sm tracking-wide rounded-full inset-shadow-xs inset-shadow-blue-300">Rapat</span>
                <h2 class="mt-4 lg:mt-3.5 text-3xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl lg:leading-13 xl:leading-15 text-shadow-md">DPRD Batanghari Gelar Rapat Paripurna...</h2>
                <p class="sm:mt-3 md:mt-5 hidden sm:block text-sm md:text-lg xl:text-base 2xl:text-lg leading-5.5 2xl:leading-6 text-shadow-md">LKPJ Akhir Tahun Anggaran wajib disampaikan kepada DPRD paling lambat tiga bulan setelah tahun anggaran berakhir. Setelah LKPJ ini disampaikan, DPRD akan membentuk tim khusus untuk membahas laporan tersebut sebelum mencapai kesepakatan</p>
                <a href="#" class="mt-5 md:mt-10 w-fit py-2 px-3.5 sm:py-2.5 sm:px-3 flex items-center gap-1.5 bg-blue-600 font-regular text-sm group rounded-md">Baca Selengkapnya <?= icon('arrow-right-mini') ?></a>
            </div>
        </figure>
        <figure class="h-full swiper-slide invisible">
            <img src="https://jambiekspres.disway.id/upload/b1252dfe2022c93c8e660d3504498fda.jpg" alt="" class="w-full h-screen object-cover aspect-video brightness-35 overflow-hidden" loading="lazy">
            <div class="swiper-lazy-preloader"></div>
            <div class="slider-informations w-[80%] sm:w-[66%] md:w-[50%] 2xl:w-[65%] absolute top-[48%] md:top-[50%] lg:top-[55%] left-7 sm:left-16 md:left-24 -translate-y-[50%] text-white text-pretty">
                <span class="type-berita py-1 px-5 bg-blue-600 font-regular font-semibold text-sm tracking-wide rounded-full inset-shadow-xs inset-shadow-blue-300">Rapat</span>
                <h2 class="mt-4 lg:mt-3.5 text-3xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl lg:leading-13 xl:leading-15 text-shadow-md">DPRD Kabupaten Batang Hari Sampaikan Ucapan...</h2>
                <p class="sm:mt-3 md:mt-5 hidden sm:block text-sm md:text-lg xl:text-base 2xl:text-lg leading-5.5 2xl:leading-6 text-shadow-md">Ketua DPRD Kabupaten Batanghari, Rahmad Hasrofi, SE, bersama Wakil Ketua DPRD Hj. Elfirsto Nopsiami AR, S.H dan Muhammad Firdaus, menyampaikan harapan agar pers terus menjalankan fungsi kontrol sosial secara profesional, berimbang, dan bertanggung jawab.</p>
                <a href="#" class="mt-5 md:mt-10 w-fit py-2 px-3.5 sm:py-2.5 sm:px-3 flex items-center gap-1.5 bg-blue-600 font-regular text-sm group rounded-md">Baca Selengkapnya <?= icon('arrow-right-mini') ?></a>
            </div>
        </figure>
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
<section class="w-full py-18 sm:py-24 lg:py-38 lg:px-12 px-7 bg-[url('assets/images/backgrounds/bg-gedung-dprd-batang-hari.webp')] bg-no-repeat bg-cover">
    <!-- Layer Text -->
    <div class="layer-text w-full sm:w-2/3 2xl:w-[80%] text-white">
        <!-- Slogan -->
        <span class="font-regular py-1 px-3 bg-blue-200/60 font-semibold text-sm md:text-sm text-shadow-sm tracking-wider rounded-full mix-blend-lighten">Melayani dengan Integritas dan Transparansi</span>
        <!-- Company Name -->
        <h2 class="my-4 md:my-6 lg:my-5 text-4xl lg:text-5xl xl:text-6xl tracking-wider lg:leading-14 xl:leading-17 text-shadow-lg uppercase">Dewan Perwakilan Rakyat Daerah</h2>
        <!-- Paragraph About Company -->
        <p class="text-shadow-lg text-lg sm:text-base xl:text-lg">Menyuarakan aspirasi rakyat, mengawasi pemerintahan daerah, dan membuat regulasi untuk kesejahteraan masyarakat.</p>
        <!-- Links -->
        <div class="links mt-5 flex gap-4.5 sm:gap-4">
            <!-- Link Public Service -->
            <a href="#" class="py-2 md:py-2.5 px-3.5 md:px-4 flex gap-2 items-center bg-white text-base text-blue-500 transition duration-150 ease-in hover:bg-blue-500 hover:text-white rounded-lg">
                <span>Layanan Publik</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 align-middle">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
            <!-- Link for All Details About Company -->
            <a href="#" class="py-2 md:py-2.5 px-3.5 md:px-4 bg-gray-100/20 text-base border border-solid border-white/50 rounded-lg backdrop-blur-xs transition duration-150 hover:bg-gray-100/40 hover:backdrop-blur-md">Tentang Kami</a>
        </div>
    </div>
</section>
<!-- Akhir Section About -->

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

<!-- Section Services Information -->
<section class="services-information mt-5 py-24 lg:px-12 px-7 bg-gray-100/90">
    <!-- Title Section -->
    <h2 class="mb-3 text-3xl text-center">Layanan & Informasi</h2>
    <!-- Paragraph Section -->
    <p class="text-gray-500/90 text-center">Akses cepat ke berbagai layanan DPRD Batang Hari</p>
    <!-- List Services -->
    <div class="services mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6.5 sm:gap-5.5">
        <!-- Layanan Peraturan Daerah -->
        <div class="service peraturan bg-white rounded-xl shadow-sm transition duration-100 hover:shadow-md">
            <a href="#" class="py-6 px-5 block group">
                <div class="icon-service-wrapper w-fit p-2 bg-blue-500 border border-solid border-blue-700 rounded-lg transition duration-50 group-hover:scale-105">
                    <?= icon('document', ['class' => 'size-6 text-white']) ?>
                </div>
                <div class="service-details mt-2.5">
                    <h3 class="text-lg sm:text-base transition duration-150 ease-in group-hover:text-blue-500 group-active:text-blue-500">Peraturan Daerah</h3>
                    <p class="text-base sm:text-sm mt-1 text-gray-500/90">Akses dokumen peraturan dan kebijakan daerah</p>
                </div>
            </a>
        </div>
        <!-- Layanan Profil Anggota -->
        <div class="service profil-anggota bg-white rounded-xl shadow-sm transition duration-100 hover:shadow-md">
            <a href="#" class="py-6 px-5 block group">
                <div class="icon-service-wrapper w-fit p-2 bg-emerald-400 border border-solid border-emerald-700 rounded-lg transition duration-50 group-hover:scale-105">
                    <?= icon('users', ['class' => 'size-6 text-white']) ?>
                </div>
                <div class="service-details mt-2.5">
                    <h3 class="text-lg sm:text-base transition duration-150 ease-in group-hover:text-blue-500">Profil Anggota</h3>
                    <p class="text-base sm:text-sm mt-1 text-gray-500/90">Informasi lengkap Anggota DPRD</p>
                </div>
            </a>
        </div>
        <!-- Layanan Jadwal Rapat -->
        <div class="service jadwal-rapat bg-white rounded-xl shadow-sm transition duration-100 hover:shadow-md">
            <a href="#" class="py-6 px-5 block group">
                <div class="icon-service-wrapper w-fit p-2 bg-purple-500 border border-solid border-purple-700 rounded-lg transition duration-50 group-hover:scale-105">
                    <?= icon('calendar', ['class' => 'size-6 text-white']) ?>
                </div>
                <div class="service-details mt-2.5">
                    <h3 class="text-lg sm:text-base transition duration-150 ease-in group-hover:text-blue-500">Jadwal Rapat</h3>
                    <p class="text-base sm:text-sm mt-1 text-gray-500/90">Kalender agenda dan rapat pleno</p>
                </div>
            </a>
        </div>
        <!-- Layanan Aspirasi Masyarakat -->
        <div class="service aspirasi-masyarakat bg-white rounded-xl shadow-sm transition duration-100 hover:shadow-md">
            <a href="#" class="py-6 px-5 block group">
                <div class="icon-service-wrapper w-fit p-2 bg-orange-500 border border-solid border-orange-700 rounded-lg transition duration-50 group-hover:scale-105">
                    <?= icon('message', ['class' => 'size-6 text-white']) ?>
                </div>
                <div class="service-details mt-2.5">
                    <h3 class="text-lg sm:text-base transition duration-150 ease-in group-hover:text-blue-500">Aspirasi Masyarakat</h3>
                    <p class="text-base sm:text-sm mt-1 text-gray-500/90">Sampaikan aspirasi dan keluhan anda</p>
                </div>
            </a>
        </div>
        <!-- Layanan Laporan Kegiatan -->
        <div class="service laporan-kegiatan bg-white rounded-xl shadow-sm transition duration-100 hover:shadow-md">
            <a href="#" class="py-6 px-5 block group">
                <div class="icon-service-wrapper w-fit p-2 bg-red-500 border border-solid border-red-700 rounded-lg transition duration-50 group-hover:scale-105">
                    <?= icon('book', ['class' => 'size-6 text-white']) ?>
                </div>
                <div class="service-details mt-2.5">
                    <h3 class="text-lg sm:text-base transition duration-150 ease-in group-hover:text-blue-500">Laporan Kegiatan</h3>
                    <p class="text-base sm:text-sm mt-1 text-gray-500/90">Transparansi laporan dan kegiatan</p>
                </div>
            </a>
        </div>
        <!-- Layanan Informasi Publik -->
        <div class="service informasi-publik bg-white rounded-xl shadow-sm transition duration-100 hover:shadow-md">
            <a href="#" class="py-6 px-5 block group">
                <div class="icon-service-wrapper w-fit p-2 bg-teal-500 border border-solid border-teal-700 rounded-lg transition duration-50 group-hover:scale-105">
                    <?= icon('office', ['class' => 'size-6 text-white']) ?>
                </div>
                <div class="service-details mt-2.5">
                    <h3 class="text-lg sm:text-base transition duration-150 ease-in group-hover:text-blue-500">Informasi Publik</h3>
                    <p class="text-base sm:text-sm mt-1 text-gray-500/90">Layanan informasi untuk publik</p>
                </div>
            </a>
        </div>
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
            <!-- Text -->
            <blockquote class="text mb-6 text-lg sm:text-base md:text-sm md:text-left text-gray-500/90 sm:leading-6 flex flex-col gap-2.5 text-pretty">
                <p>Assalamu&#8217;alaikum Warahmatullahi Wabarakatuh,<br>Salam sejahtera bagi kita semua.</p>
                <p>Puji dan syukur kita panjatkan ke hadirat Allah SWT, Tuhan Yang Maha Esa, atas rahmat dan karunia-Nya sehingga kita semua senantiasa diberikan kesehatan dan kesempatan untuk terus berkarya serta mengabdi kepada masyarakat.</p>
                <p>Sekretariat DPRD Kabupaten Batang Hari memiliki komitmen untuk memberikan dukungan administratif dan teknis secara profesional dalam menunjang pelaksanaan tugas dan fungsi DPRD, baik dalam bidang legislasi, anggaran, maupun pengawasan. Kami terus berupaya meningkatkan kualitas pelayanan, transparansi, serta akuntabilitas kinerja sebagai bentuk tanggung jawab kepada masyarakat.</p>
                <p>Melalui berbagai inovasi dan pengembangan sistem, termasuk pemanfaatan teknologi informasi, kami berharap dapat menghadirkan pelayanan yang lebih efektif, efisien, dan responsif terhadap kebutuhan publik. Kami menyadari bahwa pelayanan yang baik tidak hanya diukur dari hasil, tetapi juga dari proses yang terbuka dan berintegritas.</p>
                <p>Semoga upaya yang kita lakukan bersama dapat memberikan kontribusi nyata bagi kemajuan Kabupaten Batang Hari serta meningkatkan kepercayaan masyarakat terhadap lembaga legislatif.</p>
                <p>Terima kasih atas perhatian dan kerja sama semua pihak.</p>
                <p class="text-black font-semibold">Wassalamu&#8217;alaikum Warahmatullahi Wabarakatuh.</p>
            </blockquote>
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
        <a href="#" class="py-2 sm:py-1.5 px-3 flex items-center gap-1.5 self-end sm:self-center font-regular sm:text-sm text-blue-600 rounded-lg hover:bg-blue-100 active:bg-blue-100 group">Lihat Semua <?= icon('arrow-right-mini') ?></a>
    </div>
    <!-- Akhir Header Section -->
    <!-- List Berita -->
    <div class="list-berita mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 sm:gap-6 lg:gap-8">
        <article class="rounded-lg overflow-hidden shadow-sm group transition duration-100 hover:shadow-md">
            <a href="#">
                <figure class="relative overflow-hidden">
                    <img src="https://awsimages.detik.net.id/community/media/visual/2023/07/20/rapat-paripurna-di-dprd-dki-jakarta-brigitta-belia-permatadetikcom_169.jpeg?w=600&q=90" alt="" class="w-full h-46 aspect-video object-cover object-center transition duration-200 ease-in group-hover:scale-105" loading="lazy" />
                    <span class="type-berita absolute top-3 left-3 py-1 px-5 bg-blue-600 font-regular font-semibold text-sm sm:text-xs text-white tracking-wide rounded-full inset-shadow-xs inset-shadow-blue-300">Rapat</span>
                </figure>
                <div class="desc-berita p-5">
                    <span class="upload-time mb-2 flex gap-1 font-regular sm:text-xs text-gray-500/90">
                        <?= icon('clock-outline') ?>
                        <time datetime="2026-02-11">11 Februari 2026</time>
                    </span>
                    <h3 class="mb-2 text-lg sm:text-base transition duration-150 ease-in group-hover:text-blue-500 group-active:text-blue-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h3>
                    <p class="mb-4.5 md:mb-3 text-base md:text-sm text-gray-500/90">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis debitis est aliquam at officia unde et repellat doloremque praesentium quisquam.</p>
                    <span class="flex items-center gap-1.5 font-regular text-base md:text-sm text-blue-600">Baca Selengkapnya <?= icon('arrow-right-mini') ?></span>
                </div>
            </a>
        </article>
        <article class="rounded-lg overflow-hidden shadow-sm group transition duration-100 hover:shadow-md">
            <a href="#">
                <figure class="relative overflow-hidden">
                    <img loading="lazy" src="data:image/jpeg;base64,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" alt="" class="w-full h-46 aspect-video object-cover object-center transition duration-200 ease-in group-hover:scale-105" />
                    <span class="type-berita absolute top-3 left-3 py-1 px-5 bg-blue-600 font-regular font-semibold text-sm sm:text-xs text-white tracking-wide rounded-full inset-shadow-xs inset-shadow-blue-300">Kegiatan</span>
                </figure>
                <div class="desc-berita p-5">
                    <span class="upload-time mb-2 flex gap-1 font-regular sm:text-xs text-gray-500/90">
                        <?= icon('clock-outline') ?>
                        <time datetime="2026-02-05">05 Februari 2026</time>
                    </span>
                    <h3 class="mb-2 text-lg sm:text-base transition duration-150 ease-in group-hover:text-blue-500 group-active:text-blue-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h3>
                    <p class="mb-4.5 md:mb-3 text-base md:text-sm text-gray-500/90">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis debitis est aliquam at officia unde et repellat doloremque praesentium quisquam.</p>
                    <span class="flex items-center gap-1.5 font-regular text-base md:text-sm text-blue-600">Baca Selengkapnya <?= icon('arrow-right-mini') ?></span>
                </div>
            </a>
        </article>
        <article class="rounded-lg overflow-hidden shadow-sm group transition duration-100 hover:shadow-md">
            <a href="#">
                <figure class="relative overflow-hidden">
                    <img loading="lazy" src="https://awsimages.detik.net.id/community/media/visual/2022/03/22/peraturan-daerah-pengertian-fungsi-hingga-tujuannya_169.jpeg?w=1200" alt="" class="w-full h-46 aspect-video object-cover object-center transition duration-200 ease-in group-hover:scale-105" />
                    <span class="type-berita absolute top-3 left-3 py-1 px-5 bg-blue-600 font-regular font-semibold text-sm sm:text-xs text-white tracking-wide rounded-full inset-shadow-xs inset-shadow-blue-300">Peraturan</span>
                </figure>
                <div class="desc-berita p-5">
                    <span class="upload-time mb-2 flex gap-1 font-regular sm:text-xs text-gray-500/90">
                        <?= icon('clock-outline') ?>
                        <time datetime="2026-02-11">11 Februari 2026</time>
                    </span>
                    <h3 class="mb-2 text-lg transition duration-150 ease-in group-hover:text-blue-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h3>
                    <p class="mb-4.5 md:mb-3 text-base md:text-sm text-gray-500/90">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis debitis est aliquam at officia unde et repellat doloremque praesentium quisquam.</p>
                    <span class="flex items-center gap-1.5 font-regular text-base md:text-sm text-blue-600">Baca Selengkapnya <?= icon('arrow-right-mini') ?></span>
                </div>
            </a>
        </article>
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