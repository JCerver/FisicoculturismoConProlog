# Sistema experto en fisicoculturismo hecho con prolog 

## Descripción
***
El sitio web cuenta con 3 categorías principales en cuestión de información, cada categoría está divida en los siguientes tópicos:
*    Selección de ejercicios.
*    Categoría muscular.
*    Tipos de entrenamiento.

Al seleccionar alguna categoría se re direcciona al usuario a la página solicitada en donde puede consultar información a través de un buscador sobre la categoría seleccionada. La página captura la información ingresada por el usuario y a través de una sentencia coloca dicha informacion para ser enviada a prolog y sobre un conjunto de hechos establecidos se puedan realizar una serie de preguntas. Prolog busca automáticamente en la base de datos si existe un hecho que se puede unificar (es decir, tiene el mismo nombre de predicado, el mismo número de argumentos- o aridad- y cada uno de los argumentos tiene el mismo nombre, uno a uno) con el hecho que aparece en la pregunta. PROLOG contestará “SI” si encuentra ese hecho y “NO” si no lo encuentra. Para obtener la o las respuestas, PROLOG recorre la base de datos hasta encontrar el primer hecho que coincide con el nombre de la relación y su aridad y con los argumentos que no son variables

## Construido con 🛠️

* HMTL5.
* PHP.
* CSS.
* Framework Bootstrap.
* SWI-Prolog.


# Pre-requisitos  ⚙️
## Programas necesarios📋
*    Servidor web (el paquete de software libre XAMPP o WAMPSERVER).
*    Un software de control de versiones (en este caso GITHUB).
*    SWI-Prolog.

### Instalación de servidor web.

#### Paso 1
Diríjase a la página principal de [XAMPP](https://www.apachefriends.org/es/index.html).Aquí, encontrará varias versiones de XAMPP para descargar.
XAMPP está disponible en tres formatos:

* EXE – Fichero auto-ejecutable; fácil de instalar.

* .7z – 7zip file. Preferido por los puristas, aunque requiere trabajar con ficheros .bat más complejos para instalarse.

* .ZIP – Fichero comprimido zip. Como .7z, la instalación mediante ficheros .ZIP es considerablemente más difícil que usar .EXE

Debido a que la instalación con el fichero .EXE es la más sencilla, usaremos este formato de fichero para este tutorial.

#### Paso 2.
 Deshabilite su antivirus ya que puede provocar que algunos componentes de XAMPP se comporten de manera irregular.

#### Paso 3.
Haga doble click en el instalador XAMPP para comenzar el proceso de instalación. Haga click en ‘Next’ después de la pantalla de presentación.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/xam1.jpg "paso 3")	


#### Paso 4.
Aquí, puede seleccionar los componentes que quiere instalar. Elija la opción por defecto y haga click en ‘Next’.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/xam2.jpg "paso 4")	

#### Paso 5.
Elija la carpeta en la que quiere instalar XAMPP. Esta carpeta contendrá todos los ficheros de la aplicación web, así que asegúrese de seleccionar una unidad que tenga bastante espacio.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/xam3.jpg "paso 5")	


#### Paso 6.
El instalador está ahora preparado para instalar XAMPP. Haga click en ‘Next’ y espere a que el instalador desempaquete e instale los componentes. Esto puede llevar varios minutos. Puede que se le pida aprobar el acceso al cortafuegos para ciertos componentes (como Apache) durante el proceso de instalación.

¡El proceso de instalación ha acabado! Marque la casilla ‘Do you want to start the Control Panel now?’ para abrir el panel de control de XAMPP.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/xam4.jpg "paso 6")	


### Instalación de GIT
Para instalar git en Windows, primero tenemos que ir al sitio web de [git](https://git-scm.com/download/win) y esperar a que se termine la descarga. Una vez que se haya terminado la descarga, tendremos un archivo (.exe) el cual abrimos y tendremos un asistente de configuración.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/imgit1.png "paso 1")	

#### Paso 1. Elegimos el destino
![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/imgit2.png "paso 2")	

#### Paso 2. Configuración de parametros necesarios
A partir de este punto todo lo vamos a dejar como esta (no movemos nada), simplemente damos click en siguiente, a menos que tengamos conocimientos sobre ello.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/imgit3.png "paso 2")	

Ya que terminamos todo el proceso de instalación, tendremos el Git Bash, esto nos va a servir para ejecutar los comandos de git en Windows (Una especie de nuevo CMD).

Para verificar que todo está bien, abrimos el Git Bash y ejecutamos el siguiente comando:
```
$ git --version

```

Si nos arroja la versión de Git, significa que todo está bien y ya podemos empezar a trabajar.
![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/imgit4.png "paso 2").	

### Instalación de SWI-Prolog

#### Paso 1.
Buscaremos el programa en la pagina de [Prolog](http://www.swi-prolog.org/), para ello accedemos a nuestro navegador y en la barra de búsqueda de Google escribiremos SWI prolog. Y damos clic en el primer resultado.

#### Paso 2.
Damos clic en Download SWI-Prolog.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/pro1.png "paso 2")	

#### Paso 3.
Después damos clic en Stable release, que son las fuentes ejecutables en Windows.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/pro2.png "paso 3")	

#### Paso 4.
Elegimos según nuestro sistema operativo, automáticamente se descargara el programa al hacer clic, una vez terminada la descarga damos clic en el.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/pro3.png "paso 4")	

#### Paso 5.
Aceptamos los terminos y condiciones

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/pro4.png "paso 2")	

#### Paso 6.
Seleccionamos las caracteristicas a instalar.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/pro5.png "paso 6")	

#### Paso 7.
Seleccionamos la ruta de instalación

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/pro6.png "paso 7")	

#### Paso 8.
A conitnuación comenzará el proceso de instalación. 

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/pro7.png "paso 8")	

Al finalizar cerramos la ventana emergente.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/pro8.png "paso 8")	

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/pro9.png "paso 8")	

Y listo, ya tenemos instalado prolog con exito.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/pro10.png "paso 8")	



## Como probar el programa 🚀
### 1. clonar el repositorio
Una vez que se tenga instalado Git en nuestra computadora, se debe:

* Crear una carpeta o un directorio dentro de nuestra carpeta htdocs ubicada en la carpeta xampp, Abrir la terminal desde la ruta actual e iniciar un nuevo repositorio con el siguiente comando
```
$ git init

```

* clonar el repositorio ejecutando el siguiente comando
```
$ git https://github.com/JCerver/FisicoculturismoConProlog.git

```
Y es todo, ya tendrás clonado el repositorio en tu directorio.

***


### 2. Iniciar el servicio de Apache en nuestro servidor web
El panel de control de XAMPP le da un control completo sobre todos los componentes de XAMPP instalados. Puede usar el panel de control para iniciar/parar distintos módulos, lanzar una ventana de comandos UNIX, abrir el explorador de Windows, y ver todas las operaciones que se ejecutan en segundo plano.

Al abrir el panel de control, pulsamos sobre START en el servicio de Apache para poder cargar nuestro sitio web, por defecto se utiliza el puerto 80 y 443.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/xampp.JPG "paso 1")	

***

### 3. Abrir la pagina de inicio en nuestro navegador web.
Dentro de la carpeta en donde clonamos el proyecto se encuentra el archivo index.php, abrimos este archivo con algún navegador web que se tenga instalado en el equipo.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/imgIndex.JPG "paso 1")	

Nos debe mostrar la siguiente interfaz

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/test1.JPG "paso 1")	

***

### 4. Comenzar a realizar consultas
Como se observó en el paso anterior, contamos una serie de categorías que nos ofrece el sitio web, cada categoría realiza una función diferente.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/test1.JPG "paso 1")	

#### Selección de ejercicios
Dentro de esta categoría tenemos una lista de opciones para determinar que ejercicios podemos realizar para determinado grupo muscular.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/test2.JPG "paso 1")	

al seleccionar algún musculo, se despliega los ejercicios para dicho musculo.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/test3.JPG "paso 1")	

#### Categoría muscular
Dentro de esta categoría tenemos la opción de ingresar un ejercicio y consultar que grupo muscular interviene en la ejecución de dicho ejercicio

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/test4.JPG "paso 1")



#### Tipo de entrenamiento
Dentro de esta categoría tenemos la opción de ingresar número determinado y saber qué tipo de entrenamiento se está realizando en función del número de repeticiones realizadas.

![alt text](https://github.com/JCerver/FisicoculturismoConProlog/blob/master/imagenes/test5.JPG "paso 1")


# Conceptos técnicos
Si quieres saber como funciona el programa es necesario conocer algo de teoria para conocer que existe detrás de la magia:

## Prolog
### ¿Qué es?
PROLOG es un lenguaje de programación para ordenadores que se basa en el
lenguaje de la Lógica de Primer Orden y que se utiliza para resolver problemas en los
que entran en juego objetos y relaciones entre ellos.
El lenguaje de programación PROLOG (“PROgrammation en LOGique”) fue
creado por Alain Colmerauer y sus colaboradores alrededor de 1970 en la Universidad
de Marseille-Aix. 

### ¿Cómo funciona?
El hecho de programar en Prolog consiste en dar al ordenador un Universo finito
en forma de hechos y reglas, proporcionando los medios para realizar inferencias de un
hecho a otro. A continuación, si se hacen las preguntas adecuadas, Prolog buscará las
respuestas en dicho Universo y las presentará en la pantalla. La programación en Prolog
consiste en:
*  Declarar hechos sobre objetos y sus relaciones
*  Hacer preguntas sobre objetos y sus relaciones
*  Definir reglas sobre objetos y sus relaciones.

Un sistema Prolog está basado en un comprobador de teoremas por resolución
para cláusulas de Horn. La regla de resolución no nos dice que cláusulas elegir ni que
literales unificar dentro de cada cláusula. La estrategia de resolución particular que
utiliza Prolog es una forma de resolución de entrada lineal (árbol de búsqueda
estándar). Para la búsqueda de cláusulas alternativas para satisfacer el mismo objetivo,
Prolog adopta una estrategia de primero hacia abajo (recorrido del árbol en
profundidad). Por todo esto, el orden de las cláusulas (hechos y reglas) de un
determinado procedimiento es importante en Prolog, ya que determina el orden en que
las soluciones serán encontradas, e incluso puede conducir a fallos en el programa


## XAMPP
### ¿Qué es?
XAMPP es un paquete de software libre, que consiste principalmente en el sistema de gestión de bases de datos MySQL, el servidor web Apache y los intérpretes para lenguajes de script PHP y Perl. El programa se distribuye con la licencia GNU y actúa como un servidor web libre, fácil de usar y capaz de interpretar páginas dinámicas.

### ¿Cómo funciona?
El panel de control de XAMPP le da un control completo sobre todos los componentes de XAMPP instalados. Desde aqui podemos iniciar los servicios de Apache, MySQL, FileZilla, Mercury y Tomcat. Cada uno de estos servcios se activan en diferentes puertos para estar a la escucha de peticiones, por ejemplo, para el servidor web de Apache se tiene el puerto 80 por defecto, en el caso de MySQL el puerto 3306.



## Como contribuir 🖇️
Si deseas contribuir o realizar modificaciones en el proyecto, basta con clonar el proyecto y seguir la filosofía del código abierto.

# Autores ✒️
* **José Guadalupe de Jesús Cervera Barbosa** - *Trabajo general* - [JCerver](https://github.com/JCerver)

## Expresiones de Gratitud 🎁
* Agradezco a Jasiel Galván, Pablo Barroso, Armando Díaz y Paul Esparza por la idea de utilizar PHP como entorno grafico para mostrar la base de conocimiento de prolog de una manera más agradable.
* A partir de este proyecto pueden surgir gran cantidades de variaciones a realizar sobre él, esto solo fue la base o plantilla de este proyecto, si tienes alguna idea por favor házmelo saber. 📢

