ALTER TABLE `posts` 
ADD COLUMN `Deleted` BIT(1) NOT NULL DEFAULT 0 AFTER `Index`;