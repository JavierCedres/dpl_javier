
<center>

# INSTALACIÓN Y CONFIGURACIÓN DE PostgreSQL Y pgAdmin (ACTIVIDAD PARA ESCENARIO TELEMÁTICO)


</center>

***Nombre:***
***Curso:*** 2º de Ciclo Superior de Desarrollo de Aplicaciones Web.

### ÍNDICE

+ [Objetivos](#id2)
+ [Material empleado](#id3)
+ [Desarrollo](#id4)

#### ***Objetivos***. <a name="id2"></a>

El objetivo de esta tarea es la instalación y configuración  de forma guiada de **PostgreSQL** y **pgAdmin** en la máquina de desarrollo.  Se trata de una actividad diseñada para el escenario telemático.

#### ***Material empleado***. <a name="id3"></a>

Máquina virtual con el sistema operativo **Debian 12 server** 

#### ***Desarrollo***. <a name="id4"></a>

`sudo apt install -y postgresql-15`

##### Instalación y configuración de postgreSQL

La version instalada es:

<img src="./img/Captura de pantalla 2025-11-12 151035.png" />
<img src="./img/Captura de pantalla 2025-11-12 151252.png" />

Creamos un rol de acceso a la base de datos:

Cargamos en la tabla creada en la base de datos los sitios visitados y no visitados

<img src="./img/Captura de pantalla 2025-11-12 152216.png" />

##### Instalación y configuración de PGAdmin

Instalamos pgadmin dentro del entrono virtual

<img src="./img/Captura de pantalla 2025-11-12 155113.png" />

Configuramos un virtualhost en nginx

<img src="./img/Captura de pantalla 2025-11-12 163231.png" />
