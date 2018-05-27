-- CATEGORIES DROP

ALTER VIEW `post_contents` AS select `posts`.`MasterId` AS `MasterId`,`posts`.`Id` AS `Id`,`posts`.`Title` AS `Title`,`posts`.`Submit` AS `Submit`,`posts`.`Type` AS `Type`,`posts`.`Level` AS `Level`,`posts`.`Content` AS `Content`,`posts`.`Body` AS `Body`,`posts`.`UserId` AS `UserId`,`posts`.`Status` AS `Status`,`posts`.`RefrenceId` AS `RefrenceId`,`posts`.`Index` AS `Index`,`posts`.`Deleted` AS `Deleted`,`posts`.`ContentDeleted` AS `ContentDeleted`,`users`.`Username` AS `username`,(select `posts`.`Submit` AS `D1` from `posts` where ((`posts`.`Content` is not null) and (`posts`.`MasterId` = `posts`.`MasterId`)) order by `posts`.`Submit` desc limit 1) AS `D1`,(select `posts`.`Submit` AS `D2` from `posts` where ((`posts`.`ContentDeleted` = 1) and (`posts`.`MasterId` = `posts`.`MasterId`)) order by `posts`.`Submit` desc limit 1) AS `D2` from ((`posts` join `users` on((`posts`.`UserId` = `users`.`Id`)))) where (`posts`.`Id` in (select max(`posts`.`Id`) from `posts` group by `posts`.`MasterId`) and (`posts`.`Deleted` = 0));
ALTER VIEW `post_details` AS select `T`.`MasterId` AS `MasterID`,`T`.`Title` AS `Title`,`T`.`Id` AS `ID`,`T`.`Submit` AS `Submit`,`T`.`UserId` AS `UserID`,`T`.`username` AS `Username`,`T`.`Body` AS `Body`,`T`.`Type` AS `Type`,`T`.`Level` AS `Level`,`T`.`RefrenceId` AS `RefrenceID`,`T`.`Index` AS `Index`,`T`.`Status` AS `Status`,(case when (`T`.`D2` >= `T`.`D1`) then NULL else `T`.`Content` end) AS `Content` from `post_contents` `T`;

ALTER TABLE `posts` DROP FOREIGN KEY `fk_posts_category`;
ALTER TABLE `posts` DROP `CategoryId`;
DROP TABLE `categories`;