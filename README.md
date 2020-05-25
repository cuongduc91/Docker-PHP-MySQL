# Docker-PHP-MySQL
Docker-PHP-MySQL
# db
As localhost name
# www
As the php dockerfile folder
#Important! is to grant privileges to another user 
In terminal:
   docker exec -it <container name or id>   bash
   mysql -u root -p
   //loging with root password
   GRANT ALL PRIVILEGES ON php_data.* TO '<user name>'@'%' WITH GRANT OPTION;
