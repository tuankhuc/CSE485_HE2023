<?php
require_once 'models/IBook.php';
require_once 'models/Book.php';
require_once 'models/BookList.php';
class BookController {
    public function index() {
        // Tạo danh sách sách và thêm một số cuốn sách vào
        $bookList = new BookList();
        $bookList->addBook(new Book("Tiêu đề sách 1", "Tác giả 1", "Nhà xuất bản 1", 2021, "ISBN-1239", ["Chương 1", "Chương 2"]));
        $bookList->addBook(new Book("Tiêu đề sách 2", "Tác giả 2", "Nhà xuất bản 2", 2022, "ISBN-5679", ["Chương 1", "Chương 2", "Chương 3"]));
        $bookList->addBook(new Book("Tiêu đề sách 3", "Tác giả 3", "Nhà xuất bản 3", 2020, "ISBN-1234", ["Chương 1", "Chương 2", "Chương 3"]));
        $bookList->addBook(new Book("Tiêu đề sách 4", "Tác giả 1", "Nhà xuất bản 4", 2021, "ISBN-1235", ["Chương 1", "Chương 2", "Chương 3"]));
        $bookList->addBook(new Book("Tiêu đề sách 5", "Tác giả 2", "Nhà xuất bản 5", 2023, "ISBN-1236", ["Chương 1", "Chương 2", ]));
        $bookList->addBook(new Book("Tiêu đề sách 6", "Tác giả 3", "Nhà xuất bản 6", 2019, "ISBN-1237", ["Chương 1", "Chương 2", ]));
        $bookList->addBook(new Book("Tiêu đề sách 7", "Tác giả 1", "Nhà xuất bản 7", 2019, "ISBN-1238", ["Chương 1", "Chương 2", ]));
        $bookList->addBook(new Book("Tiêu đề sách 8", "Tác giả 2", "Nhà xuất bản 8", 2022, "ISBN-1230", ["Chương 1", "Chương 2", ]));
        // Kiểm tra các thao tác sắp xếp
        if (isset($_GET['sort'])) {
            $sortType = $_GET['sort'];
            switch ($sortType) {
                case 'author':
                    $bookList->sortBooksByAuthor();
                    break;
                case 'title':
                    $bookList->sortBooksByTitle();
                    break;
                case 'year':
                    $bookList->sortBooksByPublicationYear();
                    break;
                default:
                    // Không hỗ trợ sắp xếp theo loại được yêu cầu
                    break;
            }
        }

        // Load view
        include_once 'views/book-list.php';
    }
}
?>