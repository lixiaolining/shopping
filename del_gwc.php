<?php
header("Content-type:text/html;charset=utf-8");
session_start();
include("conn/conn.php");

$id=$_GET["id"];
$sql="delete from tb_sc_gwc where gwc_id='$id'";
$res=$pdo->prepare($sql);
$res->execute();
if($res){
    echo "<script>window.location.href='gwc.php'</script>";
}else{
    echo "<script>history.back();</script>";
}
$pdo=$res=NULL;
?>