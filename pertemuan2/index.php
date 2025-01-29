<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Peserta</title>
</head>
<body>
<h1>BIODATA PESERTA</h1>

<form action="Form.html" method="post">
    <p>SILAHKAN ISI DAFTAR BERIKUT </p>
    <label>NISN : </label> <input type="number" name="nisn"> <br>
    <label>NAMA LENGKAP : </label><input type="text" name="nama lengkap"> <br>
    <label>TEMPAT LAHIR : </label> <input type="text" name="tempat lahir"> <br>
    <p>
        <label>TANGGAL LAHIR :</label>
        <input type="date" name="tanggal">
    </p>
    <p>
        <label>GENDER :</label>
        <input type="radio" name="gender" value="L">LAKI-LAKI
        <input type="radio" name="gender" value="P">PEREMPUAN 
    </p>
    <p>
        <label>AGAMA :</label>
        <select name="Agama">
            <option value="0">Silahkan Pilih Agama Anda</option>
            <option value="1">PROTESTAN</option>
            <option value="2">KATOLIK</option>
            <option value="3">ISLAM</option>
            <option value="4">KONGHUCU</option>
            <option value="5">BUDHA</option>
            <option value="6">HINDU</option>
        </select>
    </p>
    <p>
        <label>ALAMAT :</label>
        <br />
        <textarea name="ALAMAT" cols= "50" rows="10"></textarea>
    </p>
    <label>ASAL SEKOLAH : </label> <input type="text" name="asal sekolah"
    placeholder="NAMA SEKOLAH ANDA"> <br>
    <p>
        <label>PILIHAN JURUSAN 1 :</label>
        <select name="Jurusan" id="">
            <option value=".">Silahkan Pilih Jurusan Anda</option>
            <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis </option>
            <option value="AKL">Akuntansi Keuangan Lembaga</option>
            <option value="PM">Pemasaran</option>
            <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
            <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
            <option value="BCF">BroadCasting & perFilman</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="SP">Seni Pertunjukan</option>
            <option value="PH">Perhotelan</option>
            <option value="KL">Kuliner</option>
        </select>
    </p>
    <p>
        <label>PILIHAN JURUSAN 2 :</label>
        <select name="Jurusan" id="">
            <option value=".">Silahkan Pilih Jurusan Anda</option>
            <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis </option>
            <option value="AKL">Akuntansi Keuangan Lembaga</option>
            <option value="PM">Pemasaran</option>
            <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
            <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
            <option value="BCF">BroadCasting & perFilman</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="SP">Seni Pertunjukan</option>
            <option value="PH">Perhotelan</option>
            <option value="KL">Kuliner</option>
        </select>
    </p>
    <p>
        <label>PILIHAN JURUSAN 3 :</label>
        <select name="Jurusan" id="">
            <option value=".">Silahkan Pilih Jurusan Anda</option>
            <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis </option>
            <option value="AKL">Akuntansi Keuangan Lembaga</option>
            <option value="PM">Pemasaran</option>
            <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
            <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
            <option value="BCF">BroadCasting & perFilman</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="SP">Seni Pertunjukan</option>
            <option value="PH">Perhotelan</option>
            <option value="KL">Kuliner</option>
        </select>
    </p>
    <p>
        <Label>EKSTRAKULIKULER :</Label>
        <input type="checkbox" name="OSIS">Organisasi Siswa Intra Sekolah (OSIS)
        <input type="checkbox" name="GDS">Gerakan Disiplin Siswa
        <input type="checkbox" name="PASKIB">Paskibraka <br>
        <input type="checkbox" name="REMAS">Remaja Masjid Al-Kautsar
        <input type="checkbox" name="ENCASA">English Club Esemkasa
        <input type="checkbox" name="PMR">Palang Merah Remaja <br>
        <input type="checkbox" name="FUTSAL">Futsal
        <input type="checkbox" name="BASKET">Basket
        <input type="checkbox" name="VOLY">Voly <br>
        <input type="checkbox" name="TEATER">Teater Kusuma
        <input type="checkbox" name="TARI">Tari
    </p>
    <p>
        <input type="submit" name="submit" value="Daftar">
    </p>
</form>
</body>
</html>