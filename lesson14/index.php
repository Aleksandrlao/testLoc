<?php 

// вложенные запросы
SELECT * FROM Orders WHERE ShipperID 
IN (SELECT ShipperID FROM Shippers WHERE Phone IN ('(503) 555-9831'));


// вложенный запрос внутри select
SELECT *, (SELECT LastName FROM Employees WHERE EmployeeID = Orders.EmployeeID) AS Name FROM Orders


// заказ в день рождения сотрудника
SELECT EmployeeID, SUBSTR(OrderDate, 6, 5) AS BDate FROM Orders WHERE BDate 
IN (SELECT SUBSTR(BirthDate, 6, 5) FROM Employees )


