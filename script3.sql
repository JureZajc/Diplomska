/*
Created		07.06.2017
Modified		10.08.2017
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/




Create table Answers (
	ID_answers Int NOT NULL AUTO_INCREMENT,
	Answer Varchar(255) NOT NULL,
	correct Varchar(255),
	ID_users Int NOT NULL,
	ID_quizes Int NOT NULL,
 Primary Key (ID_answers)) ENGINE = InnoDB;

Create table Users (
	ID_users Int NOT NULL AUTO_INCREMENT,
	Name Varchar(255),
	Surname Varchar(255),
	Username Varchar(255),
	Pass Varchar(255) NOT NULL,
	email Varchar(255) NOT NULL,
	Admin Int,
	text Text,
 Primary Key (ID_users)) ENGINE = InnoDB;

Create table Questions (
	ID_questions Int NOT NULL AUTO_INCREMENT,
	Question Varchar(255) NOT NULL,
	answer1 Varchar(255) NOT NULL,
	answer2 Varchar(255) NOT NULL,
	answer3 Varchar(255) NOT NULL,
	answer4 Varchar(255) NOT NULL,
	correct Varchar(255) NOT NULL,
	ID_quizes Int NOT NULL,
	ID_users Int NOT NULL,
 Primary Key (ID_questions)) ENGINE = InnoDB;

Create table Quizes (
	ID_quizes Int NOT NULL AUTO_INCREMENT,
	ID_users Int NOT NULL,
	quiz_name Varchar(255),
	since_when Date,
	until Date,
	nmb_question Int,
 Primary Key (ID_quizes)) ENGINE = InnoDB;









Alter table Answers add Foreign Key (ID_users) references Users (ID_users) on delete  restrict on update  restrict;
Alter table Quizes add Foreign Key (ID_users) references Users (ID_users) on delete  restrict on update  restrict;
Alter table Questions add Foreign Key (ID_users) references Users (ID_users) on delete  restrict on update  restrict;
Alter table Questions add Foreign Key (ID_quizes) references Quizes (ID_quizes) on delete  restrict on update  restrict;
Alter table Answers add Foreign Key (ID_quizes) references Quizes (ID_quizes) on delete  restrict on update  restrict;



