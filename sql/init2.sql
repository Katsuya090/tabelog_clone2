use tabelog_clone

CREATE TABLE `houses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `traffic` varchar(255) NOT NULL,
  `construction` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `manegedprice` varchar(255) NOT NULL,
  `insurance` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `floorplan` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `keymoney` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `accommodation` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


-- ファイルアップロードに必要なカラムの追加
alter table houses add photo varchar(255) DEFAULT NULL;
alter table houses add photo_dir varchar(255) DEFAULT NULL;

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `kind` varchar(255) NOT NULL,
  `when` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
 ) ENGINE=InnoDB;
ALTER TABLE `inquiries` ADD PRIMARY KEY (`id`);
ALTER TABLE `inquiries` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `inquiries` (`name`, `email`, `tel`, `kind`, `when`, `note`) VALUES ("ショップ0", "nase@yahh", "000-999-9999", "あああ", "aaa", "かかっか");

create table `homes` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `information` varchar(255) NOT NULL

) ENGINE=InnoDB;
ALTER TABLE `homes` ADD PRIMARY KEY (`id`);
ALTER TABLE `homes` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `homes` (`information`) VALUES ("◯◯マンションの物件情報が追加されました。");

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `house_id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `traffic` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `manegedprice` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `floorplan` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `keymoney` varchar(255) NOT NULL,
  `brokerage` varchar(255) NOT NULL,
  `roomdetail1` varchar(255) NOT NULL,
  `roomdetail2` varchar(255) NOT NULL,
  `roomdetail3` varchar(255) NOT NULL,
  `roomdetail4` varchar(255) NOT NULL,
  `roomdetail5` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


-- ファイルアップロードに必要なカラムの追加
alter table rooms add photo varchar(255) DEFAULT NULL;
alter table rooms add photo_dir varchar(255) DEFAULT NULL;












