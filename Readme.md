This is the first part of my project. Created an application to send a message. To use applications,
 you need to clone applications from the git hub repository, you can do this with the command:
 
 $ git clone https://github.com/Sunny9011/DockerProject.git 
 
 The container is based on the image of Alpine.
 In this project:
 - PHP 5.6
 - Apache.

To connect the database, you must run the command:

 $ docker run --name some-mysql -e MYSQL_ROOT_PASSWORD=my-secret-pw -d mysql:tag
 
 The next step is to bind our containers using the command:
 
 $ docker run --link some-mysql:db -p 8080:8080 name_your_container
 