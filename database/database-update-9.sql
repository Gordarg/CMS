ALTER TABLE `posts` 
CHANGE COLUMN `Type` `Type` CHAR(5) NOT NULL DEFAULT 'POST' COMMENT 'POST, FILE, ARTL, COMT, SURV, QUST, ANSR,CHAT,TRNL' ;
