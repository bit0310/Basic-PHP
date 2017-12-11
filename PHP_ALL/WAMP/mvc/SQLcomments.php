<?php



//Insert Data

insert into customers(
    firstName, lastName, address, email, city, division, zipcode) values ('sofiqul', 'islam',
     'house5', 'sofiq@gmail.com', 'dhaka', 'dhaka', '1250');


//Alter Table(insert)
alter table customers
add newCol varchar(255);

//Alter Table(update)
alter table customers
modify column newCol int(11);

//Alter Table(delete)
alter table customers
drop column newCol;



//Select Data

select * from customers;

select * from customers limit 3,4;
select firstName, lastName from customers;
select * from customers where id = 2;
select * from customers order by lastName;
select * from customers order by lastName asc;



//Between Operator

select * from customers where age Between 20 and 30;


//Like Operator

select * from customers where city like '%ka';
select * from customers where city like 'd%';
select * from customers where city like '%ha%';


//IN Operator

select * from customers where division in('dhaka','gp');

//Relationships & Foreign Keys

CREATE TABLE orders(
	id int not null AUTO_INCREMENT,
    orderNumber varchar(255),
    productId int,
    customerId int,
    orderDate DATETIME default CURRENT_TIMESTAMP,
    PRIMARY key (id),
    FOREIGN key(productId) REFERENCES products(id),
    FOREIGN key(customerId) REFERENCES customers(id)
    
);

//Inner Join

SELECT customers.firstName, customers.lastName, orders.orderNumber 
from customers INNER join orders
on customers.id = orders.customerId
order by customers.id;



//Left Join((customers table)null soho return kore)

SELECT customers.firstName, customers.lastName, orders.orderNumber, orders.orderDate
from customers left join orders
on customers.id = orders.customerId
order by customers.lastName;

//Right Join((orders table)null soho return kore)

SELECT orders.orderNumber, customers.firstName, customers.lastName
from orders right join customers
on orders.customerId = customers.id
order by customers.lastName;



//Union Operator(common)

SELECT city FROM customers
UNION
SELECT city FROM suppliers
order by city;


//Union All
SELECT city FROM customers
UNION ALL
SELECT city FROM suppliers
order by city;


SELECT city, division FROM customers
where city = 'dhaka'
UNION ALL
SELECT city, division FROM suppliers
where city = 'kotalipara'
order by city;

//Join Multiple Tables

SELECT  orders.orderNumber, customers.firstName, customers.lastName, products.name
from orders 
INNER join products
on orders.productId = products.id
INNER join customers
on orders.customerId = customers.id
order by orders.orderNumber;


//Subquery IN SELECT
select * 
    from customers 
    where id IN(select id from customers
                where age >30
               );


//Subquery with INSERT (create backup table)

insert into `customers_backup` 
	SELECT * from customers
    WHERE id IN(
        SELECT id 
        from customers
    );


//Subquery with Update 

update customers
	SET salary = salary*0.25 
    where age IN(SELECT age from customers_backup
                where age >= 26);


//Subquery with Delete

DELETE FROM `customers_backup`
WHERE age in(select age from customers where age = 30);


//TRUNCATE TABLE(only table data remove kore)
TRUNCATE TABLE suppliers;


//Wildcard Operators
'%XXX_';
'%XXX%';
'_XXXX_';


//Aliases for Column(colomn name change kore)
select firstName as 'First Name', lastName as 'Last Name' from customers;
//concate colomn

select concat(firstName,' ', lastName) as 'Name', email, address, city from customers;

//Aliases for table(table name change kore)
SELECT o.id, o.orderDate, c.firstName, c.lastName from customers as c, orders as o;



//Aggregate Functions
SELECT avg(age) from customers;
SELECT count(age) from customers;
SELECT max(age) from customers;
SELECT min(age) from customers;
SELECT sum(age) from customers;

//GROUP BY Statement

SELECT age, count(age)
FROM `customers` WHERE age >25
group by age;


//HAVING Clause

SELECT age, count(age)
FROM `customers` 
group by age
HAVING COUNT(age)>= 2;


//CREATE VIEW
CREATE VIEW customers_view as 
	select id, firstName, lastName
    from customers
    WHERE firstName is NOT null;


//Insert Data into a VIEW




//WITH CHECK OPTION






//UPDATE, DELETE, DROP VIEW)

	update customers_view
	set firstName='kamal'
    WHERE id=5;

    delete from customers_view WHERE id=8;

    drop view customers_viewto;



    //UCASE & LCASE Functions
    SELECT ucase(firstName) FROM `customers`;

    SELECT lcase(firstName),ucase(lastName), address FROM `customers`;



    //MID, LENGHT, ROUND Functions
    SELECT mid(city,1,3)as shortcity FROM `customers`;
    SELECT firstName, length(address)as lengthofaddress FROM `customers`;
    SELECT firstName, round(salary,0) as roundsalary FROM `customers`;



    //NOW Function (current date, time show kore)
    SELECT name, price, Now() as Date FROM `products`;


    //GUI Mode Operation




//DATABASE Backup
















?>