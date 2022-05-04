<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Salammbo Beach - Look for a house </title>
  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="galleries.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    </head>

    <body>
        <center>
            <a href="rent.php" class="previous round fleches">&#8249;</a>
            <a href="opinion.php" class="next round fleches">&#8250;</a></center>

        </br>
        </br>
        </br>
        </br>
        
        <?php try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=id17133995_salammbo;charset=utf8;port=3306', 'root' , 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //derniere partie pour activer les erreurs
        }
        catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        
        $reponse = $bdd->query('SELECT civil, nom, prenom, mail, telephone, typelog, adresselog, cp, prix, citylog, DATE_FORMAT(date_publication, "%d/%m/%Y, %Hh%imin") AS datePublication FROM infoowner');

        while($donnees = $reponse->fetch())   
        {
        ?>
                <div class="card">
                <div class="card-header">
                <?php echo $donnees['nom'] . ' ' . $donnees['prenom'] .' - ' . $donnees['mail'] . ' - ' .$donnees['telephone']; ?>
                </div>
                <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>  <?php echo 'In ' . $donnees['citylog'] . ', a ' . $donnees['typelog'] .' is available.'; ?></p>
                    <p>  <?php echo 'Price : ' . $donnees['prix'] . ' tunisian dinars per month'; ?></p>
                    <h class="blockquote-footer">  <?php echo $donnees['datePublication'];?></h3>
                </blockquote>
                </div>
                </div>
                </br>
        <?php } ?>
        </div>

        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        
          <footer class="page-footer font-small mdb-color darken-3 pt-4">
            <div class="container">
              <div class="row d-flex justify-content-center">
               <center><div class="col-md-6">
                  <a href="http://www.commune-kram.gov.tn/?lang=en"><img  src="kramMuni.jpg" alt="Photo de montagne" /> </a>
                </div></center> 
              </div>
            </div>
           <center> <div class="footer-copyright text-center py-3">
            2021 © All rights reserved. Designed and developed by
              <a href="https://slimkhiari.000webhostapp.com/" style="color:#1D5171;"> SLIM KHIARI</a>.
            </div></center>
          </footer>    
  </body>
</html>