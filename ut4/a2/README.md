
<center>

# UT4-A2 Administración de servidores de aplicaciones ( PostgreSQL )


</center>

***Nombre:*** Javier Marcelo Cedrés González
***Curso:*** 2º de Ciclo Superior de Desarrollo de Aplicaciones Web.

### ÍNDICE

+ [Objetivos](#id2)
+ [Material empleado](#id3)
+ [Desarrollo](#id4)

#### ***Objetivos***. <a name="id2"></a>

Tener una aplicación PHP en una máquina para desarrollo y otra en una máquina de producción, conectarse a una base de datos y usar pgadmin en ambas máquinas.

#### ***Material empleado***. <a name="id3"></a>

Dos máquinas, una para desarrollo y otra para producción.

#### ***Desarrollo***. <a name="id4"></a>

##### Instalar PostgreSQL, crear una base de datos travelroad con datos, virtualhost nginx.

**En la máquina de desarrollo:** La instalación de PostgreSQL, la creación de la base de datos y la carga de datos ya fueron hechas en la práctica 1 del tema 4 [UT4A1](https://github.com/JavierCedres/dpl_javier/blob/main/ut4/a1/README.md).

Creación del virtualhost:

<img src="./imgs/pgadminConf.png" />

Conectar servidor con la base de datos:

<img src="./imgs/travelroadServer.png" />

**URL pgadmin:** http://pgadmin.local

**En la máquina de producción:** La instalación de PostgreSQL es exactamente igual que en la máquina de desarrollo, para la base de datos la creación y la carga de datos son iguales pero en esta ocasión creamos un usuario con distintas credenciales.

<img src="./imgs/travelroadUserProd.png" />

El virtualhost de producción es el mismo pero cambiando el nombre del dominio:

<img src="./imgs/pgadminConfProd.png" />

Conectar servidor con la base de datos:

<img src="./imgs/travelroadServer2.png" />

**URL pgadmin:** http://pgadmin.javier.arkania.es

##### Aplicación PHP en entorno de desarrollo

Para poder hacer la aplicación PHP necesitaremos conectarnos a la base de datos con pg_connect, para ello tenemos que instalar `php8.4-pgsql`:

<img src="./imgs/pgsql.png" />

Creamos la aplicación PHP:

<img src="./imgs/travelroadPHP.png" />


