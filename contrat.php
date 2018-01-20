<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contrat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contrat.js">
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Header
            </div>
        <div class="card-block">


           <form action="insert.php" method="post">
               <div>
                   <label for="party">Sélectionner la date de signature du contrat  :</label>
                   <input type="date" id="party" name="date_sign" min="2010-01-20" max="2028-02-30" required>
                   <span class="validity"></span>
               </div>
               <div>
                   <label for="party">Sélectionner la date de début du contrat  :</label>
                   <input type="date" id="party" name="date_debut" min="2010-01-20" max="2028-01-20" required>
                   <span class="validity"></span>
               </div>
               <div>
                   <label for="party">Sélectionner la date de la fin du contrat  :</label>
                   <input type="date" id="party" name="date_fin" min="2010-01-20" max="2040-02-30" required>
                   <span class="validity"></span>
               </div>

                <div style="padding-top: 50px">
                        <label for="number">Montant voulu à partir de 20000 Frcs :</label>
                        <input type="number" name="montant_voulu" min="20000" max="" step="1000"  placeholder="Montant en Fcfa">
                </div>0

                <div style="padding-top: 50px">
                    <label for="number">Montant location à partir de 20000 Frcs :</label>
                    <input type="number" min="20000" name="montant_loc" max="" step="1000"  placeholder="Montant en Fcfa">
                </div>
                <div id="radio" style="padding-top: 50px">
                    <p>Etat :</p>
                        <div class="radio radio-primary">
                            <input type="radio" name="etat" id="radio1" value="0">
                            <label for="radio1">
                                Terminé
                            </label>
                        </div>
                        <div class="radio radio-primary">
                            <input type="radio" name="etat" id="radio2" value="1">
                            <label for="radio2">
                                En cours
                            </label>
                        </div>

                        <div class="radio radio-primary">
                            <input type="radio" name="etat" id="radio2" value="2">
                            <label for="radio3">
                                Résilié
                            </label>
                        </div>
                    </div>
                    <div class="form-group" style="width: 240px; padding-top: 50px;">

                        <label for="">IdProprietaire:</label>
                        <select name="proprietaire" class="form-control">

                            <option>Proprio 1</option>
                            <option>Proprio 2</option>
                            <option>Proprio 3</option>
                            <option>Proprio 4</option>
                            <option>Proprio 5</option>
                            <option>Proprio 6</option>
                        </select>
                    </div>


                <label>
                    <input type="checkbox"> J'accepte<a href="#"> les conditions du contrat</a>
                </label>

                <input type="submit" class="btn btn-primary" value="Soumettre">


            </form>


    </div>

        <div class="card-footer text-muted">
            Header
        </div>
</div>

















<script src="jquery-3.2.1.js"> </script>
<script src="jquery.min.js"> </script>
<script src="popper.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>











<?php

