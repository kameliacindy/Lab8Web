# Praktikum 8 : PHP dan Database MySQL
Pada praktikum yang ke-8 ini kita akan membahas mengenai PHP lanjutan, yaitu tentang **Database MySQL**. Dan kita akan membuat aplikasi CRUD sederhana dengan menggunakan PHP dan database MySQL.

## Definisi CRUD
**CRUD** adalah singkatan dari _Create, Read, Update, dan Delete_.

 1. ***Create***
 Fungsi CRUD yang pertama adalah ***create***. Fungsi ini digunakan untuk membuat _record_ baru dalam _database_. Dalam aplikasi SQL, fungsi _create_ sering disebut juga sebagai **_insert_** (menambahkan).
 2. ***Read***
 Fungsi _read_ hampir mirip dengan fungsi _search_. Fungsi ini memungkinkan untuk mencari dan mengambil data tertentu dalam tabel dan membaca nilainya.
3. ***Update***
Fungsi *update* digunakan untuk memodifikasi atau mengubah record data yang telah tersimpan pada database.
4. ***Delete***
Ketika ada _record_ data yang tidak lagi dibutuhkan dalam _database_, fungsi CRUD yang digunakan adalah fungsi _delete._ Fungsi ini dapat digunakan untuk menghapus data tersebut.

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

