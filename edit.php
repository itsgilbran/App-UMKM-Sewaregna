<?php
include_once("connection.php");

if (isset($_POST['update'])) {

    $kodedagri = mysqli_real_escape_string($connection, $_POST['kodedagri']);
    $provinsi = mysqli_real_escape_string($connection, $_POST['provinsi']);
    $kota = mysqli_real_escape_string($connection, $_POST['kota']);
    $kecamatan = mysqli_real_escape_string($connection, $_POST['kecamatan']);
    $jml = mysqli_real_escape_string($connection, $_POST['jml']);

    if (empty($provinsi) || empty($kecamatan) || empty($jml)) {

        if (empty($provinsi)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if (empty($kecamatan)) {
            echo "<font color='red'>kecamatan field is empty.</font><br/>";
        }

        if (empty($jml)) {
            echo "<font color='red'>jml field is empty.</font><br/>";
        }
    } else {
        //updating the table
        $result = mysqli_query($connection, "UPDATE kepadatan SET provinsi='$provinsi',kecamatan='$kecamatan',jml='$jml', kota = '$kota' WHERE kodedagri='$kodedagri'");

        header("Location: read_data.php");
    }
}
?>
<?php
$kodedagri = $_GET['kodedagri'];

$result = mysqli_query($connection, "SELECT * FROM kepadatan WHERE kodedagri=$kodedagri");

while ($res = mysqli_fetch_array($result)) {
    $provinsi = $res['provinsi'];
    $kodedagri = $res['kodedagri'];
    $kecamatan = $res['kecamatan'];
    $kota = $res['kota'];
    $jml = $res['jml'];
}
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>WELCOME TO MANADO</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <!--  CSS BOOTSTRAP -->
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>


<body>


    <br><br>
    <div class="container">
        <hr class="my-5">
        <div class="row mb-5">
            <div class="position-relative">
                <div class="container position-relative">

                    <div class="row justify-content-center">
                        <h1 class="h2 bold-3 my-5 max-width-5x text-center">Halaman Untuk Mengubah Data</h1>
                    </div>

                    <div class="content update">

                        <br /><br />

                        <form name="form1" method="post" action="edit.php">
                            <table border="0">
                                <tr>
                                    <td>Provinsi</td>
                                    <td><input type="text" name="provinsi" value="<?php echo $provinsi; ?>"></td>
                                </tr>
                                <tr>
                                    <td>kecamatan</td>
                                    <td><input type="text" name="kecamatan" value="<?php echo $kecamatan; ?>"></td>
                                </tr>

                                <tr>
                                    <td>Kota</td>
                                    <td><input type="text" name="kota" value="<?php echo $kota; ?>"></td>
                                </tr>

                                <tr>
                                    <td>Jumlah</td>
                                    <td><input type="text" name="jml" value="<?php echo $jml; ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="kodedagri" value=<?php echo $_GET['kodedagri']; ?>></td>
                                    <td><input type="submit" name="update" value="Update"></td>
                                </tr>
                            </table>
                        </form>
</body>

</html>