<?php

$l1=$_POST["liczba1"];
$l2=$_POST["liczba2"];
echo'Pierwsza liczba = '.$l1.'<br/>';
echo 'Druga liczba = '.$l2.'<br/>';
echo 'wynik = ';
if ($_POST["zapytanie"]=="dodaj")
{
    echo($l1+$l2);
}
else if ($_POST ["zapytanie"]=="odejmij")
{
    echo($l1-$l2);
}
else if ($_POST ["zapytanie"]=="dzielenie")
{
    echo($l1/$l2);
}
else //($_POST["zapytanie"]=="pomnoz")
{
    echo($l1*$l2);
}
?>