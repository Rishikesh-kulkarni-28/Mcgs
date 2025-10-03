-- Medical Card Generation System Database Schema
CREATE DATABASE IF NOT EXISTS mgsdb;
USE mgsdb;

CREATE TABLE IF NOT EXISTS tbladmin (
ID int(10) NOT NULL AUTO_INCREMENT,
AdminName varchar(120) DEFAULT NULL,
UserName varchar(120) DEFAULT NULL,
MobileNumber bigint(10) DEFAULT NULL,
Email varchar(120) DEFAULT NULL,
Password varchar(200) DEFAULT NULL,
AdminRegdate timestamp DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS tblcontact (
ID int(10) NOT NULL AUTO_INCREMENT,
Name varchar(200) DEFAULT NULL,
Email varchar(200) DEFAULT NULL,
Message mediumtext DEFAULT NULL,
EnquiryDate timestamp DEFAULT CURRENT_TIMESTAMP,
IsRead int(5) DEFAULT 0,
PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS tblpage (
ID int(10) NOT NULL AUTO_INCREMENT,
PageType varchar(200) DEFAULT NULL,
PageTitle varchar(200) DEFAULT NULL,
PageDescription mediumtext DEFAULT NULL,
Email varchar(200) DEFAULT NULL,
MobileNumber bigint(10) DEFAULT NULL,
UpdationDate timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS tblmedicalcard (
ID int(5) NOT NULL AUTO_INCREMENT,
RefNumber int(10) DEFAULT NULL,
FullName varchar(250) DEFAULT NULL,
ProfileImage varchar(250) DEFAULT NULL,
ContactNumber bigint(11) DEFAULT NULL,
Email varchar(250) DEFAULT NULL,
BloodGroup varchar(100) DEFAULT NULL,
Age int(5) DEFAULT NULL,
Gender varchar(50) DEFAULT NULL,
Address mediumtext DEFAULT NULL,
MedicalCond mediumtext DEFAULT NULL,
IssuedDate varchar(200) DEFAULT NULL,
ValidDate varchar(200) DEFAULT NULL,
CreationDate timestamp DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (ID),
KEY idx_refnumber (RefNumber)
);

INSERT INTO tbladmin (AdminName,UserName,MobileNumber,Email,Password)
VALUES ('Admin','admin','9876543210','admin@mcgs.com',MD5('admin123'));

INSERT INTO tblpage (PageType, PageTitle, PageDescription, Email, MobileNumber) VALUES
('aboutus','About Us','Medical Card Generation System helps automate and manage the creation and storage of medical identification cards.','info@mcgs.com','4654789799'),
('contactus','Contact Us','Reach out for help regarding medical cards.','support@mcgs.com','4654789799');