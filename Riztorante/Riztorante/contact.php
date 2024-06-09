<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Kontak</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <style>
      body {
            background-image: url('https://wallpapers.com/images/featured/restaurant-background-2ez77umko2vj5w02.jpg'); /* Ganti dengan path gambar latar belakang Anda */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        header.l-header {
            width: 100%;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.9); /* Warna latar belakang dengan transparansi */
            border-radius: 10px;
            padding: 20px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 80px; /* Berikan margin-top yang cukup agar tidak tertutup navbar */
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container label {
            margin-top: 10px;
            font-weight: bold;
            color: #891717e5;
        }

        .form-container input, .form-container textarea, .form-container button {
            margin-top: 5px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .form-container button {
            background-color: #891717e5;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        .form-container button:hover {
            background-color: #6d1114;
        }

        .navbar-brand p.fst-italic {
            font-weight: bold;
            font-size: 45px;
            font-style: italic;
            color: #891717e5;
            margin-bottom: 0px;
            text-align: center;
        }

        .navbar-brand p.fw-light {
            font-size: 12px;
            color: #891717e5;
            margin-top: -5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!--========== NAVBAR ==========-->
    <header class="l-header" id="header" style="background-color: bisque;">
        <nav class="nav bd-container">
            <img src="LOGO DE FLEUR.png" class="logo" style="width: 130px;">
            <div class="nav__menu" id="nav-menu">
                 <ul class="nav__list">
                    <li class="nav__item"><a href="home.html" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="about us.html" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="service.html" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="menu.html" class="nav__link">Menu</a></li>
                    <li class="nav__item"><a href="reservasi 2.php" class="nav__link">Reservasi</a></li>
                    <li class="nav__item"><a href="contact.php" class="nav__link">Contact</a></li>
                    <li class="nav__item"><a href="news.html" class="nav__link">News&Events</a></li>
                    <li class="nav__item"><a href="partnership.html" class="nav__link">Partnership</a></li>
                    <li class="nav__item"><a href="carir.html" class="nav__link">Career</a></li>
                    <li class="nav__item"><a href="feedback.html" class="nav__link">Feedback</a></li>
                    <li class="nav__item"><a href="login.html" class="nav__link">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="form-container">
        <nav class="navbar">
            <div class="navbar-brand">
                <p class="fst-italic">Contact Us</p>
                <p class="fw-light">Our team will contact you as soon as possible</p>
            </div>
        </nav>

        <form action="kontak.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Input your name">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Input your email">

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Input your phone number">

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Send your message" style="height:200px"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
