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
$lang['Cpanel.name'] = "cPanel";
$lang['Cpanel.module_row'] = "Server";
$lang['Cpanel.module_row_plural'] = "Server";
$lang['Cpanel.module_group'] = "Kelompok Server";
$lang['Cpanel.add_module_row'] = "Tambah Server";
$lang['Cpanel.add_module_group'] = "Tambahkan Server Group";
$lang['Cpanel.manage.module_rows_title'] = "Servers";
$lang['Cpanel.manage.module_groups_title'] = "Grup Server";
$lang['Cpanel.manage.module_rows_heading.name'] = "Label Server";
$lang['Cpanel.manage.module_rows_heading.hostname'] = "Nama host";
$lang['Cpanel.manage.module_rows_heading.accounts'] = "Akun";
$lang['Cpanel.manage.module_rows_heading.options'] = "Pilihan";
$lang['Cpanel.manage.module_groups_heading.name'] = "Nama Kelompok";
$lang['Cpanel.manage.module_groups_heading.servers'] = "Jumlah Server";
$lang['Cpanel.manage.module_groups_heading.options'] = "Pilihan";
$lang['Cpanel.manage.module_rows.count'] = "%1\$s / %2\$s"; // %1$s is the current number of accounts, %2$s is the total number of accounts available
$lang['Cpanel.manage.module_rows.edit'] = "Sunting";
$lang['Cpanel.manage.module_groups.edit'] = "Mengedit";
$lang['Cpanel.manage.module_rows.delete'] = "Menghapus";
$lang['Cpanel.manage.module_groups.delete'] = "Hapus";
$lang['Cpanel.manage.module_rows.confirm_delete'] = "Anda yakin ingin menghapus server ini?";
$lang['Cpanel.manage.module_groups.confirm_delete'] = "Apakah Anda yakin ingin menghapus grup server ini?";
$lang['Cpanel.package_fields.package'] = "Paket cPanel";
$lang['Cpanel.add_row.box_title'] = "Tambahkan cPanel Server";
$lang['Cpanel.add_row.basic_title'] = "Pengaturan Dasar";
$lang['Cpanel.add_row.name_servers_title'] = "Name Servers";
$lang['Cpanel.add_row.notes_title'] = "Catatan";
$lang['Cpanel.add_row.name_server_btn'] = "Tambahkan Nameserver Tambahan";
$lang['Cpanel.add_row.name_server_col'] = "Nama Server";
$lang['Cpanel.add_row.name_server_host_col'] = "Hostname";
$lang['Cpanel.add_row.name_server'] = "Name server %1\$s"; // %1$s is the name server number (e.g. 3)
$lang['Cpanel.add_row.remove_name_server'] = "Hapus";
$lang['Cpanel.add_row.add_btn'] = "Tambahkan server";
$lang['Cpanel.edit_row.box_title'] = "Mengedit cPanel Server";
$lang['Cpanel.edit_row.basic_title'] = "Pengaturan Dasar";
$lang['Cpanel.edit_row.name_servers_title'] = "Nama Server";
$lang['Cpanel.edit_row.notes_title'] = "Catatan";
$lang['Cpanel.edit_row.name_server_btn'] = "Tambahkan Nama Server tambahan";
$lang['Cpanel.edit_row.name_server_col'] = "Name Server";
$lang['Cpanel.edit_row.name_server_host_col'] = "Hostname";
$lang['Cpanel.edit_row.name_server'] = "Nama server %1\$s"; // %1$s is the name server number (e.g. 3)
$lang['Cpanel.edit_row.remove_name_server'] = "Hapus";
$lang['Cpanel.edit_row.add_btn'] = "Mengedit Server";
$lang['Cpanel.row_meta.server_name'] = "Label Server";
$lang['Cpanel.row_meta.host_name'] = "Nama host";
$lang['Cpanel.row_meta.user_name'] = "Nama pengguna";
$lang['Cpanel.row_meta.key'] = "Token (atau Kunci Jarak Jauh)";
$lang['Cpanel.row_meta.use_ssl'] = "Gunakan SSL saat menghubungkan ke API (dianjurkan)";
$lang['Cpanel.row_meta.account_limit'] = "Batas akun";
$lang['Cpanel.!error.server_name_valid'] = "Anda harus memasukkan Label Server.";
$lang['Cpanel.!error.host_name_valid'] = "Nama Host tampaknya tidak valid.";
$lang['Cpanel.!error.user_name_valid'] = "User Name tidak valid.";
$lang['Cpanel.!error.remote_key_valid'] = "Token (atau Remote Key) tampaknya tidak valid.";
$lang['Cpanel.!error.remote_key_valid_connection'] = "Sambungan ke server tidak dapat dibuat. Harap periksa untuk memastikan bahwa Nama Inang, Nama Pengguna, dan Token (atau Kunci Jarak Jauh) sudah benar.";
$lang['Cpanel.!error.account_limit_valid'] = "Limit / pembatasan akun harus dikosongkan (untuk akun unlimited) atau set ke beberapa nilai integer.";
$lang['Cpanel.!error.name_servers_count'] = "Anda harus menentukan setidaknya 2 server nama.";
$lang['Cpanel.tab_stats'] = "Statistik";
$lang['Cpanel.package_fields.type'] = "Jenis akun";
$lang['Cpanel.package_fields.type_standard'] = "Standar";
$lang['Cpanel.package_fields.type_reseller'] = "Reseller";
$lang['Cpanel.package_fields.acl'] = "Daftar Akses Control";
$lang['Cpanel.package_fields.acl_default'] = "Bawaan";
$lang['Cpanel.service_field.domain'] = "Domain";
$lang['Cpanel.service_field.username'] = "Username";
$lang['Cpanel.service_field.password'] = "Kata sandi";
$lang['Cpanel.tab_stats.info_title'] = "Informasi";
$lang['Cpanel.tab_stats.info_heading.field'] = "Bidang";
$lang['Cpanel.tab_stats.info_heading.value'] = "Nilai";
$lang['Cpanel.tab_stats.info.domain'] = "Domain";
$lang['Cpanel.tab_stats.info.ip'] = "Alamat IP";
$lang['Cpanel.tab_stats.bandwidth_title'] = "Bandwidth";
$lang['Cpanel.tab_stats.bandwidth_heading.used'] = "Digunakan";
$lang['Cpanel.tab_stats.bandwidth_heading.limit'] = "Membatasi";
$lang['Cpanel.tab_stats.bandwidth_value'] = "%1\$s MB"; // %1$s is the amount of bandwidth in MB
$lang['Cpanel.tab_stats.bandwidth_unlimited'] = "tak terbatas";
$lang['Cpanel.tab_stats.disk_title'] = "Disk";
$lang['Cpanel.tab_stats.disk_heading.used'] = "Digunakan";
$lang['Cpanel.tab_stats.disk_heading.limit'] = "Membatasi";
$lang['Cpanel.tab_stats.disk_value'] = "%1\$s MB"; // %1$s is the amount of disk in MB
$lang['Cpanel.tab_stats.disk_unlimited'] = "tak terbatas";
$lang['Cpanel.service_info.username'] = "Nama pengguna";
$lang['Cpanel.service_info.password'] = "Kata Sandi";
$lang['Cpanel.service_info.server'] = "Server";
$lang['Cpanel.service_info.options'] = "Pilihan";
$lang['Cpanel.service_info.option_login'] = "Masuk";
$lang['Cpanel.!error.meta[type].valid'] = "Jenis akun harus standar atau reseller.";
$lang['Cpanel.!error.meta[package].empty'] = "Paket cPanel diperlukan.";
$lang['Cpanel.!error.api.internal'] = "Terjadi kesalahan internal, atau server tidak menanggapi permintaan.";
$lang['Cpanel.tab_client_stats'] = "Statistika";
$lang['Cpanel.manage.module_rows_no_results'] = "Tidak ada server.";
$lang['Cpanel.manage.module_groups_no_results'] = "Tidak ada grup server.";
$lang['Cpanel.service_field.confirm_password'] = "setujui password";
$lang['Cpanel.tab_client_stats.info_title'] = "Informasi";
$lang['Cpanel.tab_client_stats.info_heading.field'] = "Bidang";
$lang['Cpanel.tab_client_stats.info_heading.value'] = "Nilai";
$lang['Cpanel.tab_client_stats.info.domain'] = "Domain";
$lang['Cpanel.tab_client_stats.info.ip'] = "Alamat IP";
$lang['Cpanel.!error.name_servers_valid'] = "Satu atau beberapa server nama yang dimasukkan tidak valid.";
$lang['Cpanel.!error.cpanel_domain.format'] = "Harap masukkan nama domain yang valid, mis. domain.com.";
$lang['Cpanel.!error.cpanel_username.format'] = "Nama pengguna hanya boleh berisi huruf dan angka dan tidak boleh dimulai dengan angka.";
$lang['Cpanel.!error.cpanel_username.test'] = "Nama pengguna tidak boleh dimulai dengan 'test'.";
$lang['Cpanel.!error.cpanel_username.length'] = "Nama pengguna harus antara 1 dan 16 karakter.";
$lang['Cpanel.!error.cpanel_password.valid'] = "Sandi harus minimal 8 karakter.";
$lang['Cpanel.!error.cpanel_password.matches'] = "Password dan konfirmasi Password tidak cocok.";
$lang['Cpanel.service_field.tooltip.username'] = "Anda dapat meninggalkan username kosong dan secara otomatis akan dibuatkan.";
$lang['Cpanel.service_field.tooltip.password'] = "Anda dapat membiarkan kata sandi kosong untuk membuatnya secara otomatis.";
$lang['Cpanel.!error.module_row.missing'] = "Terjadi kesalahan internal. Modul baris tidak tersedia.";
$lang['Cpanel.tab_client_stats.usage'] = "(%1\$s MB/%2\$s MB)"; // %1$s is the amount of resource usage, %2$s is the resource usage limit
$lang['Cpanel.tab_client_actions'] = "tindakan";
$lang['Cpanel.tab_client_actions.change_password'] = "Ganti kata sandi";
$lang['Cpanel.tab_client_actions.field_cpanel_password'] = "Kata sandi";
$lang['Cpanel.tab_client_actions.field_cpanel_confirm_password'] = "setujui password";
$lang['Cpanel.tab_client_actions.field_password_submit'] = "Update Password";
$lang['Cpanel.tab_client_stats.bandwidth_title'] = "Penggunaan Bandwidth (Bulan Sampai Tanggal)";
$lang['Cpanel.tab_client_stats.disk_title'] = "Pemakaian Disk";
$lang['Cpanel.tab_client_stats.usage_unlimited'] = "(%1\$s MB/∞)"; // %1$s is the amount of resource usage
$lang['Cpanel.order_options.roundrobin'] = "Distribusikan Secara Merata Antar Server";
$lang['Cpanel.order_options.first'] = "Server Tidak Penuh Pertama";
$lang['Cpanel.manage.module_rows.count_server_group'] = "%1\$s / %2\$s (%3\$s Tersedia)"; // %1$s is the current number of accounts, %2$s is the total number of accounts available, %3$s is the total number of accounts available without over-subscription
$lang['Cpanel.package_fields.account_limit'] = "Batas Akun";
$lang['Cpanel.package_fields.dedicated_ip'] = "IP Khusus";
$lang['Cpanel.package_fields.sub_domains'] = "Aktifkan Penjualan Sub-Domain";
$lang['Cpanel.package_fields.sub_domains_enable'] = "Memungkinkan";
$lang['Cpanel.package_fields.sub_domains_disable'] = "Nonaktifkan";
$lang['Cpanel.package_fields.domains_list'] = "Daftar Domain yang Tersedia";
$lang['Cpanel.package_fields.dedicated_ip_no'] = "Tidak";
$lang['Cpanel.package_fields.dedicated_ip_yes'] = "Ya";
$lang['Cpanel.service_field.sub_domain'] = "Sub-Domain";
$lang['Cpanel.package_fields.tooltip.domains_list'] = "Masukkan daftar CSV domain yang akan tersedia untuk penyediaan sub-domain, mis. \"domain1.com,domain2.com,domain3.com\"";
$lang['Cpanel.!error.meta[sub_domains].valid'] = "Aktifkan Sub-Domain harus disetel untuk mengaktifkan atau menonaktifkan.";
$lang['Cpanel.!error.meta[domains_list].valid'] = "Setidaknya satu domain yang tersedia harus disetel dan semuanya harus mewakili nama host yang valid.";
$lang['Cpanel.!error.meta[account_limit].valid'] = "Batas akun harus berupa angka.";
$lang['Cpanel.!error.meta[dedicated_ip].format'] = "IP khusus harus disetel ke 0 atau 1.";
$lang['Cpanel.!error.cpanel_domain.valid'] = "Nama domain tidak valid.";
$lang['Cpanel.!error.cpanel_sub_domain.format'] = "Harap masukkan nama sub-domain yang valid, mis. \"lokasi\".";
$lang['Cpanel.!error.cpanel_sub_domain.availability'] = "Subdomain yang disediakan tidak tersedia.";
$lang['Cpanel.!error.configoptions[dedicated_ip].format'] = "IP khusus harus disetel ke 0 atau 1.";
$lang['Cpanel.description'] = "cPanel & WHM telah menjadi platform web hosting terkemuka di industri selama lebih dari 20 tahun. Dipercaya di seluruh dunia oleh mitra teknologi Wordpress, CloudLinux, Lightstpeed, dan banyak lagi.";
?>