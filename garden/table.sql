drop database if exists auth;
create database auth;
use auth;

create table user (
	id int auto_increment primary key,
	email varchar(255),
	password varchar(255),
	firstname varchar(255),
	lastname varchar(255),
	remember_token varchar(255),
	created_at datetime,
	updated_at datetime

);

-- create table customer (
--     id int auto_increment primary key not null,
--     first_name varchar(255) not null,
--     last_name varchar(255) not null,
--     email varchar(255),
--     phone varchar(50)
-- );

-- insert into customer(first_name, last_name, email, phone) values ('Julley','Gabey','julleygabey@rockit.com','123-456-7890');
-- insert into customer(first_name, last_name, email, phone) values ('Daneen','Corona','daneencorona@rockit.com','480-121-2121');
-- insert into customer(first_name, last_name, email, phone) values ('Ben','Z ack','baenzack@rockit.com','480-000-1001');


create table item (
    item_id int auto_increment primary key not null,
    display_image_name varchar(255) not null,
    category varchar(255),
    image_file_path varchar(255),
    img_css_class varchar(255)
    
);

insert into item(display_image_name, category, image_file_path,img_css_class) values ('Oak Tree','tree','/images/site_image/image3.png','tree');
insert into item(display_image_name, category, image_file_path,img_css_class) values ('Plum Tree','tree','/images/site_image/image2.png','tree');
insert into item(display_image_name, category, image_file_path,img_css_class) values ('Bamboo Palm','bush','/images/site_image/image1.png','bush');
insert into item(display_image_name, category, image_file_path,img_css_class) values ('Barberry','bush','/images/site_image/image1.png','bush');




create table garden(
	garden_id int auto_increment primary key not null,
	user_id int not null,
	layout_name varchar(255),
	date_created timestamp default current_timestamp
);

insert into garden(user_id,layout_name,date_created) values (1,1,'2002-10-10')
insert into garden(user_id,layout_name,date_created) values (1,2,now());
insert into garden(user_id,layout_name,date_created) values (2,1,'2005-01-21');


create table garden_item(
    garden_item_id int auto_increment primary key not null,
    garden_id int not null,
    item_id int not null,
    coordinate_x int not null,
    coordinate_y int not null
);




insert into garden_item(garden_id,item_id,coordinate_x,coordinate_y) values (1,1,110,115);
insert into garden_item(garden_id,item_id,coordinate_x,coordinate_y) values (1,2,225,427);
insert into garden_item(garden_id,item_id,coordinate_x,coordinate_y) values(2,1,345,700);

