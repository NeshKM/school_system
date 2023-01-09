# school system

### steps

1. start xampp server
2. open mysql
3. create database called school_peter
  steps sql commands

  i. CREATE DATABASE school_peter;
  ii. USE school_peter;
  iii. CREATE TABLE users(id INT NOT NULL UNIQUE,first_name VARCHAR(50),second_name VARCHAR(50),date_of_birth DATE,class VARCHAR(50) DEFAULT "",gender VARCHAR(10),phone VARCHAR(30) UNIQUE,email VARCHAR(255) UNIQUE NOT NULL,password VARCHAR(255),role CHAR(10) DEFAULT "student",PRIMARY KEY(id));

4. test your system










confirm_pass
