<?php 
    session_start();
    session_destroy();
    ?>
    <script>
        alert("Berhasil Keluar ...");
        window.location.href = "index.php";
    </script>
    <?php
?>