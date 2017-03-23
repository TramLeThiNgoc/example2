<?php include "menu.php" ?>
<h2>SQL-code for the database</h2>
<pre>
  Create database company;

  Grant all on company.* To 'webuser'@'localhost' Identified by 'webpass';
  use company;

  create table customers(
  id_customers Smallint Primary key auto_increment,
  firstname varchar(30),
  lastname varchar(30),
  streetaddress varchar(20)
  ) Engine=InnoDB;

  Insert into customers(firstname,lastname) value('Ann','Smith');
  Insert into customers(firstname,lastname) value('Tom','Jones');

  create table cats(
  id_cats Smallint primary key auto_increment,
  name varchar(30),
  color varchar(20),
  id_customers Smallint,
  FOREIGN KEY (id_customers) REFERENCES customers(id_customers)
    on DELETE RESTRICT ON UPDATE CASCADE) Engine=InnoDB;

  INSERT INTO cats(name,color,id_customers)
  VALUE('Garfield','orange',3);
  INSERT INTO cats(name,color,id_customers)
  VALUE('HelloKitty','pink',4);
</pre>

<?php include "footer.php" ?>
