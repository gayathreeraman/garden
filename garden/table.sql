drop database if exists gardenlayout;
create database gardenlayout;
use gardenlayout;

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



 -- insert into user(first_name, last_name, email, phone) values ('Julley','Gabey','julley@rockit.com','123-456-7890');
 -- insert into user(first_name, last_name, email, phone) values ('Daneen','Corona','abcd@rockit.com','480-121-2121');
 -- insert into user(first_name, last_name, email, phone) values ('Scott','Zack','abcde@rockit.com','480-000-1001');


create table item (
    item_id int auto_increment primary key not null,
    display_image_name varchar(255) not null,
    category varchar(255),
    image_file_path varchar(255),
    img_css_class varchar(255)
    
);

insert into item(display_image_name, category, image_file_path, img_css_class) values ('Oak Tree','tree','/images/site_image/tree1.png','tree');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Banana','tree','/images/site_image/palm.png','tree');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Banana','tree','/images/site_image/tree4.png','tree');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Banana','tree','/images/site_image/orange_tree.png','tree');

insert into item(display_image_name, category, image_file_path, img_css_class) values ('Barberry','bush','/images/site_image/bush1.png','bush');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Brick Paver','bush','/images/site_image/image1.png','bush');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Oak Tree','bush','/images/site_image/image2.png','bush');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Oak Tree','bush','/images/site_image/medium_bush.png','bush');

insert into item(display_image_name, category, image_file_path, img_css_class) values ('Flower','flower','/images/site_image/cheatnut_brush.png','flower');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Flower Palm','flower','/images/site_image/gerbera_flowers.png','flower');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Flower','flower','/images/site_image/purple_Dianthus_Flower.png','flower');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Flower','flower','/images/site_image/flower1.png','flower');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Flower','flower','/images/site_image/yellow_flower_plant.png','flower');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Flower','flower','/images/site_image/sneezeweed.png','flower');

insert into item(display_image_name, category, image_file_path, img_css_class) values ('Brick Paver','paver','/images/site_image/paver1.png','paver');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Tile Paver','paver','/images/site_image/paver2.png','paver');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('paver','paver','/images/site_image/paver3.png','paver');

insert into item(display_image_name, category, image_file_path, img_css_class) values ('Winter grass','grass','/images/site_image/grass3.png','grass');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Winter grass','grass','/images/site_image/grass2.png','grass');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Winter grass','grass','/images/site_image/grass4.png','grass');
insert into item(display_image_name, category, image_file_path, img_css_class) values ('Winter grass','grass','/images/site_image/grass5.png','grass');

create table garden(
	garden_id int auto_increment primary key not null,
	user_id int not null,
	layout_name varchar(255),
	date_created timestamp default current_timestamp
);

insert into garden(user_id,layout_name,date_created) values (1,'Flower Garden','2002-10-10')
insert into garden(user_id,layout_name,date_created) values (1,'Raised Bed Garden',now());
insert into garden(user_id,layout_name,date_created) values (2,'Desert Garden','2005-01-21');
insert into garden(user_id,layout_name,date_created) values (3,'Flower Garden','2002-10-10');
insert into garden(user_id,layout_name,date_created) values (2,'Raised Bed Garden',now());
insert into garden(user_id,layout_name,date_created) values (1,'Desert Garden','2005-01-21');


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

