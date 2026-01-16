
<center>

# UT4-A3 Administración de servidores de aplicaciones (Django)


</center>

***Nombre:*** Javier Marcelo Cedrés González

***Curso:*** 2º de Ciclo Superior de Desarrollo de Aplicaciones Web.

### ÍNDICE

+ [Objetivos](#id2)
+ [Material empleado](#id3)
+ [Desarrollo](#id4)

#### ***Objetivos***. <a name="id2"></a>

Tener una aplicación hecha en django en una máquina para desarrollo y otra en una máquina de producción.

#### ***Material empleado***. <a name="id3"></a>

Dos máquinas, una para desarrollo y otra para producción.

#### ***Desarrollo***. <a name="id4"></a>

**En la máquina de desarrollo:**

##### 1. Creación del entrono virtual.

Se crea un entorno virtual para trabajar en la aplicación django.

<img src="./imgs/Captura de pantalla 2026-01-16 135121.png" />

##### 2. Instalación de django.

Se instala django.

<img src="./imgs/Captura de pantalla 2026-01-16 135213.png" />

##### 3. Creación del proyecto django.

Se crea el proyecto django.

<img src="./imgs/Captura de pantalla 2026-01-16 135334.png" />

##### 4. Iniciar servidor del proyecto.

Se comprueba que el proyecto esté funcionando.

<img src="./imgs/Captura de pantalla 2026-01-16 135622.png" />

##### 5. Creación de la aplicación places.

Se crea la aplicación places, la cual tendra toda la información relacionada con la tabla places de la base de datos travelroad.

<img src="./imgs/Captura de pantalla 2026-01-16 135748.png" />

##### 6. Cambio en la configuración de la aplicación django.

Cambio en el fichero ``settings.py`` de la aplicación django, ahora ``ALLOWED_HOSTS`` acepta todas las conexiones y addición de la aplicación creada para que django la detecte.

<img src="./imgs/Captura de pantalla 2026-01-16 135854.png" />

##### 7. Descarga de el paquete psycopg2-binary.

Descarga del paquete psycopg2-binary para permitir las conexiones a bases de datos PostgreSQL

<img src="./imgs/Captura de pantalla 2026-01-16 140043.png" />

##### 8. Cambio en la configuración de la base de datos en el fichero ``settings.py``.

Se cambia la configuración de la base de datos de la aplicación django para que se conecte correctamente a la base de datos.

<img src="./imgs/Captura de pantalla 2026-01-16 140043.png" />

##### 9. Creación del modelo Place.

Se crea el modelo Place indicando que ya existe una tabla con ese nombre en la base de datos.

<img src="./imgs/Captura de pantalla 2026-01-16 140352.png" />

##### 10. Creación de la view de places.

Se crea una vista(controlador) con tres funciones, una que muestre los sitios visitados, otra los que se quieren visitar y una para que sirva como home.

<img src="./imgs/Captura de pantalla 2026-01-16 145334.png" />

##### 11. Creación de los templates ``index.html``, ``wished.html``, ``visited.html``.

``index.html`` muestra los links para dirigirse a los lugares visitados y los sin visitar.

<img src="./imgs/Captura de pantalla 2026-01-16 145721.png" />

``wished.html`` muestra los lugares sin visitar.

<img src="./imgs/Captura de pantalla 2026-01-16 145305.png" />

``visited.html`` muestra los lugares visitados.

<img src="./imgs/Captura de pantalla 2026-01-16 145458.png" />

##### 12. Creación del ``urls.py`` de places.

Se crea un ``urls.py`` en places para registrar las urls de la aplicación.

<img src="./imgs/Captura de pantalla 2026-01-16 140551.png" />

##### 13. Cambio en ``urls.py`` de *main*

Se incluyen todas las urls de places en el proyecto.

<img src="./imgs/Captura de pantalla 2026-01-16 140629.png" />

##### 14. Aplicación funcionando en local.

<img src="./imgs/Captura de pantalla 2026-01-16 143206.png" />

##### 15. Instalación de prettyconf.

Se instala prettyconf, este paquete nos permite usar variables desde un fichero ``.env`` para que no se suban al control de versiones, esto es muy útil sobre todo para información sensible.

<img src="./imgs/Captura de pantalla 2026-01-16 143301.png" />

##### 16. Cambios en ``settings.py``.

Se añade prettyconf para la configuración de la base de datos.

<img src="./imgs/Captura de pantalla 2026-01-16 143441.png" />

##### 17. Creación de ``requirements.txt``.

Se crea un fichero llamado ``requirements.txt`` en el cual se incluyen las dependencias necesarias para que el proyecto funcione, esto se hace para que a la hora del despliegue se puedan instalar facilmente.



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

<img src="./imgs/deploy2.png" />

Le damos permisos de ejecución:

<img src="./imgs/deployPermisos.png" />

Para comprobar que funciona realizamos algún cambio y ejecutamos el script:

<img src="./imgs/execDeploysh.png" />

Adicionalmente podemos pasarle a la máquina de producción nuestra clave pública para poder conectarnos sin que nos pida la contraseña:

<img src="./imgs/sshCopyId.png" />




