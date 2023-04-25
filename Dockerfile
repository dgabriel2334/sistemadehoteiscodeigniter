FROM debian:buster

RUN apt update && apt upgrade -y

RUN apt install -y wget

RUN wget https://sinalbr.dl.sourceforge.net/project/xampp/XAMPP%20Linux/7.4.33/xampp-linux-x64-7.4.33-0-installer.run

RUN chmod +x xampp-linux-x64-7.4.33-0-installer.run

RUN ./xampp-linux-x64-7.4.33-0-installer.run

RUN rm -r /opt/lampp/htdocs/

COPY ./ /opt/lampp/htdocs

WORKDIR /opt/lampp/bin

RUN ./mysql -u root -e "CREATE DATABASE lodge"

RUN ./mysql -u root lodge < /opt/lampp/htdocs/lodge.sql

EXPOSE 80