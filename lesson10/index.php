<?php

/*
SELECT * FROM Orders
LEFT JOIN Customers ON Orders.CustomerID = Customers.CustomerID
LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID
WHERE Shippers.ShipperID = 1*/



/*  GROUP BY !!!!!
SELECT COUNT(CustomerID) AS PeopleCount, Country FROM Customers GROUP BY Country
*/

/* AVG/COUNT !!!!
SELECT AVG(Price) AS PriceAVG, ProductID, CategoryID FROM Products GROUP BY CategoryID ORDER BY PriceAVG DESC
*/

