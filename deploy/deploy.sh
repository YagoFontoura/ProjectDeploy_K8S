#!/bin/bash
echo "Buildando a aplicação..."
docker build ../backend/ -t titanpxp/backend:2.0
docker build ../database/ -t titanpxp/databasemysql:2.0

echo "Levando o build a nuvem..."
docker push titanpxp/backend:2.0
docker push titanpxp/databasemysql:2.0

echo "Iniciando Servicos..."
kubectl apply -f ./service.yml

echo "Iniciando aplicação..."
kubectl apply -f ./deployment.yaml

