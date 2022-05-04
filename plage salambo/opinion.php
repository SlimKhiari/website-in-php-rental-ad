<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="galleries.css">
    <title> Salammbo Beach - Your opinion </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">


</head>
<body>
    <center>
        <a href="rent.php" class="previous round fleches">&#8249;</a>
        <a href="index.php" class="next round fleches">&#8250;</a></center>

    <center><svg viewbox="0 0 100 20" class="YourOpinionAnimation">
    <defs>
        <linearGradient id="gradient">
        <stop color="#000"/>
        </linearGradient>
        <pattern id="wave" x="0" y="-0.5" width="100%" height="100%" patternUnits="userSpaceOnUse">
        <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
            <animateTransform
                attributeName="transform"
                begin="0s"
                dur="1.5s"
                type="translate"
                from="0,0"
                to="40,0"
                repeatCount="indefinite" />
        </path>
        </pattern>
    </defs>
    <text text-anchor="middle" x="50" y="15" font-size="17" fill="white" fill-opacity="0.1">Your opinion</text>
    <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)"  fill-opacity="1">Your opinion</text>
    </svg> </center>
    
    <form method ="post" action="opinion_post.php" enctype="multipart/form-data" style="background-color:#307C91;">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="My name" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="My opinion"  name="opinion"></textarea>
        </div>
        <p>
           <center> <button type="submit" class="btn btn-outline-info" style="margin-top:-5px;margin-bottom:7px;color:white;">Send my opinion</button> </center>
        </p>
    </form>

    <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=id17133995_salammbo;charset=utf8;port=3306', 'root' , 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //derniere partie pour activer les erreurs
        }
        catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }

        $reponse = $bdd->query('SELECT name_opinion, opinion, date_opinion, DATE_FORMAT(date_opinion, "%d/%m/%Y %H:%i") AS dateOpinion FROM salammbobeach');
        while($donnees = $reponse->fetch())
        {
    ?>
    <p>
       <strong> <?php echo '[' .htmlspecialchars($donnees['dateOpinion']) .'] ' .htmlspecialchars($donnees['name_opinion']) . ' : ';?></strong> 
        <?php echo htmlspecialchars($donnees['opinion']);} ?>
        </br>
    </p>
    
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
        <a href="https://slimkhiari.000webhostapp.com/" style="color:#1D5171;">SLIM KHIARI</a>.
        </div></center>
    </footer>    

    
</body>
</html>