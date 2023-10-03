<?php
    session_start();
    include("/appinc/cBarb.php");
    include("/appinc/connect.php");
    $con = AppConnect('alimenta_mais');
    include("fn.php");
    $md5 = md5(date("YmdHis"));