<?php

global 

$description,
$producer,
$delivery;


?>

<?php

require '../mysql_connect.php';
global $mysqli;

$id = null;
$fname = '';
$lname = '';
$email = '';
$telefon =  '';
$adresa = '';
$profession = '';
$link = '';
$institutia = '';
$DataIncE = '';
$DataSfrE = '';
$education = '';
$postul = '';
$DataIncL = '';
$DataSfrL = '';
$oras = '';
$company = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $mysqli->query("SELECT * from dima.date where id = $id");
    if ($result) {
        $object = $result->fetch_assoc();
        $fname = $object['nume'];
        $lname = $object['prenume'];
        $email = $object['email'];
        $telefon = $object['telefon'];
        $adresa = $object['adresa'];
        $profession = $object['profession'];
        $link = $object['link'];
        $institutia = $object['Institutia'];
        $DataIncE = $object['DataIncE'];
        $DataSfrE = $object['DataSfrE'];
        $education = $object['education'];
        $postul = $object['postul'];
        $DataIncL = $object['DataIncL'];
        $DataSfrL = $object['DataSfrL'];
        $oras = $object['oras'];
        $company = $object['company'];

    } else {
     $id = null;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/global.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<h1>Informatia utilizatorului (Id#: <?php echo $id ?>)</h1>
<div class="row">
    <div class="col-3">Nume</div>
    <div class="col-9"><?php echo $fname ?></div>
</div>
<div class="row">
    <div class="col-3">Prenume</div>
    <div class="col-9"><?php echo $lname ?></div>
</div>
<div class="row">
    <div class="col-3">Email</div>
    <div class="col-9"><?php echo $email ?></div>
</div>
<div class="row">
    <div class="col-3">Telefon</div>
    <div class="col-9"><?php echo $telefon ?></div>
</div>

<div class="row">
    <div class="col-3">Adresa</div>
    <div class="col-9"><?php echo $adresa ?></div>
</div>
<div class="row">
    <div class="col-3">Profesia</div>
    <div class="col-9"><?php echo $profession ?></div>
</div>
<div class="row">
    <div class="col-3">Link</div>
    <div class="col-9"><?php echo $link ?></div>
</div>

<div class="row">
    <div class="col-3">Institutia</div>
    <div class="col-9"><?php echo $institutia ?></div>
</div>
<div class="row">
    <div class="col-3">DataIncE</div>
    <div class="col-9"><?php echo $DataIncE ?></div>
</div>
<div class="row">
    <div class="col-3">DataSfrE</div>
    <div class="col-9"><?php echo $DataSfrE ?></div>
</div>
<div class="row">
    <div class="col-3">Educatia</div>
    <div class="col-9"><?php echo $education ?></div>
</div>
<div class="row">
    <div class="col-3">Postul</div>
    <div class="col-9"><?php echo $postul ?></div>
</div>
<div class="row">
    <div class="col-3">DataIncL</div>
    <div class="col-9"><?php echo $DataIncL ?></div>
</div>
<div class="row">
    <div class="col-3">DataSfrL</div>
    <div class="col-9"><?php echo $DataSfrL ?></div>
</div>
<div class="row">
    <div class="col-3">Oras</div>
    <div class="col-9"><?php echo $oras ?></div>
</div>
<div class="row">
    <div class="col-3">Compania</div>
    <div class="col-9"><?php echo $company ?></div>
</div>
<br>
<br>
<br>
<br>

<hr>

</body>
</html>


