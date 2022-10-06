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

$lang['StripePayments.!error.auth'] = "Gateway tidak dapat mengautentikasi.";
$lang['StripePayments.!error.publishable_key.empty'] = "Harap masukkan Kunci yang Dapat Diterbitkan.";
$lang['StripePayments.!error.secret_key.empty'] = "Masukkan Kunci Rahasia (Secret Key)";
$lang['StripePayments.!error.secret_key.valid'] = "Tidak dapat terhubung ke Stripe API menggunakan Kunci Rahasia yang diberikan.";
$lang['StripePayments.name'] = "Stripe Payments";
$lang['StripePayments.publishable_key'] = "Kunci yang Dapat Diterbitkan API";
$lang['StripePayments.secret_key'] = "Kunci Rahasia API";
$lang['StripePayments.tooltip_publishable_key'] = "Kunci yang Dapat Diterbitkan API Anda khusus untuk mode langsung atau uji coba. Pastikan Anda menggunakan kunci yang benar.";
$lang['StripePayments.tooltip_secret_key'] = "Kunci Rahasia API Anda khusus untuk mode langsung atau uji coba. Pastikan Anda menggunakan kunci yang benar.";
$lang['StripePayments.heading_migrate_accounts'] = "Migrasikan Akun Pembayaran Lama";
$lang['StripePayments.text_accounts_remaining'] = "Akun Tersisa: %1\$s"; // Where %1$s is the number of accounts yet to be migrated
$lang['StripePayments.text_migrate_accounts'] = "Anda dapat secara otomatis memigrasikan akun pembayaran yang disimpan di luar situs oleh gerbang Stripe lama ke gerbang Pembayaran Stripe ini. Akun yang tidak disimpan di luar situs harus dimigrasikan dengan membuat akun pembayaran baru secara manual. Untuk mencegah timeout, migrasi akan dilakukan dalam batch %1\$s. Jalankan ini sebanyak yang diperlukan untuk memigrasikan semua akun pembayaran."; // Where %1$s is the batch size
$lang['StripePayments.warning_migrate_accounts'] = "Jangan hapus instalan gerbang Stripe lama sampai Anda selesai menggunakan alat migrasi ini. Melakukannya akan membuat alat tidak dapat diakses.";
$lang['StripePayments.migrate_accounts'] = "Migrasi Akun";
$lang['StripePayments.charge_description_default'] = "Biaya untuk jumlah yang ditentukan";
$lang['StripePayments.charge_description'] = "Tagihan untuk %1\$s"; // Where %1$s is a comma seperated list of invoice ID display codes
$lang['StripePayments.description'] = "Menggunakan Elemen Stripe dan API Permintaan Pembayaran untuk secara otomatis menangani 3D Secure dan SCA untuk mengirim kartu kredit langsung melalui Stripe";
?>