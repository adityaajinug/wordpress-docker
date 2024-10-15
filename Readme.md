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

