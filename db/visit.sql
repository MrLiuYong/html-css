CREATE  database phpexam_liuyong;


create TABLE  user_liuyong(
 uid int unsigned  auto_increment not null ,
 uname varchar(128) not null  DEFAULT '' ,
 password varchar(64) NOT NULL DEFAULT '',
 gender tinyint NOT NULL DEFAULT 0 comment '性别,0：女 1：男',
 primary key(uid),
 key(uname)
 )engine=innodb DEFAULT charset=utf8;



  create TABLE liuyong_html(
  answerid int unsigned not null auto_increment,
  replyuid int(10) UNSIGNED NOT NULL,
  replycontent varchar(64) NOT NULL DEFAULT '',
  createtime TIMESTAMP not null DEFAULT '1970-01-01 08:00:01',
  foreign key(replyuid) REFERENCES user_liuyong(uid) on DELETE CASCADE ,
  primary key(answerid)
  )engine=innodb DEFAULT charset=utf8;


create table  visit_liuyong
(
  hostuid int unsigned not null DEFAULT 0,
  visittime TIMESTAMP not null DEFAULT '1970-01-01 08:00:01',
  visitip char(32) not null DEFAULT '',
  index(hostuid)
)engine=innodb default charset=utf8;