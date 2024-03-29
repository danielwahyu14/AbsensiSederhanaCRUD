<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #343a40; /* Dark background color */
            color: #e9ecef; /* Light text color */
        }

        .container {
            margin-top: 50px;
        }

        .custom-table {
            max-width: 80%;
            margin: 0 auto;
            border: 2px solid #6f42c1; /* Dark purple border */
            border-radius: 10px;
            overflow: hidden;
        }

        .custom-table th,
        .custom-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #6f42c1; /* Dark purple border */
        }

        .custom-table th {
            background-color: #6f42c1; /* Dark purple accent color */
            color: #fff; /* White text color */
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #fff; /* White background color */
            color: #343a40; /* Dark background text color */
        }

        h2 {
            color: #6f42c1; /* Dark purple text color */
            text-align: center;
        }

        center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 20px;
        }

        .btn-success {
            background-color: #6f42c1; /* Purple button color */
            border-color: #6f42c1;
        }

        .btn-success:hover {
            background-color: #593a8a; /* Slightly darker on hover */
            border-color: #593a8a;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kehadiran</th>
                    <th>Email</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data['nim'] }}</td>
                    <td>{{ $data['nama'] }}</td>
                    <td>{{ $data['umur'] }}</td>
                    <td>{{ $data['alamat'] }}</td>
                    <td>{{ $data['email'] }}</td>
                    <td>
                        @if ($data['foto'])
                            <img src="{{ url('storage/' . $data['foto']) }}" alt="Foto Mahasiswao">
                        @else
                            No Image
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

        <center>
            <a href="/read" class="btn btn-success">Tampilkan data</a>
        </center>
    </div>
</body>

</html>
