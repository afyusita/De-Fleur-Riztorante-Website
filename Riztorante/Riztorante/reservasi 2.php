<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Restoran</title>
    <link rel="stylesheet" href="reservasicss.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #711515; /* Warna latar belakang */
            color: #fde7cf;
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
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 80px; /* Tambahkan margin top untuk memberikan ruang antara navbar dan form */
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
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.5s;
        }
        .popup-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .popup.show {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body>
    <!--========== NAVBAR ===========-->
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
                <p class="fst-italic">Reservasi</p>
                <p class="fw-light">Latest information and Partnership in De Fleur Ristorante</p>
            </div>
        </nav>
        <form id="reservasiForm" method="post">
            <label for="pax">Pax:</label>
            <input type="number" id="pax" name="pax" required />

            <label for="tanggal">Date:</label>
            <input type="date" id="tanggal" name="date" required />

            <label for="jam">Time:</label>
            <input type="time" id="jam" name="time" required />

            <label for="nama">Name:</label>
            <input type="text" id="nama" name="name" required />

            <label for="no_telf">Phone number:</label>
            <input type="number" id="no_telf" name="phonenumber" required />

            <label for="notes">Notes:</label>
            <textarea id="notes" name="notes"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <div id="popup" class="popup">
        <div class="popup-content">
            <p>Reservasi Berhasil!</p>
            <button onclick="closePopup()">OK</button>
        </div>
    </div>

    <script>
        document.getElementById('reservasiForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            var formData = new FormData(this);

            fetch('kreservasi.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Show the popup
                document.getElementById('popup').classList.add('show');
                // Clear the form
                document.getElementById('reservasiForm').reset();
            })
            .catch(error => console.error('Error:', error));
        });

        function closePopup() {
            var popup = document.getElementById('popup');
            popup.classList.remove('show');
            window.location.href = '#reservasi'; // Redirect to reservasi section
        }
    </script>
</body>
</html>
