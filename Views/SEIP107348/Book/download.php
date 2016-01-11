<?php

//include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");
//
//
//use App\BITM\SEIP107348\Book\download;
//use App\BITM\SEIP107348\Utility\Utility;
//
//$download = new Book();
//$download -> download($_POST['export']);


 if (isset($_POST['export'])) {

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');

    $output = fopen('php://output', 'w');

    fputcsv($output, array('id', 'title'));
    $con = mysqli_connect('localhost', 'root', 'root');
    $rows = mysqli_query($con, "SELECT * FROM `BITM`.`atomicProject`");

    while ($row = mysqli_fetch_assoc($rows)) {
      fputcsv($output, $row);
    }
    fclose($output);
    mysqli_close($con);
    exit();
  }