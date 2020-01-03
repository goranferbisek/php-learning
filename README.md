# php-learning
Learning PHP basics via Laracasts PHP Practitioner available here:
https://laracasts.com/series/php-for-beginners


# Database
You can install a MySQL database localy or you can run a docker container.

## Run mysql container
To run a docker container run these commands:
```bash
docker run -d --name php-practitioner -p 3333:3306 -e MYSQL_ROOT_PASSWORD=password mysql
```

This will map your database to port 3333 with a container name "php-practitioner". It will run in detached mode. MySQL password will be set to "password".

## Access to shell
If the container is stopped, first run:
```bash
docker start php-practitioner
```

To get in to the container bash run:
```bash
docker exec -it php-practitioner bash
```
Log in to mysql with:
```bash
mysql -u root -ppassword
```

Use exit command to exit the container.

##  Delete container
If you want to remove the docker image, use:
```bash
docker rm php-practitioner
```