<!DOCTYPE html>
<html lang="en">
<head> <!-- kepala kerangka -->
    <!-- meta bisa dipakai atau tidak -->
    <meta charset="UTF-8"> <!-- pengenalan isi dari kata kata keseluruhan untuk browser -->        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- untuk menyesuaikan skala secara otomatis -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- meta tambahan -->
    <title>Membuat Form</title>
</head>
<body>
    <h2>FORMULIR :</h2>
    <br>
    <form action="" method=""> <!-- action digunakan untuk jika fail sudah jadi mau cetak kemana-->
    <!-- jika action menggunakan'#' makan berdiri sendiri-->
    <!-- method menampilkan data GET/POST-->
        <label for="">Nama Anda :</label>
        <input type="text" name="nama" placeholder="masukkan nama anda" size="50" maxlength="15"> <!-- name u/ nama jika mau dipanggil dan digunakan untuk sql-->
        <br><br>
        <label for="">Password :</label>
        <input type="password" name="pass" placeholder="masukkan password anda" size="50"> 
        <br><br>
        <label for="">Email :</label>
        <input type="email" name="email" placeholder="user@gmail.com" size="30">
        <br><br>
        <label for="">Tanggal Lahir :</label>
        <input type="date" name="tgl">
        <br><br>
        <label for="">Nilai HTML :</label>
        <input type="number" name="nilai" min="0" max="10">
        <br><br>
        <label for="">Upload Foto</label>
        <input type="file" name="upload">
        <br><br>
        <label for="">Jenis Kelamin</label>
        <input type="radio" name="jk" value="L">Laki-laki
        <input type="radio" name="jk" value="P">Perempuan
        <br><br>
        <label for="">Hobi</label>
        <input type="checkbox" name="hobi" value="futsal">Futsal
        <input type="checkbox" name="hobi" value="badminton">Badminton
        <input type="checkbox" name="hobi" value="basket">Bola Basket
        <input type="checkbox" name="hobi" value="voli">Bola Voli
        <br><br>
        <label for="">Pangkat/Gol :</label>
        <select name="">
            <option value="pa">Perwira</option>
            <option value="ba">Bintara</option>
            <option value="ta">Tamtama</option>
            <option value="pns">PNS</option>
        </select>
        <br><br>
        <label for="">Kolom Komentar :</label>
        <textarea name="komentar" cols="20" rows="10"></textarea>
        <br><br>
        <input type="submit" name="proses" value="Save">
        <input type="reset" name="unproses" value="Cancel">
    </form>
    <br>
    <hr size="5" color="black">
    <p align="left" id="bawah2"></p> <!-- link dari latihan 1 #bawah2-->
    <h2 align="center">FORMULIR KOPRAPOT PERSONIL<br><i>Pusinfolahta TNI TA 2024</i></h2>
    <center>
        <img src="img/logoTNI.png" alt="" width="100" height="100">
    </center>
    <br>
    <table border="1" cellpadding="10" cellspacing="2" width="75%" align="center">
        <tr bgcolor="yellow">
            <td colspan="3" align="center"><b>Koprapot Prajurit</b></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="masukkan nama anda" size="50" maxlength="15"></td>
        </tr>
        <tr>
            <td>NRP</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="masukkan nama anda" size="50" maxlength="15"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat" placeholder="masukkan tempat lahir" size="50" maxlength="15"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tglahir" placeholder="masukkan nama anda" size="50" maxlength="15"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td>
                <input type="password" name="pass" placeholder="masukkan password anda" size="50">
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td>
                <input type="radio" name="jk" value="L">Laki-laki
                <input type="radio" name="jk" value="P">Perempuan
            </td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td>:</td>
            <td>
                <input type="checkbox" name="hobi" value="futsal">Futsal
                <br>
                <input type="checkbox" name="hobi" value="badminton">Badminton
                <br>
                <input type="checkbox" name="hobi" value="basket">Bola Basket
                <br>
                <input type="checkbox" name="hobi" value="voli">Bola Voli
            </td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td>
                <select name="">
                    <option value="sarjana">Sarjana</option>
                    <option value="diploma">Diploma</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Komentar</td>
            <td>:</td>
            <td>
                <textarea name="komentar" cols="75" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>:</td>
            <td>
                <input type="file" name="upload">
            </td>
        </tr>
        <tr bgcolor="yellow">
            <td colspan="3" align="center">
                <input type="submit" name="proses" value="Save">
                <input type="reset" name="unproses" value="Cancel">
            </td>
        </tr>
    </table>
</body>
</html>