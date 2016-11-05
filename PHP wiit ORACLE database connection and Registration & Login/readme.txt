Data Source Name :phporacledata
user id : phporacle
password : qaium29


CREATE TABLE userinfo
(
Serial int NOT NULL,
firstname varchar2 (20) not null,
lastname varchar2 (20) ,
email varchar2 (20),
mobile VARCHAR2(20),
dateofbirth date,
gender varchar2 (10),
address varchar2(50),
city varchar2(20),
pass varchar2(20),
profilepicture VARCHAR2(100),
CONSTRAINT userinfo_pk primary key(serial,email,mobile)
)





create SEQUENCE Serial
MINVALUE 1
START WITH 1
INCREMENT BY 1 
MAXVALUE 5000 CYCLE;



insert into userinfo (serial,firstname,lastname,email,mobile,dateofbirth,gender,address,city,pass,profilepicture)
values (serial.nextval,'abdul','qaium','qaium@gmail','01734372588','01-Jan-1994','male','2/11 nikunjo-2','dhaka','qaium123','fdfdsfsdfdsfsdfds');