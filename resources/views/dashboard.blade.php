<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
    <style>
        html {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style for the left-side navigation menu */
        .sidenav {
            height: 100%;
            width: 250px; /* Adjust the width as needed */
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333; /* Background color for the menu */
            padding-top: 20px;
        }

        .sidenav a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white; /* Text color for the menu items */
            display: block;
        }

        .sidenav h1 {
            padding: 10px 15px;
            text-decoration: none;
            color: white; /* Text color for the menu items */
            display: block;
            margin: 0; /* Remove margin for the h1 element */
        }

        .sidenav a:hover {
            background-color: #555; /* Background color on hover */
        }

        /* Main content style (to push content to the right of the menu) */
        .content {
            margin-left: 260px;
            margin-top: 6%; /* Should be slightly larger than the menu width */
            padding: 20px;
            display: flex;
            flex-wrap: wrap; /* Enable wrapping */
            justify-content: flex-start; /* Start laying out from the left */
        }

        .card {
            width: 200px;
            height: 250px;
            background: white;
            border-radius: 10px;
            padding: 20px;
            transition: border-radius 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin: 10px; /* Add margin between cards */
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            box-shadow: inset 0 -3em 3em rgba(0,0,0,0.1),
                        0 0  0 2px rgb(190, 190, 190),
                        0.3em 0.3em 1em rgba(0,0,0,0.3);
        }

        .navlogin {
            background-color: #555;
            position: fixed;
            top: 0;
            left: 250px; /* Adjust this value to match the menu width */
            width: 100%;
            padding-left: 20px;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Left-side navigation menu -->
    <div class="sidenav">
        <h1>Pembangunan Library</h1>
        <a href="#">Dashboard</a>
        <a href="#">Buku</a>
        <a href="#">Peminjaman</a>
        <a href="#">Pengembalian</a>
        <a href="#">Anggota</a>
        <a href="#">Pengunjung</a>
    </div>

    <div class="navlogin">
            <h1>Selamat Datang Admin</h1>
        </div>
    <div class="content">
        <div class="card">
            <h2>
                KOLEKSI BUKU
            </h2>
        </div>
        <div class="card">
            <h2>
                PEMINJAMAN
            </h2>
        </div>
        <div class="card">
            <h2>
                PENGEMBALIAN
            </h2>
        </div>
        <div class="card">
            <h2>
                ANGGOTA
            </h2>
        </div>
        <div class="card">
            <h2>
                PENGUNJUNG HARI INI
            </h2>
        </div>
    </div>
</body>
</html>
