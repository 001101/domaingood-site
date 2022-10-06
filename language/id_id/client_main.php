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
$lang['ClientMain.!success.client_updated'] = "Informasi akun Anda telah berhasil diperbarui.";
$lang['ClientMain.!success.invoice_method_updated'] = "Model faktur telah berhasil diperbarui. Semua faktur kedepannya akan dikirimkan kepada Anda melalui %1\$s."; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)
$lang['ClientMain.!info.invoice_due_title'] = "Selamat datang kembali, %1\$s!"; // %1$s is the client's first name
$lang['ClientMain.!info.invoice_due_button'] = "Lakukan Pembayaran";
$lang['ClientMain.!info.invoice_due_text'] = "Account Anda memiliki saldo %1\$s. Silakan melakukan pembayaran dengan kenyamanan Anda."; // %1$s is the total amount due for this client
$lang['ClientMain.!info.invoice_due_other_currencies'] = "Anda  juga memiliki saldo dalam mata uang lain";
$lang['ClientMain.myinfo.setting_invoices'] = "Anda sedang menerima faktur oleh %1\$s."; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)
$lang['ClientMain.myinfo.setting_autodebit_disabled'] = "Akun Anda tidak disiapkan untuk pembayaran otomatis.";
$lang['ClientMain.myinfo.setting_autodebit_enabled'] = "Akun Anda disiapkan untuk pembayaran otomatis.";
$lang['ClientMain.myinfo.setting_autodebit_cc_zero_days'] = "Kami akan menagih %1\$s Anda yang berakhiran x%2\$s karena ada pembayaran jatuh tempo hari ini "; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number
$lang['ClientMain.myinfo.setting_autodebit_ach_zero_days'] = "Kami akan menagih %1\$s Rekening Anda yang berakhir di x%2\$s pada pembayaran yang jatuh tempo hari ini"; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number
$lang['ClientMain.myinfo.setting_autodebit_cc_one_day'] = "Kami akan menagih %1\$s Anda yang diakhiri dengan x%2\$s sehari sebelum jatuh tempo pembayaran."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number
$lang['ClientMain.myinfo.setting_autodebit_ach_one_day'] = "Kami akan menagih %1\$s Rekening Anda Yang berakhir di x%2\$s hari sebelum jatuh tempo pembayaran."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number
$lang['ClientMain.myinfo.setting_autodebit_cc_days'] = "Kami akan menagih %1\$s Anda yang berakhiran x%2\$s, %3\$s hari sebelum jatuh tempo pembayaran."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged
$lang['ClientMain.myinfo.setting_autodebit_ach_days'] = "Kami akan menagih %1\$s Anda Rekening berakhir di x%2\$s %3\$s hari sebelum jatuh tempo pembayaran."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged
$lang['ClientMain.myinfo.setting_change'] = "ubah ini?";
$lang['ClientMain.myinfo.link_editclient'] = "Ganti";
$lang['ClientMain.edit.boxtitle_edit'] = "Edit Informasi Saya ";
$lang['ClientMain.edit.heading_billing'] = "Informasi Tagihan";
$lang['ClientMain.edit.field_taxid'] = "NPWP / vatin";
$lang['ClientMain.edit.field_default_currency'] = "Mata uang yang disukai";
$lang['ClientMain.edit.field_invoiceaddress'] = "Alamat Faktur Untuk";
$lang['ClientMain.edit.heading_settings'] = "Pengaturan Tambahan";
$lang['ClientMain.edit.field_language'] = "Bahasa";
$lang['ClientMain.edit.field_username'] = "Username";
$lang['ClientMain.edit.field_new_password'] = "Password Baru";
$lang['ClientMain.edit.field_confirm_password'] = "setujui password";
$lang['ClientMain.edit.field_current_password'] = "Kata Sandi Saat Ini";
$lang['ClientMain.edit.field_editsubmit'] = "Memperbarui informasi saya";
$lang['ClientMain.invoicemethod.boxtitle_inv_method'] = "Metode faktur";
$lang['Clientmain.invoicemethod.field_methodsubmit'] = "Memperbarui";
$lang['ClientMain.!tooltip.invoice_method_email'] = "Faktur akan dikirim melalui email ke alamat yang kami miliki di file.";
$lang['ClientMain.!tooltip.invoice_method_paper'] = "Kami akan mencetak dan mengirim surat faktur ke alamat yang kami miliki di file.";
$lang['ClientMain.!tooltip.invoice_method_interfax'] = "Kami akan secara otomatis mengirim faks faktur ke nomor faks yang kami simpan. Jika memilih opsi ini, pastikan sudah memiliki nomor faks yang valid pada file.";
$lang['ClientMain.!tooltip.invoice_method_postalmethods'] = "Kami akan secara otomatis mencetak dan kirim faktur ke alamat yang tercatat di billing";
$lang['ClientMain.invoicemethod.text_invoice_method'] = "Metode faktur Anda adalah metode yang kami kirimkan faktur baru kepada Anda.";
$lang['ClientMain.getcurrencyamounts.text_total_credits'] = "Kredit:";
$lang['ClientMain.edit.heading_contact'] = "informasi Kontak";
$lang['ClientMain.edit.heading_authentication'] = "Autentikasi";
$lang['ClientMain.edit.field_two_factor_mode'] = "Aktifkan Otentikasi Dua Faktor";
$lang['ClientMain.edit.two_factor_desc'] = "Two-Factor Authentication atau otentikasi dua kali adalah fitur keamanan di mana Anda memberikan dua alat identifikasi untuk login ke akun Anda. Jika diaktifkan, Anda akan login ke account Anda dengan username dan password Anda dan kemudian akan diminta untuk memasukkan Password sekali pakai";
$lang['ClientMain.edit.two_factor_instructions'] = "Untuk menggunakan Dua-Factor Authentication, Anda memerlukan token TOTP. Jika Anda memiliki perangkat mobile Android, iOS, atau Windows, telepon Anda dapat bertindak sebagai token Anda dan memberikan One-Time Password yang diperlukan.";
$lang['ClientMain.edit.two_factor_step1'] = "Men-download Authenticator untuk perangkat Anda:";
$lang['ClientMain.edit.two_factor_step2'] = "Buka App, dan pindai kode QR di bawah, atau alternatif, masukkan kunci beriku t: %1\$s"; // %1$s is the key
$lang['ClientMain.edit.two_factor_step3'] = "Konfirmasi Kata Sandi Sekali Pakai Anda, lalu klik \"Perbarui Informasi Saya\". Anda akan diminta untuk memasukkan Kata Sandi Satu Kali Anda saat berikutnya Anda masuk.";
$lang['ClientMain.edit.text_android'] = "Android";
$lang['ClientMain.edit.text_ios'] = "iOS";
$lang['ClientMain.edit.text_windows'] = "Jendela";
$lang['ClientMain.edit.field_otp'] = "Password Satu-waktu";
$lang['ClientMain.index.page_title'] = "Klien #%1\$s"; // %1$s is the client ID number
$lang['ClientMain.myinfo.page_title'] = "Klien #%1\$s"; // %1$s is the client ID number
$lang['ClientMain.edit.page_title'] = "Klien #%1\$s Mengedit Informasi"; // %1$s is the client ID number
$lang['ClientMain.invoicemethod.page_title'] = "Metode Faktur #%1\$s Klien"; // %1$s is the client ID number
$lang['ClientMain.!info.invoice_past_due_button'] = "Jatuh tempo";
$lang['ClientMain.!info.invoice_due_past_due_text'] = "Akun Anda memiliki saldo terutang sebesar %1\$s, di mana %2\$s telah lewat jatuh tempo. Harap lakukan pembayaran sesegera mungkin."; // %1$s is the total amount due for this client, %2$s is the total amount past due for this client
$lang['ClientMain.myinfo.client_id'] = "Klien #%1\$s"; // %1$s is the client ID number
$lang['ClientMain.!info.service_in_review'] = "Layanan berikut menunggu tinjauan oleh staf. Setelah disetujui, mereka akan diaktifkan:";
$lang['ClientMain.!info.service_name'] = "%1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name
$lang['ClientMain.!info.additional_service'] = "...dan 1 layanan tambahan.";
$lang['ClientMain.!info.additional_services'] = "...dan %1\$s layanan tambahan."; // %1$s is the number of additional services
$lang['ClientMain.edit.field_receive_email_marketing'] = "Saya ingin menerima email tentang produk, layanan, dan penawaran baru.";
$lang['ClientMain.myinfo.number'] = "(%1\$s %2\$s)"; // %1$s is the number location, %2$s is the number type
$lang['ClientMain.!info.email_pending_verification'] = "Alamat email Anda saat ini belum diverifikasi. Email verifikasi telah dikirim ke %1\$s."; // %1$s is the email address to be verified
$lang['ClientMain.!info.email_pending_verification_button'] = "Mengirim ulang email verifikasi";
$lang['ClientMain.!info.no_contacts'] = "Tidak ada kontak tambahan.";
$lang['ClientMain.myinfo.contacts'] = "Kontak";
$lang['ClientMain.myinfo.link_addcontact'] = "Tambah kontak";
?>
