<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Newsletter Alumni</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #ecf0f1;
            height: 100vh;
            padding-top: 20px;
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar .logo img {
            width: 100px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px 20px;
        }

        .sidebar ul li a {
            color: #ecf0f1;
            text-decoration: none;
            display: block;
        }

        .sidebar ul li a:hover,
        .sidebar ul li.active a {
            background-color: #34495e;
        }

        .main-content {
            flex-grow: 1;
            background-color: #fff;
            padding: 20px;
        }

        .main-content header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .main-content header h1 {
            margin: 0;
        }

        .profile-icon img {
            width: 40px;
            border-radius: 50%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #34495e;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .news-section {
            margin-bottom: 30px;
        }

        .news-section h2 {
            color: #34495e;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .save-button,
        .preview-button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .save-button {
            background-color: #2ecc71;
            color: #fff;
        }

        .preview-button {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="sidebar">
            <div class="logo">
                <img src="path_to_logo" alt="DPKA UB Logo">
                <h2>DPKA UB</h2>
            </div>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Newsletter Mahasiswa</a></li>
                <li class="active"><a href="#">Newsletter Alumni</a></li>
                <li><a href="#">Ucapan Hari Besar</a></li>
                <li><a href="#">Informasi Lowongan</a></li>
                <li><a href="#">Download</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <header>
                <h1>Create Newsletter Alumni</h1>
                <div class="profile-icon">
                    <img src="path_to_profile_icon" alt="Profile Icon">
                </div>
            </header>
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
                <div class="news-section">
                    <h2>Berita Utama</h2>
                    <div class="form-group">
                        <label for="judul-berita-utama">Judul Berita</label>
                        <input type="text" id="judul-berita-utama" name="judul-berita-utama">
                    </div>
                    <div class="form-group">
                        <label for="link-berita-utama">Link Berita</label>
                        <input type="text" id="link-berita-utama" name="link-berita-utama">
                    </div>
                    <div class="form-group">
                        <label for="url-gambar-utama">URL Gambar</label>
                        <input type="text" id="url-gambar-utama" name="url-gambar-utama">
                    </div>
                </div>
                <div class="news-section">
                    <h2>Berita 1</h2>
                    <div class="form-group">
                        <label for="judul-berita-1">Judul Berita</label>
                        <input type="text" id="judul-berita-1" name="judul-berita-1">
                    </div>
                    <div class="form-group">
                        <label for="link-berita-1">Link Berita</label>
                        <input type="text" id="link-berita-1" name="link-berita-1">
                    </div>
                    <div class="form-group">
                        <label for="url-gambar-1">URL Gambar</label>
                        <input type="text" id="url-gambar-1" name="url-gambar-1">
                    </div>
                </div>
                <div class="news-section">
                    <h2>Berita 2</h2>
                    <div class="form-group">
                        <label for="judul-berita-2">Judul Berita</label>
                        <input type="text" id="judul-berita-2" name="judul-berita-2">
                    </div>
                    <div class="form-group">
                        <label for="link-berita-2">Link Berita</label>
                        <input type="text" id="link-berita-2" name="link-berita-2">
                    </div>
                    <div class="form-group">
                        <label for="url-gambar-2">URL Gambar</label>
                        <input type="text" id="url-gambar-2" name="url-gambar-2">
                    </div>
                </div>
                <div class="news-section">
                    <h2>Berita 3</h2>
                    <div class="form-group">
                        <label for="judul-berita-3">Judul Berita</label>
                        <input type="text" id="judul-berita-3" name="judul-berita-3">
                    </div>
                    <div class="form-group">
                        <label for="link-berita-3">Link Berita</label>
                        <input type="text" id="link-berita-3" name="link-berita-3">
                    </div>
                    <div class="form-group">
                        <label for="url-gambar-3">URL Gambar</label>
                        <input type="text" id="url-gambar-3" name="url-gambar-3">
                    </div>
                </div>
                <div class="news-section">
                    <h2>Berita 4</h2>
                    <div class="form-group">
                        <label for="judul-berita-4">Judul Berita</label>
                        <input type="text" id="judul-berita-4" name="judul-berita-4">
                    </div>
                    <div class="form-group">
                        <label for="link-berita-4">Link Berita</label>
                        <input type="text" id="link-berita-4" name="link-berita-4">
                    </div>
                    <div class="form-group">
                        <label for="url-gambar-4">URL Gambar</label>
                        <input type="text" id="url-gambar-4" name="url-gambar-4">
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="save-button">Save</button>
                    <button type="button" class="preview-button">Preview</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
