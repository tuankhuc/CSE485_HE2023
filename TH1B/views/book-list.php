<!DOCTYPE html>
<html>
<head>
    <title>Quản lý danh sách cuốn sách</title>
</head>
<body>
    <h1>Danh sách cuốn sách</h1>
    <p>
        <a href="index.php?sort=author">Sắp xếp theo tên tác giả</a> |
        <a href="index.php?sort=title">Sắp xếp theo tiêu đề sách</a> |
        <a href="index.php?sort=year">Sắp xếp theo năm xuất bản</a>
    </p>
    <table border="1">
        <tr>    
        <th>Tiêu đề sách</th>
            <th>Tác giả</th>
            <th>Nhà xuất bản</th>
            <th>Năm xuất bản</th>
            <th>ISBN</th>
            <th>Danh mục chương</th>
        </tr>
        <?php foreach ($bookList->getBooks() as $book): ?>
        <tr>
            <td><?php echo $book->getTitle(); ?></td>
            <td><?php echo $book->getAuthor(); ?></td>
            <td><?php echo $book->getPublisher(); ?></td>
            <td><?php echo $book->getPublicationYear(); ?></td>
            <td><?php echo $book->getISBN(); ?></td>
            <td><?php echo implode(", ", $book->getChapters()); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>