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


    .content ul {
        list-style: none;
        padding: 0px;
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
        <h2>VISI</h2>
        <p>Menjadi Rumah Sakit Hewan Pendidikan terkemuka di tingkat nasional dan internasional dalam pemberian
            pelayanan paripurna, pendidikan, dan penelitian di bidang kesehatan hewan, yang unggul dan mandiri serta
            bermartabat berdasarkan moral, agama, etika dengan tetap berorientasi pada kesejahteraan masyarakat.</p>

        <h2>MISI</h2>
        <p>Menyelenggarakan fungsi pelayanan terintegrasi, bermutu dan mengutamakan keselamatan dan kesehatan pasien
            (klien).<br>
            Menyelenggarakan pendidikan dan pelatihan terintegrasi bidang kedokteran hewan dan kesehatan lainnya untuk
            menghasilkan lulusan atau tenaga kesehatan yang kompeten di bidangnya.<br>
            Melakukan penelitian terintegrasi berbasis pada keunggulan bidang kedokteran hewan dan kesehatan lainnya
            yang berorientasi pada produk inovasi.<br>
            Menjadi pusat rujukan pelayanan kedokteran hewan dan kesehatan lain yang unggul.<br>
            Mengembangkan manajemen rumah sakit hewan yang produktif, efisien, bermutu, dan berbasis kinerja.</p>

        <h2>TUJUAN</h2>
        <ul> Menjadi Rumah Sakit Hewan yang adaptif, kreatif dan proaktif terhadap tuntutan perkembangan ilmu pengetahuan dan teknologi di bidang pengobatan kesehtan hewan </ul>
        <ul> Menjadi Rumah Sakit Hewan mandiri yang bertatakelola baik </ul>
    </div>


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