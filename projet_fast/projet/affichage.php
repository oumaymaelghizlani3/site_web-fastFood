<?php
$connect = mysqli_connect('localhost', 'root', '', 'client');
if(isset($_POST['affiche'])){
$sql="SELECT * from `commande`";
$resultat=mysqli_query($connect, $sql);
$n=mysqli_num_rows($resultat);
echo "le nombre d'enregistrement est : ".$n."<br/>";
for($i=0;$i<$n;$i++)
{
print_r (mysqli_fetch_assoc($resultat));
echo "<br/>";
}
}
mysqli_close($connect);
 ?>