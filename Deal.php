<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact de Location</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 <link rel="stylesheet" href="">
<link rel="stylesheet" href="contrat.js">
<script src="jquery-3.2.1.js"> </script>
<script src="jquery.min.js"> </script>
<script src="popper.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
    <center><h3><b>Veuillez Soumettre le Contract<b><h3></center>
 <div class="container-fluid">
     <div class="card">
        <div class="card-block">
           <form action="insert.php" method="POST">
               <div>
                   <div id="date">
                   <label class="control-label col-sm-2 bg-primary">Date de signature du contrat  :</label>
                   <input type="date" id="date" name="datesignat" min="2010-01-20" max="2018-01-01" required>
                   <span class="validity"></span>
               </div><br/>
               <div>
                   <label class="control-label col-sm-2 bg-primary">Date de début du contrat  :</label>
                   <input type="date" id="date" name="datedebut" min="2010-01-20" max="2018-01-01" required>
                   <span class="validity"></span>
               </div>
               <div><br/>
                   <label class="control-label col-sm-2 bg-primary">Date de fin du contrat  :</label>
                   <input type="date" id="date" name="datefin" min="2010-01-20" max="2030-02-30" required>
                   <span class="validity"></span>
               </div><br/>
               </div>
                        <label for="number">Le montant voulu est supérieur ou égale à 20000 Frcs :</label>
                        <input type="number" name="montvoulu" min="20000" max="" step="500"  placeholder="Montant voulu"><br/>
                        <br/>
                    <label for="number">Le montant de la location est superieur ou égale à 25000 Frcs:</label>
                    <input type="number" min="20000" name="montloc" max="" step="500"  placeholder="Montant de la location"><br/>
                <div id="radio" style="padding-top: 50px">
                    <div id="etat">
                    <h4>Etat :  </h4>
                        <div class="radio radio-primary">
                            <input type="radio" name="etat" id="radio1" value="0">
                            <label for="radio1">
                                Contract terminé
                            </label>
                        </div><br/>
                        <div class="radio radio-primary">
                            <input type="radio" name="etat" id="radio2" value="1">
                            <label for="radio2">
                                Contrat en cours
                            </label>
                        </div><br/>
                        <div class="radio radio-primary">
                            <input type="radio" name="etat" id="radio2" value="2">
                            <label for="radio3">
                                Contract résilié
                            </label>
                        </div><br/>
                        </div>
                    </div>
                    <div class="form-group" style="width: 310px; padding-top: 56px;">
                        <label for="">Identifiants Proprietaire:</label>
                        <select name="proprietaires" class="form-control">
                            <option>Proprietaire N:1</option>
                            <option>Propretaire N:2</option>
                            <option>Proprietaire N:3</option>
                            <option>Proprietaire N:4</option>
                            <option>Proprietaire N:5</option>
                            <option>Proprietaire N:6</option>
                            <option>Proprietaire N:7</option>
                            <option>Proprietaire N:8</option>
                            <option>Proprietaire N:9</option>
                            <option>Proprietaire N:10</option>
                        </select>
                    </div>
                <label>
                    <input type="checkbox"> J'ai lu et accepte<br/><a href="#"> les termes du contrat:</a>
                </label>
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </form>
    </div>

        <div class="card-footer text-muted">
        
        </div>
</div>
</div>
</center>
</body>
<style>
body{
    background: linear-gradient(white, blue, white);

}
.checkbox{
    margin-left:500px;
}
#etat{
    text-align:center;
   
}

</style>








</html>

