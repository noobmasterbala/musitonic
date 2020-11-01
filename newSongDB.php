<?php
    require('./assets/includes/db_connect.php');
    for($n=1;$n<=$_REQUEST['n'];$n++){
        //$n=1;
        $albumname = $_REQUEST['albumname'];
        $track = $_REQUEST['trackn'.$n];
        $songfile = $_REQUEST['songfile'.$n];
        $albumart = $_REQUEST['albumart'.$n];
        $lang = $_REQUEST['lang'.$n];
        $date = $_REQUEST['date'.$n];
        $genre = $_REQUEST['genre'.$n];
        $subgenre = $_REQUEST['subgenre'.$n];
        $studio = $_REQUEST['studio'.$n];
        $vocalist = $_REQUEST['vocalist'.$n];
        $producer = $_REQUEST['producer'.$n];
        $artwork = $_REQUEST['artwork'.$n];
        $mastering = $_REQUEST['mastering'.$n];
        $mixing = $_REQUEST['mixing'.$n];
        $composer = $_REQUEST['composer'.$n];
        $lyricist = $_REQUEST['lycrist'.$n];
        $crb1 = $_REQUEST['crb1h'.$n].':'.$_REQUEST['crb1m'.$n].':'.$_REQUEST['crb1m'.$n];
        $crb2 = $_REQUEST['crb2h'.$n].':'.$_REQUEST['crb2m'.$n].':'.$_REQUEST['crb2m'.$n];
        $crb3 = $_REQUEST['crb3h'.$n].':'.$_REQUEST['crb3m'.$n].':'.$_REQUEST['crb3m'.$n];
        $mastc = $_REQUEST['masteringc'.$n];
        $mixinc = $_REQUEST['mixingc'.$n];
        $instruc = $_REQUEST['instrumentalc'.$n];
        $radioc = $_REQUEST['radioc'.$n];
        $explic = $_REQUEST['explicitc'.$n];
        $query1 = "INSERT INTO `test`( `albumname`, `trackname`, `songname`, `language`, `date`, `genre`, `subgenre`, `studio`, `vocalist`, `producer`, `artworkcredits`, `mastering`, `mixing`, `composer`, `lyricist`, `crb1`, `crb2`, `crb3`, `masteringcheck`, `mixingcheck`, `instrumentalcheck`, `radiocheck`, `explicitcheck`) VALUES ('$albumname','$track','$songfile','$lang','$date','$genre','$subgenre','$studio','$vocalist','$producer','$artwork','$mastering','$mixing','$composer','$lyricist','$crb1','$crb2','$crb3','$mastc','$mixinc','$instruc','$radioc','$explic')";
        $result = $conn->query($query1) or die($conn->error);
    }
    // $query1 = "SELECT COUNT(*) FROM `enrolled` WHERE `online`=1 AND `classid`='$scode'";
    
    // $result = $conn->query($query1) or die($conn->error);
    // while(($row = $result->fetch_row()) !== null){
    //     $present=$row[0]+0;
    // }
    // $query2 = "SELECT COUNT(*) FROM `enrolled` WHERE `classid`='$scode'";
    // $result = $conn->query($query2) or die($conn->error);
    // while(($row = $result->fetch_row()) !== null){
    //     $total=$row[0]+0 - $present;
    // }
    // $data = array($present,$total);
    // echo json_encode($data);
    echo "<script>window.location.replace('success_upload.php');</script>";
?>