<?php
// dashboard.php
// Halaman Dashboard Nadhea
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Nadhea</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f0f4f8;
            margin: 0;
            padding: 0;
        }
        header {
            background: #4b8bbe;
            color: white;
            padding: 15px 25px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        nav {
            background: #ffffff;
            padding: 10px 0;
            display: flex;
            justify-content: center;
            gap: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        nav a {
            text-decoration: none;
            color: #4b8bbe;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #2d6da3;
        }
        main {
            padding: 30px;
        }
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
            padding: 25px;
            max-width: 600px;
            margin: 40px auto;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        button {
            background: #4b8bbe;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            margin-top: 15px;
        }
        button:hover {
            background: #3a6fa1;
        }
        footer {
            text-align: center;
            padding: 15px;
            background: #4b8bbe;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>🌸 Dashboard Nadhea 🌸</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">Data</a>
        <a href="#">Laporan</a>
        <a href="#">Logout</a>
    </nav>

    <main>
        <div class="card">
            <h2>Hai, Nadhea!</h2>
            <p>Selamat datang di halaman dashboard pribadi kamu 💻</p>
            <p>Kamu bisa menambahkan fitur seperti data pengguna, laporan, atau manajemen produk di sini.</p>
            <button onclick="alert('Semangat terus belajar Git & PHP, Nadhea! 💪')">Klik Aku</button>
        </div>
    </main>

    <footer>
        &copy; 2025 | Dibuat dengan 💙 oleh Nadhea
    </footer>
</body>
</html>

