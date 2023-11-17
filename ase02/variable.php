<?php

$nama = "iqbal farhan syuhada"; // string
$umur = 27; // integer
$sekolah = "LP3I Balikpapan"; // string
$pria = true; // boolean


$projects = [
    "project 1",
    "project 2",
    "project 3"
]; // array;

echo "\n";

echo "perkenalkan saya {$nama} berumur {$umur} tahun,";
echo "\n";
echo "saya belajar di {$sekolah}.";
echo "\n";
echo "saya seorang " . ($pria ? 'pria' : 'wanita');

echo "\n";
echo "\n";