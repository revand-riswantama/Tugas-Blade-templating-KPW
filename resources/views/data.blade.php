<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="2">
        <thead>
            <tr>
                <th class="name" rowspan="2" bgcolor="#bdbdbd">Nama</th>
                <th class="group" colspan="3" bgcolor="#ffd600">Nilai</th>
            </tr>
            <tr>
                <th align="center">Kimia</th>
                <th align="center">Fisika</th>
                <th align="center">Biologi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Robby</td>
                <td>76</td>
                <td>80</td>
                <td>81</td>
            </tr>
            <tr>
                <td>Rendi</td>
                <td>84</td>
                <td>70</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Alfian</td>
                <td>96</td>
                <td>70</td>
                <td>71</td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="{{ route('home') }}">Kembali ke Landing Page</a>
    <br>
    <a href="{{ route('form') }}">Form Input Data</a>
</body>
</html>
