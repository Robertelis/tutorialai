<ol>
    <li>.Kiekviena pratima is <a href="http://www.w3schools.com/php/default.asp">http://www.w3schools.com/php/default.asp</a> rasai sitam faile, i atskira php taga ir tvarkingai pasizymi linka, kuris tai pratimas buvo. t.y.:
        <ul><li>
            Pratimo pavadinimas</li>
        <li>pratimo linkas</li>
        <li> pratimo kodas</li></ul>
    </li>
    <li>Jei kazkas neaisku, pasikomentuoji ta pratima ar eilute kas negerai - taguose // arba /* */ - apie situos bus pratimuose paaiskinta. ir klausi tada manes - jei ka rasyk i tw chat, as tada atsiversiu langa paziuret.</li>
    <li>cia yra rimtai tavo paskutinis sansas kazka ismokt ir net nedrysk geriau gincytis ir pyzdavotis. jei nori kazka pasakyt - pasakai normaliai ir viskas, o ne dergiesi kaip asilas, nes siuo metu as vilniuj ir galiu prilekt pistelt i galva</li>
    <li>Sito netrini nieko, viska darai zemiau</li>
</ol>

<h1>TAVO PHP PRATIMAI</h1>

<a href="http://www.w3schools.com/php/showphp.asp?filename=demo_intro">http://www.w3schools.com/php/showphp.asp?filename=demo_intro</a>
<br> <!--cia toks line break tagas, kad darytu nauja eilute tiesiog po linko-->

<?php 

echo "Sveiki visi!";

?>

<hr> <!--nauja eilute po pratimo, kad aiskiai galetum atskirt kur kas-->
    Commentai / Sintakse / Kintamuju atvaizdavimas

<a href="http://www.w3schools.com/php/php_syntax.asp">http://www.w3schools.com/php/php_syntax.asp</a>

<?php
    echo "Commentai galimi su // , # , /* dideliems kodo gabalams rasyt */"
        // labas
        # labas
        /* labas */
       

?>

<hr>
<li> negali but pareiskimas parasyta skirtingo dydzio raidemis nes tai jau visiskai skirtingas pareiskimas </li>
<?php

    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";
    
?>  

<hr>
<p> Kintamuju veiksmai </p>


<?php 
$x = "Robertelis";
    echo "Sveiki visi as esu $x !";
?>

<hr>

<?php 

$x = 10;
$y = 6;

echo $x - $y;

?>

<hr>

<li> Kaip zinoti kiek ilgio zodis</li>

<?php

echo strlen("Sveiki visi") // output arba atvaizdavimas 11 skaitmenu

?>

<hr>

<li>Kiek zodziu</li>

<?php
echo str_word_count("Sveiki visi"); // outputs arba atvaizdavimas 2 zodziai
?>

<hr>
<li> Kazkas...</li>

<?php
echo strrev("Hello world!"); // outputs !dlrow olleH nes buna puslapiu kur tekstas buna is desines i kaire


// NEISVAIZDUOJU KA SITAS DALYKAS DARO?
?>

<hr>

<li> php pastovumas </li>

<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING; /*NESUPRANTU KAS CIA YRA? kam tai skirta ir ka tai isvis daro? - tai buna kartais scripte kad reikia 
konkretaus kintamojo
kuri nori naudot per visa koda savo proggamos
ir kad nereiktu kiekviena karta to is naujo rasyt
apsirasai tokius kintamuosius*/

?>

<hr>

<li> PHP OPERATORIAI </li>
<?php 
// OPERATORIAI TAI GALI BUT + - / * % Ir  taip toliau.. tarkim dalinu tai

$x = 12; 
$y = 6;

echo $x / $y;
?>   

<?php
$x = 10; 
$y = 6;

echo $x * $y;
?>   

<li> PHP LOGISKI OPERATORIAI (Nesuprantama isvis)</li>

<?php
$x = 100; 
$y = 50;
/* Kas cia tokio kam tie lygu jei mes vistiek tik zodi parasem?? nu tai cia yra if funkcija
patikrinimo algoritmas , sita koda galima naudot jei norima patikrint tarkim vartotojo passworda tai jog ar teisings reikia iskelt salyga kuri tai atitktu.. */

if ($x == 100 xor $y == 40) {
     echo "Hello world!";
}
?>   

<hr>

<li>PHP Conditional Statements</li>
 
<!--
Sintakse

if (condition) {
    code to be executed if condition is true;
}
-->

<?php
$t = date("H");

if ($t < "17") {
    echo "Geros dienos!";
}
?>

<li> kitaip naudojimas </li>



<?php
$s = date("H");

if ($s < "20") {
    echo "Geros dienos!";
} 

else {
    echo "Gero vakaro!";
}
?>

<?php
$s = date("H");

if ($s < "10") {
    echo "Gero ryto";
} 

elseif ($s < "20") {
    echo "Geros dienos!";
} 

else {
    echo "Gero vakaro!";
}
?>

<hr>

<li>PHP  switch Statement</li>

<?php
$favcolor = "black";
// NESUPRANTU KAM REIKALINGAS, CIA GAL JEI I KAZKOKIA LENTELE RASYT REIKES JOG JIS DUOTU VARIANTUS?
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
<hr>
<li>PHP GRANDINE</li>

<?php
$y = 1;
while($y <= 6) {
    echo "Numeris yra: $y <br>";
    $y++; // Vel nesupratau kam tie pliusai? Padidina viena karta
}
?>
<!-- Arba
<?php 
$x = 1;

do {
     echo "Numeris yra: $x <br>";
     $x++;
} while ($x <= 6);
?>
-->

<li> Php for loop</li>


<!--
Sintakse
for (init counter; test counter; increment counter) {
    code to be executed;
}
-->
<?php 
for ($x = 0; $x <= 10; $x++) {
   echo "The number is: $x <br>";
}
?>   

<hr>

<li>Funkcijos</li>

<!-- Sintakse 
function functionName() {
    code to be executed;
}

<?php
function writeMsg() {
    echo "Sveiki!";
}

writeMsg(); // call the function
?>

/* funkcija su argumentais */

<?php
function narioNarys($snarys) {
    echo "$snarys.<br>";
}

narioNarys("irmis");
narioNarys("robertelis");
?>

<?php
/*Nesupratau ka sitas daro? tas min tai cia visada buna toki nustatyt galima kaip funkcija? */
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
    
}

setHeight(350);
setHeight(); /* will use the default value of 50 */
setHeight(135);
setHeight(80);
?>

<?php
function sum($x, $y) { 
     $z = $x + $y;
     return $z; // ?
}

echo "5 + 10 = " . sum(5,10) . "<br>"; 
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);

?>

<!--  nieko -->
<hr>

<li>Masyvas</li>

<?php 
$masinos = array("Volvo", "Corvette", "Mustang");

    echo count($masinos);
?>
    

<hr>
<li> Rusiuoti funkcijas masyvams</li>

<?php
// Nesuprantu pacio viso kodo nuo kur prasideda for?
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
sort($cars);
var_dump($cars);

$clength = count($cars);
var_dump($clength);
for($x = 0; $x <  $clength; $x++) {
     echo $x;
     echo $cars[$x];
     echo "<br>";
}
?>

<hr>

<li>Superglobal kintamieji?</li>
<!--
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

Nesuprantu visiskai sito man asmeniskai atskirai sita turetum pasakyt..
-->

<?php 
$x = 75; 
$y = 25;
 
function addition() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
addition(); 
echo $z;  
?>

<hr>

<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>



<hr>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } 
    else {
        echo $name;
    }
}
?>

<hr>

<form method="get" action="index.php">
 Ieskau: <input type="text" name="ieskau">
     <input type="submit">
</form>
<?php 
if (!empty($_GET)) {
    $galiu_ieskot_tarp = array(
        'masina',
        'zmogus',
        'vieta',
        'lektuvas'
    );
    $ieskau = $_GET['ieskau'];
    foreach ($galiu_ieskot_tarp as $rezultatas_kurio_tikiuos) {
        if($ieskau == $rezultatas_kurio_tikiuos) {
            echo $rezultatas_kurio_tikiuos;
        }
    }
}
// sitas scriptas paima ivesta verte i laukeli, ir patikrina galimus rezultatus. 
// jei randa, grazina rezultata.
?>

<hr>

<li>PHP Form Validation Example</li>
<?php

      
$vardas_error = $pavarde_error = $lytis_error ;
$Vardas = $Pavarde = $Komentarai = $Lytis ; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $Vardas = test_input($_POST["vartotojo_vardas"]);
   $Pavarde = test_input($_POST["vartotojo_pavarde"]);
   $Komentarai = test_input($_POST["komentarai"]);
   $Lytis = test_input($_POST["lytis"]);
}
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["vartotojo_vardas"])) {
    $vardas_error = "Reikalingas yra Vardas";
  } else {
    $Vardas = test_input($_POST["vartotojo_vardas"]);
  }

  if (empty($_POST["vartotojo_pavarde"])) {
    $pavarde_error = "Reikalinga yra Pavarde";
  } else {
    $Pavarde = test_input($_POST["vartotojo_pavarde"]);
  }

  if (empty($_POST["lytis"])) {
    $lytis_error = "Pasirinkite butinai lyti!";
  } else {
    $Lytis = test_input($_POST["lytis"]);
  }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<form method="post" action="index.php<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    
Vardas      <input type="text" name="vartotojo_vardas">
    <span class="error">* <?php echo $vardas_error;?></span>
Pavarde     <input type="text" name="vartotojo_pavarde">
    <span class="error">* <?php echo $pavarde_error;?></span>
Komentarai  <textarea name="komentarai" rows="3" cols="20"></textarea>
    Lytis -
            <input type="radio" name="lytis" value="Vyras">
            <input type="radio" name="lytis" value="Moteris">
    <span class="error">* <?php echo $lytis_error;?></span>
            <input type="submit">

</form>
<!-- Nepavyko padaryt required ir visur eroru pilna meto-->
















