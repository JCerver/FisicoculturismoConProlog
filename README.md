# Sistema experto en fisicoculturismo hecho con prolog 

## Descripción
***
El sitio web cuenta con 3 categorias principales en cuestion de informacion, cada categoria esta divida en los siguientes topicos:
*    Selección de ejercicios.
*    Categoria muscular.
*    Tipos de entrenamiento.

Al seleccionar alguna categoria se redirecciona al usuario a la pagina solicitada en donde puede consultar informacion a traves de un buscador sobre la categoria seleccionada. La pagina captura la informacion ingresada por el usuario y a traves de una sentencia coloca dicha informacion para ser enviada a prolog y sobre un conjunto de hechos establecidos se puedan realizar una serie de preguntas. Prolog busca automáticamente en la base de datos si existe un hecho que se puede unificar (es decir, tiene el mismo nombre de predicado, el mismo número de argumentos- o aridad- y cada uno de los argumentos tiene el mismo nombre, uno a uno) con el hecho que aparece en la pregunta. PROLOG contestará “SI” si encuentra ese hecho y “NO” si no lo encuentra. Para obtener la o las respuestas, PROLOG recorre la base de datos hasta encontrar el primer hecho que coincide con el nombre de la relación y su aridad y con los argumentos que no son variables

## Construido con 🛠️

* HMTL5.
* PHP.
* CSS.
* Framework Bootstrap.
* SWI-Prolog.


# Pre-requisitos  ⚙️
## Programas necesarios📋
*    Servidor web (el paruqte de software libre XAMPP o WAMPSERVER).
*    Un software de control de versiones (en este caso GITHUB).
*    SWI-Prolog.

### Instalación de servidor web

### Instalación de GIT

### Instalación de SWI-Prolog


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

### 3. Abrir la pagina de inicio en nuestro navegador web


### 4. Comenzar a realizar consultas





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

Si deseas contribuir o realizar modificaciones en el proyecto, basta con clonar el proyecto y seguir la filosofia del codigo abierto.

# Autores ✒️
* **José Guadalupe de Jesús Cervera Barbosa** - *Trabajo general* - [JCerver](https://github.com/JCerver)

## Expresiones de Gratitud 🎁
* Agradeszco a Jasiel Galvan, Pablo Barrroso, Armando Diaz y Paul Esparza por la idea de utilizar PHP como entorno grafico para mostrar la base de conocimiento de prolog de una manera mas agradable.
* A partir de este proyecto pueden surgir gran cantidades de variaciones a realizar sobre el, esto solo fue la base o plantilla de este proyecto, si tienes alguna idea por favor hazmelo saber.📢

