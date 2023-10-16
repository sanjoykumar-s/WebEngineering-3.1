<?php
$json =file_get_contents('books.json');
$bookJson =json_decode($json,true);

$index=$_POST['index'];
?>
<?php
    unset($bookJson[$index]); 
    $Json = json_encode($bookJson); 
    file_put_contents('books.json', $Json);
    header('Location: index.php'); 
?>