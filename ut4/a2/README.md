
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

##### 1. Instalar PostgreSQL, crear una base de datos travelroad con datos, virtual host nginx.

**En la máquina de desarrollo:** La instalación de PostgreSQL, la creación de la base de datos y la carga de datos ya fueron hechas en la práctica 1 del tema 4 [UT4A1](https://github.com/JavierCedres/dpl_javier/blob/main/ut4/a1/README.md).

Creación del virtual host:

<img src="./imgs/pgadminConf.png" />

Conectar servidor con la base de datos:

<img src="./imgs/travelroadServer.png" />

**URL pgadmin:** http://pgadmin.local

**En la máquina de producción:** La instalación de PostgreSQL es exactamente igual que en la máquina de desarrollo, para la base de datos la creación y la carga de datos son iguales pero en esta ocasión creamos un usuario con distintas credenciales.

<img src="./imgs/travelroadUserProd.png" />

El virtual host de producción es el mismo pero cambiando el nombre del dominio:

<img src="./imgs/pgadminConfProd.png" />

Conectar servidor con la base de datos:

<img src="./imgs/travelroadServer2.png" />

**URL pgadmin:** http://pgadmin.javier.arkania.es

##### 2. Aplicación PHP en entorno de desarrollo

Para poder hacer la aplicación PHP necesitaremos conectarnos a la base de datos con pg_connect, para ello tenemos que instalar `php8.4-pgsql`:

<img src="./imgs/pgsql.png" />

Creamos la aplicación PHP dentro de nuestro repositorio:

<img src="./imgs/travelroadPHP.png" />

Añadimos un virtual host y lo configuramos con server_name **php.travelroad.local**, php y nuestra aplicación php para poder verla en el navegador:

<img src="./imgs/travleroadConf.png" />

Para que no se suban la contraseña y el usuario de nuestra base de datos a Github creamos otro fichero fuera del repositorio y lo incluimos en la aplicación php con **include**:

<img src="./imgs/configPHP.png" />

[Código fuente aplicación PHP](https://github.com/JavierCedres/dpl_javier/blob/main/ut4/a2/travelroadA2.php)

##### 3. Aplicación PHP en entorno de producción

Lo primero que hacemos es clonar el repositorio en el que hemos creado la aplicación:

<img src="./imgs/repositoryClonedProd.png" />

Creamos el fichero en el que se encontrarán las credenciales de la base de datos de producción:

<img src="./imgs/configPHPProd.png" />

Añadimos un virtual host igual que el de la máquina de desarrollo pero con distinto server_name:

<img src="./imgs/travelroadConfProd.png" />

Y por último creamos una redirección desde www hasta nuestro servidor:

<img src="./imgs/travelroadWWWRedirect.png" />

**Aplicación PHP en producción:** http://php.travelroad.javier.arkania.es

##### 4. Script de despliegue

Para acabar hacemos un script que se conecte a la máquina de producción y haga un ``git pull`` para traer los cambios en el repositorio:

<img src="./imgs/deploy.png" />

Le damos permisos de ejecución:

<img src="./imgs/deployPermisos.png" />

Para comprobar que funciona realizamos algún cambio y ejecutamos el script:

<img src="./imgs/execDeploysh.png" />

Adicionalmente podemos pasarle a la máquina de producción nuestra clave pública para poder conectarnos sin que nos pida la contraseña:



