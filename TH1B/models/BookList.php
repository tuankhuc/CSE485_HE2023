<?php
class BookList {
    private $books;

    public function __construct() {
        $this->books = array();
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }

    public function sortBooksByAuthor() {
        // Sắp xếp danh sách sách theo tên tác giả
        usort($this->books, function ($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }

    public function sortBooksByTitle() {
        // Sắp xếp danh sách sách theo tên sách
        usort($this->books, function ($a, $b) {
            return strcmp($a->getTitle(), $b->getTitle());
        });
    }

    public function sortBooksByPublicationYear() {
        // Sắp xếp danh sách sách theo năm xuất bản
        usort($this->books, function ($a, $b) {
            return $a->getPublicationYear() - $b->getPublicationYear();
        });
    }
}
?>