 create table locations(
    id int PRIMARY KEY,
    district varchar(20)
 );

    create table users(
    id int AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(20),
    lastname varchar(20),
    email varchar(90),
    contact varchar(10),
    password varchar(50)
    );


    create table properties(
    id int AUTO_INCREMENT PRIMARY KEY,
    title varchar(100) not null,
    description varchar(200) not null,
    locationid int,
    userid int,
    area int not null,
    price int not null,
    FOREIGN KEY(locationid) REFERENCES locations(id),
    FOREIGN KEY(userid) REFERENCES users(id)
    );


    create table category(
    id int AUTO_INCREMENT PRIMARY KEY,
    type varchar(50) not null
    );



    create table uploads(
      id int PRIMARY KEY,
      userid int ,
      path varchar(60) not null,
      FOREIGN KEY(userid) REFERENCES users(id)
    );