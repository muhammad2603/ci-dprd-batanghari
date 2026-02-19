<?php
// Fetching link navigasi using Model LinkNavigation
$linkNavResult = model(App\Models\LinkNavigation::class)->getDatas();
// @mapping: Mapping navigation, then change value on key child_name and child_slug to array 
$linkNavResult = array_map(function ($item) {
    // @loop: Looping key on array
    foreach (["child_name", "child_slug"] as $key) {
        // Change string to array with separator comma
        $item[$key] = explode(',', $item[$key]);
    }
    // @return new value
    return $item;
}, $linkNavResult);
?>
<!-- Use class "dark:bg-slate-900 dark:text-white/85" instead class on header for Dark Mode variant -->
<header class="top-0 left-0 bg-neutral-50 w-full py-4 px-7 lg:px-12 flex justify-between items-center border-b border-solid border-neutral-300 z-999999999">
    <!-- Identity Company -->
    <div class="identity flex gap-2.5">
        <!-- Logo -->
        <figure class="logo">
            <a href="<?= base_url() ?>" tabindex="-1">
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
        <!-- @loop: Looping Navigation -->
        <?php foreach ($linkNavResult as $link): ?>
            <?php
            $parentName = $link['parent_name'];
            $parentSlug = $link['parent_slug'];
            $childName = $link['child_name'];
            $childSlug = $link['child_slug'];
            ?>
            <?php if ($parentSlug !== null): ?>
                <a href="<?= base_url($parentSlug) ?>" class="<?= ($parentName === $title) ? 'font-semibold text-blue-500' : 'hover:text-blue-500' ?> focus:outline-0"><?= esc($parentName) ?></a>
            <?php else: ?>
                <!-- Use this div if you want add dropdown navigation -->
                <div class="list-dropdown relative">
                    <a href="javascript:void(0)" role="button" class="flex items-center gap-0.5 hover:text-blue-500 active:text-blue-500 focus:outline-0" aria-label="Klik untuk melihat menu">
                        <?= esc($parentName) ?>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Dropdown Navigation -->
                    <div class="nav-dropdown absolute left-0 top-[130%] w-60 py-1.5 hidden flex-col bg-neutral-50 text-sm rounded-lg shadow-sm shadow-neutral-300">
                        <?php for ($i = 0; $i < count($childName); $i++): ?>
                            <a href="<?= esc($childSlug[$i]) ?>" class="py-2 px-4 hover:bg-blue-100 hover:text-blue-400 focus:outline-0"><?= esc($childName[$i]) ?></a>
                        <?php endfor; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

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
        <input type="search" name="__search" placeholder="Cari..." id="searchInput" class="hidden absolute -bottom-9 2xl:-bottom-10 right-7 w-62.5 py-1 px-2.5 bg-neutral-50 text-sm border border-solid border-neutral-300 rounded-full focus:outline-none" aria-label="Ketik yang ingin anda cari">
    </div>
    <!-- Akhir Search Input Wrapper -->
</header>