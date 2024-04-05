<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$francais=$_POST["francais"];
	

	//connection avec la base de donnees

	$host="Localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="assaie";

	$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
	if ($conn->connect_error){
		die("connection failed:".$conn->connect_error);
	}


	//selectionner que le mot ecrit se trouvant dans la base de donnees
	$query="SELECT Kirundi FROM traduction WHERE francais='$francais'";
	$resultat=$conn->query($query);
	while($row=mysqli_fetch_assoc($resultat)){
	
	if ($resultat->num_rows==1) {
	
		//afficher les elements sur la page
		
			echo"le mot :" .$francais." "." "."en kirundi est:".$row['Kirundi']." ";
		exit();
	} else {
	echo "le mot que vous avez ecrit ne se trouve pas dans notre serveur";

		
		exit("le mot que vous avez ecrit ne se trouve pas dans notre serveur");
	}
}
	$conn->close();
}


 ?>
