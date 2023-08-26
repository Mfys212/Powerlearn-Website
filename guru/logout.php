<?php
session_start();
session_destroy();
?>
<script>
    alert("Berhasil Keluar ...");
    document.location = "index.php";
</script>
<?php