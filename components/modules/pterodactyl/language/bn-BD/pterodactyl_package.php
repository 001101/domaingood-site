<?php
/**
* Language definitions. Generated by the Blesta Translator
*
* @package blesta
* @version 5.5.2
* @copyright Copyright (c) 2022, Phillips Data, Inc.
* @license http://www.blesta.com/license/ The Blesta License Agreement
* @link http://www.blesta.com/ Blesta
*/
$lang['PterodactylPackage.!error.meta[location_id].format'] = "ID lokasi harus berupa angka.";
$lang['PterodactylPackage.!error.meta[location_id].valid'] = "ID lokasi tidak cocok dengan yang ada di Pterodactyl.";
$lang['PterodactylPackage.!error.meta[dedicated_ip].format'] = "Apakah akan menggunakan IP khusus harus disetel ke 1 atau 0.";
$lang['PterodactylPackage.!error.meta[port_range].format'] = "Rentang port paling banyak berada dalam format 25565-25570,25580-25590.";
$lang['PterodactylPackage.!error.meta[nest_id].format'] = "ID sarang harus berupa angka.";
$lang['PterodactylPackage.!error.meta[nest_id].valid'] = "Sarang tidak cocok dengan apa pun di Pterodactyl.";
$lang['PterodactylPackage.!error.meta[egg_id].format'] = "ID telur harus berupa angka.";
$lang['PterodactylPackage.!error.meta[egg_id].valid'] = "Telur tidak cocok dengan apapun di Pterodactyl.";
$lang['PterodactylPackage.!error.meta[pack_id].format'] = "ID paket harus berupa angka.";
$lang['PterodactylPackage.!error.meta[memory].format'] = "Jumlah memori harus numerik.";
$lang['PterodactylPackage.!error.meta[swap].format'] = "Jumlah swap harus numerik.";
$lang['PterodactylPackage.!error.meta[cpu].format'] = "Persentase cpu harus numerik.";
$lang['PterodactylPackage.!error.meta[disk].format'] = "Jumlah ruang disk harus numerik.";
$lang['PterodactylPackage.!error.meta[io].format'] = "Bobot IO harus numerik.";
$lang['PterodactylPackage.!error.meta[image].length'] = "Jalur gambar harus paling banyak 255 karakter.";
$lang['PterodactylPackage.!error.meta[databases].format'] = "Jumlah database harus numerik.";
$lang['PterodactylPackage.!error.meta[allocations].format'] = "Jumlah alokasi harus numerik.";
$lang['PterodactylPackage.package_fields.location_id'] = "Lokasi";
$lang['PterodactylPackage.package_fields.tooltip.location_id'] = "Lokasi untuk menyebarkan server secara otomatis.";
$lang['PterodactylPackage.package_fields.dedicated_ip'] = "IP Khusus (opsional)";
$lang['PterodactylPackage.package_fields.tooltip.dedicated_ip'] = "Tetapkan ip khusus ke server yang dibuat.";
$lang['PterodactylPackage.package_fields.port_range'] = "Port Range";
$lang['PterodactylPackage.package_fields.tooltip.port_range'] = "Rentang port dipisahkan dengan koma untuk ditetapkan ke server (Contoh: 25565-25570,25580-25590).";
$lang['PterodactylPackage.package_fields.nest_id'] = "Sarang";
$lang['PterodactylPackage.package_fields.tooltip.nest_id'] = "Sarang untuk digunakan server.";
$lang['PterodactylPackage.package_fields.egg_id'] = "Egg ID";
$lang['PterodactylPackage.package_fields.tooltip.egg_id'] = "ID Telur untuk digunakan server.";
$lang['PterodactylPackage.package_fields.pack_id'] = "ID Paket (opsional)";
$lang['PterodactylPackage.package_fields.tooltip.pack_id'] = "ID Paket untuk menginstal server.";
$lang['PterodactylPackage.package_fields.memory'] = "Memori (MB)";
$lang['PterodactylPackage.package_fields.tooltip.memory'] = "Jumlah Memori untuk ditetapkan ke server yang dibuat.";
$lang['PterodactylPackage.package_fields.swap'] = "Swap (MB)
";
$lang['PterodactylPackage.package_fields.tooltip.swap'] = "Jumlah Swap untuk ditetapkan ke server yang dibuat.";
$lang['PterodactylPackage.package_fields.cpu'] = "Batas CPU (%)";
$lang['PterodactylPackage.package_fields.tooltip.cpu'] = "Jumlah CPU untuk ditetapkan ke server yang dibuat.";
$lang['PterodactylPackage.package_fields.disk'] = "Ruang Disk (MB)";
$lang['PterodactylPackage.package_fields.tooltip.disk'] = "Jumlah Ruang Disk untuk ditetapkan ke server yang dibuat.";
$lang['PterodactylPackage.package_fields.io'] = "Block IO Weight";
$lang['PterodactylPackage.package_fields.tooltip.io'] = "Blokir nomor Penyesuaian IO (10-1000).";
$lang['PterodactylPackage.package_fields.startup'] = "Memulai (opsional)";
$lang['PterodactylPackage.package_fields.tooltip.startup'] = "Perintah startup khusus untuk ditetapkan ke server yang dibuat (mis. Java -Xms128M -Xmx 1024M -jar server.jar).";
$lang['PterodactylPackage.package_fields.image'] = "Gambar (opsional)";
$lang['PterodactylPackage.package_fields.tooltip.image'] = "Gambar Docker khusus untuk ditetapkan ke server yang dibuat (mis. quay.io/pterodactyl/core:java-glibc).";
$lang['PterodactylPackage.package_fields.databases'] = "Batas Basis Data (opsional)";
$lang['PterodactylPackage.package_fields.tooltip.databases'] = "Jumlah total database pengguna diizinkan untuk membuat server. Biarkan kosong untuk memungkinkan tidak terbatas.";
$lang['PterodactylPackage.package_fields.allocations'] = "Batas Alokasi (opsional)";
$lang['PterodactylPackage.package_fields.tooltip.allocations'] = "Jumlah total alokasi yang diizinkan pengguna untuk membuat server. Biarkan kosong untuk memungkinkan tidak terbatas.";
$lang['PterodactylPackage.package_fields.optional'] = "%1\$s (Opsional)"; // %1$s is the name of the field
$lang['PterodactylPackage.package_fields.tooltip.display'] = "Centang untuk mengizinkan klien mengubah nilai ini selama penambahan/pengeditan layanan. Biarkan tidak dicentang jika Anda berencana menggunakan opsi yang dapat dikonfigurasi untuk bidang ini.";
$lang['PterodactylPackage.!error.meta[backups].format'] = "Jumlah cadangan harus numerik.";
$lang['PterodactylPackage.package_fields.backups'] = "Batas Cadangan (opsional)";
$lang['PterodactylPackage.package_fields.tooltip.backups'] = "Jumlah total cadangan yang diizinkan pengguna untuk server yang dibuat. Biarkan kosong untuk memungkinkan tidak terbatas.";
?>