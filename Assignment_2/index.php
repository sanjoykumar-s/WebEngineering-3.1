<?php

require_once 'Book.php';
require_once 'Customer.php';

$book1 = new Book(
    '9788187981954',
    'Opekkha',
    'Humayun Ahmed',
    6
);

$book2 = new Book(
    '9788187981952',
    'Tetul Bon e Joshna',
    'Humayun Ahmed',
    12
);
$book3 = new Book(
    '9788187981953',
    'Krishno Pokkho',
    'Humayun Ahmed',
    0
);

$customer1 = new  Customer(
    1,
    'Adrit',
    'Chowdhury',
    'adrit.chowdhury@gmail.com'
);
$customer1 = new  Customer(
    2,
    'Ayushman',
    'Chowdhury',
    'ayushman.chowdhury@gmail.com'
);


// isAvailable
echo "Book-1 is available? " . $book1->isAvailable() . "</br>";
// getPrintableTitle
echo "Book-1 Title: " . $book1->getPrintableTitle() . "</br>";

echo "</br>";

// addCopy
echo "Book-3 Title:  " . $book3->getPrintableTitle() . "</br>";
echo "Available Copy of Book-3:     " .  "<b>" . $book3->availableCopy() . "</b></br>"; 
$book3->addCopy(2); // add A copy of Book-3
echo "Available Copy after adding a book of Book-3:  " . "<b>" . $book3->availableCopy() . "</b></br>";

echo "</br>";

//getTitle
echo "Book-1 Title: <b>" . $book1->getTitle() . "</b></br>";
//getAuthor
echo "Book-1 Author: <b>" . $book1->getAuthor() . "</b></br>";
//getIsbn
echo "Book-1 Isbn: <b>" . $book1->getIsbn() . "</b></br>";


?>