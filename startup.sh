#!/bin/bash
/opt/lampp/lampp start
/usr/bin/supervisord -n
sh initdb.sh