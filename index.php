
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/formstyle.css">
    <title>Registrasi</title>
</head>

<body>
    <div class="form-registrasi">
        <h1>Form Registrasi</h1>
    <form method="POST">
        <p><label for="input_nama">Nama</label></p>
        <input type="text" id="input_nama" name="nama" placeholder="Nama Lengkap anda">
        <p><label for="input_alamat">Alamat</label></p>
        <textarea name="alamat" id="input_alamat" cols="30" rows="10" placeholder="Alamat anda"></textarea>
        <p><label for="input_ultah">Tanggal lahir</label></p>
        <input type="date" name="ultah" id="input_ultah">
        <p><label for="input_hobi">Hobi</label></p>
        <select name="hobi" id="input_hobi">
            <option value="membaca">Membaca</option>
            <option value="berenang">Berenang</option>
            <option value="panahan">Panahan</option>
            <option value="berenang">Berenang</option>
        </select>
        <p>Jenis Kelamin</p>
        <input type="radio" name="inputGender" id="genderP" value="Pria">Pria
        <input type="radio" name="inputGender" id="genderW" value="Wanita">Wanita
        <p><label for="input_password">Password</label></p>
        <input type="password" name="password" id="input_password">
        <input type="submit" value="submit" name="submit">
    </form>
    </div>
</body>

</html>

<?php
if(isset($_POST['submit'])){
    if(empty($_POST['nama']) || empty($_POST['alamat']) ||empty($_POST['ultah' ])|| empty($_POST['hobi' ])|| empty($_POST['inputGender' ])|| empty($_POST['password' ])){
        print "Lengkapi form";
    }else{
        $nama=$_POST['nama'];
        $alamat = $_POST['alamat'];
        $tanggal=$_POST['ultah'];
        $hobi=$_POST['hobi'];
        $gender=$_POST['inputGender'];
        $password=$_POST['password'];
        $passwordCrypted = crypt($password);
        $buka=fopen("hasil.html",'a');
        fwrite($buka,"{$nama}|");
        fwrite($buka,"{$alamat}|");
        fwrite($buka,"{$tanggal}|");
        fwrite($buka,"{$hobi}|");
        fwrite($buka,"{$gender}|");
        fwrite($buka,"{$passwordCrypted}\n");
        fclose($buka);
        print "data berhasil disimpan";
        echo "<script>window.location.href='tabel.php'</script>";
    }
}?>