<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=voting-dapp", "root", "");
} catch ( PDOException $e ){
  print $e->getMessage();
}
if(isset($_POST["adayAdi"])){
    $query = $db->prepare("INSERT INTO president SET
    name = :name,
    link = :link");
    $insert = $query->execute(array(
          "name" => $_POST["adayAdi"],
          "link" => $_POST["adayFoto"],
    ));
    if ( $insert ){
        $last_id = $db->lastInsertId();
        print "insert işlemi başarılı!";
        echo "işlem başarılı";
    }
}
?>