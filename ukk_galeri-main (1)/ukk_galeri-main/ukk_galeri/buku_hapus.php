<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM album WHERE id_buku=$id");
?>
<script>
    alert('Hapus data berhasil');
    location.href = "index.php?page=buku";
</script>