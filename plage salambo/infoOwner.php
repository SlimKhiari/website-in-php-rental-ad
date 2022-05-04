<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Salammbo Beach - Rent a house </title>
  
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

        <style>
            .navbar{
                margin-bottom: 1rem;
            }
            .title{
            text-transform:uppercase
            }
            .form-heading {
            background: #e8cbc0; /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #e8cbc0, #636fa4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            margin: 20px 0 20px;
            padding: 20px;
            }
            .form-heading .prg{
            color: #ffffff;
            font-size: 23px;
            }

            .inline{
            display:inline-block
            }
            label{
            min-width: 120px;
            position: relative;
            cursor: pointer;
            color: #666;
            font-size: 15px;
            }

            .checkbox label:after {
            content: '';
            display: table;
            clear: both;
            }

            .checkbox .cc {
            position: relative;
            display: inline-block;
            border: 1px solid #a9a9a9;
            border-radius: .25em;
            width: 1.3em;
            height: 1.3em;
            float: left;
            margin-right: .5em;
            }

            .checkbox .cc .cc-icon {
            position: absolute;
            font-size: .8em;
            line-height: 0;
            top: 50%;
            left: 15%;
            }

            .checkbox label input[type="checkbox"] {
            display: none;
            }

            .checkbox label input[type="checkbox"]+.cc>.cc-icon {
            opacity: 0;
            }

            .checkbox label input[type="checkbox"]:checked+.cc>.cc-icon {
            opacity: 1;
            }

            .checkbox label input[type="checkbox"]:disabled+.cc {
            opacity: .5;
            }
        </style>
    </head>

    <body>
        
        <center>
        <a href="rent.php" class="previous round fleches">&#8249;</a>
        <a href="opinion.php" class="next round fleches">&#8250;</a></center>


        <div class="container">
        <form class="form-horizontal" method ="post" action="infowner_post.php" enctype="multipart/form-data" role="form">
            <div class='container'>

                <div class='row'>
                    <div class="col-lg-12">
                        <div class="form-heading">
                            <span class="prg">Your information and those of the house to rent</span>
                        </div>
                    </div>
                </div>
                <div class='row'>

                    <div class="col-lg-6">
                        <!--<form class="form-horizontal" role="form">-->
                        <div class="form-group">
                            <label for="civilite" class="col-sm-2 control-label">Civility </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="civilite" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nom" class="col-sm-2 control-label">Last name </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nom" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="col-sm-2 control-label">First name </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="prenom" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mail" class="col-sm-2 control-label">Email </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="col-sm-6 control-label">Telephon number </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="mobile" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6"> 

                        <div class="form-group">
                            <label for="cp" class="col-sm-8 control-label">Housing type</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="housingtype" placeholder="villa / Apartment / Bungalow">
                            </div>
                        </div>

                        <div class="form-group">

                            <label for="adresse" class="col-sm-8 control-label">Address of the house for rent </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="adresse" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cp" class="col-sm-8 control-label">Postal code of the house for rent</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="cp">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ville" class="col-sm-7 control-label">City of the house for rent</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ville" class="col-sm-7 control-label">Price per month of the house for rent</label>
                            <div class="col-sm-8">
                                <input type="number" name="prix" class="form-control"  placeholder="tunisian dinars">
                            </div>
                        </div>
                    </div>
                </div>
            </br>
            </br>
                <div>
                    <div class="col-lg-6">
                    </div>
                    <center> <button type="submit" class="btn btn-outline-info" style="background-color:#307C91;color:white;"> Submit </button> </center>
                </div>
            </div>
        </form>
</div>

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