<!DOCTYPE html>
<html>
    <head>
        <title>Nouvelles Actu</title>
        
        <link rel="stylesheet" href="reset.css" />
        <link rel="stylesheet" href="mainstyle.css" />
        <meta charset="utf-8"/>
        <link href="css/cssnews.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body>
        <header id="base_header">
        <?php include('header.php');?>
	        <div class="container">
		        <div class="row">
		        	<div class="col-xs-12"><h1>Je veux aider</h1></div>
				</div>
			</div>
        </header>
        <main>
        	<article class="article">
	    	<header>
	        	<div class="container">
		        	<div class="row">
						<div class="col-xs-12 text-center"> 
							<a href="annonce2.php"><button id="button1" type="button" class="btn btn-primary btn-lg btn-block">Déposer une annonce</button></a>
						</div>
						<div class="col-xs-12 text-center"> 
							<a href="inscription.php"><button id="button2" type="button" class="btn btn-primary btn-lg btn-block">Inscription</button></a>					
						</div>
						<p></p>
						<div class="col-xs-12 text-center"> 
							<?php include "formulaire.php"; ?>	
						</div>
							
					</div>
				</div>
	    	</header>
	    	<section class="sectionannonces">
	    	<div class="container">
		        <div class="row">
					<div class="col-xs-12">
	        		</div>
				</div>
			</div>
			<footer>
			</footer>
	    	</section>
	    	</article>
	    	
	    </main>
	    <footer></footer>

    </body>
</html>


