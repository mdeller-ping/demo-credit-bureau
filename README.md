# demo-home

## build the image from source and run as a container locally

``docker build --no-cache -t demo-home .``

``docker run -p 80:80 demo-home``

## deploy from docker hub locally

``docker run -p 80:80 michaeldeller/demo-home``

## deploy from docker hub and expose with load balancer on kubernetes

``kubectl create deployment --image=michaeldeller/demo-home friendlyname-demo-home``

``kubectl expose deployment friendlyname-demo-home --port=80 --target-port=80 --type=LoadBalancer --name=friendlyname-demo-home-lb``