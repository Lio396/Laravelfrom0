drop database if exists test;
create database if not exists test;
use test;

drop table if exists testa;
create table if not exists testa (
testa_id int auto_increment not null, 
name varchar(45) not null,
primary key(testa_id)
);

drop table if exists testb;
create table if not exists testb (
testb_id int auto_increment not null, 
name varchar(45) not null,
primary key(testb_id)
);

insert into testa (name)
values ("aaaa"),("aaa"),("aaaaa");

insert into testb (name)
values ("bbb"),("bbbbb"),("bbbbbbb");