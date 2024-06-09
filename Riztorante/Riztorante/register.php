<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register as Admin</title>
<style>
    body {
        background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20240522/pngtree-abstract-blur-coffee-shop-cafe-and-restaurant-image_15683670.jpg'); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: Arial, sans-serif;
        color: #a91e1e;
    }

    .container {
        width: 100%;
        max-width: 400px;
        padding: 20px;
        background: rgba(255, 255, 255, 0.9); /* Tambahkan transparansi */
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #a91e1e;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #a91e1e;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #891717e5;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #a91e1e;
    }
</style>
<script>
    function showAlert(event) {
        event.preventDefault(); // Mencegah submit form secara default
        alert('Register Successful');
        event.target.submit(); // Melanjutkan submit form setelah alert
    }
</script>
</head>
<body>
<div class="container">
    <h2>Register</h2>
    <form action="kregister.php" method="post" onsubmit="showAlert(event)">
        <label for="namereg">Name:</label>
        <input type="text" id="namereg" name="namereg" required />

        <label for="emailreg">Email:</label>
        <input type="email" id="emailreg" name="emailreg" required />

        <label for="passreg">Password:</label>
        <input type="password" id="passreg" name="passreg" required />
        
        <button type="submit">Register</button>
    </form>
</div>
</body>
</html>
