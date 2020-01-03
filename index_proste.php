<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<h1>  PROSTE DZIALANIA </h1>
<form action="proste.php" method="POST">
Podaj liczbe nr 1 <input type="text" name="liczba1" value=""> <br>
Podaj liczbe nr 2 <input type="text" name="liczba2" value=""><br>
<p>Podaj dzialanie matematyczne</p>
<input type="radio" name="zapytanie" value="dodaj"> dodaj
<input type="radio" name="zapytanie" value="odejmij"> odejmij
<input type="radio" name="zapytanie" value="pomnoz"> pomnoz
<input type="radio" name="zapytanie" value="dzielenie"> dzielenie
<p>
<input type="submit" value="zapytanie">
</p>
</form>
  </body>
</html>
