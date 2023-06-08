<?php
$serveur='localhost';
$user='root';
$passwd='';
$base='client';
$connect=mysqli_connect($serveur,$user,$passwd,$base);

if(isset($_POST['ajout'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['sujet'];
    $telephone=$_POST['telephone'];
    $command=$_POST['command'];
    $sql="INSERT INTO commande
    (nom,prenom,adresse,tel<?php
$serveur='localhost';
$user='root';
$passwd='';
$base='client';
$connect=mysqli_connect($serveur,$user,$passwd,$base);

if(isset($_POST['ajout'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['sujet'];
    $telephone=$_POST['telephone'];
    $command=$_POST['command'];
    $sql="INSERT INTO commande
    (nom,prenom,adresse,telephone,command)VALUES('$nom','$prenom
    ','$adresse','$telephone','$command')";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
    echo '<meta http-equiv="refresh" content="0;URL=commande.html">';
}

?>