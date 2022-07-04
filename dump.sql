create database Railways;
use Railways;
create table signup(id MEDIUMINT NOT NULL AUTO_INCREMENT,fname varchar(255),lname varchar(255),phone varchar(255),password varchar(255),primary key(id));

Insert into signup (fname,lname,phone,password) values ("Akshat","Kumar",7383726182, "12345678");
Insert into signup (fname,lname,phone,password) values ("Arpit","Kumar",7383729982, "12345678");
Insert into signup (fname,lname,phone,password) values ("Amit","Kumar",6869726182, "12345678");
Insert into signup (fname,lname,phone,password) values ("Rustam","Kumar",837373636, "12345678");
Insert into signup (fname,lname,phone,password) values ("Akshar","Kumar",7637839466, "12345678");
Insert into signup (fname,lname,phone,password) values ("Kushagra","Sharma",9733726182, "12345678");
Insert into signup (fname,lname,phone,password) values ("Garvit","Kumar",836373838,"12345678");

create table traininfo(travel_id int(4) NOT NULL AUTO_INCREMENT,train_number int(20),train_name varchar(255),day varchar(255),dispatch time,duration varchar(255),_from varchar(255),_to varchar(255),total_seats int(3),seats_left int(3),price int(6),primary key (travel_id));
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (132342,'travel_exp','tuesday','10:10:00','2 hours','Mandi','Delhi',200,195,2344);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (132342,'travel_exp','thursday','10:20:00','2 hours','Mandi','Delhi',200,195,3243);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (123456,'KanpurDelhisuperfast','monday','10:10:00','2 hours','Kanpur','Delhi',200,195,750);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (123456,'KanpurDelhisuperfast','wednesday','18:50:00','2 hours','Delhi','Kanpur',200,195,750);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (123456,'KanpurDelhisuperfast','friday','10:10:00','2 hours','Kanpur','Delhi',200,195,750);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (123456,'KanpurDelhisuperfast','sunday','18:50:00','2 hours','Delhi','Kanpur',200,195,750);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (987623,'howray express','tuesday','1:15:00','21 hours','Mandi','Calcutta',200,195,750);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (987623,'howray express','wednesday','1:15:00','21 hours','Mandi','Calcutta',200,195,750);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (456781,'Golden Temple','friday','9:05:00','13 hours','Delhi','Mumbai',200,195,649);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (456781,'Golden Temple','saturday','2:05:00','13 hours','Mumbai','Mumbai',200,195,649);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (456711,'hyper loop express','monday','00:00:00','4 hour 30 minutes','Delhi','Calcutta',200,195,999);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (456711,'hyper loop express','monday','12:00:00','4 hour 30 minutes','Calcutta','Delhi',200,195,999);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (456711,'hyper loop express','thursday','00:00:00','4 hour 30 minutes','Delhi','Calcutta',200,195,999);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (456711,'hyper loop express','thursday','12:00:00','4 hour 30 minutes','Calcutta','Calcutta',200,195,999);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (333312,'kamand dilli express','sunday','15:10:00','3 hours','Mandi','Delhi',200,195,320);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (333312,'kamand dilli express','saturday','15:10:00','3 hours','Mandi','Delhi',200,195,320);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (122212,'east express','tuesday','18:40:00','18 hours','Madras','Calcutta',200,195,340);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (122212,'east express','wednesday','20:40:00','18 hours','Madras','Calcutta',200,195,340);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (122212,'east express','thursday','22:40:00','18 hours','Madras','Calcutta',200,195,340);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (232312,'up-hp superfast','monday','20:20:00','5 hours','Mandi','kanpur',200,195,420);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values (232312,'up-hp superfast','tuesday','18:20:00','5 hours','Mandi','kanpur',200,195,420);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values(456712,'ultra fast express','monday','10:00:00','6 hours 30 minutes','Mumbai','Mandi',200,195,299);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values(456712,'ultra fast express','monday','22:00:00','6 hours 30 minutes','Mandi','Mumbai',200,195,299);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values(456712,'ultra fast express','thursday','10:00:00','6 hours 30 minutes','Mumbai','Mandi',200,195,299);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values(456712,'ultra fast express','thursday','22:00:00','6 hours 30 minutes','Mandi','Mumbai',200,195,299);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values(456711,'ultra fast hyper loop express','monday','00:00:00','3 hours 51 minutes','Mumbai','Calcutta',200,195,799);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values(456711,'ultra fast hyper loop express','monday','12:00:00','3 hours 51 minutes','Calcutta','Mumbai',200,195,799);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values(456711,'ultra fast hyper loop express','saturday','00:00:00','3 hours 51 minutes','Mumbai','Calcutta',200,195,799);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values(456711,'ultra fast hyper loop express','saturday','12:00:00','3 hours 51 minutes','Calcutta','Mumbai',200,195,799);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values(456711,'ultra fast hyper loop express','Wednesday','00:00:00','3 hours 51 minutes','Mumbai','Calcutta',200,195,799);
Insert into traininfo (train_number,train_name,day,dispatch,duration,_from,_to,total_seats,seats_left,price) values(456711,'ultra fast hyper loop express','Wednesday','12:00:00','3 hours 51 minutes','Calcutta','Mumbai',200,195,799);

create table bookings(booking_id int(4) NOT NULL AUTO_INCREMENT,id int(3), travel_id int(4), seat_no int(3),travel_date varchar(12), primary key (booking_id));
Insert into bookings (id, travel_id, seat_no, travel_date) values (1,22,3,"2021-11-12");
Insert into bookings (id, travel_id, seat_no, travel_date) values (2,21,5,"2021-12-12");
Insert into bookings  (id, travel_id, seat_no, travel_date) values (5,24,2,"2021-11-13");
Insert into bookings (id, travel_id, seat_no, travel_date) values (3,2,1,"2021-11-14");
Insert into bookings (id, travel_id, seat_no, travel_date) values (1,13,5,"2021-11-22");
Insert into bookings (id, travel_id, seat_no, travel_date) values (4,30,4,"2021-11-22");
Insert into bookings (id, travel_id, seat_no, travel_date) values (3,17,3,"2021-11-15");
Insert into bookings (id, travel_id, seat_no, travel_date) values (7,22,2,"2021-11-16");
Insert into bookings (id, travel_id, seat_no, travel_date) values (1,19,1,"2021-11-15");
Insert into bookings (id, travel_id, seat_no, travel_date) values (7,8,3,"2021-12-12");
Insert into bookings (id, travel_id, seat_no, travel_date) values (1,17,4,"2021-11-18");
Insert into bookings (id, travel_id, seat_no, travel_date)  values (4,1,2,"2021-11-20");
Insert into bookings (id, travel_id, seat_no, travel_date)  values (5,10,5,"2021-11-19");
Insert into bookings (id, travel_id, seat_no, travel_date)  values (6,9,1,"2021-11-17");
Insert into bookings (id, travel_id, seat_no, travel_date)  values (3,3,3,"2021-11-13");
Insert into bookings (id, travel_id, seat_no, travel_date)  values (4,2,4,"2021-11-15");
Insert into bookings (id, travel_id, seat_no, travel_date)  values (3,19,5,"2021-11-14");
Insert into bookings (id, travel_id, seat_no, travel_date)  values (4,27,3,"2021-11-16");
Insert into bookings (id, travel_id, seat_no, travel_date) values (5,29,1,"2021-11-30");
Insert into bookings (id, travel_id, seat_no, travel_date) values (7,31,2,"2021-11-28");
-- Queries
-- -- Info about any specific person
-- select B.id, B.fname, B.lname, B.phone, A.train_number, A.train_name,B.travel_id,B.travel_date, A.day, A._from, A._to, A.dispatch, A.duration,B.seat_no, A.price from traininfo A natural join (select id, fname, lname, phone, seat_no, travel_id, travel_date from signup natural join bookings where id = 3) B;

-- -- Ticket Checking Query
-- select B.id, B.fname, B.lname, B.phone, A.train_number, A.train_name, A.day, A._from, A._to, A.dispatch, A.duration,B.seat_no, A.price from traininfo A natural join (select id, fname, lname, phone, seat_no, travel_id from signup natural join bookings where seat_no=3 and travel_id=17) B;


-- -- To find the seat_no and travel id's of all
-- select id, fname, lname, phone, seat_no, travel_id from signup natural join bookings;

-- -- To find train on a given day and locations
-- select * from traininfo where day = "tuesday" and  _from="Mandi" and _to="Delhi";

-- -- When a seat is booked
-- select seats_left from traininfo where travel_id=1;
-- Insert into bookings values (userId,travelid, seat_no)