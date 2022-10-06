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
$lang['ClientAccounts.!success.defaultaccount_updated'] = "Akun pembayaran default telah diperbarui.";
$lang['ClientAccounts.!success.defaultaccount_deleted'] = " rekening pembayaran default telah dihapus.";
$lang['ClientAccounts.!success.account_created'] = "Akun pembayaran telah berhasil dibuat.";
$lang['ClientAccounts.!success.ccaccount_deleted'] = "Akun pembayaran telah berhasil dihapus.";
$lang['ClientAccounts.!success.ccaccount_updated'] = "Akun pembayaran telah berhasil diperbarui.";
$lang['ClientAccounts.!success.achaccount_deleted'] = "Akun pembayaran telah berhasil dihapus.";
$lang['ClientAccounts.!success.achaccount_updated'] = "Akun pembayaran berhasil diperbaharui";
$lang['ClientAccounts.!error.account_invalid'] = "Jenis rekening pembayaran yang tersedia dinonaktifkan atau tidak valid.";
$lang['ClientAccounts.!error.payment_account_type_invalid'] = "Jenis rekening pembayaran tidak valid.";
$lang['ClientAccounts.!notice.disabled'] = "Kemampuan untuk menambahkan account pembayaran saat ini dinonaktifkan.";
$lang['ClientAccounts.!notice.ach_disabled'] = "Rekening pembayaran ACH sedang dinonaktifkan dan tidak dapat diperbarui.";
$lang['ClientAccounts.!notice.cc_disabled'] = "rekening pembayaran kartu kredit saat ini dinonaktifkan dan tidak dapat diperbarui.";
$lang['ClientAccounts.!notice.reenable_autodebit'] = "Pembayaran otomatis telah secara khusus dinonaktifkan untuk akun ini, silakan menghubungi anggota staf untuk mengaktifkan. Anda dapat memilih account pembayaran sebagai default, tetapi tidak akan dikenakan biaya secara otomatis sampai telah diaktifkan kembali oleh staf.";
$lang['ClientAccounts.!info.account_info'] = "Rekening pembayaran memungkinkan Anda untuk menyimpan informasi pembayaran pada file dan dapat digunakan untuk membayar tagihan. Sebuah rekening pembayaran yang dipilih sebagai account default akan digunakan untuk pembayaran berulang otomatis.";
$lang['ClientAccounts.index.page_title'] = "Akun Klien #%1\$s"; // %1$s is the client ID number
$lang['ClientAccounts.index.create_account'] = "Tambahkan Akun Pembayaran";
$lang['ClientAccounts.index.boxtitle_accounts'] = "Akun Pembayaran";
$lang['ClientAccounts.index.heading_name'] = "Nama";
$lang['ClientAccounts.index.heading_type'] = "Tipe";
$lang['ClientAccounts.index.heading_last4'] = "Terakhir 4";
$lang['ClientAccounts.index.heading_options'] = "Pilihan";
$lang['ClientAccounts.index.option_edit'] = "Sunting";
$lang['ClientAccounts.index.option_delete'] = "Hapus";
$lang['ClientAccounts.index.type_cc'] = "%1\$s - %2\$s"; // %1$s is the account type (Credit Card) and %2$s is the type of account (MasterCard, Visa, etc.)
$lang['ClientAccounts.index.type_ach'] = "%1\$s - %2\$s"; // %1$s is the account type (ACH) and %2$s is the type of account (Checking or Savings)
$lang['ClientAccounts.index.confirm_delete'] = "Yakin ingin menghapus akun pembayaran ini?";
$lang['ClientAccounts.index.field_accountsubmit'] = "Set sebagai Akun Pembayaran Standar";
$lang['ClientAccounts.index.no_results'] = "Anda tidak memiliki akun pembayaran.";
$lang['ClientAccounts.add.page_title'] = "Klien #%1\$s Tambahkan Akun Pembayaran"; // %1$s is the client ID number
$lang['ClientAccounts.add.heading_account_type'] = "Jenis akun";
$lang['ClientAccounts.add.field_cc_type'] = "Kartu kredit";
$lang['ClientAccounts.add.field_ach_type'] = "ACH";
$lang['ClientAccounts.add.boxtitle_create'] = "Tambahkan akun Pembayaran";
$lang['ClientAccounts.add.field_nextsubmit'] = "Terus";
$lang['ClientAccounts.add.field_accountsubmit'] = "Buat Akun";
$lang['ClientAccounts.editach.page_title'] = "Klien #{var1) Ubah Akun ACH"; // %1$s is the client ID number
$lang['ClientAccounts.editach.boxtitle_editach'] = "mengedit akun ACH";
$lang['ClientAccounts.editach.field_accountsubmit'] = "Mengedit akun";
$lang['ClientAccounts.editcc.page_title'] = "Pelanggan #%1\$s Merubah Akun Kartu Kredit"; // %1$s is the client ID number
$lang['ClientAccounts.editcc.boxtitle_editcc'] = "Edit Akun Kartu Kredit";
$lang['ClientAccounts.editcc.field_accountsubmit'] = "Mengedit akun";
$lang['ClientAccounts.setcontactview.text_none'] = "Tidak ada";
$lang['ClientAccounts.cc_info.heading_cc'] = "Informasi Kartu Kredit";
$lang['ClientAccounts.cc_info.field_number'] = "Jumlah";
$lang['ClientAccounts.cc_info.field_security'] = "Kode Keamanan";
$lang['ClientAccounts.cc_info.field_expiration'] = "Tanggal Kedaluwarsa";
$lang['ClientAccounts.cc_info.field_savedetails'] = "Simpan Akun";
$lang['ClientAccounts.cc_info.tooltip_code'] = "Kode keamanan 3 atau 4 digit, biasanya terdapat di bagian belakang kartu.";
$lang['ClientAccounts.ach_info.heading_ach'] = "Informasi Rekening Bank";
$lang['ClientAccounts.ach_info.field_type'] = "Jenis";
$lang['ClientAccounts.ach_info.field_accountnum'] = "Nomor akun";
$lang['ClientAccounts.ach_info.field_routingnum'] = "Nomor Routing";
$lang['ClientAccounts.ach_info.field_savedetails'] = "Simpan Akun";
$lang['ClientAccounts.!info.no_accounts'] = "Anda saat ini tidak memiliki rekening pembayaran. Tambahkan akun pembayaran pertama Anda di bawah ini.";
$lang['ClientAccounts.navigation.nav_dashboard'] = "Dasbor";
$lang['ClientAccounts.navigation.nav_paymentaccounts'] = "Akun Pembayaran";
$lang['ClientAccounts.navigation.nav_paymentaccounts_add'] = "Tambahkan Akun Pembayaran";
$lang['ClientAccounts.navigation.nav_return'] = "Kembali ke Dasbor";
?>
