# Praktikum 8 : PHP dan Database MySQL
Pada praktikum yang ke-8 ini kita akan membahas mengenai PHP lanjutan, yaitu tentang **Database MySQL**. Dan kita akan membuat aplikasi CRUD sederhana dengan menggunakan PHP dan database MySQL.

## Definisi CRUD
**CRUD** adalah singkatan dari _Create, Read, Update, dan Delete_.

 1. ***Create***
 , fungsi CRUD yang pertama adalah _create_ yang digunakan untuk membuat _record_ baru dalam _database_. Dalam aplikasi SQL, fungsi _create_ sering disebut juga sebagai **_insert_** (menambahkan).
 2. ***Read***
 , fungsi _read_ hampir mirip dengan fungsi _search_. Fungsi ini memungkinkan untuk mencari dan mengambil data tertentu dalam tabel dan membaca nilainya.
3. ***Update***
 , fungsi *update* digunakan untuk memodifikasi atau mengubah record data yang telah tersimpan pada database.
4. ***Delete***
, ketika ada _record_ data yang tidak lagi dibutuhkan dalam _database_, fungsi CRUD yang digunakan adalah fungsi _delete._ Fungsi ini dapat digunakan untuk menghapus data tersebut.

Untuk penjelasan lebih lanjut akan dibahas dan dicontohkan sebagai berikut.

### Persiapan Membuat Database pada MySQL PHP MyAdmin
Sebelum mengakses MySQL Client menggunakan PHP MyAdmin, pastikan webserver Apache dan MySQL server sudah dijalankan. Kemudian buka melalui browser.

Selajutnya ketik kode pada menu SQL untuk membuat database. Kita akan membuat database dengan nama **latihan1**, seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/membuat_db.PNG)

Kemudian membuat tabel **data_barang** pada database yang sudah dibuat.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/membuat_table.PNG)

Selanjutnya kita tambahkan data dengan menggunakan menu ***insert*** pada tabel yang sudah dibuat.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/menambah_data.PNG)

dan ini tampilan pada database mySQL:

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ss_tambah%20data.PNG)

### Membuat Program CRUD
Persiapan membuat folder dengan nama **lab8_php_database** pada root directory web server (c:\xampp\htdocs). Kemudian kita akses directory tersebut pada web server dengan mengakses URL: 
http://localhost/lab8_php_database/

dan tampilannya seperti ini:

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/index_lab8.PNG)

### Koneksi Database
Untuk mengoneksikan database ke web server, kita membuat file **koneksi.php** terlebih dahulu seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/koneksi.PNG)

Apabila berhasil terkoneksi, maka akan terdapat pesan "koneksi berhasil" seperti tampilan di bawah ini.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ss_koneksi.PNG)

Dari pesan tersebut, maka database mySQL sudah terkonkesi dengan web server.

## READ (Menampilkan Data)

 - Pada fungsi *read*, kita membuat sebuah file dengan nama **index.php** untuk menampilkan data-data berupa data barang.
 - Berikut ini kode program untuk menampilkan data barang.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/index1.PNG)

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/index2.PNG)

Dan seperti ini tampilan pada index yang menampilkan data barang.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ss_data%20barang_read.PNG)

Perlu diketahui bahwa pada gambar di atas terdapat link navigasi "**Tambah Barang**" dan pada kolom aksi terdapat aksi "**Ubah**" dan "**Hapus**". Link navigasi tersebut termasuk ke dalam fungsi CRUD yang akan dibahas pada penjelasan selanjutnya.

## CREATE (Menambah Data)
 - Untuk menambah data, kita membuat file dengan nama **tambah.php** .
 - Jadi apabila kita meng-klik link navigasi  "**Tambah Barang**" yang terdapat pada index.php, maka kita akan menuju ke halaman **tambah.php**
 - Berikut ini kode program tambah.php
 
 ![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/tambah1.PNG)

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/tambah2.PNG)

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/tambah3.PNG)

Seperti ini tampilan pada menu "Tambah Barang"

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ss_tambah%20barang1.PNG)

Misalnya kita akan menambah data barang, maka kita tinggal menginput saja, seperti contoh di bawah ini, kita akan menambahkan sebuah barang yang bernama "**Iphone 10**".

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ss_tambah%20barang2.PNG)

Dan ini kita sudah berhasil menambahkan barang dengan nama "Iphone 10" pada tabel.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/berhasil_ditambah.PNG)

## UPDATE (Mengubah Data)
 - Fungsi *update* merupakan sebuah fungsi yang digunakan untuk mengubah atau memodifikasi data yang sudah tersimpan.
 - Untuk menjalankan fungsi *update*, kita membuat sebuah file dengan nama **ubah.php**.
 - Berikut ini kode programnya.
 
![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ubah1.PNG)

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ubah2.PNG)

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ubah3.PNG)

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ubah4.PNG)

Berikut ini tampilan menu "**Ubah**"

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ss_ubah1.PNG)

Misalnya, kita akan mengubah data yang bernama "HP Xiaomi Android", maka kita tinggal klik "**Ubah**" dan tampilannya akan seperti ini, sehingga kita tinggal mengubah apa yang akan diubah (update).

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ss_ubah2.PNG)

Nah, disini kita mengubah "**Harga Jual**" yang awalnya 1400000 diubah menjadi 1500000, dan "**Stok**" yang awalnya 5 diubah menjadi 8.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ss_ubah3.PNG)

Dan ini kita sudah berhasil mengubah data tersebut.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/berhasil_diubah.PNG)

## DELETE (Menghapus Data)
 - Fungsi *delete* yaitu salah satu fungsi CRUD yang digunakan untuk menghapus data yang sudah tersimpan.
 - Seperti biasa, kita membuat file dengan nama **hapus.php**, dengan kode program sebagai berikut.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/hapus.PNG)

Sebagai contoh, kita akan menghapus data barang yang bernama "**HP OPPO Android**" pada tabel di bawah ini.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ss_hapus1.PNG)

Apabila kita klik "**Hapus**", maka akan muncul alert (pesan) seperti berikut ini.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/ss_hapus2.PNG)

Kemudian jika kita klik "OK", maka data tersebut (HP OPPO Android) berhasil dihapus, dan barang yang bernama "HP OPPO Android" sudah tidak terdaftar pada tabel barang.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/berhasil_dihapus.PNG)

## CSS Style
CSS style pada program CRUD ini adalah sebagai berikut.

![enter image description here](https://github.com/kameliacindy/Lab8Web/blob/main/img/css_crud.PNG)

Terimakasih, semoga bermanfaat...

Nama	: KAMELIA CINDY ASTUTI

NIM	: 311910104

Kelas	: TI. 19. A. 1

