create database if not exists sewagroup character set utf8mb4 collate utf8mb4_unicode_ci;
create table if not exists sewagroup.member_level (
  `id` INT UNIQUE AUTO_INCREMENT,
  `name` varchar(50) not null,
  `fee` decimal(8,4) not null,
  `priority` INT not null,
  `desc` varchar(200) not null,
  `del_flag` INT not null default 0,
  `create_time` timestamp DEFAULT CURRENT_TIMESTAMP not null,
  primary key(id)
);
create table if not exists sewagroup.user(
  `id` INT UNIQUE AUTO_INCREMENT,
  `firstname` varchar(50) not null,
  `surname` varchar(50) not null,
  `email` varchar(80) not null,
  `password` varchar(100) not null,
  `create_time` timestamp DEFAULT CURRENT_TIMESTAMP not null,
  `last_login` timestamp DEFAULT CURRENT_TIMESTAMP not null,
  `member_level` INT default 0 not null,
  `del_flag` INT default 0 not null,
  PRIMARY KEY(id),
  FOREIGN KEY(member_level) REFERENCES sewagroup.member_level(id)
);
create table if not exists sewagroup.class(
  `id` INT UNIQUE AUTO_INCREMENT,
  `class_name` varchar(50) not null,
  `class_cover_img` varchar(100) not null,
  `class_intro` varchar(300) not null,
  `class_time` varchar(50) not null,
  `active_now` INT default 0 not null,
  `member_level` INT not null,
  `del_flag` INT default 0 not null,
  PRIMARY KEY(id),
  FOREIGN KEY(member_level) REFERENCES sewagroup.member_level(id)
);
create table if not exists sewagroup.contact(
  `id` INT UNIQUE AUTO_INCREMENT,
  `firstname` varchar(50) not null,
  `surname` varchar(50) not null,
  `email` varchar(80) not null,
  `phoneno` INT not null,
  `message` varchar(1000) not null,
  `create_time` timestamp DEFAULT CURRENT_TIMESTAMP not null,
  `member_level` INT default 0 not null,
  `del_flag` INT default 0 not null,
  PRIMARY KEY(id),
  FOREIGN KEY(member_level) REFERENCES sewagroup.member_level(id)
);

insert ignore into sewagroup.member_level(
  `id`, `name`, `fee`, `priority`, `desc`
) VALUES (1, 'Public', 0, 1, 'No membership fee member, all classes need be purchased at the original price.');
insert ignore into sewagroup.member_level(
  `id`, `name`, `fee`, `priority`, `desc`
) VALUES (2, 'Middle', 299.99, 2, 'Middle level member, you can participate in some courses for free, and pay a 30% discount on other courses');
insert ignore into sewagroup.member_level(
  `id`, `name`, `fee`, `priority`, `desc`
) VALUES (3, 'Prime', 999.99, 3, 'Prime level member, You can participate in all courses without paying additional course fees (excluding self-paid equipment, etc.)');
insert ignore into sewagroup.class(
  `id`,`class_name`,`class_intro`,`class_time`,`member_level`
) VALUES (1,'Golf For Ladies','Getting into golf via a Women’s Get Into Golf (GIG) program has been a positive way for thousands of women to learn the sport in a supported environment.
                                Supported learning, skill development, and social interaction.    
                                Check with local golf clubs hosting Get Into Golf programs in 2024.
                                On-course guidance alongside continual range training for ongoing assessment and development.
                                Players play individually to build skills and find their playing style.','Every Saturday from May to October',2);
-- insert ignore into sewagroup.class(
--   `id`,`class_name`,`class_intro`,`class_time`,`member_level`
-- ) VALUES (2,'Teen Golf Course','If you’re between the ages of 7 - 13, then junior golf classes and camps are perfect for you.
--                                     These programs are usually aimed at children who are at the beginning of their golf journey.
--                                     The Outdoor Golf offers weekly classes for young golfers and runs various camps throughout the year.
--                                     These activities include a mixture of team-based games and individual tuition to help develop golf skills.','Sunday',1);
-- insert ignore into sewagroup.class(
--   `id`,`clss_name`,`class_intro`,`class_time`,`member_level`
-- ) VALUES (3,'Challenge Walk',' This year will mark the 20th anniversary of the event and it will no doubt be an historic occasion.
--                                 The Challenge walk will be held on Saturday June 29th.
--                                 This year, in addition to the self-navigated, we are offering the option of a shorter route as part of a guided group.
--                                 Participants will receive a certificate, gift and a hot meal afterwards.
--                                 Full Walk Challenge: 31 km 1700 m ascent (self-navigated)
--                                 Shorter Walk Challenge: 18 km 1200 m ascent (guided)','Saturday, June 29th',3); 