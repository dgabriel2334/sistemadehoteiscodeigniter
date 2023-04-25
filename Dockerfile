FROM dgabriel2334/xamppimage:latest

RUN rm -r /opt/lampp/htdocs

COPY ./ /opt/lampp/htdocs/