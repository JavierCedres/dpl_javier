#!/bin/bash

cd dpl_javier/ut4/a3/travelroad_django
source .venv/bin/activate
gunicorn -b unix:/tmp/travelroad_django.sock main.wsgi:application
