<?php
session_start();
unset($_SESSION['mulai']);
ob_start();
include "../admin/koneksi.php";

    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $n = 0;
    $jawaban1 = $_POST['jwb1'];
    $jawaban2 = $_POST['jwb2'];
    $jawaban3 = $_POST['jwb3'];
    $jawaban4 = $_POST['jwb4'];
    $jawaban5 = $_POST['jwb5'];

    $in = mysqli_query($mysqli, "INSERT INTO jawaban (id_detail_kuis, id_siswa, jawaban) VALUES ('$p1', '$_SESSION[id_siswa]', '$jawaban1')");
    $sql = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_detail_kuis = '$p1'");
    $cek = mysqli_fetch_array($sql);
    if($cek['jwb_bnr'] == $jawaban1){
        $n++;
    }
    $in = mysqli_query($mysqli, "INSERT INTO jawaban (id_detail_kuis, id_siswa, jawaban) VALUES ('$p2', '$_SESSION[id_siswa]', '$jawaban2')");
    $sql = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_detail_kuis = '$p2'");
    $cek = mysqli_fetch_array($sql);
    if($cek['jwb_bnr'] == $jawaban2){
        $n++;
    }
    $in = mysqli_query($mysqli, "INSERT INTO jawaban (id_detail_kuis, id_siswa, jawaban) VALUES ('$p3', '$_SESSION[id_siswa]', '$jawaban3')");
    $sql = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_detail_kuis = '$p3'");
    $cek = mysqli_fetch_array($sql);
    if($cek['jwb_bnr'] == $jawaban3){
        $n++;
    }
    $in = mysqli_query($mysqli, "INSERT INTO jawaban (id_detail_kuis, id_siswa, jawaban) VALUES ('$p4', '$_SESSION[id_siswa]', '$jawaban4')");
    $sql = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_detail_kuis = '$p4'");
    $cek = mysqli_fetch_array($sql);
    if($cek['jwb_bnr'] == $jawaban4){
        $n++;
    }
    $in = mysqli_query($mysqli, "INSERT INTO jawaban (id_detail_kuis, id_siswa, jawaban) VALUES ('$p5', '$_SESSION[id_siswa]', '$jawaban5')");
    $sql = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_detail_kuis = '$p5'");
    $cek = mysqli_fetch_array($sql);
    if($cek['jwb_bnr'] == $jawaban5){
        $n++;
    }

    $s = 5 - $n;
    if($n == 5){
        $nilai = 100;
    }elseif($n == 4){
        $nilai = 80;
    }elseif($n == 3){
        $nilai = 60;
    }elseif($n == 2){
        $nilai =  40;
    }elseif($n == 1){
        $nilai = 20;
    }elseif($n == 0){
        $nilai == $n;
    }

    if($n == 0){
        header("location:detailnilailatihan.php?mapel_id=".$_POST['mapel_id']."&materi_id=".$_POST['materi_id']."&video_id=".$_POST['video_id']."&kuis_id=".$_POST['kuis_id']."&b=".$n."&s=".$s."&ni=".$n."&j1=".$jawaban1."&j2=".$jawaban2."&j3=".$jawaban3."&j4=".$jawaban4."&j5=".$jawaban5);
    }else{
        header("location:detailnilailatihan.php?mapel_id=".$_POST['mapel_id']."&materi_id=".$_POST['materi_id']."&video_id=".$_POST['video_id']."&kuis_id=".$_POST['kuis_id']."&b=".$n."&s=".$s."&ni=".$nilai."&j1=".$jawaban1."&j2=".$jawaban2."&j3=".$jawaban3."&j4=".$jawaban4."&j5=".$jawaban5);
    }

?>