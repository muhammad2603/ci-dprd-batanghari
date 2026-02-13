<nav class="bottom-navigation block sm:hidden pt-4 pb-2 px-3 fixed bottom-0 left-0 w-full bg-neutral-50 border-t-2 border-solid  border-neutral-300 rounded-tl-3xl rounded-tr-3xl z-999999999">
    <!-- Button for Expand Menu List -->
    <button type="button" class="p-4 absolute -top-8 left-[50%] -translate-x-[50%] bg-neutral-50 rounded-full -z-10 inset-shadow-[0px_2px_5px_-2px_rgba(0,0,0,0.40)] active:text-blue-500" aria-label="Lihat Menu Lainnya">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>
    </button>
    <!-- Akhir Button for Expand Menu List -->
    <!-- Menu Buttons -->
    <div class="menu-buttons grid grid-cols-4 gap-2">
        <button type="button" class="p-1 flex flex-col items-center text-blue-500 active:text-blue-500">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </span>
            <a href="#" class="font-regular text-md tracking-wide">Beranda</a>
        </button>
        <button type="button" class="p-1 flex flex-col items-center active:text-blue-500">
            <span><?= icon('office', ["class" => 'size-6']) ?></span>
            <a href="#" class="font-regular text-md tracking-wide">Profil</a>
        </button>
        <button type="button" class="p-1 flex flex-col items-center active:text-blue-500">
            <span><?= icon('users', ["class" => 'size-6']) ?></span>
            <a href="#" class="font-regular text-md tracking-wide">Anggota</a>
        </button>
        <button type="button" class="p-1 flex flex-col items-center active:text-blue-500">
            <span><?= icon('document', ["class" => 'size-6']) ?></span>
            <a href="#" class="font-regular text-md tracking-wide">Dokumen</a>
        </button>
    </div>
    <!-- Akhir Menu Buttons -->
    <!-- Menu List Expand -->
    <div class="menu-list-expand p-8 w-full absolute -bottom-16.75 left-0 bg-white font-regular border-t-3 border-solid  border-neutral-300 rounded-tl-3xl rounded-tr-3xl">
        <!-- Menu Navigation Anggota -->
        <div class="menu-anggota hidden">
            <!-- Header Menu -->
            <div class="header-menu flex justify-between items-center">
                <!-- Menu Title -->
                <span class="font-title text-xl font-bold">Daftar Anggota</span>
                <!-- Close Button -->
                <span class="py-2 px-2.5 text-gray-500/90 rounded-xl transition duration-200 active:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </span>
            </div>
            <!-- Akhir Header Menu -->
            <!-- List Navigation Menu Anggota -->
            <nav class="list-daftar-anggota mt-4 flex flex-col gap-2 text-gray-500/90 tracking-wide">
                <a href="#" class="py-2.5 px-5 text-lg rounded-xl transition-[background-color] duration-300 active:bg-blue-100 active:text-blue-400">Anggota Dewan</a>
                <a href="#" class="py-2.5 px-5 text-lg rounded-xl transition-[background-color] duration-300 active:bg-blue-100 active:text-blue-400">Anggota Fraksi</a>
                <a href="#" class="py-2.5 px-5 text-lg rounded-xl transition-[background-color] duration-300 active:bg-blue-100 active:text-blue-400">Anggota Komisi</a>
                <a href="#" class="py-2.5 px-5 text-lg rounded-xl transition-[background-color] duration-300 active:bg-blue-100 active:text-blue-400">Anggota DAPIL</a>
                <a href="#" class="py-2.5 px-5 text-lg rounded-xl transition-[background-color] duration-300 active:bg-blue-100 active:text-blue-400">Anggota Alat Kelengkapan</a>
            </nav>
            <!-- Akhir List Navigation Menu Anggota -->
        </div>
        <!-- Akhir Menu Navigation Anggota -->
        <!-- Menu Navigation Berita -->
        <div class="menu-berita hidden">
            <!-- Header Menu -->
            <div class="header-menu flex justify-between items-center">
                <!-- Title Menu -->
                <span class="font-title text-xl font-bold">Berita</span>
                <!-- Close Menu Button -->
                <span class="py-2 px-2.5 text-gray-500/90 rounded-xl transition duration-200 active:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </span>
            </div>
            <!-- Akhir Header Menu -->
            <!-- List Navigation Menu Berita -->
            <nav class="list-daftar-anggota mt-4 flex flex-col gap-2 text-gray-500/90 tracking-wide">
                <a href="#" class="py-2.5 px-5 text-lg rounded-xl transition-[background-color] duration-300 active:bg-blue-100 active:text-blue-400">Kegiatan Reses</a>
                <a href="#" class="py-2.5 px-5 text-lg rounded-xl transition-[background-color] duration-300 active:bg-blue-100 active:text-blue-400">Kegiatan Anggota</a>
                <a href="#" class="py-2.5 px-5 text-lg rounded-xl transition-[background-color] duration-300 active:bg-blue-100 active:text-blue-400">Kegiatan Fraksi</a>
                <a href="#" class="py-2.5 px-5 text-lg rounded-xl transition-[background-color] duration-300 active:bg-blue-100 active:text-blue-400">Kegiatan Alat Kelengkapan Dewan</a>
                <a href="#" class="py-2.5 px-5 text-lg rounded-xl transition-[background-color] duration-300 active:bg-blue-100 active:text-blue-400">Kegiatan Sekretariat</a>
            </nav>
            <!-- Akhir List Navigation Menu Berita -->
        </div>
        <!-- Akhir Menu Navigation Berita -->
    </div>
    <!-- Akhir Menu List Expand -->
</nav>