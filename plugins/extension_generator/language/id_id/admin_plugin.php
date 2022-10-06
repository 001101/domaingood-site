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

$lang['AdminPlugin.getactionlocations.nav_primary_client'] = "Nav Utama (Klien)";
$lang['AdminPlugin.getactionlocations.nav_primary_staff'] = "Nav Utama (Staf)";
$lang['AdminPlugin.getactionlocations.nav_secondary_staff'] = "Sub-Menu Nav (Staf)";
$lang['AdminPlugin.getactionlocations.action_staff_client'] = "Bilah Sisi Profil Klien (Staf)";
$lang['AdminPlugin.getactionlocations.widget_staff_home'] = "Widget - Dasbor (Staf)";
$lang['AdminPlugin.getactionlocations.widget_client_home'] = "Widget - Profil Klien (Klien)";
$lang['AdminPlugin.getactionlocations.widget_staff_client'] = "Widget - Profil Klien (Staf)";
$lang['AdminPlugin.getactionlocations.widget_staff_billing'] = "Widget - Ikhtisar Penagihan (Staf)";
$lang['AdminPlugin.getcardlevels.client'] = "Klien";
$lang['AdminPlugin.getcardlevels.staff'] = "Staf";
$lang['AdminPlugin.getoptionalfunctions.tooltip_upgrade'] = "Melakukan migrasi data dari \$current_version (versi terinstal saat ini) ke versi kumpulan file yang diberikan. Menyetel kesalahan Input pada kegagalan, mencegah modul agar tidak ditingkatkan.";
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissions'] = "Mengembalikan semua izin yang akan dikonfigurasi untuk plugin ini (dipanggil setelah install(), upgrade(), dan uninstall(), menimpa semua izin yang ada)";
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissionGroups'] = "Mengembalikan semua grup izin yang akan dikonfigurasi untuk plugin ini (dipanggil setelah install(), upgrade(), dan uninstall(), menimpa semua grup izin yang ada)";
$lang['AdminPlugin.index.page_title'] = "Generator Ekstensi - %1\$s"; // %1$s is the plugin name
$lang['AdminPlugin.index.boxtitle_extension_generator'] = "Generator Ekstensi - Plugin";
$lang['AdminPlugin.basic.heading_basic'] = "Informasi dasar";
$lang['AdminPlugin.basic.heading_authors'] = "Penulis";
$lang['AdminPlugin.basic.description'] = "Deskripsi";
$lang['AdminPlugin.basic.logo'] = "Logo";
$lang['AdminPlugin.basic.author_name'] = "Nama Penulis";
$lang['AdminPlugin.basic.author_url'] = "URL penulis";
$lang['AdminPlugin.basic.text_options'] = "Pilihan";
$lang['AdminPlugin.basic.author_row_add'] = "Tambahkan Penulis";
$lang['AdminPlugin.basic.text_remove'] = "Hapus";
$lang['AdminPlugin.basic.tooltip_description'] = "Deskripsi yang ditampilkan dalam daftar plugin";
$lang['AdminPlugin.basic.tooltip_logo'] = "Logo ditampilkan dalam daftar plugin. Gambar tidak diubah ukurannya, jadi dimensi idealnya adalah 150x70";
$lang['AdminPlugin.basic.placeholder_author_name'] = "e.g. Blesta";
$lang['AdminPlugin.basic.placeholder_author_url'] = "mis.https://blesta.com/";
$lang['AdminPlugin.basic.database'] = "Berikutnya - Info Basis Data";
$lang['AdminPlugin.basic.confirm'] = "Selanjutnya - Konfirmasi";
$lang['AdminPlugin.database.heading_database'] = "Tabel Database";
$lang['AdminPlugin.database.heading_more_info'] = "Info lebih lanjut";
$lang['AdminPlugin.database.table_row_add'] = "Tambahkan Tabel Database";
$lang['AdminPlugin.database.column_row_add'] = "Tambahkan Kolom";
$lang['AdminPlugin.database.table_name'] = "Nama Tabel";
$lang['AdminPlugin.database.tooltip_table_name'] = "Nama tabel dalam database (mis. extension_table_name)";
$lang['AdminPlugin.database.placeholder_table_name'] = "contoh. extention_table_name";
$lang['AdminPlugin.database.column_name'] = "Nama kolom";
$lang['AdminPlugin.database.type'] = "Jenis";
$lang['AdminPlugin.database.length'] = "Panjang/Nilai";
$lang['AdminPlugin.database.default'] = "Bawaan";
$lang['AdminPlugin.database.nullable'] = "Tidak dapat dibatalkan";
$lang['AdminPlugin.database.primary'] = "Kunci utama";
$lang['AdminPlugin.database.tooltip_column_name'] = "Nama kolom dalam database (misalnya nama_kolom).";
$lang['AdminPlugin.database.tooltip_type'] = "Jenis kolom dalam database.";
$lang['AdminPlugin.database.tooltip_length'] = "Mengatur jumlah maksimal karakter dalam sebuah bidang. Jika tipe kolom adalah \"enum\", masukkan nilai menggunakan format ini: 'a','b','c'...";
$lang['AdminPlugin.database.tooltip_default'] = "Nilai default yang akan disisipkan untuk kolom ini. Bidang Nullable dengan default kosong akan default ke NULL.";
$lang['AdminPlugin.database.tooltip_nullable'] = "Apakah akan mengizinkan nilai nol untuk kolom ini atau tidak.";
$lang['AdminPlugin.database.tooltip_primary'] = "Menandai kolom ini sebagai kunci utama untuk kolom tersebut. Kunci komposit saat ini tidak didukung. Jika Anda ingin memiliki kunci komposit atau tanpa kunci utama, lihat metode install() dari file ***_plugin.php yang dihasilkan.";
$lang['AdminPlugin.database.placeholder_column_name'] = "e.g. column_name";
$lang['AdminPlugin.database.placeholder_length'] = "e.g. 64 or 'a','b','c'";
$lang['AdminPlugin.database.text_more_info'] = "Halaman ini digunakan untuk membuat skema untuk tabel database yang dihasilkan dan dikelola oleh plugin ini. Kode akan dibuat untuk menambahkan dan menghapus tabel ini saat menginstal dan menghapus. Selain itu, file model akan dibuat untuk tabel ini dengan beberapa fungsi dasar.";
$lang['AdminPlugin.database.text_options'] = "Pilihan";
$lang['AdminPlugin.database.text_remove'] = "Menghapus";
$lang['AdminPlugin.database.integrations'] = "Berikutnya - Integrasi Inti";
$lang['AdminPlugin.integrations.action_row_add'] = "Tambahkan Tindakan";
$lang['AdminPlugin.integrations.event_row_add'] = "Tambahkan Penangan Acara";
$lang['AdminPlugin.integrations.card_row_add'] = "Tambahkan Kartu Klien";
$lang['AdminPlugin.integrations.heading_actions'] = "Tindakan";
$lang['AdminPlugin.integrations.heading_events'] = "Penangan Acara";
$lang['AdminPlugin.integrations.heading_cards'] = "Kartu Klien";
$lang['AdminPlugin.integrations.heading_more_info'] = "Info lebih lanjut";
$lang['AdminPlugin.integrations.location'] = "Lokasi";
$lang['AdminPlugin.integrations.controller'] = "Pengontrol";
$lang['AdminPlugin.integrations.action'] = "Tindakan";
$lang['AdminPlugin.integrations.name'] = "Nama";
$lang['AdminPlugin.integrations.event'] = "Peristiwa";
$lang['AdminPlugin.integrations.event_callback'] = "Metode Panggilan Balik";
$lang['AdminPlugin.integrations.label'] = "Label";
$lang['AdminPlugin.integrations.level'] = "Tingkat";
$lang['AdminPlugin.integrations.card_callback'] = "Metode Panggilan Balik";
$lang['AdminPlugin.integrations.link'] = "Tautan";
$lang['AdminPlugin.integrations.text_actions_more_info'] = "\"Tindakan\" mewakili halaman plugin yang dapat diakses melalui antarmuka inti. Ini termasuk tautan navigasi di area admin dan klien, widget di area admin, dan tautan di bilah sisi profil klien. Kontroler dan tindakan yang dimasukkan di sini akan digunakan untuk menghasilkan file pengontrol sederhana. Selain itu, file tampilan sampel akan dibuat untuk setiap tindakan.";
$lang['AdminPlugin.integrations.text_events_more_info'] = "Ini adalah sistem pengait di Blesta. Acara didaftarkan baik oleh inti atau oleh plugin, kemudian plugin mendengarkan acara ini dan menentukan metode penangan untuk acara tersebut. Karena plugin apa pun dapat mendaftarkan acara, jumlahnya bisa berapa saja, namun daftar acara inti yang ditentukan oleh blesta dapat ditemukan di sini https://docs.blesta.com/display/dev/Event+Handlers.";
$lang['AdminPlugin.integrations.text_cards_more_info'] = "Kartu klien adalah kotak kecil yang ditampilkan pada profil klien (di area klien atau admin) dan terutama digunakan untuk menampilkan berbagai statistik (misalnya jumlah layanan, tiket, atau pesanan). Mereka terdiri dari nilai, label, latar belakang, dan tautan. Label ditampilkan di bawah nilai yang ditarik dari fungsi panggilan balik.";
$lang['AdminPlugin.integrations.text_options'] = "Pilihan";
$lang['AdminPlugin.integrations.text_remove'] = "Menghapus";
$lang['AdminPlugin.integrations.tooltip_location'] = "Lokasi di antarmuka untuk menampilkan aksi";
$lang['AdminPlugin.integrations.tooltip_controller'] = "Pengontrol untuk URI tempat menarik konten untuk tindakan (mis. admin_main)";
$lang['AdminPlugin.integrations.tooltip_action'] = "Tindakan untuk URI tempat menarik konten untuk tindakan (mis. indeks)";
$lang['AdminPlugin.integrations.tooltip_name'] = "Nama tampilan tindakan ini (teks navigasi, tajuk widget, atau teks tautan bergantung pada lokasi tindakan)";
$lang['AdminPlugin.integrations.tooltip_event'] = "Acara yang akan ditambahkan penangan (mis. Clients.add). Untuk daftar acara inti yang didaftarkan oleh blesta, lihat https://docs.blesta.com/display/dev/Event+Handlers";
$lang['AdminPlugin.integrations.tooltip_event_callback'] = "Nama metode event handler yang akan dibuat di kelas plugin utama";
$lang['AdminPlugin.integrations.tooltip_label'] = "String yang muncul di bawah nilai sebagai label";
$lang['AdminPlugin.integrations.tooltip_level'] = "Tingkat antarmuka untuk menampilkan kartu klien";
$lang['AdminPlugin.integrations.tooltip_card_callback'] = "Nama metode yang akan dibuat di kelas plugin utama untuk mengambil nilai kartu";
$lang['AdminPlugin.integrations.tooltip_link'] = "URI yang akan ditautkan saat kartu klien diklik";
$lang['AdminPlugin.integrations.placeholder_controller'] = "e.g. admin_main";
$lang['AdminPlugin.integrations.placeholder_action'] = "mis. index";
$lang['AdminPlugin.integrations.placeholder_name'] = "misalnya Generator Ekstensi";
$lang['AdminPlugin.integrations.placeholder_event'] = "e.g. Clients.Add";
$lang['AdminPlugin.integrations.placeholder_event_callback'] = "e.g. myClientAddHandlerMethod";
$lang['AdminPlugin.integrations.placeholder_card_callback'] = "e.g. getClientTickets";
$lang['AdminPlugin.integrations.placeholder_label'] = "e.g. Tickets";
$lang['AdminPlugin.integrations.placeholder_link'] = "misalnya plugin/support_manager/client_tickets/";
$lang['AdminPlugin.integrations.features'] = "Berikutnya - Fitur Tambahan";
$lang['AdminPlugin.features.heading_features'] = "Fitur tambahan";
$lang['AdminPlugin.features.heading_service_tabs'] = "Tab Manajemen Layanan";
$lang['AdminPlugin.features.heading_cron_tasks'] = "Tugas Cron";
$lang['AdminPlugin.features.heading_optional_functions'] = "Fungsi Opsional";
$lang['AdminPlugin.features.method_name'] = "Nama Metode";
$lang['AdminPlugin.features.label'] = "Label";
$lang['AdminPlugin.features.level'] = "Level";
$lang['AdminPlugin.features.name'] = "Nama";
$lang['AdminPlugin.features.description'] = "Deskripsi";
$lang['AdminPlugin.features.type'] = "Tipe";
$lang['AdminPlugin.features.time'] = "Waktu/Interval Mulai";
$lang['AdminPlugin.features.tooltip_method_name'] = "Nama metode yang akan dibuat untuk tab ini di basis kode (dalam bentuk camelCaseMethodName)";
$lang['AdminPlugin.features.tooltip_tab_label'] = "Nama tampilan tab layanan service";
$lang['AdminPlugin.features.tooltip_level'] = "Tingkat antarmuka untuk menampilkan tab (staf atau klien)";
$lang['AdminPlugin.features.tooltip_name'] = "Nama tugas cron dalam basis kode dalam kasus ular (yaitu cron_task_example)";
$lang['AdminPlugin.features.tooltip_cron_label'] = "Nama tampilan tugas cron";
$lang['AdminPlugin.features.tooltip_description'] = "Deskripsi ditampilkan di halaman daftar tugas cron";
$lang['AdminPlugin.features.tooltip_type'] = "Jenis waktu yang digunakan untuk tugas cron (waktu atau interval)";
$lang['AdminPlugin.features.tooltip_time'] = "Waktu 24 jam harian saat tugas ini harus dijalankan (mis. \"14:25\") ATAU Interval, dalam menit, tugas cron ini harus dijalankan";
$lang['AdminPlugin.features.placeholder_method_name'] = "e.g. tabChangePassword";
$lang['AdminPlugin.features.placeholder_tab_label'] = "misalnya Ganti kata sandi";
$lang['AdminPlugin.features.placeholder_name'] = "e.g. cron_task_example";
$lang['AdminPlugin.features.placeholder_cron_label'] = "e.g. Cron Task Example";
$lang['AdminPlugin.features.placeholder_time'] = "e.g. 14:25 atau 60";
$lang['AdminPlugin.features.service_tab_row_add'] = "Tambahkan Tab Manajemen Layanan";
$lang['AdminPlugin.features.cron_task_row_add'] = "Tambahkan Tugas Cron";
$lang['AdminPlugin.features.text_options'] = "Pilihan";
$lang['AdminPlugin.features.text_remove'] = "Hapus";
$lang['AdminPlugin.features.confirm'] = "Selanjutnya - Konfirmasi";
$lang['AdminPlugin.integrations.heading_integrations'] = "Integrasi Inti";
?>