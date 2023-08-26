<!DOCTYPE html>
<html lang="en">
<?php include "admin/koneksi.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Powerlearn</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/margin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<?php
    if(isset($_POST['save'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        $kelas = $_POST['kelas'];
        $password = $_POST['kata_sandi'];
        $sqli = mysqli_query($mysqli, "SELECT * FROM siswa WHERE email = '$email'");
        $data = mysqli_num_rows($sqli);
        if($data > 0){
            $warning = "<div class='alert alert-warning'>Email Sudah Ada!, Silahkan Login ..</div>";
        }else{
            $sql = mysqli_query($mysqli, "INSERT INTO siswa (nama_siswa, email, no_hp, alamat, password, id_kelas) VALUES ('$nama', '$email', '$no_hp', '$alamat', '$password', '$kelas')");
            if($sql){
                ?>
                <script>
                    alert("Sukses Mendaftar Silahkan Login ..");
                    window.location.href = 'login.php';
                </script>
                <?php
            }else{
               $warning = "<div class='alert alert-danger'>Gagal Mendaftar, Coba Lagi Nanti ..</div>";
            }
        }  
    }
?>

<body>
    <div class="row no-gutters">
        <div class="col-5 col-md-5">
            <img src="img/Login/Gambar_sign.png" alt="">
        </div>
        
        <div class="col-lg-7 col-md-7 no-gutters justify-content-center align-items-center">
        <form action="" method="POST">
            <div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 rightside">
                <a href="#"><img src="img/Login/iconlogopowerlearn.png" class="pb-3"></a>
                <?php
                    if(isset($warning)){
                        echo $warning;
                    }
                ?>
                <div class="form-group">
                    <label for="nama"><h4 class="tekss">Nama Lengkap</h4></label>
                    <input type="text" class="form-control rounded-pill" name="nama" id="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="email"><h4 class="tekss">Email</h4></label>
                    <input type="text" class="form-control rounded-pill" name="email" id="email" placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                    <label for="no_hp"><h4 class="tekss">No Handphone </h4></label>
                    <input type="text" class="form-control rounded-pill" name="no_hp" id="no_hp" placeholder="081212345678">
                </div>
                <div class="form-group">
                    <label for="alamat"><h4 class="tekss">Alamat</h4></label>
                    <textarea type="text" class="form-control" name="alamat" id="alamat" rows="3" placeholder="Alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="kelas"><h4 class="tekss">Kelas</h4></label>
                    <select name="kelas" id="kelas" class="form-control rounded-pill">
                        <option value="" selected disabled>Pilih</option>
                        <?php
                            $sql = mysqli_query($mysqli, "SELECT * FROM kelas");
                            while($array = mysqli_fetch_array($sql)){
                                ?>
                                <option value="<?php echo $array['id_kelas']?>"><?php echo $array['kelas']?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kata_sandi"><h4 class="tekss">Kata Sandi</h4></label>
                    <input type="text" name="kata_sandi" class="form-control rounded-pill" id="kata_sandi" placeholder="Password">
                </div>
                <div>
                    <button type="submit"  name="save" class="btn btn-primary btn-block rounded-pill">Daftar</button>
                </div>
                <div class="pt-3 text-center text-dark">Sudah punya akun?
                    <a href="login.php" class="link teks_tebel">Masuk disini</a>
                </div>
                <hr noshade size="100%">
                <div>
                    <button type="button" class="btn btn-dark btn-block rounded-pill">Masuk / Daftar</button>
                </div>
                <!-- <div class="pt-3 text-center text-dark">
                    <a href="#" class="link">Lupa Password?</a>
                </div> -->
            </div>
            </form>               
        </div>
        
    </div>

</body>
<script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>