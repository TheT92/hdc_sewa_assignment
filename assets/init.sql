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

insert ignore into sewagroup.member_level(
  `id`, `name`, `fee`, `priority`, `desc`
) VALUES (1, 'Public', 0, 1, 'No membership fee member, all classes need be purchased at the original price.');
insert ignore into sewagroup.member_level(
  `id`, `name`, `fee`, `priority`, `desc`
) VALUES (2, 'Middle', 299.99, 2, 'Middle level member, you can participate in some courses for free, and pay a 30% discount on other courses');
insert ignore into sewagroup.member_level(
  `id`, `name`, `fee`, `priority`, `desc`
) VALUES (3, 'Prime', 999.99, 3, 'Prime level member, You can participate in all courses without paying additional course fees (excluding self-paid equipment, etc.)');