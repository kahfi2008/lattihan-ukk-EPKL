<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistem E-PKL')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f6f9;
            color: #333;
        }

        nav {
            background-color: #2563eb;
            padding: 15px 30px;
            color: white;
        }

        nav h2 {
            margin: 0 0 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 30px;
        }

        .container {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }

        th {
            background-color: #2563eb;
            color: white;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f8fafc;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 13px;
        }

        .badge-success {
            background-color: #dcfce7;
            color: #166534;
        }

        .badge-danger {
            background-color: #fee2e2;
            color: #991b1b;
        }

        footer {
            margin-top: 30px;
            padding: 20px;
            text-align: center;
            background-color: #1e293b;
            color: white;
        }
    </style>
</head>

<body>

    <nav>
        <h2>Sistem Informasi E-PKL</h2>

        <a href="{{ route('kompetensi.index') }}">Kompetensi</a>
        <a href="{{ route('siswa.index') }}">Siswa</a>
        <a href="{{ route('perusahaan.index') }}">Perusahaan</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Sistem E-PKL
    </footer>

</body>

</html>
