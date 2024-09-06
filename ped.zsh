#! /bin/zsh

# php encrypt/decrypt runner

ENC_KEY=${ENC_KEY:-0123456789abcdef}

prg=""

getopts "ed" opt
case $opt in
  e)
    prg=./enc.php
    ;;
  d)
    prg=./dec.php
    ;;
  *) # \?)
    echo "Invalid option: -$OPTARG" >&2
    exit 1
    ;;
esac

docker run -it --rm --name php-runner -v $PWD:/work -w /work -e ENC_KEY=$ENC_KEY php:cli php $prg $2 
