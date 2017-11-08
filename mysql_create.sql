CREATE TABLE `authors` (
	`viaf` VARCHAR(22) NOT NULL,
	`name` VARCHAR(200) NOT NULL,
	PRIMARY KEY (`viaf`)
);

CREATE TABLE `genres` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `books` (
	`isbn` VARCHAR(13) NOT NULL,
	`author` VARCHAR(22),
	`name` VARCHAR(200) NOT NULL,
	PRIMARY KEY (`isbn`)
);

CREATE TABLE `book_genres` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`genre` INT NOT NULL,
	`book` VARCHAR(13) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `books` ADD CONSTRAINT `books_fk0` FOREIGN KEY (`author`) REFERENCES `authors`(`viaf`);

ALTER TABLE `book_genres` ADD CONSTRAINT `book_genres_fk0` FOREIGN KEY (`genre`) REFERENCES `genres`(`id`);

ALTER TABLE `book_genres` ADD CONSTRAINT `book_genres_fk1` FOREIGN KEY (`book`) REFERENCES `books`(`isbn`);

