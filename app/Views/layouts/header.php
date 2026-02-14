<header class="lg:fixed top-0 left-0 bg-neutral-50 w-full py-4 lg:px-12 px-7 flex justify-between items-center border-b border-solid border-neutral-300 z-999999999">
    <!-- Identity Company -->
    <div class="identity flex gap-2.5">
        <!-- Logo -->
        <figure class="logo">
            <a href="<?= base_url() ?>">
                <?= img(["src" => 'assets/images/logo/logo-dprd-batanghari.webp', "alt" => 'Logo DPRD Kabupaten Batang Hari', "class" => 'w-10 sm:w-12 lg:w-12.5 2xl:w-13 aspect-square']) ?>
            </a>
        </figure>
        <!-- Akhir Logo -->
        <!-- Company Name -->
        <div class="name flex flex-col justify-center">
            <h1 class="leading-3.5 2xl:leading-none">Dewan Perwakilan Rakyat Daerah</h1>
            <span class="font-regular">Kabupaten Batang Hari</span>
        </div>
        <!-- Akhir Company Name -->
    </div>
    <!-- Akhir Identity Company -->
    <!-- Navigasi -->
    <nav class="relative hidden lg:flex lg:gap-5 xl:gap-8 text-gray-500/90">
        <!-- Links Navigation -->
        <a href="<?= base_url('/') ?>" class="active font-semibold text-blue-500 focus:outline-0">Beranda</a>
        <a href="#" class="hover:text-blue-500 active:text-blue-500 focus:outline-0">Profil</a>
        <!-- Use this div if you want add dropdown navigation -->
        <div class="list-dropdown relative">
            <a href="javascript:void(0)" class="flex items-center gap-0.5 hover:text-blue-500 active:text-blue-500 focus:outline-0">
                Daftar Anggota
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
            </a>
            <!-- Dropdown Navigation -->
            <div class="nav-dropdown absolute left-0 top-[130%] w-60 py-1.5 hidden flex-col bg-neutral-50 text-sm rounded-lg shadow-sm shadow-neutral-300">
                <a href="#" class="py-2 px-4 hover:bg-blue-100 hover:text-blue-400 focus:outline-0">Anggota Dewan</a>
                <a href="#" class="py-2 px-4 hover:bg-blue-100 hover:text-blue-400 focus:outline-0">Anggota Fraksi</a>
                <a href="#" class="py-2 px-4 hover:bg-blue-100 hover:text-blue-400 focus:outline-0">Anggota Komisi</a>
                <a href="#" class="py-2 px-4 hover:bg-blue-100 hover:text-blue-400 focus:outline-0">Anggota DAPIL</a>
                <a href="#" class="py-2 px-4 hover:bg-blue-100 hover:text-blue-400 focus:outline-0">Anggota Alat Kelengkapan</a>
            </div>
        </div>
        <!-- Use this div if you want add dropdown navigation -->
        <div class="list-dropdown relative">
            <a href="javascript:void(0)" class="flex items-center gap-0.5 hover:text-blue-500 active:text-blue-500 focus:outline-0">
                Berita
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
            </a>
            <!-- Dropdown Navigation -->
            <div class="nav-dropdown absolute left-0 top-[130%] w-60 py-1.5 hidden flex-col bg-neutral-50 text-sm rounded-lg shadow-sm shadow-neutral-300">
                <a href="#" class="py-2 px-4 hover:bg-blue-100 hover:text-blue-400 focus:outline-0">Kegiatan Reses</a>
                <a href="#" class="py-2 px-4 hover:bg-blue-100 hover:text-blue-400 focus:outline-0">Kegiatan Anggota</a>
                <a href="#" class="py-2 px-4 hover:bg-blue-100 hover:text-blue-400 focus:outline-0">Kegiatan Fraksi</a>
                <a href="#" class="py-2 px-4 hover:bg-blue-100 hover:text-blue-400 focus:outline-0">Kegiatan Alat Kelengkapan Dewan</a>
                <a href="#" class="py-2 px-4 hover:bg-blue-100 hover:text-blue-400 focus:outline-0">Kegiatan Sekretariat</a>
            </div>
        </div>
        <a href="#" class="hover:text-blue-500 focus:outline-0 active:text-blue-500">Agenda</a>
        <a href="#" class="hover:text-blue-500 focus:outline-0 active:text-blue-500">Kontak</a>
        <!-- Mark for Navigation Current Active -->
        <div class="slide-nav-position absolute left-0 -bottom-2 w-15 h-1 bg-blue-500 rounded-full"></div>
    </nav>
    <!-- Akhir Navigasi -->
    <!-- Search Input Wrapper -->
    <div class="search-input">
        <!-- Button Search -->
        <button type="button" class="cursor-pointer focus:outline-0 group" title="Pencarian" aria-label="Pencarian">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 hover:stroke-blue-500 group-focus:stroke-blue-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </button>
        <!-- Search Input -->
        <input type="search" name="__search" placeholder="Cari..." id="searchInput" class="hidden absolute -bottom-9 2xl:-bottom-10 right-7 w-62.5 py-1 px-2.5 bg-neutral-50 text-sm border border-solid border-neutral-300 rounded-full focus:outline-none">
    </div>
    <!-- Akhir Search Input Wrapper -->
</header>