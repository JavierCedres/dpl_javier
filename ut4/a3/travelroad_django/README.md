
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

<img src="../imgs/Captura de pantalla 2026-01-16 135121.png" />

##### 2. Instalación de django.

Se instala django.

<img src="../imgs/Captura de pantalla 2026-01-16 135213.png" />

##### 3. Creación del proyecto django.

Se crea el proyecto django.

<img src="../imgs/Captura de pantalla 2026-01-16 135334.png" />

##### 4. Iniciar servidor del proyecto.

Se comprueba que el proyecto esté funcionando.

<img src="../imgs/Captura de pantalla 2026-01-16 135622.png" />

##### 5. Creación de la aplicación places.

Se crea la aplicación places, la cual tendra toda la información relacionada con la tabla places de la base de datos travelroad.

<img src="../imgs/Captura de pantalla 2026-01-16 135748.png" />

##### 6. Cambio en la configuración de la aplicación django.

Cambio en el fichero ``settings.py`` de la aplicación django, ahora ``ALLOWED_HOSTS`` acepta todas las conexiones y addición de la aplicación creada para que django la detecte.

<img src="../imgs/Captura de pantalla 2026-01-16 135854.png" />

##### 7. Descarga de el paquete psycopg2-binary.

Descarga del paquete psycopg2-binary para permitir las conexiones a bases de datos PostgreSQL

<img src="../imgs/Captura de pantalla 2026-01-16 140043.png" />

##### 8. Cambio en la configuración de la base de datos en el fichero ``settings.py``.

Se cambia la configuración de la base de datos de la aplicación django para que se conecte correctamente a la base de datos.

<img src="../imgs/Captura de pantalla 2026-01-16 140043.png" />

##### 9. Creación del modelo Place.

Se crea el modelo Place indicando que ya existe una tabla con ese nombre en la base de datos.

<img src="../imgs/Captura de pantalla 2026-01-16 140352.png" />

##### 10. Creación de la view de places.

Se crea una vista(controlador) con tres funciones, una que muestre los sitios visitados, otra los que se quieren visitar y una para que sirva como home.

<img src="../imgs/Captura de pantalla 2026-01-16 145334.png" />

##### 11. Creación de los templates ``index.html``, ``wished.html``, ``visited.html``.

``index.html`` muestra los links para dirigirse a los lugares visitados y los sin visitar.

<img src="../imgs/Captura de pantalla 2026-01-16 145721.png" />

``wished.html`` muestra los lugares sin visitar.

<img src="../imgs/Captura de pantalla 2026-01-16 145305.png" />

``visited.html`` muestra los lugares visitados.

<img src="../imgs/Captura de pantalla 2026-01-16 145458.png" />

##### 12. Creación del ``urls.py`` de places.

Se crea un ``urls.py`` en places para registrar las urls de la aplicación.

<img src="../imgs/imagen_2026-01-16_213510114.png" />

##### 13. Cambio en ``urls.py`` de *main*

Se incluyen todas las urls de places en el proyecto.

<img src="../imgs/Captura de pantalla 2026-01-16 140629.png" />

##### 14. Aplicación funcionando en local.

<img src="../imgs/Captura de pantalla 2026-01-16 143206.png" />

##### 15. Instalación de prettyconf.

Se instala prettyconf, este paquete nos permite usar variables desde un fichero ``.env`` para que no se suban al control de versiones, esto es muy útil sobre todo para información sensible.

<img src="../imgs/Captura de pantalla 2026-01-16 143301.png" />

##### 16. Cambios en ``settings.py``.

Se añade prettyconf para la configuración de la base de datos.

<img src="../imgs/Captura de pantalla 2026-01-16 143441.png" />

##### 17. Creación de ``requirements.txt``.

Se crea un fichero llamado ``requirements.txt`` en el cual se incluyen las dependencias necesarias para que el proyecto funcione, esto se hace para que a la hora del despliegue se puedan instalar facilmente.

<img src="../imgs/Captura de pantalla 2026-01-16 143556.png" />

**URL pgadmin:** http://pgadmin.local

**En la máquina de producción:** 

##### 1. Preparación del entorno.

Se crea un entorno virtual y se instalan las dependencias necesarias haciendo uso del fichero ``requirements.txt``

<img src="../imgs/Captura de pantalla 2026-01-16 184610.png" />

##### 2. Instalación de gunicorn.

Se instala gunicorn, un servidor de aplicación que nos permitira iniciar nuestro proyecto.

<img src="../imgs/Captura de pantalla 2026-01-16 185725.png" />

##### 3. Creación del virtual host.

Se crea un virtual host que se conecte a gunicorn.

<img src="../imgs/Captura de pantalla 2026-01-16 190203.png" />

##### 4. Creación de script ``run.sh``.

Creamos un script para iniciar el servidor gunicorn.

<img src="../imgs/Captura de pantalla 2026-01-16 190243.png" />

##### 5. Script de deploy.

Creamos un script para iniciar el servidor gunicorn.

<img src="../imgs/Captura de pantalla 2026-01-16 190243.png" />
