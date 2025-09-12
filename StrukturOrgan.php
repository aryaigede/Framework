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

</style>

<body style="text-align:center; font-family:Arial, sans-serif; margin:0; padding:0;"> <!-- dibuat teks rata tengah, font Arial, tanpa jarak margin & padding -->

  <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <img src="https://unair.ac.id/wp-content/uploads/2021/04/Logo-Universitas-Airlangga-UNAIR.png"
                style="height:50px;">
            <ul>
                <li><a href="/RSH_OOP/Home.php">Home</a></li>
                <li><a href="/RSH_OOP/StrukturOrgan.php">Struktur Organisasi</a></li>
                <li><a href="/RSH_OOP/LayananUmum.php">Layanan Umum</a></li>
                <li><a href="/RSH_OOP/VisiMisi.php">Visi Misi dan Tujuan</a></li>
            </ul>
        </div>
        <a href="/RSH_OOP/login.php" class="login-button">Login</a>
    </div>

    <!-- judul -->
    <div
        style="display: flex; justify-content: center; align-items: center; gap: 50px; text-align: center; margin-top: 20px;"> <!-- dibuat pakai Flexbox biar sejajar horizontal, tengah, ada jarak 50px -->
        <img src="https://www.freeiconspng.com/uploads/garuda-pancasila-15.png" style="height:80px;">
        <p style="font-weight:bold; margin:0;">
            STRUKTUR PIMPINAN <br>
            RUMAH SAKIT HEWAN PENDIDIKAN <br>
            UNIVERSITAS AIRLANGGA
        </p>
        <img src="https://tse4.mm.bing.net/th/id/OIP.ZwihoyZEq9nliT1FdgGUXAHaHa?rs=1&pid=ImgDetMain&o=7&rm=3"
            style="height:80px;">
    </div>



    <!-- Direktur -->
    <div style="margin:20px auto;"> <!-- jarak margin atas-bawah 20px, dan otomatis posisi tengah -->
        <p style="margin-top:5px; font-size:14px;">DIREKTUR</p>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyyLg8jc0a6UJL-sLDLjG1MkBuIZ6YB8T6Kg&s" alt="Direktur"
            style="width:150px; height:200px; object-fit:cover; border:2px solid black;">
        <h4 style=" margin-top:5px;">Dr. Ira Sari Yudaniayanti, M.P, drh.</h4>
    </div>

    <!-- Wakil Direktur -->
    <div style="display:flex; justify-content:center; gap:50px; margin-top:20px;"> <!-- pakai Flexbox lagi biar dua wakil direktur sejajar dan ada jarak 50px -->
        <div>
            <p style="margin-top:5px; font-size:14px;">
                WAKIL DIREKTUR 1 <br>
                PELAYANAN MEDIS, PENDIDIKAN DAN PENELITIAN
            </p>
            <img src="https://unair.ac.id/wp-content/uploads/2023/12/Nusdianto-Triakoso.webp" alt="Wakil Direktur 1"
                style="width:150px; height:200px; object-fit:cover; border:2px solid black;">
            <h4 style=" margin-top:5px;">Dr. Nusianto Triakoso, M.P, drh.</h4>
        </div>

        <div>
            <p style="margin-top:5px; font-size:14px;">
                WAKIL DIREKTUR 2 <br>
                SUMBER DAYA MANUSIA, SARANA PRASARANA DAN KEUANGAN
            </p>
            <img src="https://e-journal.unair.ac.id/public/site/images/admin/197602222015043201-1625241368.jpg" alt="Wakil Direktur 2"
                style="width:150px; height:200px; object-fit:cover; border:2px solid black;">
            <h4 style=" margin-top:5px;">Dr. Milyayu Soneta S., M.Vet, drh.</h4>
        </div>
    </div>

</h4>
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