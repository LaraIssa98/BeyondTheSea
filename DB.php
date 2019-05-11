
<html>
<head>
<title>Database</title>

</head>

<body>
<h1>Database Connection<h1>
</body>
</html>











<?php 
/*
database: lara, contains tables:
contactUs(clientinfo, flights, books, hotel, rental)
clientinfo(id, firstname, lastname, password)
flights(id, flightnb)
books(id,hotel-id,rental-id,client-id)
hotel(id, namehotel)
rental(id, price)


*/

/*        create connection string to server           */
$host="localhost";	 $user = "root";  $pass = "";  
$con = mysqli_connect($host,$user,$pass);

/*        drop  database              */
$query = "drop database if exists lara"; 
$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));

/*        create database              */
$query = "create database lara"; 
$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));

/*        create connection string to database           */
$con = mysqli_connect($host,$user,$pass,"lara");

/*        create table              */



$query ="create table client-info(id int primary key auto_increment,lastname varchar(100),firstname varchar(100) ,password varchar(100))";
$result = mysqli_query($con, $query) or die ("Error in query: $query. ".mysqli_error($con));

$query = "insert into client-info(id, lastname, firstname,password) values
( '1', 'lara','Issa','passs' ),
( '2', 'mohamad','mm','keyy' ),
( '3', 'ali','yassine','last' ),
( '4', 'hussein','amhaz','first' )";
$result = mysqli_query($con, $query) or die ("Error in query: $query. ".mysqli_error($con));









$query ="create table flights(id int(11) primary key auto_increment,flightnb int(11))";
$result = mysqli_query($con, $query) or die ("Error in query: $query. ".mysqli_error($con));

/*        insert data to table  */
$query = "insert into  flights (id,flightnb) values 
           (1,'2013','45'),(2,'2014','46'), 
		   (3,'2015','47'),(4,'2016','48') ";
           													
$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));





$query ="create table books(id int(11) primary key auto_increment,flight-id varchar(45),hotel-id varchar(45),rental-id varchar(45),client-id varchar(45))";
$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));

$query = "insert into  books (id ,flight-id,hotel-id,rental-id,client-id) values 
           (1,100,12,200,2010),(2,101,12,300,2011),
           (3,102,13,400,2012),(4,103,14,500,2013) ";														
$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));





$query ="create table hotel(id int(11) primary key auto_increment,namehotel varchar(45))";
$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));

$query = "insert into  hotel (id,namehotel) values 
           (1,hilton),(2,rotana),
           (3,reviera),(4,movenpick) ";														
$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));







$query ="create table rental (id int(11) primary key auto_increment,price varchar(45))";
$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));

$query = "insert into  rental (id ,price) values 
           (1,200),(2,300),
           (3,800),(4,500) ";														
$result = mysqli_query($con, $query) or die (errorHandler($query, mysqli_error($con)));











$Q1="What is Pre-flight Shopping and how does it work?";
$A1="The Pre-flight Shopping Service offers you the option of pre-ordering all items from the In-flight Shopping range before your flight and then actually purchasing them on board. Reservation is possible at the earliest eight weeks before your flight and at the latest two days beforehand. Due to the limited amount of space on board and the weight restrictions, you can select up to five items per flight. You only reserve the products: you are not obliged to purchase the items selected.";
$Q2="What are the advantages of Pre-flight Shopping?";
$A2="Pre-flight Shopping ensures that you will receive the items you want. The products will be made ready for you. All you have to do is take them from the flight attendant during your flight and pay for them. As you would expect you can also redeem your award
miles for this purpose. Your passport or boarding pass will serve as proof of identity.";
$Q3="How can I pay?";
$A3="You can pay for the items in cash or by credit card, redeem your award miles or combine both options by making a mixed payment. When redeeming Miles & More award miles, the minimum redemption amount is 3,000 miles. A maximum of 228,000 Miles & More award miles can be redeemed per reservation.";
$Q4="Why are some items not available on my flight?";
$A4="Due to statutory requirements, we can unfortunately not offer our full product range on some flights (e.g. within the EU).";
$Q5="Do I have to buy the items during the flight?";
$A5="Pre-flight Shopping is simply a way of pre-ordering your favourite products. If you should decide not to buy them during your flight, this is not a problem.";
$Q6="Do I have to be a Cedar Miles member to order?";
$A6="No. You do not need to be a Cedar Miles member to pre-order the items you want via the Pre-flight Shopping Service. Your order can be placed without registration.";
$Q7="Need help regarding an online purchase?";
$A7="Please ask your questions and we will help you find what you are looking for.";


/*        error handler   */
function errorHandler($q,$err) {echo "Error in query: $q. $err";};
?>
