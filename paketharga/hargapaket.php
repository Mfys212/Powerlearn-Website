<?php
    session_start();
    include "../admin/koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styling -->
    <link rel="stylesheet" href="css_harga/style.css">
    <link rel="stylesheet" href="css_harga/all.css">

    <title>Hello, world!</title>
  </head>
  <body>
<?php
$r = mysqli_query($mysqli, "SELECT * FROM kelas WHERE id_kelas = '$_SESSION[kelas]'");
$p = mysqli_fetch_array($r);
?>
    <div class="container-fluid">
        <div class="container">

            <div class="row py-lg-3 py-3 mt-3 rounded">
                <div class="col-lg-4  bg-white offset-lg-4 col-12 text-center p-2 rounded ">
                    <h2 class="subtitle">Pilih Paket Termahalmu! Langganan Sekarang!</h2>
                </div>
            </div>
            
            <div class="row py-lg-1 py-1  mb-2 rounded">
                <div class="col-lg-4  bg-primary offset-lg-4 col-12 text-center p-3 rounded">
                    <button class="btn btn-o-primary-dt">Kelas <?php echo $p['kelas']?></button>
                </div>
            </div>

           
            <div class="row pb-5">
            <?php
                
                $sql = mysqli_query($mysqli, "SELECT * FROM member WHERE id_kelas = '$_SESSION[kelas]'");
                while($data = mysqli_fetch_array($sql)){
                    ?>
                <div class="col-lg-4 offset-lg-4 bg-white my-3 ">
                    <div class=" bg-white d-flex justify-content-start p-3">
                        <div class="m-2 rounded">
                        <?php
                            if($_SESSION['foto'] == ''){
                                ?>
                                <img src="../admin/foto_siswa/default.png" width="80px" height="80px" style="border-radius:50px;"/>
                                <?php
                            }else{
                                ?>
                                <img src="../admin/foto_siswa/<?php echo $_SESSION['foto']?>"  width="80px" height="80px" style="border-radius:50px;"/>
                                <?php
                            }
                        ?>
                        </div>
                        <div class="text-left p-lg-2">
                            <h5 class="sub-title" style="color: rgb(104, 103, 103);">Kelas <?php echo $p['kelas']?></h5>
                            <h5 class="paragraph" style="color: rgb(104, 103, 103);"><?php echo $data['member']?></h5>
                            <p class="sub-title text-danger"><?php echo "Rp. ".number_format($data['harga'])." ,-"; ?></p>
                            <!-- <div class="d-flex align-items-center ">
                                <p class="text-dark paragraph mt-3" style="font-size: 14px;">Jumlah Bulan</p>
                                <select class="custom-select rounded p-1 ms-3">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                    <option value="5">6</option>
                                  </select>
                            </div> -->

                        </div>
                    </div>
                    <?php
                        $ko = mysqli_query($mysqli, "SELECT * FROM jenis_member WHERE id_jenis_member = '$data[id_jenis_member]'");
                        $ok = mysqli_fetch_array($ko);
                    ?>
                    <p class="px-3" style="font-size: 14px;"> Powerlearn</p>
                    <div class="px-3 d-flex align-items-center" style="border-top: 1px solid #cec8c8c9; font-size: 14px;">
                        <p class="float-start mt-lg-3 me-lg-5 me-5 mt-3">Paket <?php echo $ok['jenis_member']?></p>
                        <a href="pembayaran.php?member_id=<?php echo $_GET['id_member']?>" class="float-end mt-lg-3 mt-3">
                            <p class="float-end sub-title">Bayar Sekarang</p>
                        </a>    
                    </div>
                </div>
                    <?php
                }
            ?>

                <!-- <div class="col-lg-4 offset-lg-4 bg-white my-3 ">
                    <div class=" bg-white d-flex justify-content-start p-3">
                        <div class="m-2 rounded">
                            <img class="img-fluid" src="img/profil_siswa/Ardi.png" alt="">
                        </div>
                        <div class="text-left p-lg-2">
                            <h5 class="sub-title" style="color: rgb(104, 103, 103);">Kelas 2</h5>
                            <h5 class="paragraph" style="color: rgb(104, 103, 103);">Langganan Persemester </h5>
                            <p class="sub-title text-danger">Rp862.500</p>
                            <div class="d-flex align-items-center ">
                                <p class="text-dark paragraph mt-3" style="font-size: 14px;">Jumlah Semester</p>
                                <select class="custom-select rounded p-1 ms-3">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                    <option value="5">6</option>
                                  </select>
                            </div>

                        </div>
                    </div>
                    <p class="px-3" style="font-size: 14px;"> Powerlearn</p>
                    <div class="px-3 d-flex align-items-center" style="border-top: 1px solid #cec8c8c9; font-size: 14px;">
                        <p class="float-start mt-lg-3 me-lg-5 me-5 mt-3">Periode 2021</p>
                        <a href="pembayaran.html" class="float-end mt-lg-3 mt-3">
                            <p class="float-end sub-title">Bayar Sekarang</p>
                        </a>
                    </div>
                </div> -->
                
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>