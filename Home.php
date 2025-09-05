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
        text-align: center;
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


    .content {
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .content-text {
        width: 60%;
    }

    .content img {
        max-width: 350px;
        border-radius: 5px;
    }

    .btn-yellow {
        background: #ffeb3b;
        border: none;
        padding: 10px 20px;
        margin: 10px 0;
        font-weight: bold;
        cursor: pointer;
    }

    .btn-blue {
        background: #03a9f4;
        border: none;
        padding: 10px 20px;
        color: white;
        font-weight: bold;
        cursor: pointer;

    }

    h2 {
        margin: 20px 0;
    }

    .news {
        padding: 20px;
    }

    .news-container {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }



    .news-card {
        flex: 1;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .news-content {
        padding: 15px;
        text-align: left;
        flex: 1;
    }

    .read-more {
        text-align: right;
        font-size: 14px;
        color: #007BFF;
        text-decoration: none;
        padding: 10px;
        margin-top: auto;
    }

    .news-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }



    .news-content h3 {
        font-size: 16px;
        margin: 5px 0;
    }

    .news-content small {
        color: gray;
        display: block;
        margin-bottom: 10px;
    }

    .news-content p {
        font-size: 14px;
        color: #444;
    }



    .maps {
        margin: 20px;
    }

    footer {
        background: #333;
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


    <!-- Content -->
    <div class="content">
        <div class="content-text">
            <h1>Rumah Sakit Hewan Pendidikan Universitas Airlangga</h1>
            <p>
                Rumah Sakit Hewan Pendidikan Universitas Airlangga berinovasi untuk selalu meningkatkan kualitas
                pelayanan,
                maka dari itu Rumah Sakit Hewan Pendidikan Universitas Airlangga mempunyai fitur pendaftaran online
                yang mempermudah untuk mendaftarkan hewan kesayangan anda.
            </p>
            <button class="btn-blue">INFORMASI JADWAL DOKTER JAGA</button>
        </div>
        <div class="content-video">
            <iframe width="470" height="265" src="https://www.youtube.com/embed/rCfvZPECZvE" title="Profil RSHP"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

    <!-- CONTENT BERITA -->
    <div class="news">
        <h2>BERITA TERKINI</h2>
        <div class="news-container">
            <!-- Card 1 -->
            <div class="news-card">
                <img src="https://media.istockphoto.com/id/1213727367/id/foto/sekelompok-sapi-bersama-sama-berkumpul-di-ladang-bahagia-dan-gembira-dan-langit-cerah-berawan.jpg?s=612x612&w=0&k=20&c=eHcOAmzaLh1ySoC6wNZ5-ddeOJRGjkCLg3SImzIOZgE=" alt="Seminar">
                <div class="news-content">
                    <h3>Seminar dan Workshop Update Haematology</h3>
                    <small>2 November 2023</small>
                    <p>RSHP Universitas Airlangga akan mengadakan kegiatan seminar dan workshop tentang update penyakit
                        Haematology [...]</p>
                </div>
                <a href="https://rshp.unair.ac.id/seminar-dan-workshop-update-haematology-retaled-diseases-dan-blood-transfusion-pada-anjing-dan-kucing/"
                    class="read-more">Read more...</a>
            </div>

            <!-- Card 2 -->
            <div class="news-card">
                <img src="https://thf.bing.com/th/id/OIP.eZWNfa-T67_CEt1TsJ0PJQHaE8?w=262&h=180&c=7&r=0&o=5&cb=thfc1&dpr=1.5&pid=1.7" alt="Kunjungan SMAN">
                <div class="news-content">
                    <h3>Tupai Pergi Ke Bulan!</h3>
                    <small>29 Agustus 2023</small>
                    <p>lorem ipsum dolor sit accelerometer</p>
                </div>
                <a href="https://rshp.unair.ac.id/kunjungan-sman-1-2-3-dan-4-bangkalan-di-rshp-unair/"
                    class="read-more">Read more...</a>
            </div>

            <!-- Card 3 -->
            <div class="news-card">
                <img src="https://thf.bing.com/th/id/OIP.HqgSZdhXKDrjrresvhFQAwHaFu?w=236&h=182&c=7&r=0&o=7&cb=thfc1&dpr=1.5&pid=1.7&rm=3"
                    alt="Kerjasama SMK Tutur">
                <div class="news-content">
                    <h3>Sekor Singa Lepas Dari Kandangnya</h3>
                    <small>28 januari 2023</small>
                    <p>Seekor Singa Lepas Dari Kandangnya</p>
                </div>
                <a href="https://rshp.unair.ac.id/penandatangani-kerjasama-smk-tutur-dengan-rshp/"
                    class="read-more">Read more...</a>
            </div>
        </div>
    </div>


    <div class="maps">
        <h3>Lokasi RSHP</h3>
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7915.482022032093!2d112.788135!3d-7.270285!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd40a9784f5%3A0xe756f6ae03eab99!2sAnimal%20Hospital%2C%20Universitas%20Airlangga!5e0!3m2!1sen!2sus!4v1755484449799!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <p>Copyright Universitas Airlangga 2025.</p>
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