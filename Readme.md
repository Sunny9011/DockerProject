Overview

    Image based on alpine linux (currnetly 3.6)
    Contains appache 2.4 + php 5.6.30
    Apache runs or port 8080 
    Very low footprint appx 49M
To get the application, you must run the next command:

$ git clone https://github.com/Sunny9011/DockerProject.git

Build This Image

docker build --network=host --tag alpine-apache .

Run image

docker run -p 8085:8080 alpine-apache

Open your browser and paste the next line there:

http://localhost:8085/index.php

Add the database container to your application with the next command:

docker run --name some-mysql -e MYSQL_ROOT_PASSWORD=0000 -d mysql

And link your container to the database container next command:

docker run --link some-mysql:db -p 8085:8080 alpine-apache
