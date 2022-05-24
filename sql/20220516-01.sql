

SELECT * FROM `products` JOIN `categories`;

SELECT * FROM `products` 
    JOIN `categories`
    ON `products`.`category_sid`=`categories`.`sid`;

-- products
-- product_id, product_name, product_price, product_visible

SELECT `products`.*, `categories`.`name`  FROM `products` 
    JOIN `categories`
    ON `products`.`category_sid`=`categories`.`sid`;


SELECT p.*, c.`name` AS 分類名稱
    FROM `products` AS p 
    JOIN `categories` AS c
    ON p.`category_sid`=c.`sid`;

SELECT p.*, c.`name` 分類名稱
    FROM `products` p 
    JOIN `categories` c
    ON p.`category_sid`=c.`sid`;

SELECT p.*, c.`name` 分類名稱
    FROM `products` p 
    LEFT JOIN `categories` c
    ON p.`category_sid`=c.`sid`;

SELECT p.*, c.`name` 分類名稱
    FROM `categories` c 
    LEFT JOIN `products` p
    ON p.`category_sid`=c.`sid`;


SELECT * FROM `products` WHERE `author` LIKE '吳睿紘';

SELECT * FROM `products` WHERE `author` LIKE '陳%';

SELECT * FROM `products` WHERE `author` LIKE '%陳%';

-- keyword: ss

SELECT * FROM `products` 
    WHERE `author` LIKE '%陳%'
    OR `bookname`  LIKE '%陳%';

SELECT * FROM `products` 
    WHERE `author` LIKE '%設計%'
    OR `bookname`  LIKE '%設計%';

SELECT * FROM `products` WHERE `sid` IN (6,2,3);


SELECT * FROM `products` WHERE `sid` IN (6,2,3, 10, 15) ORDER BY RAND();


SELECT SUM(price) FROM `products`;


SELECT * FROM `products` GROUP BY `category_sid`;

SELECT *, COUNT(1) FROM `products` GROUP BY `category_sid`;


SELECT c.sid, c.name, COUNT(1) 數量
    FROM `products` p
    JOIN `categories` c
        ON p.category_sid=c.sid
    GROUP BY `category_sid`;

-- 單筆訂單
SELECT o.member_sid, od.* FROM `orders` o
    JOIN `order_details` od
        ON o.sid=od.order_sid
    WHERE o.sid=10;

SELECT o.member_sid, od.*, p.bookname FROM `orders` o
    JOIN `order_details` od
        ON o.sid=od.order_sid
    JOIN `products` p
        ON p.sid=od.product_sid
    WHERE o.sid=10;


SELECT o.member_sid, od.*, p.bookname FROM `orders` o
    JOIN `order_details` od
        ON o.sid=od.order_sid
    JOIN `products` p
        ON p.sid=od.product_sid
    WHERE o.member_sid=13
    ORDER BY o.order_date DESC, od.sid;


SELECT * FROM `orders` WHERE `order_date`>='2017-01-01';

SELECT * FROM `orders` 
    WHERE `order_date`>='2017-01-01'
    AND `order_date`<'2019-01-01';

-- 錯誤的用法, 時間至少要 YYYY-MM-DD 的格式, 包含 date,datetime
SELECT * FROM `orders` 
    WHERE `order_date`>='2017-01'
    AND `order_date`<'2019-01';


-- 子查詢 1
SELECT `product_sid` FROM `order_details` WHERE `order_sid`=11;

SELECT * FROM products WHERE `sid` IN
(SELECT `product_sid` FROM `order_details` WHERE `order_sid`=11);

-- 子查詢 2, sub-query
SELECT `product_sid`, `price` FROM `order_details` WHERE `order_sid`=11;

SELECT p.*, od.price od_price FROM products p
JOIN (
    SELECT `product_sid`, `price` FROM `order_details` WHERE `order_sid`=11
    ) od
    ON p.sid=od.product_sid;

-- VIEW
CREATE VIEW test_view AS
SELECT * FROM categories;

CREATE VIEW order_detail_product_view AS
SELECT od.*, p.bookname FROM order_details od
JOIN products p
ON od.product_sid=p.sid;

SELECT * FROM `order_detail_product_view` WHERE `order_sid`=10;