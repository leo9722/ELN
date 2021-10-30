pour faire donctionner l'interface web :

install apache2 + php + libeapache2-mod-php

mettre le fic ./domotik dans /var/wwww/html/domo

adduser www-data root
chown -R root:www-data à domo

sudo visudo /etc/sudoers :


# User privilege specification
root    ALL=(ALL:ALL) ALL

# Allow members of group sudo to execute any command
%sudo   ALL=(ALL:ALL) ALL
www-data        ALL=(ALL) NOPASSWD:ALL


et mettre ces privileges

enfin restart le server et debug avec tail -f /var/log/apache2/error.log si besoin