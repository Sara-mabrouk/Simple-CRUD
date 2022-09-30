<?php
// if ($_SERVER == '$_POST') {
//     $FirstName = $_POST['FirstName'];
//     $LastName = $_POST['LastName'];
//     $password = $_POST['password'];
//     $email = $_POST['email'];
//     $address = $_POST['address'];
//     $errors = [];

//     if (empty($FirstName)) {
//         $errors['FirstName'] = " Enter Your First Name";
//     } else {
//         echo $FirstName;
//     }
//     echo "</br>";
//     if (empty($LastName)) {
//         $errors['LastName'] = " Enter Your last Name";
//     } else {
//         echo $LastName;
//     }
//     if (empty($email)) {
//         echo " Enter Email";
//     } else {
//         echo $email;
//     } 
//     $errors['Email']  = "Field is Required"; 


// } 
?>
<table>
    <?php
echo "<h2 style=text-align:center> W E L C O M E ..☺</h2>";
?>


</table>

<!-- 


CREATE DATABASE shop;
CREATE TABLE customer (
id int AUTO_INCREMENT,
    customername varchar (30),
        customeraddress varchar (30),
    customerphone varchar (30),
    customerage varchar (30),
    customergender varchar (30),
    customerphone varchar (30),
    PRIMARY KEY(id)
);

CREATE TABLE products (
id int AUTO_INCREMENT,
   productsname varchar (30),
   productscategroy varchar (30),
   productsprice varchar (30),
    PRIMARY KEY(id)
);

CREATE TABLE orders (
id int AUTO_INCREMENT,
   ordersdate varchar (30),
   ordersamount varchar (30),
    PRIMARY KEY(id),
    customerID int,
    FOREIGN KEY (customerID) REFERENCES customer(id),
    FOREIGN KEY (productsID) REFERENCES products (id)
);

CREATE TABLE department (
    id int AUTO_INCREMENT,
    PRIMARY KEY(id),
   departmentname varchar (30)
);
CREATE TABLE employees (
    id int AUTO_INCREMENT,
    PRIMARY KEY(id),
   employeesname varchar (30),
       employeessalary varchar (30),
        FOREIGN KEY (departmentID) REFERENCES department (id)
);

CREATE TABLE admins (
    id int AUTO_INCREMENT,
    PRIMARY KEY(id),
  adminsemail varchar (30),
       adminspassword varchar (30),
        FOREIGN KEY (employeesID) REFERENCES employees (id)
); -->
///////////////////////////////////////////////////////////////////////////////////////////

<!-- 
CREATE TABLE groups(
    id INT AUTO_INCREMENT,
    PRIMARY KEY(id),
    titlegroups VARCHAR(80),
    metatitle VARCHAR(100),
    profilegroups TEXT,
    content TEXT,
    usersID INT,
    FOREIGN KEY(usersID) REFERENCES users(id)
); 
	CREATE TABLE users(
    id INT AUTO_INCREMENT,
    PRIMARY KEY(id),
    firstname_users VARCHAR(50),
    middlename_users VARCHAR(50),
    lastname_users VARCHAR(50),
    username VARCHAR(50),
    mobileusers VARCHAR(15)
 ); -->
    <!-- CREATE TABLE group_message(
    id INT AUTO_INCREMENT,
    PRIMARY KEY(id),
    usersID INT,
    groupsID INT,
    FOREIGN KEY(groupsID) REFERENCES groups(id),
    FOREIGN KEY(usersID) REFERENCES users(id)
); -->

<!-- 

CREATE TABLE groups(
    id INT AUTO_INCREMENT,
    PRIMARY KEY(id),
    titlegroups VARCHAR(80),
    metatitle VARCHAR(100),
    profilegroups TEXT,
    content TEXT,
    usersID INT,
    FOREIGN KEY(usersID) REFERENCES users(id)
); 
	CREATE TABLE users(
    id INT AUTO_INCREMENT,
    PRIMARY KEY(id),
    firstname_users VARCHAR(50),
    middlename_users VARCHAR(50),
    lastname_users VARCHAR(50),
    username VARCHAR(50),
    mobileusers VARCHAR(15)
 );
    CREATE TABLE group_message(
    id INT AUTO_INCREMENT,
    PRIMARY KEY(id),
    usersID INT,
    groupsID INT,
    FOREIGN KEY(groupsID) REFERENCES groups(id),
    FOREIGN KEY(usersID) REFERENCES users(id)
);

CREATE TABLE group_follower(
        id INT AUTO_INCREMENT,
    PRIMARY KEY(id),
    usersID INT,
    groupsID INT,
    FOREIGN KEY(groupsID) REFERENCES groups(id),
    FOREIGN KEY(usersID) REFERENCES users(id)
);

CREATE TABLE group_member(
        id INT AUTO_INCREMENT,
    PRIMARY KEY(id),
    usersID INT,
    groupsID INT,
    FOREIGN KEY(groupsID) REFERENCES groups(id),
    FOREIGN KEY(usersID) REFERENCES users(id)
);

CREATE TABLE group_post(
        id INT AUTO_INCREMENT,
    PRIMARY KEY(id),
    usersID INT,
    groupsID INT,
    FOREIGN KEY(groupsID) REFERENCES groups(id),
    FOREIGN KEY(usersID) REFERENCES users(id)
);

CREATE TABLE group_meta(
        id INT AUTO_INCREMENT,
    PRIMARY KEY(id),
    usersID INT,
    groupsID INT,
    FOREIGN KEY(groupsID) REFERENCES groups(id),
    FOREIGN KEY(usersID) REFERENCES users(id)
); -->



<!-- 


// $insert = "INSERT INTO `employee` VALUES (null,'Sara',20000,010042,'belqas')";
// $insert = "INSERT INTO `employee` VALUES (null,'Ahmed',1000,010025,'mansoura')";
// $insert = "INSERT INTO `employee` VALUES (null,'yousef',5000,010122,'alex')";
// $insert = "INSERT INTO `employee` VALUES (null,'hayah',9000,010127,'cairo')";
// $insert = "INSERT INTO `employee` VALUES (null,'hamza',8000,010029,'mansoura')";
// $insert = "INSERT INTO `employee` VALUES (null,'malak',10000,010201,'belqas')";
-->



<!-- 
INSERT INTO `employee` VALUES (null,'malak',10000,010201,'belqas' ,3 ,'hhh')
INSERT INTO `department` VALUES (null,'lol','mmmmm') -->
