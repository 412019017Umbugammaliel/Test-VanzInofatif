<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header-section">
        <h1>Selamat Datang di Kedai Kopi Licuk</h1>
        <p>Membawa Nikmatnya Kopi dan Makanan Ringan</p>
    </header>

    <div class="slideshow-container">
        <div class="slide fade">
            <img src="img/slider1.jpg" alt="Gambar 1">
        </div>
        <div class="slide fade">
            <img src="img/slider2.jpg" alt=" Gambar 2">
        </div>
        <div class="slide fade">
            <img src="img/slider3.jpg" alt="Gambar 2">
        </div>
    </div>

    <section class="produk">
        <div class="produk-item">
            <img src="img/produk1.jpg" alt="Espresso">
            <h2>EkspresiKop</h2>
            <p>Harga: Rp 30.000</p>
        </div>
        <div class="produk-item">
            <img src="img/produk2.jpg" alt="Cappuccino">
            <h2>Cappu cin</h2>
            <p>Harga: Rp 40.000</p>
        </div>
        </div>
        <div class="produk-item">
            <img src="img/produk3.jpg" alt="licuk">
            <h2>Licuk ApaTo</h2>
            <p>Harga: Rp 35.000</p>
        </div>
        </div>
        <div class="produk-item">
            <img src="img/produk4.jpg" alt="licuk">
            <h2>HuhuKop Licuk</h2>
            <p>Harga: Rp 45.000</p>
        </div>
        </div>
        <div class="produk-item">
            <img src="img/produk5.jpg" alt="licuk">
            <h2>KopTapanjar Licuk</h2>
            <p>Harga: Rp 30.000</p>
        </div>
    </section>

    <section class="deskripsi">
        <div class="deskripsi-container">
            <h2>Tentang Kami</h2>
            <p>
                Produk kedai kopi adalah beragam minuman kopi seperti espresso, cappuccino, dan latte yang disajikan
                dengan
                variasi rasa dan penyajian yang berbeda. Selain itu, produk kedai kopi juga mencakup makanan ringan
                seperti
                kue, roti, dan sandwic yang biasanya disajikan untuk menemani minuman kopi. Produk ini menciptakan
                pengalaman sosial dan nikmat bagi pengunjung yang menyukai kopi dan suasana kedai kopi.
            </p>
            <p>
                Kami memiliki komitmen untuk memberikan produk terbaik kepada pelanggan kami.
            </p>

        </div>
    </section>

    <section class="contact-us">
        <h2>Hubungi Kami</h2>
        <form action="backend_script.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" rows="4" required></textarea>
            </div>
            <button type="submit">Kirim</button>
        </form>

        <a href="view_contacts.php" class="btn btn-primary">Pesan Terbaru</a>
    </section>


    <footer>
        <div class="social-media-icons">
            <a href=https://www.facebook.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("slide");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Ganti gambar setiap 2 detik
        }
    </script>
</body>

</html>