<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

   .navbar {
        background: #002366;
        padding: 15px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* kiri - kanan */
    }

    .navbar-left {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .navbar ul li {
        margin-right: 20px;
    }

    .navbar ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }
    
    .login-button {
        background: #ffffff;
        color: #002366;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }


    footer {
        background: #333;
        /* abu-abu gelap */
        color: white;
        padding: 20px 40px;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        
    }

    .footer-left p {
        margin: 0;
        font-size: 14px;
    }

    .footer-right {
        text-align: right;
        font-size: 14px;
    }

    .footer-right h4 {
        margin: 0 0 5px 0;
        font-size: 16px;
        font-weight: bold;
    }

    .footer-right p {
        margin: 0;
        line-height: 1.6;
    }

    .content {
        padding: 20px;
    }
</style>

<body>
   <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <img src="https://unair.ac.id/wp-content/uploads/2021/04/Logo-Universitas-Airlangga-UNAIR.png"
                style="height:50px;">
            <ul>
                <li><a href="/RSH/Home.php">Home</a></li>
                <li><a href="/RSH/StrukturOrgan.php">Struktur Organisasi</a></li>
                <li><a href="/RSH/LayananUmum.php">Layanan Umum</a></li>
                <li><a href="/RSH/VisiMisi.php">Visi Misi dan Tujuan</a></li>
            </ul>
        </div>
        <a href="/RSH/login.php" class="login-button">Login</a>
    </div>

    <div class="content">
        <h2>Poliklinik</h2>
        <p>Poliklinik adalah layanan rawat jalan dimana pelayanan kesehatan hewan dilakukan tanpa pasien menginap.
            Poliklinik melayani tindakan observasi, diagnosis, pengobatan, rehabilitasi medik, serta pelayanan kesehatan
            lainnya seperti permintaan surat keterangan sehat. Tindakan observasi dan diagnosis, juga bisa diteguhkan
            dengan berbagai macam pemeriksaan yang bisa kami lakukan, misalnya pemeriksaan sitologi, dermatologi,
            hematologi, atau pemeriksaan radiologi, ultrasonografi, bahkan pemeriksaan elektrokardiografi. Bilamana
            diperlukan pemeriksaan-pemeriksaan lain yang diperlukan seperti pemeriksaan kultur bakteri, atau pemeriksaan
            jaringan/histopatologi, dan lain-lain kami bekerja sama dengan Fakultas Kedokteran Hewan Universitas
            Airlangga untuk membantu melakukan pemeriksaan-pemeriksaan tersebut. Selain itu kami mempunyai rapid test
            untuk pemeriksaan cepat, untuk meneguhkan diagnosa penyakit-penyakit berbahaya pada kucing seperti
            panleukopenia, calicivirus, rhinotracheitis, FIP, dan pada anjing seperti parvovirus, canine distemper.</p>

        <p>Layanan kesehatan hewan di poliklinik yang kami lakukan antara lain:</p>
        <ul>
            <li>Rawat jalan</li>
            <li>Vaksinasi</li>
            <li>Akupuntur</li>
            <li>Kemoterapi</li>
            <li>Fisioterapi</li>
            <li>Mandi terapi</li>
        </ul>

        <h2>Rawat Inap</h2>
        <p>Rawat inap dilakukan pada pasien-pasien yang berat atau parah dan membutuhkan perawatan intensif. Pasien akan
            diobservasi dan mendapat perawatan intensif dibawah pengawasan dokter dan paramedis yang handal. Sebelum
            rawat inap, klien wajib mengisi inform konsen yang artinya klien telah diberi penjelasan yang detail tentang
            kondisi penyakit pasien dan menyetujui rencana terapi yang akan dijalankan sepengetahuan klien. Klien juga
            diberitahu biaya yang dibebankan untuk semua layanan. RSHP menerima pembayaran tunai maupun kartu debit
            bank.</p>

        <h2>Bedah</h2>
        <ul> <!-- untuk bullet list utama -->
            <li>tindakan bedah minor <!-- untuk isi list pertama -->
                <ul> <!-- untuk bullet list yang didalam list utama -->
                    <li>Jahit luka</li> <!-- untuk isi listnya  -->
                    <li>Kastrasi</li>
                    <li>Othematoma</li>
                    <li>Scaling – root planning</li>
                    <li>Ekstraksi gigi</li>
                </ul>
            </li>

            <li>tindakan bedah mayor
                <ul>
                    <li>Gastrotomi; Entrotomi; Enterektomi; Salivary mucocele</li>
                    <li>Ovariohisterektomi; Sectio caesar; Piometra</li>
                    <li>Sistotomi; Urethrostomi</li>
                    <li>Fraktur tulang </li>
                    <li>hernia diafragmatika</li>
                    <li>Hernia perinealis</li>
                    <li>Hernia inguinalis</li>
                    <li>Eksisi tumor</li>
                </ul>
            </li>
        </ul>

        <h2>Pemeriksaan</h2>
        <ul>
            <li>Pemeriksaan Sitologi</li>
            <li>Pemeriksaan Dermatologi</li>
            <li>Pemeriksaan Hematologi</li>
            <li>Pemeriksaan Radiografi</li>
            <li>Pemeriksaan Ultrasonografi</li>
        </ul>
        <p>Selain layanan medis, Rumah Sakit Hewan Pendidikan Universitas Airlangga juga melayani grooming pada hewan kesayangan.</p>


        <!-- TABEL -->
        <div class="table-section">
            <h2>Jadwal Dokter Jaga</h2>
            <table class="jadwal">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Nama Dokter</th>
                        <th>Spesialisasi</th>
                        <th>Jam Praktik</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Senin</td>
                        <td>drh. Andi</td>
                        <td>Bedah</td>
                        <td>08.00 - 14.00</td>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>drh. Budi</td>
                        <td>Interna</td>
                        <td>10.00 - 16.00</td>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td>drh. Clara</td>
                        <td>Kardiologi</td>
                        <td>09.00 - 15.00</td>
                    </tr>
                    <tr>
                        <td>Kamis</td>
                        <td>drh. Dewi</td>
                        <td>Dermatologi</td>
                        <td>08.00 - 14.00</td>
                    </tr>
                    <tr>
                        <td>Jumat</td>
                        <td>drh. Eko</td>
                        <td>Umum</td>
                        <td>08.00 - 12.00</td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>

    <!-- footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <p>Copyright Universitas Airlangga.</p>
            </div>
            <div class="footer-right">
                <h4>RUMAH SAKIT HEWAN PENDIDIKAN</h4>
                <p>GEDUNG RS HEWAN PENDIDIKAN<br>
                    rshp@fkh.unair.ac.id<br>
                    Telp : 031 5927832<br>
                    Kampus C Universitas Airlangga<br>
                    Surabaya 60115, Jawa Timur</p>
            </div>
        </div>
    </footer>
</body>

</html>