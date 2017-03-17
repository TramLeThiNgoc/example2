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
</pre>

<?php include "footer.php" ?>
