<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard DPKA UB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .stats {
            display: flex;
            gap: 20px;
            margin: 20px 0;
        }
        .stat {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 150px;
        }
        .table-container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #bdc3c7;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #34495e;
            color: white;
        }
        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-edit {
            background-color: #f39c12;
            color: white;
        }
        .btn-view {
            background-color: #3498db;
            color: white;
        }
        .btn-delete {
            background-color: #e74c3c;
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
        <div class="stats d-flex justify-content-end">
            <div class="stat">
                <h3>Total Template</h3>
                <p>66</p>
            </div>
            <div class="stat">
                <h3>Tahun 2024</h3>
                <p>9</p>
            </div>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Judul</th>
                        <th>Tanggal Pembuatan</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Newsletter Alumni</td>
                        <td>Juni</td>
                        <td>2024</td>
                        <td>Passion Kuliah Bisa Cuan</td>
                        <td>01/05/2024</td>
                        <td>
                            <div class="container">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-edit">Edit</button>
                                    <button class="btn btn-view">View</button>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-delete">Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Newsletter Mahasiswa</td>
                        <td>Juni</td>
                        <td>2024</td>
                        <td>Tingkatkan Wawasan Literasimu</td>
                        <td>07/05/2024</td>
                        <td>
                            <div class="container">
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-edit">Edit</button>
                                        <button class="btn btn-view">View</button>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-delete">Delete</button>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Ucapan Hari Besar</td>
                        <td>Juni</td>
                        <td>2024</td>
                        <td>Kenaikan Isa Al Masih</td>
                        <td>09/05/2024</td>
                        <td>
                            <div class="container">
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-edit">Edit</button>
                                        <button class="btn btn-view">View</button>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-delete">Delete</button>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Newsletter Alumni</td>
                        <td>Juni</td>
                        <td>2024</td>
                        <td>Beasiswa S2 Luar Negeri</td>
                        <td>16/05/2024</td>
                        <td>
                            <div class="container">
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-edit">Edit</button>
                                        <button class="btn btn-view">View</button>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-delete">Delete</button>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Newsletter Alumni</td>
                        <td>Juni</td>
                        <td>2024</td>
                        <td>Lowongan Kerja BUMN</td>
                        <td>23/05/2024</td>
                        <td>
                            <div class="container">
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-edit">Edit</button>
                                        <button class="btn btn-view">View</button>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-delete">Delete</button>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Ucapan Hari Besar</td>
                        <td>Juni</td>
                        <td>2024</td>
                        <td>Hari Raya Waisak</td>
                        <td>23/05/2024</td>
                        <td>
                            <div class="container">
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-edit">Edit</button>
                                        <button class="btn btn-view">View</button>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-delete">Delete</button>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Newsletter Mahasiswa</td>
                        <td>Juni</td>
                        <td>2024</td>
                        <td>Open Class Microsoft</td>
                        <td>28/05/2024</td>
                        <td>
                            <div class="container">
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-edit">Edit</button>
                                        <button class="btn btn-view">View</button>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-delete">Delete</button>
                                    </div>
                                </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>