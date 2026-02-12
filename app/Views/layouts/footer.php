<footer class="py-8 px-7 bg-slate-900">
    <div class="footer-details mb-6 grid grid-cols-4 gap-6">
        <div class="slogan">
            <div class="identity flex gap-2 text-white">
                <!-- Logo -->
                <figure class="logo shrink-0">
                    <?= img(["src" => 'assets/images/logo/logo-dprd-batanghari.webp', "alt" => 'Logo DPRD Kabupaten Batang Hari', "class" => 'w-[50px] aspect-square']) ?>
                </figure>
                <!-- Akhir Logo -->
                <!-- Company Name -->
                <div class="name flex flex-col justify-between">
                    <h1 class="leading-4 text-sm">Dewan Perwakilan Rakyat Daerah</h1>
                    <span class="font-regular text-xs">Kabupaten Batang Hari</span>
                </div>
                <!-- Akhir Company Name -->
            </div>
            <div class="slogan-text mt-3 text-xs text-white/75">
                <p class="text-pretty tracking-wide">Mewakili suara rakyat, mengawasi pemerintahan, dan membuat kebijakan untuk kesejahteraan daerah.</p>
            </div>
        </div>
        <div class="fast-link">
            <span class="font-title text-sm text-white">Tautan Cepat</span>
            <nav class="mt-3 flex flex-col gap-1.5 text-white/75">
                <a href="#" class="w-fit text-xs transition duration-100 hover:text-blue-400">Profil</a>
                <a href="#" class="w-fit text-xs transition duration-100 hover:text-blue-400">Anggota</a>
                <a href="#" class="w-fit text-xs transition duration-100 hover:text-blue-400">Peraturan Daerah</a>
                <a href="#" class="w-fit text-xs transition duration-100 hover:text-blue-400">Agenda Rapat</a>
                <a href="#" class="w-fit text-xs transition duration-100 hover:text-blue-400">Laporan Kegiatan</a>
            </nav>
        </div>
        <div class="footer-services">
            <span class="font-title text-sm text-white">Layanan</span>
            <nav class="mt-3 flex flex-col gap-1.5 text-white/75">
                <a href="#" class="w-fit text-xs transition duration-100 hover:text-blue-400">Aspirasi Masyarakat</a>
                <a href="#" class="w-fit text-xs transition duration-100 hover:text-blue-400">Informasi Publik</a>
                <a href="#" class="w-fit text-xs transition duration-100 hover:text-blue-400">Pengaduan</a>
                <a href="#" class="w-fit text-xs transition duration-100 hover:text-blue-400">Transparansi</a>
                <a href="#" class="w-fit text-xs transition duration-100 hover:text-blue-400">FAQ</a>
            </nav>
        </div>
        <div class="footer-contacts">
            <span class="font-title text-sm text-white">Kontak</span>
            <div class="my-3 flex flex-col gap-2.5 text-white/75">
                <span class="flex gap-1 text-xs"><span><?= icon('location-outline-mini') ?></span>Jl. Perwakilan No. 123, Jakarta Pusat, DKI Jakarta 10110</span>
                <span class="flex gap-1 text-xs"><span><?= icon('phone-outline-mini') ?></span>(021) 1234-5678</span>
                <span class="flex gap-1 text-xs"><span><?= icon('envelope-outline-mini') ?></span>info@dprd.go.id</span>
            </div>
            <span class="font-regular text-sm text-white">Ikuti Kami</span>
            <div class="media-socials mt-3 flex gap-2.5 text-white">
                <a href="#" class="py-2 px-2 bg-slate-800 rounded-xl transition duration-150 ease-in hover:bg-blue-600" title="Facebook Resmi DPRD Batang Hari"><?= icon('facebook', ["class" => 'small-icon']) ?></a>
                <a href="#" class="py-2 px-2 bg-slate-800 rounded-xl transition duration-150 ease-in hover:bg-pink-500" title="Instagram Resmi DPRD Batang Hari"><?= icon('instagram', ["class" => 'small-icon']) ?></a>
                <a href="#" class="py-2 px-2 bg-slate-800 rounded-xl transition duration-150 ease-in hover:bg-red-500" title="YouTube Resmi DPRD Batang Hari"><?= icon('youtube', ["class" => 'small-icon']) ?></a>
            </div>
        </div>
    </div>
    <hr class="text-gray-700">
    <div class="more-footer-details mt-7 flex justify-between text-white/75 text-sm">
        <span>&copy; 2026 DPRD Batang Hari. Seluruh hak cipta dilindungi.</span>
        <div class="flex gap-7">
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Syarat & Ketentuan</a>
            <a href="#">Sitemap</a>
        </div>
    </div>
</footer>