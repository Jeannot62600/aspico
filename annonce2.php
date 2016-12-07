<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
    <head>
        <title>..</title>
        <meta charset='utf-8' />
    </head>
    <body>
        <header>
			<article>
			    <header>
			        <h3>Formulaire Dépôt </h3>
			        <br></section>	
			    </header>
			    <section>
			    	 <form action="connection2.php" method="post">
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Titre:</span>
					  <input type="text" required class="form-control" placeholder="Titre" name="titre_annonce" id="titre_annonce" aria-describedby="basic-addon1">
					</div>
					<br></section>
			    	<!-- Description-->	
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Description:</span>
					  <input type="text" class="form-control" placeholder="Description" name="description_annonce" id="description_annonce" aria-describedby="basic-addon1">
					</div>
					<br></section>
					<!--Thème -->
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Thème:</span>
						  <FORM>
							  <select name="theme" size="1">
							  <option>Hébergement
							  <option>Nourriture
							  <option>Hygiène
							  <option>Soins médicaux
							  <option>Aides juridiques / administration
							  <option>Transport
						  </FORM>
						  <br>
						  </br>
					</div>
					<br></section>
					</form>
			    </section>
			    <footer>
			        <input type ="submit" value="valider">
			    </footer>
			</article>
        </header>
        <main>

        <?php

		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=aspicot;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
        	die('Erreur : '.$e->getMessage());
		}


		$reponse = $bdd->query('SELECT titre_annonce, description_annonce, theme FROM annonce ORDER BY id_annonce ASC');



		while ($donnees = $reponse->fetch())
		{
			echo '<p><strong>' . htmlspecialchars($donnees['titre_annonce']) . '</strong></p>';
			echo '<p><strong>' . htmlspecialchars($donnees['description_annonce']) . '</strong></p>';
			echo '<p><strong>' . htmlspecialchars($donnees['theme']) . '</strong></p>';
		}


$reponse->closeCursor();

?>
        </main>
        <footer>
        </footer>
    </body>
</html>
