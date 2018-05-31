ALTER VIEW `post_details` AS
select `P`.`MasterId` AS `MasterID`,
`P`.`Title` AS `Title`,
`P`.`Id` AS `ID`,
`P`.`Submit` AS `Submit`,
`P`.`UserId` AS `UserID`,
`U`.`Username` AS `Username`,
`P`.`Body` AS `Body`,
`P`.`Type` AS `Type`,
`P`.`Level` AS `Level`,
`P`.`RefrenceId` AS `RefrenceID`,
`P`.`Index` AS `Index`,
`P`.`Status` AS `Status`,
(case when
(
(select `P2`.`Submit` from `posts` `P2` where ((`P2`.`ContentDeleted` = 1) and (`P`.`MasterID` = `P2`.`MasterId`)) order by `P2`.`Submit` desc limit 1)
>
(select `P1`.`Submit` from `posts` `P1` where ((`P1`.`Content` is not null) and (`P`.`MasterID` = `P1`.`MasterId`)) order by `P1`.`Submit` desc limit 1)
)
then NULL else
(select `P1`.`Content` from `posts` `P1` where ((`P1`.`Content` is not null) and (`P`.`MasterID` = `P1`.`MasterId`)) order by `P1`.`Submit` desc limit 1)
end) AS `Content`
from (`posts` `P` join `users` `U` on((`P`.`UserID` = `U`.`Id`))) where (`P`.`ID` in (select max(`posts`.`Id`) from `posts` group by `posts`.`MasterId`) and (`P`.`Deleted` = 0))