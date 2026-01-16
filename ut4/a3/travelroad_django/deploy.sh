#!/bin/bash

ssh dplprod_javier "
  cd dpl_javier/ut4/a3/travelroad_django
  git pull

  source .venv/bin/activate
  pip install -r requirements.txt

  ./run.sh
"
