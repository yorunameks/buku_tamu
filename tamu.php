<?php
    require_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-2" id="navbarNav">
            <div class="navbar-nav me-auto">
                <a href="index.php" class="nav-link">Home</a>
                <a href="tamu.php" class="nav-link">Tamu</a>
            </div>
        </div>
        <form class="d-flex" method="GET" action="">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="col-md-12">
    <div class="card mt-2">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>                    
                        <th>Nomor Telepon</th>
                        <th>Tanggal Dan Waktu</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $search = isset($_GET['search']) ? $_GET['search'] : '';
                        $sql = "SELECT * FROM user";
                        if (!empty($search)) {
                            $sql .= " WHERE nama LIKE '%$search%' OR jenis_kelamin LIKE '%$search%'";
                        }

                        $result = mysqli_query($connect, $sql);
                        $no = 1;
                        while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                        <td><?php echo $data['no_telpon']; ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td><?php echo $data['keterangan']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
