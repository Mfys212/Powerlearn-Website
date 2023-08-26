<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Powerlearn</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="login">
        <div class="row no-gutters">

            <div class="col-5 col-md-5 d-none d-md-block">
                <img src="img/Login/Gambar_sign.png" alt="" class="banner">
            </div>
    
            <div class="col-lg-7 col-md-7 no-gutters justify-content-center align-items-center">
                <div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 rightside px-5">
                   <a href="#"> <img src="img/Login/iconlogopowerlearn.png" class="pb-3"></a>
                    <form action="<?php if(isset($_GET['login']) && $_GET['login'] == 'guru'){echo "guru/login.php";}else{echo "login_.php";} ?>" method="POST">
                        <div class="form-group">
                            <label for="address"><h4 class="tekss">Email</h4></label>
                            <input type="email" name="email" class="form-control rounded-pill" rows="3" id="email" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="address2"><h4 class="tekss">Kata Sandi</h4></label>
                            <input type="password" name="password" class="form-control rounded-pill" id="password" placeholder="">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-block rounded-pill">Masuk</button>
                        </div>
                        <?php
                            if(isset($_GET['login']) && $_GET['login'] == 'guru'){
                               echo "";
                            }else{
                                ?>
                                <div class="pt-3 text-center text-dark">Belum punya akun?
                                    <a href="sign_up.php" class="link teks_tebel">daftar disini</a>
                                </div>
                                <?php
                            }
                        ?>
                        <hr noshade size="100%">
                        <div>
                            <button type="button" class="btn btn-dark btn-block rounded-pill">Masuk / Daftar</button>
                        </div>
                    </form>
                    <div class="pt-3 text-center text-dark">
                        <a href="#" class="link">Lupa Password?</a>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</body>

</html>