<?php
$json = file_get_contents('books.json');
$books = json_decode($json, true);
$title = $_POST['title'];
$author = $_POST['authorName'];
$available = $_POST['available'];
$pages = $_POST['pages'];
$isbn = $_POST['isbn'];
?>

<?php
$book = [
    'title' => $title,
    'author' => $author,
    'available' => $available,
    'pages' => $pages,
    'isbn' => $isbn
];
$books[]=$book;
$json = json_encode($books);
file_put_contents('books.json', $json);
header('location: index.php');
?>