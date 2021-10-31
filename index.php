<?php 
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
} else {
    $user = $_SESSION['user'];
    $data = $_SESSION['data'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 - Yulius - 672019014</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<style>
table td,
th {
    padding: 15px 15px !important;
}

table {
    color: #6e707c !important;
}

#detail tr {
    font-size: 20px !important;
}

h3 {
    opacity: 0.9;
}
</style>

<body>
    <div class="container">
        <h2 class="text-center fw-bold mt-5 text-primary">TUGAS 2 - PHP SESSION</h2>
        <p class="text-muted text-center h5 mb-5">Yulius - 672019014</p>
        <hr class="">
        <div class="d-flex justify-content-between align-items-center my-4 px-4">
            <h5 class="text-muted">Welcome back, <?= $data['nama']; ?></h5>
            <a href="logout.php" class="btn btn-danger px-4">Logout</a>
        </div>
        <hr>
        <section id="detail" class="my-4 bg-light p-4 rounded shadow-sm">
            <h3 class="px-2 pt-3 fw-bold text-primary">Detail Data Diri</h3>
            <hr align="left" width="10%" class="mx-2 bg-primary h1 mt-2 rounded mb-4 "
                style="height: 5px;opacity:0.75;">
            <div class="col-md-5 mt-3">
                <table class="table table-borderless table-light">
                    <tr>
                        <th>Nama</th>
                        <td>: <?= $data['nama']; ?></td>
                    </tr>
                    <tr>
                        <th>IPK</th>
                        <td>: <?= number_format($data['ipk'],2); ?></td>
                    </tr>
                    <tr>
                        <th>Asal</th>
                        <td>: <?= $data['asal']; ?></td>
                    </tr>
                </table>
            </div>
        </section>
        <nav class="mx-auto d-flex justify-content-center my-4">
            <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="index.php">Data Diri</a></li>
                <li class="page-item"><a class="page-link" href="kst.php">Kartu Studi Tetap</a></li>
                <li class="page-item"><a class="page-link" href="transkrip.php">Transkrip Nilai</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>
<?php } ?>