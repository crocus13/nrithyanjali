create table contact_details(fname varchar(30),lname varchar(30),dob text,contactno int(10),email varchar(50),skilllevel text,comments text);

ALTER TABLE contact_details ADD comments text ;
AlTER TABLE contact_details ADD skilllevel text ;


INSERT INTO contact_details (fname, lname, dob, contactno, email,comments) VALUES ("Nihira", "Nidish", "2016-01-23", 2019170864,"snidishc@gmail.com","hello" );
INSERT INTO contact_details (fname, lname, dob, contactno, email,comments) VALUES ("Nirmaya", "Nidish", "2009-11-25", 2019170864,"snidishc@gmail.com" ,"how are u");

INSERT INTO contact_details(fname, lname, dob, contactno, email,comments) VALUES ("maya", "Nidish", "2020-11-25", 2019170864,"snc@gmail.com" ,"how are u");
