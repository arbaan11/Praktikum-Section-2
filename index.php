<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once "koneksi.php";

$orang = $_POST["name"];
$gender = $_POST["gender"];

$results = $client->run("CREATE (a:Person {name: '".$orang."', gender: '".$gender."'})");
echo "<script>
    window.location.replace('index.php');
</script>";