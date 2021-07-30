CREATE TABLE `users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `firstname` VARCHAR(170) NOT NULL,
    `lastname` VARCHAR(170) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(80) NOT NULL,
    `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    CONSTRAINT uc_email UNIQUE(`email`)
 )