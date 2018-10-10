<?php 
	
	$a=$_POST["resultat"];
	$b=$_POST["resultat1"];
	$c=$_POST["resultat3"];
	$i=0;
	


if (($a*$b)!=$c) {
	echo "<center><h2>Vous avez faussez la reponse:<br></h1> ".$a*$b." </h2></center>";

}
    else{
    	$i++;

echo "<center><h2>Vous avez trouver la reponse:<br>".$c." </h2></center>";
}

$a1=$_POST["resultat4"];
	$b1=$_POST["resultat5"];
	$c1=$_POST["resultat6"];
	


if (($a1*$b1)!=$c1) {
	echo "<center><h2>Vous avez faussez la reponse:<br></h1> ".$a1*$b1." </h2></center>";

}
    else{
    	$i++;

echo "<center><h2>Vous avez trouver la reponse:<br>".$c1." </h2></center>";
}





$a2=$_POST["resultat7"];
	$b2=$_POST["resultat8"];
	$c2=$_POST["resultat9"];
	


if (($a2*$b2)!=$c2) {
	echo "<center><h2>Vous avez faussez la reponse:<br></h1> ".$a2*$b2." </h2></center>";

}
    else{
    	$i++;

echo "<center><h2>Vous avez trouver la reponse:<br>".$c2." </h2></center>";
}

$a3=$_POST["resultat10"];
	$b3=$_POST["resultat11"];
	$c3=$_POST["resultat12"];
	


if (($a3*$b3)!=$c3) {
	echo "<center><h2>Vous avez faussez la reponse:<br></h1> ".$a3*$b3." </h2></center>";

}
    else{
    	$i++;

echo "<center><h2>Vous avez trouver la reponse:<br>".$c3." </h2></center>";
}

echo "<center><h2>Vous avez <br>".$i."point(s) </h2></center>";

 ?>