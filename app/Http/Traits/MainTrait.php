<?php

namespace App\Http\Traits;

use App\Models\Student;

trait MainTrait
{
    public function changeMonthIdToEn($dates)
    {
        $dateLocale = $dates;

        $separateString = explode(' ', $dateLocale);

        $day    = $separateString[0];
        $month  = $separateString[1];
        $year   = $separateString[2];

        if ($month == 'Januari') {
            $month = '01';
        } elseif ($month == 'Februari') {
            $month = '02';
        } elseif ($month == 'Maret') {
            $month = '03';
        } elseif ($month == 'April') {
            $month = '04';
        } elseif ($month == 'Mei') {
            $month = '05';
        } elseif ($month == 'Juni') {
            $month = '06';
        } elseif ($month == 'Juli') {
            $month = '07';
        } elseif ($month == 'Agustus') {
            $month = '08';
        } elseif ($month == 'September') {
            $month = '09';
        } elseif ($month == 'Oktober') {
            $month = '10';
        } elseif ($month == 'November') {
            $month = '11';
        } elseif ($month == 'Desember') {
            $month = '12';
        }

        return $year . '-' . $month . '-' . $day;
    }
}