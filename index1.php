<html>
<head>
    <title>Tutorial Cara Menghitung Luas Segitiga Menggunakan PHP</title>
</head>
<body>
    <h1>Form Hitung Luas Segitiga Dengan PHP</h1>
    <h2>Isi Data:</h2>
    <form action="segitiga.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Alas Segitiga</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
                <td>Tinggi Segitiga</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
</body>
</html>