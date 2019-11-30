#!/bin/bash

for d in */ ; do
    cd ${d}
    for s in *.sh ; do
        chmod +x $s
        source ./$s
    done
    cd ../
done

sudo cp teysuStart.sh update-rc.d /etc/init.d/teysuStart.sh
chmod +x /etc/init.d/teysuStart.sh

sudo update-rc.d /etc/init.d/teysuStart.sh defaults

chmod +x uninstall.sh