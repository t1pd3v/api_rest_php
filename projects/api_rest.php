<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicialisando uun nuevo fetch de la Api
$ch = curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);

#var_dump($data);

?>


<div>
    <h1>La proxima pelicula de Marvel Cinematographyc Universe</h1>
    <h2><?php echo $data["title"]; ?></h2>
    <img src="<?php echo $data["poster_url"]; ?>">
    <p>¿De que trata?: <?php echo $data["overview"]; ?></p>
    <h3>Fecha De Estreno: <?php echo $data["release_date"]; ?></h3>
    <p>Dias que faltan: <?php echo $data["days_until"]; ?> dias</p>
</div>
