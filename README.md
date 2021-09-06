# demo-credit-bureau

## build the image from source and run as a container locally

``docker build --no-cache -t demo-credit-bureau .``

``docker run -p 80:80 demo-credit-bureau``

## deploy from docker hub locally

``docker run -p 80:80 michaeldeller/demo-credit-bureau``

## deploy from docker hub and expose with load balancer on kubernetes

``kubectl create deployment --image=michaeldeller/demo-credit-bureau friendlyname-demo-credit-bureau``

``kubectl expose deployment friendlyname-demo-credit-bureau --port=80 --target-port=80 --type=LoadBalancer --name=friendlyname-demo-credit-bureau-lb``