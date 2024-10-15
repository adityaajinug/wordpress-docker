## How to run

#### Setup file 
1. Dockerfile : for instruction engine to create how to build a specific container
2. docker-compose.yaml : for define and manage multiple container
3. src/info.php : for php info

#### Build container
```
docker-compose build
```

#### Run the container
````
docker-compose up
````

#### If want to stop the container
```
docker-compose down
```

#### If want to running in the background
```
docker-compose up -d
```

#### If want to rebuild
````
docker-compose --build
````

#### Step number 4 is download wordpress file and extract file in src
##### run the container
````
docker-compose up
````

##### Open your browser and check php was installed
```
http://localhost:8080/info.php
```

##### Then access url wordpress like this and setup the database can see in the docker-compose.yaml
```
http://localhost:8080/wp-admin

database name : wordpress_dp
username : wordpress_user
password : sandi_wordpress
```

##### After setup, you can login and install plugin Redis Object Cache and activate then add this code in wp-config
```
define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );
```


