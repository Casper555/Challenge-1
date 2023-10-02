CREATE TABLE `admin_login`(
    `uuid` VARCHAR(30) NOT NULL,
    `username` VARCHAR(30) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `secret` VARCHAR(4) NOT NULL
);
ALTER TABLE
    `admin_login` ADD PRIMARY KEY(`uuid`);
CREATE TABLE `answers`(
    `id` INT NOT NULL,
    `user_uuid` CHAR(36) NOT NULL,
    `question_id` INT NOT NULL,
    `question_answer` LONGTEXT NOT NULL
);
ALTER TABLE
    `answers` ADD PRIMARY KEY(`id`);
CREATE TABLE `user`(
    `name` VARCHAR(100) NOT NULL,
    `cohort` INT NOT NULL,
    `age` INT NOT NULL,
    `uuid` CHAR(36) NOT NULL,
    `timestamp_visit` DATETIME NOT NULL,
    `timestamp_submit` DATETIME NOT NULL
);
ALTER TABLE
    `user` ADD PRIMARY KEY(`name`);
CREATE TABLE `questions`(
    `question_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `question` LONGTEXT NOT NULL
);
ALTER TABLE
    `user` ADD CONSTRAINT `user_uuid_foreign` FOREIGN KEY(`uuid`) REFERENCES `answers`(`user_uuid`);
ALTER TABLE
    `answers` ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY(`question_id`) REFERENCES `questions`(`question_id`);