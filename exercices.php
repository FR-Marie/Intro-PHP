<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices d'introduction à PHP</title>
</head>
<body>

<div class="exercices-PHP">
<!-------INTRO------->
<?php echo "<h1>Exercices d'introduction à PHP</h1>"; ?>

<!-------DECLARATION DE VARIABLES------->
<?php 
$variable_string = "marie";
$variable_int = 32;
$variable_float = 10.5;
$variable_boolean = true;
$variable_tableau = array("banane","raisin","fraise","framboise");
$variable_object = new chien;
    class chien {
         const race = "dog argentin";
         const couleur = "blanc";
         const age = 5;
    }
$variable_null = NULL;
?>

<!-------AFFICHER LE TYPE DE CHAQUE VARIABLES (une à une)------->
<div class="container-fluid">
    <div class="row">
        <div class="alpha col-12">
            <?php
            echo "<h3>Afficher le type de chaque variable</h3>";
            echo gettype($variable_string);
            echo gettype($variable_int);
            echo gettype($variable_float);
            echo gettype($variable_boolean);
            echo gettype($variable_tableau);
            echo gettype($variable_object);
            echo gettype($variable_null);
            ?>
        </div>
    </div>
</div>

<!------------------------------------------------>
<br><br>
<!-------AFFICHER LES VARIABLES (une à une)------->
<div class="container-fluid">
    <div class="row text-center mt-5">
        <div class="col-lg-6 col-sm-12">
            <?php
            echo "<h3>Afficher les variables une à une</h3>";
            echo "$variable_string <br>";
            echo "$variable_int <br>";
            echo "$variable_float <br>";
            echo "$variable_boolean <br>";
            echo "$variable_null <br>";
            ?>
        </div>

        <div class="col-lg-6 col-sm-12">
            <!-------AFFICHER LES VARIABLES (concaténation) /!\ les variables tableau et objet ne sont pas affichables telles quelles /!\------->
            <?php
            echo "<h3>Afficher les variables avec la concaténation</h3>";
            echo $variable_string . "<br>" . $variable_int . "<br>" . $variable_float . "<br>" . $variable_boolean;
            ?>
        </div>
    </div>
</div>
<br><br>

<!-------OPERATIONS MATHEMATIQUES------->
<?php
echo "<h3>Opérations mathématiques</h3>";
$a = 15;
$b = 5;

echo "soit a = 15, b = 5 alors: <br>";
echo "a + b = " . ($a + $b) . "<br>"; 
echo "a - b = " . ($a - $b) . "<br>";
echo "b - a = " . ($b - $a) . "<br>";
echo "a * b = " . ($a * $b) . "<br>";
echo "a / b = " . ($a / $b) . "<br>";
echo "b est 5% de a = " . round(100 * $b / $a) . "%" ."<br>";
echo "a est 15% de b = " . (100 * $a / $b) . "%";
?>

<br><br>
<!-------CONCATENATION DE 2 CHAINES DE CARACTERE------->
<?php
echo "<h3>Concaténation de 2 chaînes de caractère</h3>";

$a = "bonjour";
$b = "marie";

echo $a . " je m'appelle " . $b;
?>

<br><br>
<!-------CONDITIONS------->
<?php
echo "<h3>Conditions</h3>";

$prenom1 = "marie";
$prenom2 = "david";
$age1 = 32;
$age2 = 39;
$age3 = 15;
$age4 = 20;
$estMajeur = true;


echo "<p> a) si prenom1 => affiche age1</p>";
if($prenom1){
    echo "tu as " . $age1 . " ans";
}

echo "<p>b) si prenom2 => affiche age2</p>";
if($prenom2){
    echo "tu as " . $age2 . " ans <br>";
}

echo "<p>c) selon age3 estMajeur ou pas</p>";
if($age3 > 18){
    $estMajeur = true;
    echo "<p>tu es majeur";
}else{
    $estMajeur = false;
    echo "<p>tu es mineur</p>";
}

echo "<p>d) selon age4 estMajeur ou pas</p>";
if($age4 > 18){
    $estMajeur = true;
    echo "<p>tu es majeur";
}else{
    $estMajeur = false;
    echo "<p>tu es mineur</p>";
}
?>

<!-------OPERATEURS DE COMPARAISON (et deboguer les résultats avec var_dump())------->
<?php
echo "<h3>OPERATEURS DE COMPARAISON</h3>";

$x = 10;
$y = "10";
$z = "pluie";

if($x == $y){
    echo "<p>x à la même valeur que y</p>";
}else{
    echo "<p>x n'a pas la même valeur que y</p>";
}
if($x === $y){
    echo "<p>x a la même valeur et le même type que y</p>";
}else{
    echo "<p> x a la même valeur mais pas le même type que y ";
}
if($x !== $y){
    echo "<p>x est différent de y</p>";
}else if($x != $z){
    echo "<p>x est différent de z</p>";
}
?>

</div>


</body>
</html>

