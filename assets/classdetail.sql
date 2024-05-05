create table if not exists sewagroup.classdetail(
    'id' INT UNIQUE AUTO_INCREMENTL,
    'user_id' INT NOT NULL,
    'class_id' INT NOT NULL,
    'priority' INT NOT NULL,
    'del_flag' INT DEFAULT 0 NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(user_id) REFERENCES sewagroup.user(id),
    FOREIGN KEY(class_id) REFERENCES sewagroup.class(id)
);

create table if not exists sewagroup.testimonial(
    'id' INT UNIQUE AUTO_INCREMENT,
    'content' TEXT NOT NULL,
    'user_id' INT NOT NULL,
    'create_time' TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    'del_flag' INT DEFAULT 0 NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(user_id) REFERENCES sewagroup.user(id)
);
