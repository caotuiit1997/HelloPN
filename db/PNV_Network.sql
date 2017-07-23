/** Create PNV_network database **/

create database if not exist `PNV_network`;
use `PNV_network`;

/** Create Categories table **/

create table if not exist `PNV_Categories`(
	PNV_cate_id varchar(36),
	PNV_cate_name varchar(255),
	PNV_cate_created datetime,
	PNV_cate_updated datetime,
	PNV_cate_status boolean,
	primary key(PNV_cate_id)
);


/** Create Tags table **/

create table if not exist `PNV_Tags`(
	PNV_tag_id varchar(36),
	PNV_tag_name varchar(255),
	PNV_tag_created datetime,
	PNV_tag_updated datetime,
);


/** Create Posts table **/

create table if not exist `PNV_Posts`(
	PNV_post_id varchar(36),
	PNV_post_title varchar(255),
	PNV_post_content varchar(255),
	PNV_post_creator varchar(36),
	PNV_post_created datetime,
	PNV_post_updated datetime,
	PNV_post_status boolean,
	PNV_dc_id varchar(36),
	PNV_pc_id varchar(36),
	PNV_cate_id varchar(36),
	primary key(PNV_post_id)

);

/** Create Post_validation table **/

create table if not exist `PNV_Post_validations`(
	PNV_pv_id varchar(36),
	PNV_post_id varchar(36),
	PNV_pv_likes varchar(255),
	PNV_pv_unlikes varchar(255),
);

/** Create Comments table **/

create table if not exist `PNV_Comments`(
	PNV_cmt_id varchar(36),
	PNV_cmt_normal varchar(255),
	PNV_cmt_agree varchar(255),
	PNV_cmt_disagree varchar(255),
	PNV_post_id varchar(36),
	primary key(PNV_cmt_id)
);

/** Create Users table **/

create table if not exist `PNV_Users`(
	PNV_user_id varchar(36),
	PNV_first_name varchar(255),
	PNV_last_name varchar(255),
	PNV_user_pasword varchar(255),
	PNV_user_email varchar(255),
	PNV_user_tolken varchar(255),
	PNV_user_aliasname varchar(255),
	PNV_user_dob date,
	PNV_user_phone varchar(255),
	PNV_user_description varchar(255),
	PNV_user_avatar varchar(255),
	PNV_user_status varchar(255),
	PNV_user_created datetime,
	PNV_user_updated datetime,
	PNV_user_roles varchar(36),
	PNV_user_class varchar(36),
	primary key(PNV_user_id)

);


/** Create Roles table **/

create table if not exist `PNV_Roles`(
	PNV_role_id varchar(36),
	PNV_role_name varchar(36),
	PNV_role_description varchar(36),
	PNV_role_created datetime,
	PNV_role_updated datetime,
	primary key(PNV_role_id)

);


/** Create Students validations table **/

create table if not exist `PNV_Student_validations`(
	PNV_sv_id varchar(36),
	PNV_sv_validator varchar(36),
	PNV_sv_student varchar(36),
	PNV_sv_validations varchar(255),
	primary key(PNV_sv_id)

);

/** Create Notifications table **/

create table if not exist `PNV_Notification`(
	PNV_noti_id varchar(36),
	PNV_noti_interacter varchar(36),
	PNV_noti_receiver varchar(36),
	PNV_noti_action varchar(36),
	PNV_noti_created datetime
	primary key(PNV_noti_id)

);


/** Create Subjects table **/

create table if not exist `PNV_Subjects`(
	PNV_sj_id varchar(36),
	PNV_sj_name varchar(255),
	PNV_sj_created datetime,
	PNV_sj_updated datetime,
	PNV_sj_description varchar(255),
	primary key(PNV_sj_id)

);

/** Create Clubs table **/

create table if not exist `PNV_Clubs`(
	PNV_club_id varchar(36),
	PNV_club_name varchar(255),
	PNV_club_owner varchar(36),
	PNV_club_members varchar(255),
	PNV_club_description varchar(255),
	PNV_club_created datetime,
	PNV_club_updated datetime,
	primary key(PNV_club_id)

);

/** Create Classes table **/

create table if not exist `PNV_Classes`(
	PNV_class_id varchar(36),
	PNV_class_name varchar(255),
	PNV_class_created datetime,
	PNV_class_updated datetime,
	primary key(PNV_class_id)

);

/** Create Images table **/

create table if not exist `PNV_Images`(
	PNV_image_id varchar(255),
	PNV_post_id varchar(36),
	PNV_image_images varchar(255),
	PNV_image_thumbnail varchar(255),
	primary key(PNV_image_id)
);


/** Create Galleries table **/

create table if not exist `PNV_Images_galleries`(
	PNV_Imgallery_id varchar(36),
	PNV_cate_id varchar(36),
	PNV_gallery_creator varchar(36),
	PNV_image_images varchar(255),
);

/** Create Events table **/

create table if not exist `PNV_Events`(
	PNV_event_id varchar(36),
	PNV_event_title varchar(255),
	PNV_event_content varchar(255),
	PNV_event_images varchar(255),
	PNV_created datetime,
	PNV_update datetime,
	PNV_started datetime,
	PNV_ended datetime,
	primary key(PNV_event_id)

);

/** Create Achieves table **/

create table if not exist `Achieves`(
	PNV_achieve_id varchar(36),
	PNV_achieve_year varchar(36),
	PNV_achieve_month varchar(36),
	PNV_achieve_post_list_id varchar(36),
	primary key(PNV_achieve_id)


);

/** Create  table **/

create table if not exist ``(



);

ALTER TABLE Orders
ADD FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);