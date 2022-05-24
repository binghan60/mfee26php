-- CRUD
-- create, read, update, delete


INSERT INTO 
`address_book`
(`name`, `email`, `mobile`, `birthday`, `address`, `created_at`)
VALUES
('李小明8', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
('李小明9', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
('李小明10', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
('李小明11', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
('李小明12', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26');

-- RecordSet 資料集
SELECT * FROM `address_book`;
SELECT 2+3;
SELECT RAND();

-- 刪除單筆
DELETE FROM address_book WHERE sid = 6;

-- 刪除所有資料
DELETE FROM address_book;

-- 修改資料
UPDATE `address_book` 
    SET `name` = '李小明200' 
    WHERE `sid` = 2;

--
UPDATE `address_book` 
    SET `name` = '李小明200';

-- 排序: 降冪
SELECT * FROM `address_book` ORDER BY `sid` DESC;
-- 排序: 升冪
SELECT * FROM `address_book` ORDER BY `sid` ASC;
SELECT * FROM `address_book` ORDER BY `sid`;

SELECT * FROM `address_book` ORDER BY `name`, `sid` DESC;