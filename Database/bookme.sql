drop database if exists bookme;
create database bookme default character set utf8;
use bookme;

create table operator(
operator_id int not null primary key auto_increment,
name varchar(50) not null,
surname varchar(50) not null,
email varchar(50) not null,
password varchar(50) not null
);

create table property(
property_id int not null primary key auto_increment,
property_name varchar(50) not null,
price decimal(18,2) not null,
description text(20) not null
);

create table reservation(
booking_id int primary key not null auto_increment,
guest_name varchar(50)not null,
guest_email varchar(50)null,
property int null,
date_from date,
date_to date
);

alter table reservation add foreign key (property) references property(property_id);

# inserti

insert into operator(name, surname, email, password)
values
('Marko', 'Gracin', 'marko.gracin@gmail.com', '1234'),
('Ante', 'Gracin', 'ante.gra@gmail.com', '2345');

insert into property(property_name, price, description)
values
('Apartment 2', '35 EUR', 'A 2 person apartament'),
('Apartment 4', '70 EUR', 'A 4 person apartament'),
('Apartment 6', '90 EUR', 'A 6 person apartament');
