<?php
// Function untuk helper Icon
function icon(string $name, array $attrs = []): string
{
    // Path SVG File
    $path = APPPATH . "Views/icons/{$name}.svg";
    // Cek apakah target SVG itu adalah sebuah file || file tidak ditemukan
    if (!is_file($path)) {
        // Kembalikan pesan bahwa icon/svg file tidak ditemukan
        return "<!-- Target Icons {$name} Not Found! -->";
    }
    // Ambil isi SVG (Path, Circle, etc.)
    $svg = file_get_contents($path);
    // Gabungkan atribut tag
    $attrString = '';
    // Looping atribut
    foreach ($attrs as $key => $value) {
        // if (count($attrs) === 0) break;
        $attrString .= " {$key}=\"{$value}\"";
    }
    // Suntik SVG File ke-dalam SVG Inline
    $svg = preg_replace('/<svg\b([^>]*)>/', "<svg$1{$attrString}>", $svg, 1);
    // Kembalikan tag SVG yang telah disuntik
    return $svg;
}
