<?php
$tanggal = '012409';
$bulan = substr($tanggal, 0, 2);
$hari = substr($tanggal, 2, 2);
$tahun = substr($tanggal, -2);
echo "$hari/$bulan/$tahun";
