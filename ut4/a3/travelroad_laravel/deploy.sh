#!/bin/bash

git add . ; git commit -m "deploy" ; git push

ssh dplprod_javier@100.102.6.40 "
  cd dpl_javier
  git pull
  composer install
"
