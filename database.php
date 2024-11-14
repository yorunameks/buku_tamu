<?php
    $connect = mysqli_connect('localhost', 'root', '', 'buku_tamu');

    if(isset($_POST['kirim'])) {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $notelepon = $_POST['notelepon'];
        $tanggal = date('Y-m-d H:i:s');
        $keterangan = $_POST['keterangan'];

        $query = "INSERT INTO user VALUES ('', '$nama', '$jk', '$notelepon', '$tanggal', '$keterangan')";

        $sql = mysqli_query($connect, $query);

        echo"<script>
            alert('Berhasil');
            location.href='index.php';
        </script>";
    }
?>