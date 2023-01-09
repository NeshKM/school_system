# school system

### steps

1. start xampp server
2. open mysql
3. create database called school_peter
  steps sql commands
#### first table users
  i. CREATE DATABASE school_peter;
  ii. USE school_peter;
  iii. CREATE TABLE users(id INT NOT NULL UNIQUE AUTO_INCREMENT,first_name VARCHAR(50),second_name VARCHAR(50),date_of_birth DATE,class VARCHAR(50) DEFAULT "",gender VARCHAR(10),phone VARCHAR(30) UNIQUE,email VARCHAR(255) UNIQUE NOT NULL,password VARCHAR(255),role CHAR(10) DEFAULT "student",PRIMARY KEY(id));

#### second table messages

  i. USE school_peter;
  ii. CREATE TABLE messages(id INT NOT NULL UNIQUE AUTO_INCREMENT,name VARCHAR(100),email VARCHAR(250),subject VARCHAR(500),message LONGTEXT(5000) ,PRIMARY KEY(id));












