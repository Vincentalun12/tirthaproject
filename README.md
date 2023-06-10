
# 👘 Aseprite Laundry

Project website laundry berbasis online yang responsif dan minimalis. Dibuat dengan PHP dan Javascript.

__Project ini dibuat untuk UAS Sistem Informasi Semester 2 TA. 2022 UIB - 2SIPA__

__ORDER & TRACK FUNCTION BELUM BEKERJA SEBAGAIMANA MESTINYA__

![App Screenshot](https://media.discordapp.net/attachments/1036585440473526313/1116035982278537366/image.png?width=1656&height=671)
# 🔩 Komponen Yang Dibutuhkan

- Git - Agar dapar pull project ini [(https://git-scm.com/downloads)](https://git-scm.com/downloads) - **atau** dapat menggunakan Github Desktop
- Localhost Program seperti [XAMPP](https://www.apachefriends.org/download.html), [Laragon](https://laragon.org/download/index.html), dll. (Direkomendasikan menggunakan [Laragon](https://laragon.org/download/index.html) karena kami menggunakannya) 
- Node.js [(https://nodejs.org/en)](https://nodejs.org/en)
- Composer [(https://getcomposer.org/download/)](https://getcomposer.org/download/)
- Code Editor (Direkomendasikan: [Visual Studio Code](https://code.visualstudio.com/download))

Harap hiraukan jika sudah menginstall komponen yang dibutuhkan, Namun jika sudah terinstal, akan memerlukan instalasi lebih lanjut di langkah selanjutnya.
# 🪛 Petunjuk Instalasi

#### - PASTIKAN SUDAH TERINSTALL Database MySQL (phpmyadmin) & Apache UNTUK MENJALANKAN PROJEK SELFHOST PHP -

#### 1. Jalankan Aplikasi Selfhost (XAMPP, Laragon, dll.) dan sudah menjalankan MySQL & Apache.
Pastikan Port untuk Database yaitu `3306` dengan host `127.0.0.1` dan Port untuk Apache yaitu `80`

#### 2. Pergi ke lokasi directory Localhost Program, lalu ke folder yang dimana menyimpan source code yang akan di selfhost
Untuk Pengguna Laragon, biasanya ada di direktori `/laragon/www/`

Untuk Pengguna XAMPP, biasanya ada di direktori `/xampp/htdocs/`

#### 3. Ketika sudah didalam folder tersebut, jalankan Git, dan lakukan command seperti dibawah ini:
```http
git clone https://github.com/Vincentalun12/tirthaproject.git
```

#### 4. Jika selesai buka aplikasi Code Editor lalu Open Project pada folder Tirtha Laundry
Di folder www maupun htdocs, buka folder Tirtha Project, dan pastikan komponen coding ada didalam folder tersebut. Jika folder Tirtha Project dibuka dan isinya adalah folder lagi, maka buka folder tersebut dan pindahkan ke directory sebelumnya.

**✅ Contoh Directory yang BENAR:** 
```http
/xampp/htdocs/tirthaproject/
```

**❌ Contoh Directory yang SALAH:**
```http
/xampp/htdocs/tirthaproject/tirthaproject-main/
```

#### 5. Buka Terminal dalam Text Editor tersebut, dan disini kami MEWAJIBKAN untuk membuat 2 terminal.
Lalu, lakukan command dibawah ini pada **Terminal 1** untuk menginstall composer yang telah terdownload:
```http
composer install
```

#### Jalankan Javascript agar UI Layout dapat tersusun dengan baik dengan command dibawah ini:
Lakukan ini pada **Terminal 1** setelah melakukan instalasi composer.
```http
npm run dev
```


#### 6. Jika sudah selesai, jalankan beberapa command composeragar PHP dapat mencocokan dengan directory sekarang, lakukan secara BERURUTAN.
Lakukan command dibawah ini pada **Terminal 2**, Ini alasan kami untuk menggunakan 2 terminal.

- Command 1:
```http
php artisan key:generate
```
- Command 2:
```http
php artisan migrate
```
- Command 3:
```http
php artisan serve
```

#### 7. Begitu Command 3 dijalankan, akan langsung memberikan URL untuk melihat hasil dari selfhostnya. Biasanya, website akan terhosting otomatis pada website localhost dibawah ini:

```http
http://127.0.0.1:8000
```

#### 8. Selesai! User dapat menjelajah keseluruhan website dan juga registrasi akun yang akan bekerja sebagaimana mestinya.

**Sudah kami uji di host baru dan berjalan dengan baik!**
## 🪲 Penyebab Kesalahan Yang Biasanya Terjadi

- Host dan Port database di `.env` yang tidak sesuai.
- Salah peletakan directory project. (Wajib didalam `www` atau `htdocs` atau sejenisnya agar dapat langsung dijalankan)
- Tidak menjalankan console terminal sesuai instruksi.
- Apache / MySQL yang tidak jalan.
- Komponen program yang digunakan merupakan versi lama.
- Jika tidak dapat registrasi, mungkin API Key Email sudah *expired* (Seharusnya tidak)
##  🍻 Kel. Aseprite

- [@Vincentalun12](https://github.com/Vincentalun12) - Vincent [Frontend & Backend Programmer]
- [@jupitvq](https://github.com/jupitvq) - Jupiter - [UI/UX Designer & Ideas]
- Halimah
- Leona
