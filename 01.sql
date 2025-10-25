CREATE DATABASE lerning_managment_system;
USE lerning_managment_system;

CREATE TABLE students (
    student_id INT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    age INT
);

CREATE TABLE courses (
    course_id INT PRIMARY KEY,
    course_name VARCHAR(100),
    lecture VARCHAR(100)
);

CREATE TABLE lectures (
    lecture_id INT PRIMARY KEY,
    lecture_name VARCHAR(100),
    tech_degree VARCHAR(50),
    qualification VARCHAR(100)
);
