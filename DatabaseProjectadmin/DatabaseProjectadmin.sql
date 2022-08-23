Create table students (
User_ID int primary key,
User_Username varchar(255),
User_email varchar(255),
User_password varchar(255),
user_confirmPass varchar(255),
);

Create table admin_user (
admin_User_id int primary key,
admin_User_email varchar(255),
admin_User_password varchar(255),
Admin_user_confirmPass varchar(255),
);