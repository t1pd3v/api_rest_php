<?php 
# echo "Hello World from php!!!"
/*
$name = "Miguel";
$numer = '10';
$bolean = true;

$newNumber = $numer + 1;

echo $newNumber;


var_dump($bolean);
echo gettype($name);
var_dump($name);
var_dump($numer);
*/

/*
$name = "Carlitos";

# No se escribe las varibles con injectcion de php 
# $output = 'Hola me llamo $name';

# Se escriben asi para que el lenguaje lo interprete
echo $output = "Hola me llamo $name";
*/

# Como usar un IF
/*
$isOld = $age > 40;

if ($isOld) {
    echo "<h2>Tas recontra viejoo</h2>";
} elseif ($isDev) {
    echo "<h2>No sos viejo pero tas re jodido amigaso</h2>";
} else {
    echo "<h2>Tas recontra jovenn</h2>";
}
*/


/*
$isOld = $age < 10;
$isDev = false;

?>


<?php if ($isOld) : ?>
    <h2>Tas recontra viejo</h2>
<?php elseif ($isDev) : ?>
    <h2>No sos viejo pero tas recontra jodido</h2>
<?php else : ?>
    <h2>Tas recontra jovennnn</h2>
<?php endif; ?>
*/

# Como usar el match
/*
$age = 0;

$outputAge = match ($age) {
    0, 1, 2 => "Sos re bebe",
    3, 4, 5 => "Sos re nenito",
    11, 12, 13 => "Sos re adolecente",
    default => "Estas re viejitoo",
}
*/

# Mejor que el Switch
/*
$age = 48;

$outputAge = match (true) {
   $age < 2 => "Sos re bebe",
   $age < 10 => "Sos re nenito",
   $age < 18 => "Sos re adolecente",
   $age === 18 => "Sos mayor de edad (viejo choto)",
   $age < 40 => "Sos un adulto joven",
   $age < 60 => "Sos un adulto viejo pero viejo",
    default => "Estas re viejardoo",
}
*/

$bestLanguages = ["php", "js", "python", "ruby", "lua", 2,];
$bestLanguages[5] = "java"; 
$bestLanguages[] = "ts";


?>



<ul>
    <h2>Los lenguajes de programacion mas piolas son:</h2>
    <?php foreach ($bestLanguages as $language) : ?>
        <li><?= $language ?></li>
        <?php endForeach; ?>
</ul>

<!--
<h2> El lenguaje mas piola es <?=$bestLanguages[3] ?></h2>

<!-- 
<h2><?= $outputAge?></h2>
