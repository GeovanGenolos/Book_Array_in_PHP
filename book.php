<?php

class Book {
    // Private properties
    private $title;
    private $author;
    private $pages;

    // Constructor
    public function __construct($title, $author, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }

    // Setters
    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setPages($pages) {
        $this->pages = $pages;
    }

    // Getters
    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPages() {
        return $this->pages;
    }

    // describe method
    public function describe() {
        return $this->title . ' by ' . $this->author . ' has ' . $this->pages . ' pages.';
    }
}

// Test script
$book = new Book("Harry Potter", "J.K. Rowling", 400);
echo $book->describe() . "\n";

$book->setTitle("New Title");
$book->setPages(500);
echo $book->describe();

?>