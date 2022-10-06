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
$lang['AdminSystemBackup.!success.backup_updated'] = "Pengaturan Backup berhasil diperbarui!";
$lang['AdminSystemBackup.!success.sftp_test'] = "Koneksi SFTP berhasil!";
$lang['AdminSystemBackup.!success.amazons3_test'] = "Koneksi AmazonS3 berhasil!";
$lang['AdminSystemBackup.!success.backup_uploaded'] = "Backup tersebut berhasil dikirim ke layanan remote yang dikonfigurasi !";
$lang['AdminSystemBackup.!error.sftp_test'] = "Sambungan SFTP gagal! Harap periksa setelan Anda dan coba lagi.";
$lang['AdminSystemBackup.!error.amazons3_test'] = "Koneksi AmazonS3 gagal! Harap periksa setelan Anda dan coba lagi. Perhatikan bahwa detail koneksi peka huruf besar-kecil.";
$lang['AdminSystemBackup.ftp.boxtitle_backup'] = "Secure FTP";
$lang['AdminSystemBackup.index.field_uploadbackup'] = "Paksa Pencadangan di Luar Situs";
$lang['AdminSystemBackup.!error.backup_frequency'] = "Frekuensi pencadangan tidak valid.";
$lang['AdminSystemBackup.ftp.page_title'] = "Pengaturan > Sistem> Backup>  SFTP";
$lang['AdminSystemBackup.amazon.page_title'] = "Pengaturan > Sistem > Cadangan > Amazon S3";
$lang['AdminSystemBackup.amazon.boxtitle_backup'] = "Amazon S3";
$lang['AdminSystemBackup.index.page_title'] = "Settings > System > Backup > On Demand";
$lang['AdminSystemBackup.index.boxtitle_index'] = "Sesuai Permintaan";
$lang['AdminSystemBackup.index.field_downloadbackup'] = "Unduh Cadangan";
$lang['AdminSystemBackup.index.text_note'] = "Di sini Anda dapat mengunduh cadangan database Blesta ke komputer Anda atau secara otomatis mengunggah cadangan ke SFTP dan/atau server Amazon S3 Anda yang dikonfigurasi.";
$lang['AdminSystemBackup.!tooltip.ftp_host'] = "Nama domain server cadangan yang sepenuhnya memenuhi syarat (mis. \"backup.domain.com\").";
$lang['AdminSystemBackup.!tooltip.ftp_port'] = "Nomor port, biasanya 22. Ini adalah nomor port yang sama dengan yang digunakan untuk SSH.";
$lang['AdminSystemBackup.!tooltip.ftp_username'] = "Nama pengguna untuk akun FTP.";
$lang['AdminSystemBackup.!tooltip.ftp_password'] = "Kata sandi untuk akun FTP.";
$lang['AdminSystemBackup.!tooltip.ftp_path'] = "Jalur tujuan tempat cadangan harus disimpan di server jauh (mis. \"/ backup/\").";
$lang['AdminSystemBackup.!tooltip.ftp_rate'] = "Interval frekuensi untuk melakukan pencadangan ini.";
$lang['AdminSystemBackup.!tooltip.amazons3_region'] = "Wilayah Amazon S3 tempat menyimpan cadangan.";
$lang['AdminSystemBackup.!tooltip.amazons3_access_key'] = "Kunci Akses akun Amazon S3.";
$lang['AdminSystemBackup.!tooltip.amazons3_secret_key'] = "Kunci Rahasia akun Amazon S3.";
$lang['AdminSystemBackup.!tooltip.amazons3_bucket'] = "Nama bucket Amazon S3 yang peka huruf besar-kecil untuk menyimpan cadangan.";
$lang['AdminSystemBackup.!tooltip.amazons3_rate'] = "Interval frekuensi untuk melakukan pencadangan ini.";
$lang['AdminSystemBackup.ftp.field.test'] = "Uji Pengaturan Ini";
$lang['AdminSystemBackup.ftp.field.ftp_host'] = "Nama host";
$lang['AdminSystemBackup.ftp.field.ftp_port'] = "Port";
$lang['AdminSystemBackup.ftp.field.ftp_username'] = "Nama pengguna";
$lang['AdminSystemBackup.ftp.field.ftp_password'] = "Kata sandi";
$lang['AdminSystemBackup.ftp.field.ftp_path'] = "Path";
$lang['AdminSystemBackup.ftp.field.ftp_rate'] = "Cadangkan Setiap";
$lang['AdminSystemBackup.ftp.field.backupsubmit'] = "Perbarui Pengaturan";
$lang['AdminSystemBackup.amazon.field.test'] = "Uji Pengaturan Ini";
$lang['AdminSystemBackup.amazon.field.amazons3_region'] = "Wilayah";
$lang['AdminSystemBackup.amazon.field.amazons3_accesskey'] = "Kunci akses";
$lang['AdminSystemBackup.amazon.field.amazons3_secretkey'] = "Kunci rahasia";
$lang['AdminSystemBackup.amazon.field.amazons3_bucket'] = "Ember";
$lang['AdminSystemBackup.amazon.field.amazons3_rate'] = "Cadangkan Setiap";
$lang['AdminSystemBackup.amazon.field.backupsubmit'] = "Perbarui Pengaturan";
?>