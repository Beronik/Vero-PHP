<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Exercise 2 php</h1>


<div>
<?php
//boucle while
	echo "<h3> Boucle while </h3>";
	$i = 0;
	while ($i < 3) {
		echo'j\'aime le PHP' .$i.'<br>';
		$i++;
	}
//boucle for
	echo "<h3> Boucle for </h3>";
	$i = 0;
	for ($i = 0; $i < 3; $i++){
		echo 'j\'aime le PHP-'.$i.'<br>';
	}
// Do while
	echo "<h3> Boucle Do while </h3>";
	$i = 0;
	do
	{
		echo 'j\'aime le PHP-'.$i.'<br>';
		$i++; //Incrementation
	}
	while($i < -3);
?>
</div><br>

<div>
	<?php
	//Table à deux dimmesions
	$etudiant = array("Mousa", "Khalid", "Moussa", "Noemi");
	echo $etudiant[0].'<br>';
	echo $etudiant[1].'<br>';
	echo $etudiant[2].'<br>';
	echo $etudiant[3].'<br>';

	?>
</div><br>

<div>
	<?php /*
	$etudiant = array("Mousa", "Khalid", "Moussa", "Noemi");
	for($i=0;$i <= count($etudiant); $i++)
	{
		echo $etudiant[$i]. '<br/>';
	}*/
	?>

</div>

<div style="color: blue;">
	<?php
	echo "<h3> Les tableux </h3>";

	$fruit = array("pomme", "pamplemousse", "orange", "kiwi", "fraise");
	for($i = 0; $i < count($fruit); $i++)
	{
		echo $fruit[$i].'<br/>';
	}

	?>
</div><br>

<div style="background: pink; width: 300px;">
	<?php // table assosiatifs
	echo "<h3> Table assosiative </h3>";
	$infos = array(
		'prenom' => 'Veronica',
		'nom' => 'Ochoa',
		'age' => '28',
		'adresse' => 'quelque part'
	);

	echo $infos['nom']. $infos['prenom'].'<br>'. '<br>';

	echo "<h3> Table assosiative avec foreach </h3>";

	foreach($infos as $key => $value)
	{
		//echo $key.'<br />';
		//echo $value.'<br />';
		echo $key.':   ' . $value.'<br>';
	}

	?>
</div>








</body>
</html>