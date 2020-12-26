drop schema  if exists assignment2;
create schema assignment2;
use assignment2;
drop table if exists product;
create table product(
name varchar(59),
author varchar(50),
type varchar(50),
url varchar(100)

);

insert INTO product(name,author,type,url) values("A Madness of Sunshine","Nalini singh","Novel","assets/img/work-1.jpg");
insert INTO product(name,author,type,url) values("Novice Dragoneer","Django Weller","Novel","assets/img/work-2.jpg");
insert INTO product(name,author,type,url) values("Me before you","Jojo Moyes","Novel","assets/img/work-3.jpg");
insert INTO product(name,author,type,url) values("Forget You Know Me","Jessica Strawser","Novel","assets/img/work-4.jpg");
insert INTO product(name,author,type,url) values("The best of me","Nicholas sparks","Novel","assets/img/work-5.jpg");
insert INTO product(name,author,type,url) values("The wolf and the Watchman","Niklas Natt obc Dag","Novel","assets/img/work-6.jpg");
insert INTO product(name,author,type,url) values("The Good Guy","Mark Mcallister","Novel","assets/img/work-7.jpg");
insert INTO product(name,author,type,url) values("At the Going Down of the Sun","Marius Oelschig","Novel","assets/img/work-8.jpg");
insert INTO product(name,author,type,url) values("The Imperfections of Memory","Angelina Aludo","Novel","assets/img/work-9.jpg");
insert INTO product(name,author,type,url) values("The King of Drugs","Nora Barrett","Novel","assets/img/work-10.jpg");
insert INTO product(name,author,type,url) values("Leviathan Loch","Mark Miller","Novel","assets/img/work-11.jpg");
insert INTO product(name,author,type,url) values("Histories Cans","Fleurs","Comic","assets/img/work-12.jpg");
insert INTO product(name,author,type,url) values("The cerulean","Amy Ewing","Novel","assets/img/work-13.jpg");
insert INTO product(name,author,type,url) values("The book of Chaos","Jessica Renwick","Comic","assets/img/work-14.jpg");
insert INTO product(name,author,type,url) values("A Daydreamer's Utopia","Louise Hunts","Novel","assets/img/work-15.jpg");
insert INTO product(name,author,type,url) values("The priory of the Orange tree","Samantha Shannon","Novel","assets/img/work-16.jpg");
insert INTO product(name,author,type,url) values("A game of Thrones","George R.R Martin","Novel","assets/img/work-17.jpg");
insert INTO product(name,author,type,url) values("The edge of The Unknown","Andrew Hamburg","Novel","assets/img/work-18.jpg");
insert INTO product(name,author,type,url) values("Dark Space","Author name","Novel","assets/img/work-19.jpg");
insert INTO product(name,author,type,url) values("Harry Potter and the Philosopher's Stone","J.L.Rowling","Novel","assets/img/work-20.jpg");
insert INTO product(name,author,type,url) values("Tess of the Road","Rachel Hartman","Novel","assets/img/work-21.jpg");



DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (id, username, password) VALUES
(1,'tri.hobknetid','123456'),
(2,'tinh.hoangbknetid','123456');