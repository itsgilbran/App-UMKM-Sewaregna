<?php
include("connection.php");

$kodedagri = $_GET['kodedagri'];

$result = mysqli_query($connection, "DELETE FROM kepadatan WHERE kodedagri=$kodedagri");

header("Location:read_data.php");
