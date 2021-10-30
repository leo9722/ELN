# Projet Linux Embarqué 
  
  Réalisation d'une passerelle domotique 433.93MHz permettant de pîloter par liaison radio des objets connectés.


# INSTALLATION

Pour faire fonctionner l'interface web :

```bash
apt-get install apache2  php  libeapache2-mod-php
```
puis

```bash
mv  ./domotik dans /var/wwww/html/domo
```


```bash
adduser www-data root
chown -R root:www-data à domo
```

configuration des droits sudoers :

```bash 
sudo visudo /etc/sudoers 


# User privilege specification
root    ALL=(ALL:ALL) ALL

# Allow members of group sudo to execute any command
%sudo   ALL=(ALL:ALL) ALL
www-data        ALL=(ALL) NOPASSWD:ALL

```


Enfin il faut restart le service 
```bash 
sudo service apache2 restart
```

si besoin debug avec 

```bash 
tail -f /var/log/apache2/error.log 
```

## Interface Web 

L'interface Contient 3 boutton permettant de d'allumer ou d'éteindre les différents tubes souhaité,
Elle contient également une section débug afin de voir les erreurs en temps réel.

![alt text](https://github.com/leo9722/IOT/blob/master/domotique.PNG)
