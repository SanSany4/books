ALTER TABLE `books` DROP FOREIGN KEY `books_fk0`;

ALTER TABLE `book_genres` DROP FOREIGN KEY `book_genres_fk0`;

ALTER TABLE `book_genres` DROP FOREIGN KEY `book_genres_fk1`;

DROP TABLE IF EXISTS `authors`;

DROP TABLE IF EXISTS `genres`;

DROP TABLE IF EXISTS `books`;

DROP TABLE IF EXISTS `book_genres`;

