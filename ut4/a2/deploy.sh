#!/bin/bash

git add . ; git commit -m "deploy" ; git push

sudo ssh dplprod_javier@10.102.6.40 "
  cd dpl_javier
  git pull
"
