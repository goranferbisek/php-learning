# php-learning
Learning PHP basics via Laracasts PHP Practitioner

# Database
You can install a MySQL database localy or you can run a docker container.

To run a docker container run these commands:
```docker run -d --name php-practitioner -p 3333:3306 -e MYSQL_ROOT_PASSWORD=password mysql```

This will map your database to port 3333 with a container name "php-practitioner". It will run in detached mode.

To run this container run:
```docker exec -it php-practitioner bash```
Log in to mysql with:
```mysql -u root -ppassword```

Use exit command to exit the container.

If you want to remove the docker image, use:
```docker rm php-practitioner```