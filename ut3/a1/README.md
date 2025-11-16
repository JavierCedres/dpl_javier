
<center>

# UT3-A1: Administración de servidores web

</center>

***Nombre:*** Javier Marcelo Cedrés González
***Curso:*** 2º de Ciclo Superior de Desarrollo de Aplicaciones Web.

### ÍNDICE

+ [Introducción](#id1)
+ [Objetivos](#id2)
+ [Material empleado](#id3)
+ [Desarrollo](#id4)
+ [Conclusiones](#id5)


#### ***Introducción***. <a name="id1"></a>

En está práctica trabajaremos con Nginx y docker para ver el funcionamiento de modulos de nginx y sus configuraciones.

#### ***Objetivos***. <a name="id2"></a>

El objetivo de esta práctica es utilizar Nginx e implementar un módulo para poder trabajar con imágenes.

#### ***Material empleado***. <a name="id3"></a>

He empleado una máquina virtual como servidor y una local para poder conectarme usando ssh.

#### ***Desarrollo***. <a name="id4"></a>

##### 1. Descarga del módulo y librerías necesarias

<img src="./img/imagen_2025-11-16_021743534.png"/>

Lo primero que hice fue instalar las librerias necesarias para que el módulo funcionase.

<img src="./img/imagen_2025-11-16_022646511.png"/>

Luego descargué el código fuente de Nginx con la misma versión que tengo instalada en el sistema, ya que un módulo dinámico debe compilarse exactamente contra la misma versión de Nginx.

<img src="./img/Captura de pantalla 2025-11-15 215426.png"/>

El siguiente paso fue clonar el repositorio del módulo, yo lo cloné en ``/tmp/ngx-small_light``.

##### 2. Configuración de Nginx y el módulo

<img src="./img/Captura de pantalla 2025-11-15 215446.png"/>

Luego de clonar el repositorio, generé su configuración haciendo uso de ``./setup``.

<img src="./img/Captura de pantalla 2025-11-15 215534.png"/>

Preparé la compilación del módulo especificando que debe se un módulo dinámico.

<img src="./img/Captura de pantalla 2025-11-15 215547.png"/>

Después de preparar la compilación, hice ``make modules`` para que se compilen los módulos dinámicos.

<img src="./img/Captura de pantalla 2025-11-15 215704.png"/>

``make modules`` generó el objeto ``.so``, ese fichero es el que usaremos en la configuración de Nginx, lo que hice fue moverlo a la carpeta desde la que se cargan los módulos dinámicos de Nginx.

<img src="./img/Captura de pantalla 2025-11-15 215807.png"/>

Por último, especifiqué en el fichero de configuración de Nginx que cargue ese módulo.

##### 3. Creación del virtual-host

<img src="./img/Captura de pantalla 2025-11-16 025709.png"/>

En el fichero de configuración del virtual-host especifique varias cosas; el nombre del servidor, la ruta en la que debe buscar los ficheros y un location ``/img`` en el cual está activido el módulo y una configuración adicional de este para habilitar consultas GET.

##### 4. HTML/Javascript

<img src="./img/Captura de pantalla 2025-11-16 025742.png"/>

Una vez todo configurado, creé el fichero index.html que se cargará en ``/``, el código funciona de tal manera que hay un formulario con opciones para modificar el estilo de las fotos, una vez pulsado el botón de generar aparecen todas las imagenes teniendo como ruta el location especificado anteriormente en el ``.conf`` más el nombre de la foto y diversos parametros, recogidos del formulario, que ofrece el módulo para modificar las imagenes.

<img src="./img/imagen_2025-11-16_031627792.png"/>

##### 5. Redirección

<img src="./img/Captura de pantalla 2025-11-15 192728.png"/>

Adicionalmente creé otro fichero de configuración virtual-host para redirigir desde el subdominio ``www`` a el dominio principal.

##### 6. Docker

La parte de docker es idéntica a la local pero con alguna diferencia.

<img src="./img/Captura de pantalla 2025-11-15 214625.png"/>

Lo primero que hice fue crear un Dockerfile que usa un debian 12 como base, instala las librerías necesarias para el módulo y Nginx y copia las imagenes y el index dentro del contenedor.

<img src="./img/Captura de pantalla 2025-11-15 214657.png"/>
<img src="./img/Captura de pantalla 2025-11-15 215229.png"/>

Creo una imagen a partir de ese Dockerfile, un contenedor y entro en él. Una vez dentro del contenedor seguí los mismos pasos que en local.

<img src="./img/Captura de pantalla 2025-11-16 013111.png"/>

En esta ocasión, debemos incluir el puerto en la ruta para poder ver la página del contenedor docker.

<img src="./img/Captura de pantalla 2025-11-15 222045.png"/>

Por último, para poder compartir ese contenedor ya configurado, debemos crear una imagen de él usando ``docker commit``.

<img src="./img/Captura de pantalla 2025-11-15 222131.png"/>

Usamos ``docker tag`` para vincular el contenedor con el nombre especificado.

<img src="./img/Captura de pantalla 2025-11-15 222137.png"/>

Nos logeamos para poder subir la imagen a docker hub.

<img src="./img/Captura de pantalla 2025-11-15 222142.png"/>

Subimos la imagen a docker hub.

<img src="./img/Captura de pantalla 2025-11-15 222147.png"/>

#### ***Conclusiones***. <a name="id5"></a>

Gracias a esta tarea he aprendido a manejar y configurar modulos en Nginx y a subir imagenes a docker hub.
