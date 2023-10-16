<?php
$json = file_get_contents('books.json');
$books = json_decode($json, true);
$index = $_GET['index'];
$book = $books[$index];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="additon.php" method="post">
            <input type="hidden" name="index" value="<?php echo $index ?>">
            <label for="title">Title :</label>
            <input type="text" name="title" placeholder="Type Title" required>
            <label for="author">Author :</label>
            <input type="text" name="authorName" placeholder="Type Author name" required>
            <label for="available">Available :</label>
            <input type="text" name="available" placeholder="Enter number of available copy" required>
            <label for="pages">Pages :</label>
            <input type="text" name="pages"  placeholder="Type page number" required>
            <label for="isbn">ISBN :</label>
            <input type="text" name="isbn"  placeholder="Type ISBN" required>
            <br><input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>
