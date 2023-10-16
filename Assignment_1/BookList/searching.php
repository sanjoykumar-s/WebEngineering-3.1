<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
$json = file_get_contents('books.json');
$books = json_decode($json, true);

$filtered = [];
$query = $_GET['query'];
foreach ($books as $book) {
    if (stripos($book['title'], $query) !== false) {
        $filtered[] = $book;
    }
}
?>
<form action="searching.php" method="get">
    <input type="text"  name="query" value="<?php echo $_GET['query'] ?>" id="query">
    <button type="submit">Search</button>
</form>
<table border="1" width="900">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Available</th>
        <th>Pages</th>
        <th>Isbn</th>
        <th>Actions</th>
    </tr>
    <?php $index = 0; ?>
    <?php foreach ($filtered as $book) {
    ?>
        <tr>
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $book['available']; ?></td>
            <td><?php echo $book['pages']; ?></td>
            <td><?php echo $book['isbn']; ?></td>
            <td>
                <a href="editForm.php?index=<?php echo $index ?>">Edit</a>

                <form action="deletion.php" method="POST">
                    <input type="hidden" name="index" value="<?php echo $index ?>">
                    <button type="submit" style="background-color: #ff0000;">Delete</button>
                </form>
            </td>
        </tr>
    <?php
        $index++;
    }

    ?>

</table>
<a href="addForm.php" class="add-book-link">Add Book</a>
</body>
</html>