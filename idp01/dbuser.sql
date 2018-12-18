create database simplesaml;
use simplesaml;
create user 'simplesaml'@'localhost' identified by 'pwd';
grant all privileges on simplesaml.* to 'simplesaml'@'localhost';

