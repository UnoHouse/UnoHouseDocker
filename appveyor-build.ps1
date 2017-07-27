choco install chocolatey
choco install -y docker -version 1.10.0
choco install -y docker-compose -version 1.15.0

docker version
docker-compose version

docker-compose build
docker-compose up
docker images
docker ps