#!/bin/bash

for d in */ ; do
    cd ${d}
    for s in *.sh ; do
        chmod +x $s
        source ./$s
    done
    cd ../
done

chmod +x uninstall.sh