<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    unlink('data/cart.txt');
    unlink('data/purchase.txt');
    unlink('data/things.txt');

    //$servername = "127.0.0.1:3306";
    $servername = "localhost";
    $username = "dhua3";
    $password = "OpTicGen101";

    // Create the connection
    $connection = mysql_connect($servername, $username, $password);

    // Check the connection
    if(!$connection) {
        die("Connection Failed");
    }

    mysql_select_db("autosolution_db");

    $sqldropping1 = "DROP TABLE absstock_tbl";
    $sqldropping2 = "DROP TABLE brakestock_tbl";
    $sqldropping3 = "DROP TABLE headlightsstock_tbl";
    $sqldropping4 = "DROP TABLE lightsstock_tbl";
    $sqldropping5 = "DROP TABLE sumtiresstock_tbl";
    $sqldropping6 = "DROP TABLE taillightsstock_tbl";
    $sqldropping7 = "DROP TABLE tiresstock_tbl";
    $sqldropping8 = "DROP TABLE wintiresstock_tbl";
    $sqldropping9 = "DROP TABLE bmwstock_tbl";
    $sqldropping10 = "DROP TABLE hondastock_tbl";
    $sqldropping11 = "DROP TABLE toyotastock_tbl";
    $sqldroptable1 = mysql_query($sqldropping1, $connection);
    $sqldroptable2 = mysql_query($sqldropping2, $connection);
    $sqldroptable3 = mysql_query($sqldropping3, $connection);
    $sqldroptable4 = mysql_query($sqldropping4, $connection);
    $sqldroptable5 = mysql_query($sqldropping5, $connection);
    $sqldroptable6 = mysql_query($sqldropping6, $connection);
    $sqldroptable7 = mysql_query($sqldropping7, $connection);
    $sqldroptable8 = mysql_query($sqldropping8, $connection);
    $sqldroptable9 = mysql_query($sqldropping9, $connection);
    $sqldroptable10 = mysql_query($sqldropping10, $connection);
    $sqldroptable11 = mysql_query($sqldropping11, $connection);
    
    $sqlrename1 = "CREATE TABLE absstock_tbl LIKE absstock_backup_tbl";
    $sqlrename2 = "CREATE TABLE brakestock_tbl LIKE brakestock_backup_tbl";
    $sqlrename3 = "CREATE TABLE headlightsstock_tbl LIKE headlightsstock_backup_tbl";
    $sqlrename4 = "CREATE TABLE lightsstock_tbl LIKE lightsstock_backup_tbl";
    $sqlrename5 = "CREATE TABLE sumtiresstock_tbl LIKE sumtiresstock_backup_tbl";
    $sqlrename6 = "CREATE TABLE taillightsstock_tbl LIKE taillightsstock_backup_tbl";
    $sqlrename7 = "CREATE TABLE tiresstock_tbl LIKE tiresstock_backup_tbl";
    $sqlrename8 = "CREATE TABLE wintiresstock_tbl LIKE wintiresstock_backup_tbl";
    $sqlrename9 = "CREATE TABLE bmwstock_tbl LIKE bmwstock_backup_tbl";
    $sqlrename10 = "CREATE TABLE hondastock_tbl LIKE hondastock_backup_tbl";
    $sqlrename11 = "CREATE TABLE toyotastock_tbl LIKE toyotastock_backup_tbl";
    $sqlnewname1 = mysql_query($sqlrename1, $connection);
    $sqlnewname2 = mysql_query($sqlrename2, $connection);
    $sqlnewname3 = mysql_query($sqlrename3, $connection);
    $sqlnewname4 = mysql_query($sqlrename4, $connection);
    $sqlnewname5 = mysql_query($sqlrename5, $connection);
    $sqlnewname6 = mysql_query($sqlrename6, $connection);
    $sqlnewname7 = mysql_query($sqlrename7, $connection);
    $sqlnewname8 = mysql_query($sqlrename8, $connection);
    $sqlnewname9 = mysql_query($sqlrename9, $connection);
    $sqlnewname10 = mysql_query($sqlrename10, $connection);
    $sqlnewname11 = mysql_query($sqlrename11, $connection);

    $sqlnewdata1 = "INSERT INTO absstock_tbl SELECT * FROM absstock_backup_tbl";
    $sqlnewdata2 = "INSERT INTO brakestock_tbl SELECT * FROM brakestock_backup_tbl";
    $sqlnewdata3 = "INSERT INTO headlightsstock_tbl SELECT * FROM headlightsstock_backup_tbl";
    $sqlnewdata4 = "INSERT INTO lightsstock_tbl SELECT * FROM lightsstock_backup_tbl";
    $sqlnewdata5 = "INSERT INTO sumtiresstock_tbl SELECT * FROM sumtiresstock_backup_tbl";
    $sqlnewdata6 = "INSERT INTO taillightsstock_tbl SELECT * FROM taillightsstock_backup_tbl";
    $sqlnewdata7 = "INSERT INTO tiresstock_tbl SELECT * FROM tiresstock_backup_tbl";
    $sqlnewdata8 = "INSERT INTO wintiresstock_tbl SELECT * FROM wintiresstock_backup_tbl";
    $sqlnewdata9 = "INSERT INTO bmwstock_tbl SELECT * FROM bmwstock_backup_tbl";
    $sqlnewdata10 = "INSERT INTO hondastock_tbl SELECT * FROM hondastock_backup_tbl";
    $sqlnewdata11 = "INSERT INTO toyotastock_tbl SELECT * FROM toyotastock_backup_tbl";
    $sqlinsert1 = mysql_query($sqlnewdata1, $connection);
    $sqlinsert2 = mysql_query($sqlnewdata2, $connection);
    $sqlinsert3 = mysql_query($sqlnewdata3, $connection);
    $sqlinsert4 = mysql_query($sqlnewdata4, $connection);
    $sqlinsert5 = mysql_query($sqlnewdata5, $connection);
    $sqlinsert6 = mysql_query($sqlnewdata6, $connection);
    $sqlinsert7 = mysql_query($sqlnewdata7, $connection);
    $sqlinsert8 = mysql_query($sqlnewdata8, $connection);
    $sqlinsert9 = mysql_query($sqlnewdata9, $connection);
    $sqlinsert10 = mysql_query($sqlnewdata10, $connection);
    $sqlinsert11 = mysql_query($sqlnewdata11, $connection);

    $sqldropping1 = "DROP TABLE absstock_backup_tbl";
    $sqldropping2 = "DROP TABLE brakestock_backup_tbl";
    $sqldropping3 = "DROP TABLE headlightsstock_backup_tbl";
    $sqldropping4 = "DROP TABLE lightsstock_backup_tbl";
    $sqldropping5 = "DROP TABLE sumtiresstock_backup_tbl";
    $sqldropping6 = "DROP TABLE taillightsstock_backup_tbl";
    $sqldropping7 = "DROP TABLE tiresstock_backup_tbl";
    $sqldropping8 = "DROP TABLE wintiresstock_backup_tbl";
    $sqldropping9 = "DROP TABLE bmwstock_backup_tbl";
    $sqldropping10 = "DROP TABLE hondastock_backup_tbl";
    $sqldropping11 = "DROP TABLE toyotastock_backup_tbl";
    $sqldroptable1 = mysql_query($sqldropping1, $connection);
    $sqldroptable2 = mysql_query($sqldropping2, $connection);
    $sqldroptable3 = mysql_query($sqldropping3, $connection);
    $sqldroptable4 = mysql_query($sqldropping4, $connection);
    $sqldroptable5 = mysql_query($sqldropping5, $connection);
    $sqldroptable6 = mysql_query($sqldropping6, $connection);
    $sqldroptable7 = mysql_query($sqldropping7, $connection);
    $sqldroptable8 = mysql_query($sqldropping8, $connection);
    $sqldroptable9 = mysql_query($sqldropping9, $connection);
    $sqldroptable10 = mysql_query($sqldropping10, $connection);
    $sqldroptable11 = mysql_query($sqldropping11, $connection);

    unlink("data/absitem1.txt");
    unlink("data/absitem2.txt");
    unlink("data/absitem3.txt");
    unlink("data/absitem4.txt");

    unlink("data/brakesitem1.txt");
    unlink("data/brakesitem2.txt");
    unlink("data/brakesitem3.txt");
    unlink("data/brakesitem4.txt");

    unlink("data/headlightsitem1.txt");
    unlink("data/headlightsitem2.txt");
    unlink("data/headlightsitem3.txt");
    unlink("data/headlightsitem4.txt");

    unlink("data/lightsitem1.txt");
    unlink("data/lightsitem2.txt");
    unlink("data/lightsitem3.txt");

    unlink("data/sumtiresitem1.txt");
    unlink("data/sumtiresitem2.txt");
    unlink("data/sumtiresitem3.txt");

    unlink("data/taillightsitem1.txt");
    unlink("data/taillightsitem2.txt");
    unlink("data/taillightsitem3.txt");

    unlink("data/tiresitem1.txt");
    unlink("data/tiresitem2.txt");
    unlink("data/tiresitem3.txt");
    unlink("data/tiresitem4.txt");

    unlink("data/wintiresitem1.txt");
    unlink("data/wintiresitem2.txt");
    unlink("data/wintiresitem3.txt");
    unlink("data/wintiresitem4.txt");

    unlink("data/bmwitem1.txt");
    unlink("data/bmwitem2.txt");
    unlink("data/bmwitem3.txt");
    unlink("data/bmwitem4.txt");
    unlink("data/bmwitem5.txt");
    unlink("data/bmwitem6.txt");
    unlink("data/bmwitem7.txt");
    unlink("data/bmwitem8.txt");

    unlink("data/hondaitem1.txt");
    unlink("data/hondaitem2.txt");
    unlink("data/hondaitem3.txt");
    unlink("data/hondaitem4.txt");
    unlink("data/hondaitem5.txt");
    unlink("data/hondaitem6.txt");
    unlink("data/hondaitem7.txt");
    unlink("data/hondaitem8.txt");

    unlink("data/toyotaitem1.txt");
    unlink("data/toyotaitem2.txt");
    unlink("data/toyotaitem3.txt");
    unlink("data/toyotaitem4.txt");
    unlink("data/toyotaitem5.txt");
    unlink("data/toyotaitem6.txt");
    unlink("data/toyotaitem7.txt");
    unlink("data/toyotaitem8.txt");

    rename("data/absitem1_backup.txt", "data/absitem1.txt");
    rename("data/absitem2_backup.txt", "data/absitem2.txt");
    rename("data/absitem3_backup.txt", "data/absitem3.txt");
    rename("data/absitem4_backup.txt", "data/absitem4.txt");

    rename("data/brakesitem1_backup.txt", "data/brakesitem1.txt");
    rename("data/brakesitem2_backup.txt", "data/brakesitem2.txt");
    rename("data/brakesitem3_backup.txt", "data/brakesitem3.txt");
    rename("data/brakesitem4_backup.txt", "data/brakesitem4.txt");

    rename("data/headlightsitem1_backup.txt", "data/headlightsitem1.txt");
    rename("data/headlightsitem2_backup.txt", "data/headlightsitem2.txt");
    rename("data/headlightsitem3_backup.txt", "data/headlightsitem3.txt");
    rename("data/headlightsitem4_backup.txt", "data/headlightsitem4.txt");

    rename("data/lightsitem1_backup.txt", "data/lightsitem1.txt");
    rename("data/lightsitem2_backup.txt", "data/lightsitem2.txt");
    rename("data/lightsitem3_backup.txt", "data/lightsitem3.txt");

    rename("data/sumtiresitem1_backup.txt", "data/sumtiresitem1.txt");
    rename("data/sumtiresitem2_backup.txt", "data/sumtiresitem2.txt");
    rename("data/sumtiresitem3_backup.txt", "data/sumtiresitem3.txt");

    rename("data/taillightsitem1_backup.txt", "data/taillightsitem1.txt");
    rename("data/taillightsitem2_backup.txt", "data/taillightsitem2.txt");
    rename("data/taillightsitem3_backup.txt", "data/taillightsitem3.txt");

    rename("data/tiresitem1_backup.txt", "data/tiresitem1.txt");
    rename("data/tiresitem2_backup.txt", "data/tiresitem2.txt");
    rename("data/tiresitem3_backup.txt", "data/tiresitem3.txt");
    rename("data/tiresitem4_backup.txt", "data/tiresitem4.txt");

    rename("data/wintiresitem1_backup.txt", "data/wintiresitem1.txt");
    rename("data/wintiresitem2_backup.txt", "data/wintiresitem2.txt");
    rename("data/wintiresitem3_backup.txt", "data/wintiresitem3.txt");
    rename("data/wintiresitem4_backup.txt", "data/wintiresitem4.txt");

    rename("data/bmwitem1_backup.txt", "data/bmwitem1.txt");
    rename("data/bmwitem2_backup.txt", "data/bmwitem2.txt");
    rename("data/bmwitem3_backup.txt", "data/bmwitem3.txt");
    rename("data/bmwitem4_backup.txt", "data/bmwitem4.txt");
    rename("data/bmwitem5_backup.txt", "data/bmwitem5.txt");
    rename("data/bmwitem6_backup.txt", "data/bmwitem6.txt");
    rename("data/bmwitem7_backup.txt", "data/bmwitem7.txt");
    rename("data/bmwitem8_backup.txt", "data/bmwitem8.txt");

    rename("data/hondaitem1_backup.txt", "data/hondaitem1.txt");
    rename("data/hondaitem2_backup.txt", "data/hondaitem2.txt");
    rename("data/hondaitem3_backup.txt", "data/hondaitem3.txt");
    rename("data/hondaitem4_backup.txt", "data/hondaitem4.txt");
    rename("data/hondaitem5_backup.txt", "data/hondaitem5.txt");
    rename("data/hondaitem6_backup.txt", "data/hondaitem6.txt");
    rename("data/hondaitem7_backup.txt", "data/hondaitem7.txt");
    rename("data/hondaitem8_backup.txt", "data/hondaitem8.txt");

    rename("data/toyotaitem1_backup.txt", "data/toyotaitem1.txt");
    rename("data/toyotaitem2_backup.txt", "data/toyotaitem2.txt");
    rename("data/toyotaitem3_backup.txt", "data/toyotaitem3.txt");
    rename("data/toyotaitem4_backup.txt", "data/toyotaitem4.txt");
    rename("data/toyotaitem5_backup.txt", "data/toyotaitem5.txt");
    rename("data/toyotaitem6_backup.txt", "data/toyotaitem6.txt");
    rename("data/toyotaitem7_backup.txt", "data/toyotaitem7.txt");
    rename("data/toyotaitem8_backup.txt", "data/toyotaitem8.txt");

    mysql_close($connection);

    header("Location: home.php");
?>