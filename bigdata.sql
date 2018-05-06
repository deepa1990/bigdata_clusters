
use bigdata;
create table register(
Register_Id INT(11) Primary key NOT NULL AUTO_INCREMENT,
FirstName varchar(55) NOT NULL,
Email varchar(55) NOT NULL,
StudentPassword varchar(55) NOT NULL,
Teams varchar(55) NOT NULL
);

select * from register;