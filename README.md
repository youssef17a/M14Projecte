# M14Projecte
Presentar información detallada sobre los personajes de la serie de animación Rick y Morty.

L'objectiu d'aquest projecte és desenvolupar una pàgina web que presenti informació detallada 
sobre els personatges de la sèrie d'animació Rick y Morty. Les dades s'obtindran de l'API de 
Rick and Morty (https://rickandmortyapi.com). La web comptarà amb un cercador de personatges, 
una opció per descarregar una fitxa de personatge en PDF, una funció d'inici de sessió i la capacitat 
perquè els usuaris guardin els seus personatges favorits a la base de dades.

Una motivació per crear una pàgina PHP que consulti una API és la possibilitat d'obtenir i utilitzar dades o 
serveis externs en el desenvolupament de la pàgina web. Això permet ampliar la funcionalitat de la pàgina i 
enriquir-la amb contingut actualitzat i dinàmic. L'ús d'una API facilita l'obtenció de dades específiques sense 
necessitat de crear i gestionar una base de dades pròpia. Això permet crear aplicacions més interactives, 
personalitzades i en temps real, millorant l'experiència de l'usuari i oferint contingut rellevant.

-----------------------------------------
LLISTAT D'EINES
----------------------------------------
-VirtualBox --> Ubuntu Server
-WinSCP
-Notepad++
-Chrome (O cualquier otro navegador)
-API
-----------------------------------------

-----------------------------------------
MAQUINA VIRTUAL
----------------------------------------
Ubuntu Server és una distribució de Linux dissenyada específicament per a servidors i s'utilitza àmpliament per 
allotjament web, servidors d'aplicacions, bases de dades, virtualització, emmagatzematge en xarxa, correu electrònic, 
administració remota i seguretat. Ofereix una combinació d'estabilitat, rendiment i flexibilitat que el converteix en 
una opció popular per a una varietat d'entorns de servidor.

-----------------------------------------
Serveis
----------------------------------------
-OpenSSH-Server
-MariaDB
-PhpMyadmin
-Apache
-php
-php-mysql
-php-gd
-php-xml
-tcpd
net-tools

Els anterior paquets es poden descarregar amb la comanda --> sudo apt-get install "nom_paquet"

-----------------------------------------
BASE DE DADES
----------------------------------------
Hem utilitzar Mysql, amb l’eina PhpMyAdmin per tindre un entorn gràfic, i mes senzill per treballar.
 #sudo apt-get install mysql-server
 
 #sudo mmysql_secure_installation
 
 Això el guiarà a través d'una sèrie d'instruccions mitjançant les quals podrà realitzar canvis en 
 les opcions de seguretat de la seva instal·lació de MySQL. En la primera sol·licitud se li preguntarà 
 si desitja configurar el complement de validació de contrasenya, que pot utilitzar per provar la seguretat de la contrasenya de MySQL.

-----------------------------------------
BASE DE DADES
----------------------------------------

Un cop més, farem servir el gestor de paquets d'Ubuntu per instal·lar PhpMyAdmin. Ho farem amb la següent comanda:

#sudo apt-get install phpmyadmin

Aquesta comanda instal·larà PhpMyAdmin i les seves dependències en el vostre sistema. 
Assegureu-vos de tenir els privilegis d'administrador per executar-la amb èxit.

Continuarem amb el assistent d’instal·lació. Després de finalitzar reiniciarem apache.
#Sudo systemctl restart apache2

********Accedir a la pagina web****************
Per accedir tindrem que tindre la IP del servidor MYSQL.

Per ixo instal·larem Net-tools, també podem utilitzar la comanda ip a.
#Sudo apt-get install net-tools -y

Una vegada tinguem la IP, anem al navegador i possem la ip+/phpmyadmin



-----------------------------------------
PAGINA WEB
----------------------------------------
Els arxius adjuntats al GitHub els podem pasar per SCP.

-----------------------------------------
M14
----------------------------------------
Youssef El Amrani
ASIX2
19/06/2023
