
<h2 align="center">Portofolio Website</h2>

<p align="center"><em>Maifariza Aulia Dyas - Sistem Informasi Universitas Mulawarman.</em></p>

## Disusun Oleh 

| **Nama**                     | **NIM**     | **Kelas**            |
|------------------------------|------------|-------------------|
| Maifariza Aulia Dyas         | 2409116032 | Sistem Informasi A |

## Deskripsi Project

Project ini adalah website portfolio sederhana yang dibuat menggunakan PHP, HTML, MySQL, CSS, Bootstrap 5, dan Vue JS. Website ini berisi informasi tentang diri saya, seperti perkenalan singkat, deskripsi diri, daftar kemampuan (skills), pengalaman, serta sertifikat yang pernah saya dapatkan.

Website ini dibagi menjadi beberapa bagian utama, yaitu Home, About Me, dan Certificates. Tampilan website dibuat responsif menggunakan Bootstrap 5 agar nyaman dilihat di berbagai ukuran layar. Selain itu, website ini juga menggunakan database MySQL untuk menyimpan data seperti deskripsi diri dan daftar sertifikat sehingga informasi dapat ditampilkan secara dinamis. Pada bagian Skills, saya menggunakan Vue JS untuk menampilkan data kemampuan dengan lebih terstruktur.

---

## Struktur Project

<img width="299" height="296" alt="Image" src="https://github.com/user-attachments/assets/4095ff30-bc5c-4b9d-bd2b-b1af2ce3725d" />

Project ini terdiri dari beberapa file dan folder yang memiliki fungsi masing-masing.

### 🔗 **index.php**

  <img width="120" height="36" alt="Image" src="https://github.com/user-attachments/assets/56365dc1-ae70-4356-a44b-4ab6618a7c88" />

  File ini merupakan file utama yang berfungsi untuk menampilkan seluruh halaman website. Di dalam file ini terdapat struktur halaman seperti Home, About Me, dan Certificates. Selain itu, file ini juga berisi kode PHP yang mengambil data dari database sehingga beberapa bagian website dapat ditampilkan secara dinamis.

### 🔗 **koneksi.php**
  
  <img width="130" height="35" alt="Image" src="https://github.com/user-attachments/assets/2868e8b3-4429-4984-8741-92565f699617" />

  File ini digunakan untuk membuat koneksi antara website dengan database MySQL. Koneksi ini memungkinkan website mengambil data dari database, seperti data About Me dan Certificates. Dengan adanya file ini, proses pengambilan data dari database menjadi lebih terstruktur dan dapat digunakan kembali di file lain.

### 🔗 **style.css**
  
  <img width="125" height="43" alt="Image" src="https://github.com/user-attachments/assets/68073da4-f6fe-4135-89c8-bb412267a390" />

  File ini digunakan untuk mengatur tampilan website, seperti warna, font, jarak antar elemen, background, dan efek hover. Dengan menggunakan CSS, tampilan website saya menjadi lebih rapi, menarik, dan konsisten di setiap bagian halaman.

### 🔗 **assets/**
  
  <img width="266" height="207" alt="Image" src="https://github.com/user-attachments/assets/14fb2cbd-aa4f-44cc-a5c1-27c18fa41b32" />

  Folder ini berisi semua gambar yang digunakan di dalam website, seperti foto profil, gambar sertifikat, dan gambar lainnya. Penyimpanan gambar dalam satu folder membuat project lebih terstruktur dan mudah dikelola.

---

## Tampilan _Website_ (Full)

> Tampilan _Website_
>
> ![Image](https://github.com/user-attachments/assets/be6d2c2a-463c-4d39-ac0d-6814fc5405fa)

---

## _Database_ (MySQL)

Pada project ini, saya menggunakan database MySQL untuk menyimpan data yang akan ditampilkan di website. Database yang digunakan bernama portfolio dan terdiri dari dua tabel utama, yaitu certificates dan about.

### ᯓ★ Tabel Certificates

**Struktur Query Tabel Certificates**

  ```
    ┌──────────────────────────────────────────────────────────────┐
    │             Query Struktur Tabel certificates                │
    ├──────────────────────────────────────────────────────────────┤
    │ CREATE TABLE certificates (                                  │
    │     id INT AUTO_INCREMENT PRIMARY KEY,                       │
    │     judul VARCHAR(255),                                      │
    │     tahun VARCHAR(10),                                       │
    │     gambar VARCHAR(255)                                      │
    │ );                                                           │
    └──────────────────────────────────────────────────────────────┘
 ```
**Tampilan Data Tabel**

<img width="492" height="200" alt="Image" src="https://github.com/user-attachments/assets/7740f144-81d5-4e99-8740-d0ae4db6335f" />

Tabel certificates digunakan untuk menyimpan data sertifikat yang ditampilkan pada section Certificates. Di dalam tabel ini terdapat informasi seperti judul kegiatan, tahun pelaksanaan, serta nama file gambar sertifikat. Data tersebut kemudian diambil menggunakan PHP melalui query SQL dan ditampilkan pada halaman website dalam bentuk card.
   
**Contoh Penambahan Data Sertifikat**

Data pada tabel certificates dapat ditambahkan langsung melalui database menggunakan query SQL. Misalnya, jika saya ingin menambahkan sertifikat baru, saya cukup menambahkan baris data baru pada tabel certificates dengan mengisi judul kegiatan, tahun pelaksanaan, dan nama file gambar sertifikat.

> <img width="772" height="823" alt="Image" src="https://github.com/user-attachments/assets/673e57c4-8759-4142-92db-52b8a5dd5b4c" />

Setelah data ditambahkan ke dalam database, sertifikat tersebut akan otomatis muncul pada halaman website karena data diambil langsung dari database menggunakan PHP dan ditampilkan dalam bentuk card.
   
---

### ᯓ★ Tabel About
  
**Struktur Query Tabel About**

```
    ┌──────────────────────────────────────────────────────────────┐
    │                Query Struktur Tabel about                    │
    ├──────────────────────────────────────────────────────────────┤
    │ CREATE TABLE about (                                         │
    │     id INT AUTO_INCREMENT PRIMARY KEY,                       │
    │     deskripsi TEXT                                           │
    │ );                                                           │
    └──────────────────────────────────────────────────────────────┘
```

**Tampilan Data Tabel**

<img width="333" height="51" alt="Image" src="https://github.com/user-attachments/assets/b0498734-2ef5-4e3f-bcbb-0bf52740371c" />

Tabel about digunakan untuk menyimpan deskripsi diri yang ditampilkan pada section About Me. Isi deskripsi yang tersimpan di database kemudian dipanggil menggunakan PHP dan ditampilkan langsung pada halaman website.

**Contoh Perubahan Data Deskripsi**

Pada tabel about, data yang disimpan berupa deskripsi diri yang ditampilkan pada section About Me. Jika ingin mengubah isi deskripsi, saya dapat memperbarui data pada kolom deskripsi menggunakan query SQL di database.
   
> <img width="342" height="537" alt="Image" src="https://github.com/user-attachments/assets/577d19cd-99b6-4a56-9077-a8ac7c8e702a" />
   
Setelah data diperbarui, perubahan tersebut akan langsung tampil pada halaman website tanpa perlu mengubah kode HTML atau PHP, karena halaman mengambil data langsung dari database.

---

## Tampilan Setiap Section

### _★彡 Home (Hero Section)_

Bagian Home merupakan tampilan pertama yang dilihat saat program di running dan website dibuka. Di bagian ini terdapat sapaan singkat, nama lengkap, serta peran sebagai Web Developer. Selain itu, terdapat deskripsi singkat mengenai minat di bidang Web Development.

Pada bagian ini juga terdapat dua tombol navigasi yang mengarah ke section About Me dan Certificates. Layout disusun menggunakan sistem grid dari Bootstrap agar tampilan tetap rapi dan seimbang antara teks dan gambar. Background dibuat menggunakan warna dan gradient agar terlihat lebih menarik.

<img width="1894" height="947" alt="Image" src="https://github.com/user-attachments/assets/481a87df-a995-42a3-996a-7fa08669cf66" />

--- 

### _★彡 About Me Section_

Section About Me berisi informasi lebih lengkap tentang diri saya. Bagian ini dibagi menjadi tiga bagian utama, yaitu Deskripsi Diri, Skills, dan Pengalaman. Selain itu, pada section ini saya juga menekankan keseimbangan antara informasi personal dan kemampuan teknis. Jadi tidak hanya menjelaskan siapa saya, tetapi juga menunjukkan apa yang bisa saya lakukan dan pengalaman apa saja yang sudah saya jalani.

<img width="1888" height="945" alt="Image" src="https://github.com/user-attachments/assets/dde1a52f-f3f5-41c3-af2e-70f1fda30a4f" />


---

### _★彡 Certificates Section_

Section Certificates menampilkan daftar sertifikat yang pernah saya peroleh. Sertifikat ditampilkan dalam bentuk card dan disusun menggunakan sistem grid Bootstrap agar rapi dan responsif.

Setiap card berisi gambar sertifikat, judul kegiatan, tahun, serta tombol “Lihat” untuk membuka gambar sertifikat secara lebih jelas. Penggunaan card dan grid membantu tampilan tetap teratur di berbagai ukuran layar.

<img width="1885" height="944" alt="Image" src="https://github.com/user-attachments/assets/1f85b659-01eb-443f-8f7a-6095dd1a0058" />


---

### _★彡 Footer_

Bagian Footer merupakan bagian penutup dari halaman website yang berada di bagian paling bawah. Pada section ini ditampilkan informasi singkat mengenai nama pembuat website dan program studi.

Footer dibuat dengan tampilan yang sederhana yang berisi informasi singkat mengenai pembuat website dan menjadi penutup dari halaman website.

<img width="1892" height="48" alt="Image" src="https://github.com/user-attachments/assets/20785394-e006-44a9-b65f-289c57d112a0" />

---

## Penjelasan Code Setiap Section

### **📌 Kode Section Home (Hero Section)**

<img width="871" height="586" alt="Image" src="https://github.com/user-attachments/assets/ce638c72-9c86-4f4d-af51-e8aaa6ff8e29" />

<Penjelasan:>

Secara umum, pada section Home saya membuat struktur utama menggunakan elemen <section yang dibagi menjadi dua kolom menggunakan sistem grid Bootstrap. Kolom pertama berisi teks perkenalan seperti nama, role, dan deskripsi singkat. Kolom kedua berisi gambar profil dengan tambahan elemen dekoratif.

Kode di section Home ini berfungsi untuk menampilkan identitas saya sebagai pembuka website. Saya menggunakan heading untuk struktur teks, button untuk navigasi ke section lain, dan grid Bootstrap untuk memastikan tampilannya tetap responsif di berbagai ukuran layar.

- Kode Struktur Section 

  > <img width="325" height="50" alt="Image" src="https://github.com/user-attachments/assets/11689e81-2473-474c-b31d-49adfe8d6f15" />
  >
  > Pada bagian Hero, saya membuat struktur utama menggunakan section id="home">. Saya pakai id="home" supaya bisa terhubung langsung dengan navbar. Jadi ketika tombol “Home” ditekan, halaman otomatis scroll ke bagian ini tanpa reload.

- Kode Grid Layout 

  > <img width="330" height="43" alt="Image" src="https://github.com/user-attachments/assets/2e4e747d-4447-4ed7-befb-4f0c7cc6de38" />
  >
  > Saya sengaja pakai sistem grid Bootstrap supaya layout-nya responsif. Jadi di layar besar tampil dua kolom (teks dan gambar berdampingan), tapi kalau di layar kecil otomatis turun jadi satu kolom. Dengan cara ini, saya tidak perlu menulis media query manual.

- Kode Heading 

  > <img width="502" height="36" alt="Image" src="https://github.com/user-attachments/assets/0a9fd857-eb36-49b9-ac06-70a881da08f6" />
  >
  > Saya menggunakan button class btn dari Bootstrap untuk styling dasar, lalu saya kombinasikan dengan CSS sendiri agar warnanya sesuai tema pink yang saya gunakan.

- Kode Button 

  > <img width="356" height="50" alt="Image" src="https://github.com/user-attachments/assets/59c7711d-4211-4730-9376-f3b4fdbead13" />
  >
  > Untuk gambar, saya menggunakan kode diatas. Lingkaran itu saya buat di CSS menggunakan position: absolute agar terlihat seperti background dekoratif.
  > Kemudian saya tambahkan efek mask gradient di .hero-img supaya bagian bawah foto terlihat lebih halus dan menyatu dengan background.

---

### **📌 Kode Section About**

<img width="897" height="187" alt="Image" src="https://github.com/user-attachments/assets/c13c7755-578c-4e49-921d-a4d5d2217e21" />

<Penjelasan:>

Pada section About, struktur kodenya dibagi menjadi tiga bagian utama dalam satu baris, yaitu Deskripsi, Skills, dan Pengalaman. Saya menggunakan container dan row dari Bootstrap untuk mengatur layout agar rapi dan responsif. Setiap bagian dibungkus dalam card supaya tampilannya terstruktur dan konsisten. Untuk bagian Skills, saya menggunakan Vue JS agar data skill ini bisa ditampilkan secara dinamis melalui perulangan.

Kode di section ini berfungsi untuk menampilkan informasi yang lebih detail tentang diri saya, baik dari sisi kepribadian, kemampuan teknis, maupun pengalaman yang pernah saya lakukan.

- Kode Struktur Section About

  > <img width="285" height="56" alt="Image" src="https://github.com/user-attachments/assets/566f30bc-2da7-4a7e-b0ed-17a88a834248" />
  >
  > Pada bagian ini, saya membuat section About menggunakan <section id="about". Saya memberikan id="about" supaya bisa terhubung langsung dengan tombol “About Me” di tampilan Home (Hero) dan juga dari navbar.
  > Class py-5 berasal dari Bootstrap yang berfungsi memberikan padding atas dan bawah agar section ini tidak terlalu rapat dengan section sebelumnya.
  > Saya juga menggunakan container agar isi kontennya tetap berada dalam batas lebar yang rapi dan tidak terlalu melebar di layar besar.

- Kode Judul dan Deskripsi Singkat Section

  > <img width="839" height="96" alt="Image" src="https://github.com/user-attachments/assets/bf6167a1-10d6-4e19-9ede-cfff6b3f56e3" />
  >
  > Kode ini digunakan untuk membuat judul section dan deskripsi singkat. Saya menggunakan text-center agar teks rata tengah, text-danger untuk warna merah sesuai tema website yang saya mau, dan Class fw-bold membuat judul terlihat lebih tegas.
  > Selain itu, saya menggunakan mb-3 dan mb-5 untuk mengatur jarak antar elemen supaya tampilannya tidak terlalu rapat. Dengan pengaturan ini, judul terlihat lebih menonjol dan berfungsi sebagai pembatas yang jelas antara satu section dengan section lainnya.

Setelah menampilkan judul dan gambaran singkat tentang diri saya, selanjutnya saya membagi Section About menjadi tiga bagian utama. Bagian pertama adalah Deskripsi Diri, lalu Skills, dan terakhir Pengalaman.

a. **Deskripsi**

> <img width="503" height="205" alt="Image" src="https://github.com/user-attachments/assets/c69ebb07-8814-45e5-a8b0-2bbf51463c1b" />
>
> Pada bagian Deskripsi Diri, saya menggunakan struktur card dari Bootstrap untuk membungkus isi teks agar tampil lebih rapi dan terpisah dari bagian lain. Dengan menggunakan card, informasi deskripsi dapat ditampilkan dengan lebih terstruktur dan mudah dibaca oleh pengunjung website.
>
> Penggunaan col-md-4 berfungsi agar bagian ini menjadi satu kolom dari tiga kolom dalam satu baris ketika dibuka di layar besar. Sedangkan pada layar yang lebih kecil, tata letak akan otomatis menyesuaikan sehingga tampilan tetap responsif.
>
> Di dalam card, saya menggunakan elemen <h5 sebagai judul “Deskripsi Diri”, sedangkan elemen <p digunakan untuk menampilkan isi teks. Berbeda dengan versi statis, pada project ini isi deskripsi ditampilkan secara dinamis menggunakan PHP, yaitu dengan memanggil data dari database menggunakan kode:
> 
> <img width="294" height="39" alt="Image" src="https://github.com/user-attachments/assets/8ea5b68a-4f5f-42f0-a30e-9db391614326" />
>
> Kode diatas itu berfungsi untuk mengambil data deskripsi dari tabel about pada database yang sebelumnya sudah dipanggil menggunakan query PHP. Jadi,  isi deskripsi dapat diubah langsung melalui database tanpa perlu mengubah kode HTML pada halaman website.

b. **Skills**

> <img width="559" height="343" alt="Image" src="https://github.com/user-attachments/assets/16d47327-c65c-4dd5-baca-e15b2baf3d9d" />
>
> Pada bagian Skills, kode berfungsi untuk menampilkan daftar kemampuan beserta levelnya dalam bentuk progress bar. Saya menggunakan v-for untuk melakukan perulangan data skills, sehingga setiap skill di dalam array otomatis ditampilkan tanpa harus menulis ulang struktur HTML. Artinya, kalau saya menambahkan skill baru di data Vue, maka otomatis akan muncul di tampilan.
>
> Progress bar Bootstrap digunakan untuk menampilkan visual tingkat kemampuan. Lebarnya diatur menggunakan binding :style yang mengambil nilai dari skill.level. Jadi fungsi kodenya adalah menghubungkan data dengan tampilan secara dinamis. Bagian ini membuat daftar skill menjadi lebih visual dan tidak hanya berupa teks biasa.

c. **Pengalaman**

> <img width="812" height="288" alt="Image" src="https://github.com/user-attachments/assets/1132d186-82d1-4cbf-afac-d68830761b0c" />
>
> Pada bagian Pengalaman, saya menggunakan struktur list <ul dan <li untuk menampilkan daftar kegiatan. Kegunaan kode ini adalah untuk menyusun pengalaman dalam bentuk poin-poin agar lebih ringkas dan mudah dibaca. Struktur list juga lebih tepat secara HTML dibanding menuliskannya dalam satu paragraf panjang. Card Bootstrap tetap digunakan supaya tampilannya konsisten dengan bagian Deskripsi dan Skills.



---


### **📌 Kode Section Certificates**

<img width="912" height="400" alt="Image" src="https://github.com/user-attachments/assets/b411d2ba-4764-4fae-8f59-a72c6e010012" />

<Penjelasan:>

Pada section Certificates, saya menampilkan daftar sertifikat yang pernah saya peroleh. Berbeda dengan versi sebelumnya yang masih bersifat statis, pada project ini data sertifikat ditampilkan secara dinamis dengan mengambil data dari database menggunakan PHP dan MySQL.

Data seperti gambar sertifikat, judul kegiatan, dan tahun pelaksanaan disimpan di dalam database, kemudian dipanggil menggunakan query PHP. Setelah itu data ditampilkan ke halaman website menggunakan perulangan sehingga setiap data sertifikat dapat muncul secara otomatis dalam bentuk card.

Penggunaan sistem dinamis ini membuat pengelolaan data sertifikat menjadi lebih mudah. Jika ingin menambah atau mengubah sertifikat, cukup memperbarui data pada database tanpa perlu mengubah kode HTML secara langsung.

- Kode Struktur Section

  > <img width="609" height="50" alt="image" src="https://github.com/user-attachments/assets/b3b00b94-c316-40a4-a5dc-f74239587f93" />
  >
  > Pada bagian ini, saya membuat section menggunakan <section id="certificates" agar section ini dapat terhubung dengan tombol navigasi di navbar maupun tombol di Hero section menggunakan anchor link. Saya juga menambahkan class py-5 dari Bootstrap untuk memberikan jarak atas dan bawah agar tampilan lebih rapi.

- Pengambilan Data dari Database

  > <img width="509" height="51" alt="Image" src="https://github.com/user-attachments/assets/7a24b15e-1ea7-478b-b7cd-aafa2b06b5d6" />
  >
  > Kode ini digunakan untuk mengambil seluruh data sertifikat dari tabel certificates pada database. Query tersebut akan mengambil data seperti judul, tahun, dan gambar sertifikat yang kemudian akan ditampilkan di halaman website. Dengan ini, data yang ditampilkan pada website tidak lagi ditulis secara manual di HTML, tetapi diambil langsung dari database.

- Perulangan (_Looping_) Data Sertifikat
  
  > <img width="441" height="41" alt="Image" src="https://github.com/user-attachments/assets/37f894ef-bd21-4bdc-b53e-418ae974416c" />
  >
  > Pada bagian ini saya menggunakan perulangan while untuk menampilkan setiap data sertifikat yang diambil dari database. Nah setiap baris data yang ditemukan akan disimpan ke dalam variabel $row, lalu ditampilkan ke dalam bentuk card sertifikat. Jadi, jumlah sertifikat yang ditampilkan dapat menyesuaikan dengan jumlah data yang ada di database.


- Kode Grid Layout Sertifikat

  > <img width="324" height="66" alt="Image" src="https://github.com/user-attachments/assets/99f89701-3eef-4a78-a866-42d76864af54" />
  >
  > Pada bagian ini, saya menggunakan sistem grid dari Bootstrap seperti row, col-md-6, dan col-lg-4 untuk mengatur tata letak card sertifikat. Kode ini berfungsi supaya jumlah card dalam satu baris bisa menyesuaikan dengan ukuran layar.
  > Jadi ketika dibuka di layar besar, dalam satu baris bisa tampil tiga card sekaligus. Kalau di layar ukuran medium, tampil dua card. Sedangkan di layar kecil seperti HP, otomatis turun menjadi satu card per baris.
  >
  > Nah dengan sistem grid ini, tampilan website tetap responsif tanpa perlu menulis pengaturan layout secara manual lagi. Bootstrap sudah menangani penyesuaian tampilannya secara otomatis sesuai ukuran layar.

- Kode Card Sertifikat

  > <img width="593" height="117" alt="Image" src="https://github.com/user-attachments/assets/5a1faa84-0af4-4336-90a1-bfd9f2f2ee92" />
  >
  > Pada bagian ini, saya menggunakan komponen card dari Bootstrap untuk menampilkan setiap sertifikat dalam bentuk tampilan yang lebih terstruktur. Setiap card berisi gambar sertifikat, judul kegiatan, serta tahun pelaksanaan.
  >
  > Di dalam card terdapat gambar sertifikat, judul kegiatan, dan tahun pelaksanaan. Berbeda dengan versi statis, pada project ini data tersebut ditampilkan secara dinamis menggunakan PHP, yaitu dengan memanggil data dari database menggunakan variabel $row. Dengan cara ini, isi card akan otomatis menyesuaikan dengan data yang tersimpan di database.
  >
  > Penggunaan card-img-top berfungsi untuk menampilkan gambar sertifikat di bagian atas card agar langsung terlihat oleh pengunjung. Kemudian bagian card-body digunakan sebagai pembungkus isi teks seperti judul dan tahun agar jarak serta tata letaknya lebih rapi.
  > 
  > Saya juga menambahkan class shadow-sm supaya card memiliki efek bayangan ringan sehingga tampilannya tidak terlihat terlalu datar. Dengan menggunakan card ini, tampilan sertifikat menjadi lebih rapi, konsisten, dan tetap responsif ketika jumlah data sertifikat di database bertambah.

- Kode Tombol "Lihat"

  > <img width="820" height="65" alt="Image" src="https://github.com/user-attachments/assets/aa166e64-f223-4ec9-88f7-bb1850e56f3b" />
  >
  > Pada bagian ini, saya menggunakan elemen <a yang diberi class btn dari Bootstrap untuk dijadikan tombol “Lihat”. Kode ini berfungsi agar pengunjung bisa membuka gambar sertifikat dengan ukuran yang full atau penuh.
  >
  > Saya menambahkan atribut target="_blank" supaya ketika tombol ditekan, gambar akan terbuka di tab baru. Tujuannya agar halaman portfolio utama tidak tertutup atau tergantikan. Selain itu, Class seperti btn-outline-danger ini saya gunakan untuk menyesuaikan warna tombol dengan tema website, sedangkan btn-sm membuat ukuran tombol lebih proporsional dan tidak terlalu besar di dalam card.

---

## Teknologi yang Digunakan

Dalam pembuatan website ini, saya menggunakan beberapa teknologi dasar yang telah dipelajari, yaitu PHP, HTML, MySQL, CSS, Bootstrap 5, dan juga Vue Js. 

### ᯓ ✈︎ **PHP**

<img width="175" height="63" alt="Image" src="https://github.com/user-attachments/assets/00152774-ebbe-4f0b-acd6-869d6045aa82" />

Pada project ini, saya menggunakan PHP sebagai bahasa pemrograman di sisi server untuk menghubungkan website dengan database. File utama website menggunakan index.php, sehingga selain berisi struktur tampilan, file ini juga dapat menjalankan kode PHP untuk mengambil data dari database.

PHP digunakan untuk mengambil data dari tabel database seperti about dan certificates, kemudian menampilkannya ke halaman website. Dengan menggunakan PHP, beberapa bagian website seperti Deskripsi Diri pada section About Me dan daftar sertifikat pada section Certificates dapat ditampilkan secara dinamis berdasarkan data yang tersimpan di database.

- Contoh Penggunaan PHP

  > <img width="505" height="166" alt="Image" src="https://github.com/user-attachments/assets/5bffee2b-8e6f-481c-8416-c4b0082182d3" />
  > 
  > Kode di atas berfungsi untuk menghubungkan halaman website dengan database menggunakan file koneksi.php. Setelah koneksi berhasil, query dijalankan untuk mengambil data dari tabel about dan certificates, kemudian data tersebut digunakan untuk ditampilkan pada halaman website.

- Penggabungan PHP dan HTML
  
  > Meskipun menggunakan PHP, struktur tampilan website tetap dibuat menggunakan HTML. PHP digunakan untuk menampilkan data dari database ke dalam elemen HTML.
  >
  > <img width="283" height="78" alt="Image" src="https://github.com/user-attachments/assets/f66d7cae-dfdd-400e-a040-eafb060926cc" />
  >
  > Kode tersebut berfungsi untuk menampilkan isi deskripsi yang diambil dari database ke dalam halaman website.
  
---

### ᯓ ✈︎ **HTML**

<img width="250" height="92" alt="Image" src="https://github.com/user-attachments/assets/528f2633-2b89-4430-858a-5cdb9909b6db" />

HTML digunakan sebagai struktur dasar untuk membangun tampilan halaman website. Elemen HTML digunakan untuk menyusun berbagai bagian halaman seperti navbar, section Home, About Me, hingga Certificates agar konten tersusun dengan rapi dan terstruktur.

Meskipun website menggunakan PHP, struktur tampilan tetap dibuat menggunakan HTML. PHP kemudian digunakan untuk menampilkan data dari database ke dalam elemen-elemen HTML.


- Struktur dasar dokumen

  > <img width="600" height="122" alt="Image" src="https://github.com/user-attachments/assets/d2f6d512-1ca0-4ccc-8460-6fe1da5324d3" />
  >
  > HTML digunakan untuk membentuk struktur dasar sebuah halaman website. Pada bagian ini, elemen seperti <!DOCTYPE html, <html, <head, dan <body berfungsi sebagai kerangka utama. Meta charset digunakan untuk mengatur karakter teks, meta viewport untuk membuat tampilan responsif, dan <title untuk menampilkan judul halaman pada tab browser.

- Pembuatan bagian navigasi

  > <img width="375" height="24" alt="Image" src="https://github.com/user-attachments/assets/cca573ed-150e-40a0-9a1c-c1690c1359b6" />
  >
  > HTML digunakan untuk membuat struktur navigasi menggunakan elemen <nav. Bagian ini berfungsi untuk menghubungkan antar section seperti Home, About, dan Certificates. Dengan struktur ini, pengguna dapat berpindah ke bagian lain dalam satu halaman dengan lebih mudah.

- Pembuatan Section

  > <img width="223" height="70" alt="Image" src="https://github.com/user-attachments/assets/ecfa9a28-6ccd-4b40-ad38-cb79c8cc6ae3" />
  >
  > HTML digunakan untuk membagi konten website menjadi beberapa bagian menggunakan elemen <section. Setiap section diberi id agar dapat terhubung dengan menu navigasi melalui anchor link. Dengan cara ini, struktur website menjadi lebih rapi dan terorganisir.


---

### ᯓ ✈︎ **MySQL**

<img width="272" height="63" alt="Image" src="https://github.com/user-attachments/assets/72c50ba3-1fe0-4677-8aed-60e9cf151274" />

MySQL digunakan sebagai database untuk menyimpan data yang ditampilkan pada website. Pada project ini, database digunakan untuk menyimpan data seperti deskripsi diri pada section About Me dan data sertifikat pada section Certificates.

Data di database kemudian diambil menggunakan PHP melalui query SQL, lalu ditampilkan ke halaman website. Dengan menggunakan MySQL, informasi yang ditampilkan pada website dapat dikelola dengan lebih mudah karena data tidak perlu ditulis langsung di dalam kode program, melainkan cukup disimpan dan diubah melalui database.

<img width="146" height="93" alt="Image" src="https://github.com/user-attachments/assets/78f3267d-293a-4e3b-95f0-436a833bcd19" />

Tampilan di atas menunjukkan struktur database yang digunakan pada website, yaitu database portfolio yang memiliki tabel about dan certificates.

---

### ᯓ ✈︎ **CSS**

<img width="91" height="30" alt="Image" src="https://github.com/user-attachments/assets/64654923-6ada-4f8f-a922-ffb2090aac66" />

CSS digunakan untuk mengatur tampilan visual website agar terlihat lebih rapi, menarik, dan memiliki identitas desain yang konsisten. Jika HTML berfungsi sebagai struktur, maka CSS berperan dalam mempercantik dan mengatur bagaimana struktur tersebut ditampilkan di layar.

<img width="626" height="915" alt="Image" src="https://github.com/user-attachments/assets/aa85fc19-7527-4ca2-9361-e025520a5cd9" />

---

### ᯓ ✈︎ **Bootstrap 5**

<img width="213" height="52" alt="Image" src="https://github.com/user-attachments/assets/7c6fd75e-cf8b-47b4-bbba-b694458d89ac" />

Bootstrap 5 digunakan dalam website ini untuk membantu pengaturan layout, struktur grid, serta komponen UI agar tampilan menjadi responsif dan lebih rapi tanpa harus menulis semua styling dari nol.

Bootstrap dihubungkan melalui CDN berikut:

<img width="807" height="41" alt="Image" src="https://github.com/user-attachments/assets/dad8b6d1-22b6-4ca4-ac6b-1a235a38ae36" />

Dengan menghubungkan file tersebut, saya dapat menggunakan berbagai class bawaan Bootstrap untuk mempercepat proses pembuatan tampilan.

- Grid System

  > <img width="510" height="108" alt="Image" src="https://github.com/user-attachments/assets/1e3e9e9e-d5a0-4ca2-be4f-e226fe3aef14" />
  >
  > Bootstrap digunakan untuk mengatur tata letak menggunakan sistem grid seperti container, row, dan col-lg-6. Grid system ini berfungsi untuk membagi tampilan menjadi beberapa kolom yang dapat menyesuaikan ukuran layar. Dengan cara ini, layout tetap responsif tanpa perlu membuat media query manual.

- Navbar

  > <img width="369" height="43" alt="Image" src="https://github.com/user-attachments/assets/40c9bb16-375f-4a69-8d12-211a3ec697e6" />
  >
  > Bootstrap digunakan untuk membuat navigasi menggunakan class seperti navbar, navbar-expand-lg, dan bg-light. Komponen ini berfungsi untuk menampilkan menu navigasi yang responsif dan otomatis menyesuaikan tampilan di berbagai ukuran layar.

- Button

  > <img width="806" height="50" alt="Image" src="https://github.com/user-attachments/assets/861dcdd8-5f63-4312-a44c-fcd6a51782e5" />
  >
  > Bootstrap digunakan untuk membuat tombol dengan class seperti btn, btn-outline-danger, dan btn-sm. Class ini berfungsi untuk memberikan styling tombol secara cepat dan konsisten sesuai tema website.

- Card Component

  > <img width="806" height="50" alt="Image" src="https://github.com/user-attachments/assets/449d93d8-5b3e-4a01-b5e8-4ec4abb59961" />
  >
  > Bootstrap digunakan untuk membungkus konten dalam bentuk card menggunakan class seperti card, card-body, dan shadow-sm. Komponen ini berfungsi untuk membuat tampilan konten seperti sertifikat dan deskripsi terlihat lebih terstruktur dan rapi.



---

### ᯓ ✈︎ **Vue JS**

<img width="167" height="57" alt="Image" src="https://github.com/user-attachments/assets/59c94ab6-d553-45f9-bd0a-09400cf05042" />

Vue JS digunakan pada bagian Skills untuk menampilkan data kemampuan secara lebih terstruktur dan dinamis pada tampilan website saya. Data skill disimpan dalam bentuk array di dalam instance Vue, kemudian ditampilkan menggunakan fitur seperti v-for untuk melakukan perulangan dan interpolasi {{ }} untuk menampilkan nilai data ke dalam elemen HTML.

Penggunaan Vue membantu menampilkan daftar skill lebih rapi dan mudah diatur. Namun data skill tersebut tetap ditulis langsung di dalam file, sehingga Vue digunakan untuk membantu pengelolaan tampilan pada bagian Skills saja.

Vue dihubungkan menggunakan CDN berikut:

<img width="530" height="39" alt="Image" src="https://github.com/user-attachments/assets/7d6d547b-3982-4164-a8ab-930231bc0c0b" />

Setelah itu, saya membuat instance Vue dengan createApp() yang berisi data skills. Instance ini kemudian di-mount ke elemen dengan id #app, sehingga seluruh bagian di dalam div tersebut dapat menggunakan fitur Vue.

<img width="549" height="399" alt="Image" src="https://github.com/user-attachments/assets/7c2631e0-d9a5-4100-8e95-96329d4a31b1" />

---

<p align="center">
MINI PROJECT 2 PEMROGRAMAN BERBASIS WEB <br>
<em>MaiPortofolio.</em> ✨
</p>

