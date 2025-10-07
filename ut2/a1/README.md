
<center>

# UT2-A1 Implantación de arquitecturas web


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

Aquí explicamos brevemente la parte teórica que tiene que ver con la práctica que se va a realizar

#### ***Objetivos***. <a name="id2"></a>

El objetivo de esta práctica es utilizar Nginx y PHP para poder acceder una calculadora nativa y otra dockerizada desde localhost

#### ***Material empleado***. <a name="id3"></a>

He empleado una máquina virtual como servidor y una local para poder conectarme usando ssh. En clase hemos instalado Nginx y PHP en la máquina virtual, para la calculadora dockerizada hemos instalado docker, creado una imagen y un contenedor a partir de ella.

#### ***Desarrollo***. <a name="id4"></a>

##### 1. Instalación de Nginx y PHP (nativo)

En clase nos encargamos de instalar Nginx y PHP usando los siguientes comandos:

**Nginx**
```bash
sudo apt update
sudo apt install -y curl gnupg2 ca-certificates lsb-release debian-archive-keyring
curl -fsSL https://nginx.org/keys/nginx_signing.key \ | sudo gpg --dearmor -o /etc/apt/trusted.gpg.d/nginx.gpg
echo "deb http://nginx.org/packages/debian $(lsb_release -sc) nginx" \ | sudo tee /etc/apt/sources.list.d/nginx.list > /dev/null
sudo apt update
sudo apt install -y nginx
```

```bash
sudo apt update
sudo apt install -y lsb-release ca-certificates \ apt-transport-https software-properties-common gnupg2
curl -fsSL  https://packages.sury.org/php/apt.gpg \ | sudo gpg --dearmor -o /etc/apt/trusted.gpg.d/sury.gpg
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" \ | sudo tee /etc/apt/sources.list.d/sury-php.list
sudo apt update
sudo apt install -y php8.4-fpm
```

##### 2. Configuración Nginx (nativo)

<img src="./imgs/calculadoraPhp.png"/> 

Una vez instalado Nginx y PHP, creé una calculadora con las indicaciones dadas en la práctica.

<img src="./imgs/default-conf1.png"/>
<img src="./imgs/default-conf2.png"/>

Ahora, para poder ver la calculadora en el servidor, cambié la configuración por defecto de Nginx de manera que al buscar en el navegador **/** y **/calculadora.php** relacione esas direcciones con la ruta donde tengo situada mi **calculadora.php**

Al configurar esto ya podemos ver la calculadora mientras trabajamos desde nuestro repositorio 

##### 3. Instalación de docker

Al igual que con Nginx y PHP instalamos docker en clase, los comandos que usamos fueron:



##### 4. 

<img src="./imgs/DockerFile.png"/> 

> ***IMPORTANTE:*** si estamos capturando una terminal no hace falta capturar todo el escritorio y es importante que se vea el nombre de usuario.

Si encontramos dificultades a la hora de realizar algún paso debemos explicar esas dificultades, que pasos hemos seguido para resolverla y los resultados obtenidos.

#### ***Conclusiones***. <a name="id5"></a>

En esta parte debemos exponer las conclusiones que sacamos del desarrollo de la prácica.
