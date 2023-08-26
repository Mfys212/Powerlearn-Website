<?php $active_detail="active"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

    <!-- nav -->
   
<body>
<?php include "header.php"; ?>

    <div class="allsection">
        <nav class="back pt-3">
            <button class="button">
                <img src="img/Login/Ceklis.png" alt="">
            </button>
        </nav>
        <div class="row mb-3 bayar_header text-center ">
            <div class="col py-3">
                <h3>#Biaya Belajar</h3>
                <div class="col-lg-12">
                    <h6>Menyediakan dan memperluas akses terhadap pendidikan berkualitas melalui teknologi</h6>
                </div>
            </div>
        </div>
        <section class="bayar_detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 bayar_detail pt-3">
                        <div class="btn-group btn-group-toggle pb-3" data-toggle="buttons">
                            <label class="btn btn-secondary active "
                                style="width: 150px; background-color: <?php if(isset($_GET['year'])){echo "white";}else{echo "#2992F5";} ?>; color: white;">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked><a href="detail_pembayaran.php" class="<?php if(isset($_GET['year'])){echo "text-body";}else{echo "text-white";} ?>">Monthly</a> 
                            </label>
                            <label class="btn btn-secondary "
                                style="width: 150px; background-color: <?php if(isset($_GET['year']) && $_GET['year'] == 'yes'){echo "#2992F5";}else{echo "white";} ?>; color: black;">
                                <input type="radio" name="options" id="option2" autocomplete="off"><a href="detail_pembayaran.php?year=yes" class="<?php if(isset($_GET['year']) && $_GET['year'] == 'yes'){echo "text-white";}else{echo "text-body";} ?>">Yearly</a> 
                            </label>
                        </div>
                        <div class="row py-2">
                            <div class="col d-flex">
                                <h6>Download Upto 10Mbps</h6>
                                <label class="form-check-label ml-5">
                                    <input type="checkbox" class="form-check-input" value="" checked>
                                </label>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col d-flex">
                                <h6>Upload Upto 5Mbps</h6>
                                <label class="form-check-label ml-5">
                                    <input type="checkbox" class="form-check-input" value="" checked>
                                </label>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col d-flex">
                                <h6>Free 3 Email Account</h6>
                                <label class="form-check-label ml-5">
                                    <input type="checkbox" class="form-check-input" value="" checked>
                                </label>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col d-flex">
                                <h6>Support Remote CCTV mobile</h6>
                                <label class="form-check-label ml-5">
                                    <input type="checkbox" class="form-check-input" value="" checked>
                                </label>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col d-flex">
                                <h6>Free Installasi*</h6>
                                <label class="form-check-label ml-5">
                                    <input type="checkbox" class="form-check-input" value="" checked>
                                </label>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col d-flex">
                                <h6>Free Router Wireless</h6>
                                <label class="form-check-label ml-5">
                                    <input type="checkbox" class="form-check-input" value="" checked>
                                </label>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col d-flex">
                                <h6>Free Access Point</h6>
                                <label class="form-check-label ml-5">
                                    <input type="checkbox" class="form-check-input" value="" checked>
                                </label>
                            </div>
                        </div>
                    </div>
                    <?php 
                       if(isset($_GET['year'])){
                        $sql = mysqli_query($mysqli, "SELECT * FROM member a INNER JOIN jenis_member b ON a.id_jenis_member = b.id_jenis_member WHERE jenis_member = 'Tahunan'");
                       }else{
                        $sql = mysqli_query($mysqli, "SELECT * FROM member a INNER JOIN jenis_member b ON a.id_jenis_member = b.id_jenis_member WHERE jenis_member = 'Bulanan'");
                       }
                    ?>
                    <div class="col-lg-6 card-bayar">
                        <?php
                            while($jets = mysqli_fetch_array($sql)){
                                ?>
                                <div class="row py-1 justify-content-center align-items-center">
                                    <div class="card">
                                        <div class="card-body d-flex">
                                            <label class="form-check-label1 ml-2 pt-3">
                                                <input type="checkbox" class="form-check-input" value="" checked>
                                            </label>
                                            <div class="col-6">
                                                <h5>Jets Combo</h5>
                                                <button type="button" class="btn btn-sm btn-outline-primary rounded-pill"
                                                    data-toggle="modal" data-target="#pembayaranModal">Bayar
                                                    Sekarang</button>
                                            </div>
                                            <div class="col pt-3" style=" width: 180px;">
                                                <h5><?php echo "Rp. ".number_format($jets['harga'])."/".$jets['member'];?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>
                        <!-- <div class="row py-1 justify-content-center">
                            <div class="card">
                                <div class="card-body d-flex">
                                    <label class="form-check-label1 ml-2 pt-3">
                                        <input type="checkbox" class="form-check-input" value="" checked>
                                    </label>
                                    <div class="col-6">
                                        <h5>Jets Combo</h5>
                                        <button type="button" class="btn btn-sm btn-outline-primary rounded-pill"
                                            data-toggle="modal" data-target="#pembayaranModal">Bayar
                                            Sekarang</button>
                                    </div>
                                    <div class="col pt-3" style=" width: 180px;">
                                        <h5>$90/month</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1 justify-content-center">
                            <div class="card">
                                <div class="card-body d-flex">
                                    <label class="form-check-label1 ml-2 pt-3">
                                        <input type="checkbox" class="form-check-input" value="" checked>
                                    </label>
                                    <div class="col-6">
                                        <h5>Jets Combo</h5>
                                        <button type="button" class="btn btn-sm btn-outline-primary rounded-pill"
                                            data-toggle="modal" data-target="#pembayaranModal">Bayar
                                            Sekarang</button>
                                    </div>
                                    <div class="col pt-3" style=" width: 180px;">
                                        <h5>$90/month</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1 justify-content-center">
                            <div class="card">
                                <div class="card-body d-flex">
                                    <label class="form-check-label1 ml-2 pt-3">
                                        <input type="checkbox" class="form-check-input" value="" checked>
                                    </label>
                                    <div class="col-6">
                                        <h5>Jets Combo</h5>
                                        <button type="button" class="btn btn-sm btn-outline-primary rounded-pill"
                                            data-toggle="modal" data-target="#pembayaranModal">Bayar
                                            Sekarang</button>
                                    </div>
                                    <div class="col pt-3" style=" width: 180px;">
                                        <h5>$90/month</h5>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

    <!-- Remake Footer -->
    <?php include "footer.php"; ?>

<!-- Modal -->
<div class="modal fade" id="pembayaranModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
        <div class="modal-content p-3">
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <img src="img/Rectangle 69.png" class="rounded float-left" alt="...">
                        <p class="card-text text-center pt-3 ">9877654310</p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <img src="img/Rectangle 69.png" class="rounded float-left" alt="...">
                        <p class="card-text text-center pt-3">9877654310</p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <img src="img/Rectangle 69.png" class="rounded float-left" alt="...">
                        <p class="card-text text-center pt-3">9877654310</p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <img src="img/Rectangle 69.png" class="rounded float-left" alt="...">
                        <p class="card-text text-center pt-3">9877654310</p>
                    </div>
                </div>
            </div>
            <div class="modal-body d-flex">
                <div class="class">
                    <button type="button" class="btn btn-outline-dark btn-lg rounded-pill"
                        style="width: 200px; height: 50px;">Upload
                        image</button>
                </div>
                <div class="text text-center pt-3 pl-5">
                    <p>Nama file</p>
                </div>
            </div>
            <div>
                <div class="class px-3 pb-5">
                    <button type="button" class="btn btn-primary btn-sm rounded-pill">Submit now</button>
                </div>
            </div>
        </div>

    </div>
</div>

</div>



</html>