<!-- Heni Artha Uli br Turnip
121140080
Pemrograman Web RC -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Pemrograman Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h1> UJIAN AKHIR SEMESTER PEMROGRAMAN WEB RC</h1>
    </header>

    <div class="content">
        <div class="sidebar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="read.php">Data Akademik</a></li>
                
            </ul>
        </div>

        <div class="biodata">
            <div class="biodata" id="biodata">
                <h2> Biodata </h2>
                <p> Nama: Heni Artha Uli Br Turnip<br>
                 NIM : 121140080<br> 
                 Kelas : RC </p>
            </div>
            

            <div class="tugas" id="tugas">
                <h2> Ketentuan Tugas </h2>
                <p> UAS Pemrograman Web ini terdiri dari empat bagian yang mencakup berbagai aspek pengembangan sebuah web. Keempat bagian saling berkaitan dan akan bersinergi membentuk sebuah aplikasi web. Berikut adalah panduan untuk ujian ini: </p>

                <h3> Bagian 1: Client-side Programming (Bobot: 30%) </h3>
                    <p>(15%) Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM.<br>
                    Panduan :
                        Buat form input dengan minimal 4 elemen input (teks, checkbox, radio, dll.)<br>
                        Menampilkan data dari server kedalam sebuah halaman menggunakan tag `table`<br>
                    <br>

                    (15%) Buatlah beberapa event untuk menghandle interaksi pada halaman web<br>
                    <p>Panduan :
                    
                        Tambahkan minimal 3 event yang berbeda untuk menghandle form di atas<br>
                        Implementasikan JavaScript untuk validasi setiap input sebelum diproses oleh PHP<br>
                     </p><br>

                <h3> Bagian 2: Server-side Programming (Bobot: 30%) </h3>
                    <p>(20%) Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar.<br>
                    Panduan : <br>
                        Gunakan metode POST atau GET pada formulir.<br>
                        Parsing data dari variabel global dan lakukan validasi disisi server<br>
                        Simpan ke basisdata termasuk jenis browser dan alamat IP pengguna<br>
                    </p><br>

                    <p>(10%) Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda<br>
                    Panduan : <br>
                        Objek yang dibuat harus terkait dengan konteks pengembangan web saat ini.<br>
                    </p><br>

                <h3>Bagian 3: Database Management (Bobot: 20%)</h3>
                    <p>(5%) Buatlah sebuah tabel pada database MySQL<br>
                    Panduan :<br>
                        Lampirkan langkah-langkah dalam membuat basisdata dengan syntax basisdata<br>
                    </p><br>

                    <p> (5%) Buatlah konfigurasi koneksi ke database MySQL pada file PHP. Pastikan koneksi berhasil dan dapat diakses. <br>
                    Panduan : <br>
                        Gunakan konstanta atau variabel untuk menyimpan informasi koneksi (host, username, password, nama database).<br>
                    </p><br>

                    <p>(10%) Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data.<br>
                    Panduan :<br>
                        Gunakan query SQL yang sesuai dengan skenario yang diberikan.<br>
                    </p><br>

                <h3>Bagian 4: State Management (Bobot: 20%)</h3>
                    <p>(10%) Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session.<br>
                    Panduan : <br>
                        Gunakan `session_start()` untuk memulai session.<br>
                        Simpan informasi pengguna ke dalam session.<br>
                    </p><br>

                    <p>(10%) Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript.<br>
                    Panduan : <br>
                        Buat fungsi-fungsi untuk menetapkan, mendapatkan, dan menghapus cookie.<br>
                        Gunakan browser storage untuk menyimpan informasi secara lokal.<br>
                    </p><br>

                <h3>Bagian Bonus: Hosting Aplikasi Web (Bobot: 20%)</h3>
                <p>Bagian bonus ini akan memberikan bobot tambahan 20% jika Anda berhasil meng-host aplikasi web yang Anda buat. Jawablah pertanyaan-pertanyaan berikut:<br>
                    (5%) Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?<br>
                    (5%) Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.<br>
                    (5%) Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?<br>
                    (5%) Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.</p><br>
                
            </div>


            <div class="catatan" id="catatan">
                <span> Catatan</span><br>
                    <p>Ujian ini dirancang untuk menguji pemahaman dan keterampilan Anda dalam pengembangan web di sisi klien dan server.<br>
                    Pertimbangkan untuk memberikan komentar pada kode Anda untuk menjelaskan langkah-langkah atau alasan tertentu.<br>
                    Pastikan kode Anda bersih, terstruktur, dan mudah dimengerti.<br>
            </div>

        </div>
    </div>

    <footer>
        &copy; Hak Cipta 2023
    </footer>
</body>

</html>
