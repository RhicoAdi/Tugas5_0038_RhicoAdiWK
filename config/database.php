<?php
function getdbconnection()
{
    try {
        $db  = new PDO('mysql:host=localhost;dbname=db_toko_38','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }catch (PDOException $e){
        echo 'connection failed: ' .$e->getMessage();
    }
}
?>