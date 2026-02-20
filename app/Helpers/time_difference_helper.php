<?php
// declare strict for types
declare(strict_types=1);
// call class Time from CI
use CodeIgniter\I18n\Time;
// call helper date from CI
helper('date');

/**
 * function: melakukan perbandingan waktu antara sekarang dan target.
 *
 * @param string $date_time_target tanggal/waktu target (format Y-m-d H:i:s)
 * @return array{hari:int, jam:int, menit:int}
 */
function get_time_diff(string $date_time_target): array
{
    // waktu yang ingin dibandingkan
    $start_date_time = Time::parse($date_time_target);
    // waktu saat ini
    $current_date_time = Time::now();
    // Set Time Difference
    $td = $current_date_time->difference($start_date_time);
    // @return
    return [
        "tanggal_asli" => Time::parse($date_time_target)->toLocalizedString('d MMMM yyyy'),
        "hari" => abs($td->getDays()),
        "jam" => abs($td->getHours()),
        "menit" => abs($td->getMinutes()),
    ];
}
