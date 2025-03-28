CREATE DATABASE website_db;
CREATE USER 'web_user'@'%' IDENTIFIED BY 'yourpassword';
GRANT ALL PRIVILEGES ON website_db.* TO 'web_user'@'%';
FLUSH PRIVILEGES;
EXIT;
