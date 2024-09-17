<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Newsletter Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .sidebar {
            background-color: #1C3659;
            width: 250px;
            height: 100vh;
            position: fixed;
            color: white;
            padding-top: 20px;
        }
        .sidebar h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 15px 20px;
        }
        .sidebar ul li:hover {
            background-color: #34495e;
            cursor: pointer;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .user-icon {
            width: 30px;
            height: 30px;
            background-color: #34495e;
            border-radius: 50%;
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="file"], select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
        }
        .btn-container {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-save {
            background-color: #27ae60;
            color: white;
        }
        .btn-preview {
            background-color: #3498db;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar sticky-top" style="background-color: #1C2659;" >
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
            <img src="{{ asset('images/logo.png') }}" alt="DPKA" style="height:3rem;">
            </a>
        </div>
        </nav>
        <div class="sidebar">
        <ul>
            <li><a href="/home">Dashboard</a></li>
            <li><a href="/nmhs">Newsletter Mahasiswa</a></li>
            <li><a href="/nalm">Newsletter Alumni</a></li>
            <li><a href="/uhb">Ucapan Hari Besar</a></li>
            <li><a href="/ilo">Informasi Lowongan</a></li>
            <li><a href="/download">Download</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <h2>Create Newsletter Alumni</h2>
        </div>
        <form>
            <label for="bulan">Bulan</label>
            <select id="bulan" name="bulan">
                <option>Jan</option>
                <option>Feb</option>
                <option>Mar</option>
                <option>Apr</option>
                <option>Mei</option>
                <option>Jun</option>
                <option>Jul</option>
                <option>Ags</option>
                <option>Sep</option>
                <option>Okt</option>
                <option>Nov</option>
                <option>Des</option>
            </select>
            <label for="tahun">Tahun</label>
            <select id="tahun" name="tahun">
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
            </select>
            <h3>Berita Utama</h3>
            <label for="judul">Judul Berita</label>
            <input type="text" id="judul" name="judul" placeholder="Judul Berita">
            <label for="link">Link Berita</label>
            <input type="text" id="link" name="link" placeholder="Link Berita">
            <label for="link">URL Gambar</label>
            <input type="text" id="link" name="link" placeholder="URL Gambar">

            <h3>Berita 1</h3>
            <label for="judul">Judul Berita</label>
            <input type="text" id="judul" name="judul" placeholder="Judul Berita">
            <label for="link">Link Berita</label>
            <input type="text" id="link" name="link" placeholder="Link Berita">
            <label for="link">URL Gambar</label>
            <input type="text" id="link" name="link" placeholder="URL Gambar">

            <h3>Berita 2</h3>
            <label for="judul">Judul Berita</label>
            <input type="text" id="judul" name="judul" placeholder="Judul Berita">
            <label for="link">Link Berita</label>
            <input type="text" id="link" name="link" placeholder="Link Berita">
            <label for="link">URL Gambar</label>
            <input type="text" id="link" name="link" placeholder="URL Gambar">

            <h3>Berita 3</h3>
            <label for="judul">Judul Berita</label>
            <input type="text" id="judul" name="judul" placeholder="Judul Berita">
            <label for="link">Link Berita</label>
            <input type="text" id="link" name="link" placeholder="Link Berita">
            <label for="link">URL Gambar</label>
            <input type="text" id="link" name="link" placeholder="URL Gambar">

            <h3>Berita 4</h3>
            <label for="judul">Judul Berita</label>
            <input type="text" id="judul" name="judul" placeholder="Judul Berita">
            <label for="link">Link Berita</label>
            <input type="text" id="link" name="link" placeholder="Link Berita">
            <label for="link">URL Gambar</label>
            <input type="text" id="link" name="link" placeholder="URL Gambar">
                <button type="button" class="btn btn-save">Save</button>
                <button type="button" class="btn btn-preview">Preview</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
