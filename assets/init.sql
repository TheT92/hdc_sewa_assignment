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
  `email` varchar(80) UNIQUE not null,
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
  `class_intro` varchar(1000) not null,
  `class_time` varchar(50) not null,
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

create table if not exists sewagroup.classdetail(
  `id` INT UNIQUE AUTO_INCREMENT,
  `class_id` INT NOT NULL,
  `page_name` varchar(50) not null,
  `class_image` varchar(100) not null,
  `description` varchar(1000) not null,
  `class_detail` varchar(1000) not null,
  `required_priority` INT NOT NULL,
  `del_flag` INT DEFAULT 0 NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(class_id) REFERENCES sewagroup.class(id)
);

create table if not exists sewagroup.testimonial(
  `id` INT UNIQUE AUTO_INCREMENT,
  `content` TEXT NOT NULL,
  `user_id` INT NOT NULL,
  `create_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
  `del_flag` INT DEFAULT 0 NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(user_id) REFERENCES sewagroup.user(id)
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
insert ignore into sewagroup.class(
  `id`,`class_name`,`class_intro`,`class_time`,`member_level`
) VALUES (2,'Teen Golf Course','If you’re between the ages of 7 - 13, then junior golf classes and camps are perfect for you.
                                    These programs are usually aimed at children who are at the beginning of their golf journey.
                                    The Outdoor Golf offers weekly classes for young golfers and runs various camps throughout the year.
                                    These activities include a mixture of team-based games and individual tuition to help develop golf skills.','Sunday',1);
insert ignore into sewagroup.class(
  `id`,`class_name`,`class_intro`,`class_time`,`member_level`
) VALUES (3,'Challenge Walk',' This year will mark the 20th anniversary of the event and it will no doubt be an historic occasion.
                                The Challenge walk will be held on Saturday June 29th.
                                This year, in addition to the self-navigated, we are offering the option of a shorter route as part of a guided group.
                                Participants will receive a certificate, gift and a hot meal afterwards.
                                Full Walk Challenge: 31 km 1700 m ascent (self-navigated)
                                Shorter Walk Challenge: 18 km 1200 m ascent (guided)','Saturday, June 29th',3); 
insert ignore into sewagroup.class(
  `id`,`class_name`,`class_intro`,`class_time`,`member_level`
) VALUES (4,'Cycling around animals',' Cycling is an enjoyable way to stay healthy, including helping you lose weight, lower your cholesterol and strengthen your legs.','Saturday, June 29th',1); 

insert ignore into sewagroup.classdetail(
  `id`,`class_id`,`page_name`, `class_image`, `description`, `class_detail`, `required_priority`
) VALUES (1, 1, 'classdetail1.php', './images/img10.jpg', '1. Master golf etiquette and culture. 2. Have a basic understanding of golf swing and putting techniques. 
                                3. Have a basic understanding of the golf course and rules. 4. Cultivate excellent courtesy, integrity, self-discipline, 
                                and consideration for others.', 'Golf is a ball sport played on outdoor courts with unique landscapes. This sport places 
                                great emphasis on the cultivation and etiquette of its participants. Golf is most influential spiritual cores are honesty, 
                                self-discipline, and consideration for others. The word golf is composed of the first letters of four English words: green, oxygen, 
                                light, and friendship, reflecting the golf realm of strolling, hitting, and making friends on the fresh and sunny green grass. Social 
                                interaction is an essential function of golf.', 2);

insert ignore into sewagroup.classdetail(
  `id`,`class_id`, `page_name`, `class_image`, `description`, `class_detail`, `required_priority`
) VALUES (2, 2, 'classdetail2.php', './images/img1.jpg', '1. Cultivation of physical fitness. 2. Cultivate etiquette and patience. 3. Cultivate self-discipline.',
                                'Golf is a sport that cultivates children flexibility, coordination, and explosiveness, which can help them strengthen their 
                                physical fitness and develop better. At the same time, golf is an outdoor sport that allows children to play in the grass and 
                                sunlight, giving them ample outdoor time. At the same time, cultivate children politeness and patience. Many golf rules and 
                                etiquette need to be followed. Children can continuously cultivate etiquette and adherence to regulations during their growth 
                                process by playing golf from a young age.', 1);

insert ignore into sewagroup.classdetail(
  `id`,`class_id`,`page_name`, `class_image`, `description`, `class_detail`, `required_priority`
) VALUES (3, 3,'classdetail3.php', './images/img2.jpg', '1. A course to experience the world. 2. Can effectively strengthen the body and keep fit. 3. Courses that are also 
                                helpful for socializing.', 'This course challenges you and strengthens your body, allowing you to push your limits constantly. It also allows you and your friends to take a 
                                leisurely walk.',3);
insert ignore into sewagroup.class(
  `id`,`class_name`,`class_intro`,`class_time`,`member_level`
) VALUES (5,'Weekend Camping','There is a variety of glamping holidays to experience in Ireland. 
                                If you are the type who likes some creature comforts but want to get back in touch with nature, then glamping is the perfect holiday for you. 
                                Many parks throughout Ireland now offer glamping facilities. 
                                People also use glamping facilities to holiday with friends or family who own a tent or caravan. 
                                For information on glamping facilities available check out - Camping Ireland Bell tents were probably the first of the glamping options to come onstream. ','March-November',3);
insert ignore into sewagroup.class(
  `id`,`class_name`,`class_intro`,`class_time`,`member_level`
) VALUES (6,'Scuba Diving','If you’re looking to escape from the daily barrage of news headlines, then there is no better place to be than 40 to 70 feet underwater in scuba gear, where the news simply cannot reach you.
                            This is about the depth where you can place yourself in the middle of all kinds of underwater life, literally swimming through schools of fish and, occasionally, seeing a ray or turtle go by. 
                            In locations where there are vertical coral walls, you can scuba dive along them, looking in all the nooks and crannies for everything from sea stars to moray eels. 
                            The closer you look, the more you’ll see, and the very act of scuba diving will let you regulate your breathing and relax your heart rate.','Saturday, August 6th',3);
insert ignore into sewagroup.class(
  `id`,`class_name`,`class_intro`,`class_time`,`member_level`
) VALUES (7,'Boat Trip',' A boat trip to the Saltee will give you the chance to see the island’s puffins up close. 
                              Located 5km off the Wexford coastline, the islands are not only home to puffins but also razorbills, gannets, gulls and more. 
                              The island is covered in bluebells in the summer months, and you can see old stone walls dotted along the island, a nod to the inhabitants who once farmed the land.','Saturday, June 29th',2); 
insert ignore into sewagroup.class(
  `id`,`class_name`,`class_intro`,`class_time`,`member_level`
) VALUES (8,'Kayaking','If you’re looking for a popular, fun and exciting adventure activity for your group, why not book a few hours of kayaking or canoeing? 
                                    Suitable for ages 8 and upwards, canoeing and kayaking are a fantastic way to enjoy the water with friends or colleagues.
                                     We cater for corporate groups, hens/ stags and school trips with a range of skills sessions, kayak tours and entertaining paddling games.','March to August',1); 
