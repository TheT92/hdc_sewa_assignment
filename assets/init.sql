create database if not exists sewagroup character set utf8mb4 collate utf8mb4_unicode_ci;
create table if not exists sewagroup.user(
  `id` INT UNIQUE not null,
  `firstname` varchar(50) not null,
  `surname` varchar(50) not null,
  `email` varchar(80) not null,
  `password` varchar(100) not null,
  `create_time` timestamp DEFAULT CURRENT_TIMESTAMP not null,
  `last_login` timestamp DEFAULT CURRENT_TIMESTAMP not null,
  `member_level` INT default 0 not null,
  `del_flag` INT default 0 not null,
  PRIMARY KEY(id)
);