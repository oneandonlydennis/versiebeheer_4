<?php
  include("./class_text.php");
  echo "Dit is mijn eerste ervaring met Git<hr>";
  echo "Dit is een nieuwe regel code<hr>";
  echo "Dit is weer een nieuwe regel code<hr>";
  echo "Er is weer een nieuwe les begonnen";
  echo "Weer een verandering";
  echo "Ik ga een nieuwe commit pushen naar Github";
  echo "Hoi";
  echo "Nieuw  stukje code";
  echo "User-2 was here, All your base are belong to us....";
  echo "Your code is not working";
  echo "Dit is de limit";
  echo "We gaan nu pullen";
  echo "Dit is een test in pullen van de code van github.com";

  echo "OOP is the bomb";

  // Maak een nieuwe instantie van de class Text
  $tekst = new Text();

  //max is best wel gay
  echo $tekst->wattext;
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Homepage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script>
  function showtext(){
        document.getElementById('hidden').style.cssText = 'display: block;';
    }
    function showtext2(){
        document.getElementById('hidden2').style.cssText = 'display: block;';
    }
    function showimg(){
        document.getElementById('hidden3').style.cssText = 'display: block;';
    }
  </script>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h1 onclick="showtext()">Dit is een leuke nieuwe website met erg veel content ! :)</h1>
      <h2 onclick="showtext2()" class="hidden" id="hidden">maar max is fucking gay</h2>
      <h2 onclick="showimg()"class="hidden" id="hidden2">Grapje! Max is een uitstekende student! Klik hier maar voor bewijs!</h2>
      <img src="yarr.gif" alt="yarr" class="hidden" id="hidden3">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>