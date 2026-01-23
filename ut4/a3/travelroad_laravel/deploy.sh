#!/bin/bash

git add . ; git commit -m "deploy" ; git push

ssh dplprod_javier@100.102.6.40 "
  cd dpl_javier/ut4/a3/travelroad_laravel
  git pull
  composer install
"
