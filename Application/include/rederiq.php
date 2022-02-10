<?php
	require("../connexion.php");
	if (isset($_GET['redirect_user'])) {
		if (isset($_POST['submit'])) {
			
		$reqE="select ID_ETUDIANT,LOGIN,PASSWORD 
		FROM etudiant e,compte c
		WHERE c.ID_COMPTE=e.ID_COMPTE
		AND c.LOGIN='".$_POST['login']."' and c.PASSWORD='".$_POST['pass']."'";

	    $reqP="select ID_EMPLOYEE,LOGIN,PASSWORD,FONCTION	 
		FROM employee e,compte c
		WHERE c.ID_COMPTE=e.ID_COMPTE
		AND c.LOGIN='".$_POST['login']."' and c.PASSWORD='".$_POST['pass']."'";
		

		$resultatE=$conex->query($reqE);
		$resultatP=$conex->query($reqP);
		
		if ($resultatE->num_rows>0) 
		{
			session_name("etudiant");
			session_start();
			$data=$resultatE->fetch_row();
				  $_SESSION['login']=$_POST['login'];
				  $_SESSION['idEt']=$data[0];
				  header("Location:Profile/Profil_Etudiant/"); 
		}
		elseif ($resultatP->num_rows>0) 
		{
		    session_name("employer");
            session_start();
			$data=$resultatP->fetch_row();
				$_SESSION['login']=$_POST['login'];
				$_SESSION['idemp']=$data[0];

				if($data[3]=='professeur'){
					header("Location:profile/prof");  
				}

				elseif($data[3]=='directeur'){
					header("Location:profile/administration");  
				}
		}
		
		else header('location:../login/login.php?pass_error');
	}
	else header('location:../login/login.php?pass_error');
	}
	else header('location:../login/login.php?pass_error');
	
	?>