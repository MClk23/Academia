#Aeternum(Academia) Proyecto
##1. INTRODUCCIÓN
El proyecto Aeternum (Academia) nace por la prestación de servicios a los ciudadanos colombianos de parte de la empresa SENA CDITI Dosquebradas. La institución Sena venía trabajando con un aplicativo elemental hecho en el lenguaje de programación JavaScript para el frontend y Java para el backend,  la mayor parte de su información se trabajaba con Sql Server.
Con el fin de mejorar la agilidad y la actividad manual en sus procesos, la Aeternum (Academia) ha recorrido a la empresa de software como lo es M.AUSTIN.Corp, la cual garantiza unos niveles altos de calidad en sus procesos, entregando siempre a los clientes que adquieren los beneficios de la empresa, los mejores productos, productos que se ajustan a sus expectativas.
Así se ha creado Aeternum(Academia), que le proporcionará al cliente herramientas necesarias y complementarias para desarrollar de manera eficaz los procesos de Registro de Usuarios, docentes, Creación de cursos y demás acciones adicionales dentro del funcionamiento del proyecto Aeternum(Academia)
El actual documento pretende ser un gran medio de apoyo para los siguientes desarrolladores que lleguen a estar relacionados en cualquier fase del proyecto Aeternum(Academia), incluyendo las fases de actualización, mantenimiento y demás fases.



##2. OBJETIVOS
####Objetivo general:
● Desarrollar un formulario de registro que permitirá registrar cursos, instructores y aprendices con sus respectivos.
####Objetivos específicos:
● Crear una página de inicio donde se muestre toda la información de la Academia.
● Modelar tres vistas donde se puedan registrar el curso, el instructor y el aprendiz.
● Crear tres vistas donde se pueda visualizar la lista de cursos, instructores y aprendices que se registraron mediante el formulario.
● Elaborar un manual técnico el cual explique cuál fue el proceso de creación de este proyecto hecho por la empresa M.AUSTIN.Corp.
● Gestionar la información de los cursos, instructores y aprendices, para que sea más fácil acceder a ello, mediante una base de datos.
● Proporcionar información relevante de carácter técnico respecto a entornos de desarrollo y configuraciones especializadas del aplicativo.
● Brindar un conocimientos específicos sobre rutinas, clases, métodos y líneas generales del código fuente del aplicativo




##3. ALCANCE
El sistema fue probado en servidores, y permite que un aspirante nuevo se registre y que este pueda inscribirse a un curso en particular.
En esta fase del proyecto no se ha desarrollado aún un Frontend. Se ha trabajado únicamente en el backend de la aplicación, en una versión no terminada. Los módulos que se han trabajado son  cursos, docentes y estudiantes. Por tanto este manual solo aplica al backend.
Funcionalidades como que un estudiante matriculado pueda inscribirse en más cursos, aún no han sido realizadas en el proyecto. Solo se ha trabajado que,  al momento de inscribir a un estudiante, se pueda inscribir a un solo curso, al curso que desea realizar.
Este documento está dirigido al personal de la empresa de desarrollo o personal autorizado de la empresa M.AUSTIN.Corp. como la empresa cliente SENA que tengan algún rol dentro de la programación, el mantenimiento o la actualización de la aplicación Aeternum(Academia). No está dirigida a usuarios comunes.
También, se prohíbe la difusión de este documento por diferentes medios de comunicación como internet y su uso fuera de la empresa de Desarrollo M.AUSTIN.Corp., y del área de sistemas de Aeternum(Academia).
M.AUSTIN.Corp, se reserva el derecho de producir nuevas versiones de este documento técnico.
Este documento es aplicable a la versión 1.0 del programa desarrollado por la empresa de desarrollo M.AUSTIN.Corp.






##4. USUARIOS
Se debe aclarar que, en esta fase del proyecto, no se han completado los roles de usuario, privilegios administrativos ni tampoco roles administrativos.
De acuerdo al documento de requisitos, los usuarios que tendrá este aplicativo son:
Estudiantes: Son las personas que desean estudiar en la Academia Laravel, lo podrán hacer con su documento de identidad, país de expedición, departamento de expedición, municipio de expedición, nombres y apellidos, fecha, país, ciudad, departamento y municipio de nacimiento, género, estrato. Una vez registrados, pueden realizar la matrícula al programa deseado.
Docentes: Son las personas que aspiran a poder enseñar su área de experiencia, lo podrán hacer con su nombre y apellido, título universitario, edad, fecha de nacimiento, foto de su documento y foto de la persona que aspira ser docente.






##5. HERRAMIENTAS UTILIZADAS EN EL DESARROLLO

####5.1. Visual Studio Code
Es un IDE desarrollado. Se utilizó la versión 1.70.2 cuya descarga se obtuvo de https://code.visualstudio.com/
![](https://github.com/MClk23/Academia/blob/master/public/README/VC.png?raw=true)
 
####5.1.1. Plugins instalados:
● Bootstrap Snippets
 ![](https://github.com/MClk23/Academia/blob/master/public/README/SNIPPETS.png?raw=true)
 
● Laravel extensión Pack: incluye: Laravel Blade, laravel snippets, laravel got view, laravel-go-to-controller.
 ![](https://github.com/MClk23/Academia/blob/master/public/README/EXTENSIONPACK.png?raw=true)
 
 
● Laravel Blade Snippets
 ![](https://github.com/MClk23/Academia/blob/master/public/README/BLADESNIPPETS.png?raw=true)
Permite trabajar de manera más fluida con las plantillas de Blade propias del framework Laravel. da sugerencias y marca errores de sintaxis. Se pueden encontrar dentro del Laravel Extension pack

● Laravel Snippets
 ![](https://github.com/MClk23/Academia/blob/master/public/README/LARAVELSNIPPETS.png?raw=true)
Brinda facilidades para codificar los proyectos con líneas propias de Laravel. Se pueden encontrar dentro del Laravel Extension Pack.

● Laravel-go-to-controller.
Permite ir a un Controlador específico cuando se da Alt clic (o Ctrl clic) sobre una ruta que lo menciona. Se pueden encontrar dentro del Laravel Extension Pack.

● Laravel go to view
 ![](https://github.com/MClk23/Academia/blob/master/public/README/GOTOVIEW.png?raw=true)
 
● Php Intelephense.
 ![](https://github.com/MClk23/Academia/blob/master/public/README/INTEPHELENSE.png?raw=true)
Una poderosa herramienta para trabajar con lenguaje PHP, resalta errores típicos, emite código, entre otras funcionalidades.

● Git
 ![](https://github.com/MClk23/Academia/blob/master/public/README/GITBASH.png?raw=true)
Git es un software de control de versiones diseñado por Linus Torvalds, pensando en la eficiencia, la confiabilidad y compatibilidad del mantenimiento de versiones de aplicaciones cuando estas tienen un gran número de archivos de código fuente.

● GitHub.
 ![](https://github.com/MClk23/Academia/blob/master/public/README/GITHUB.png?raw=true)
GitHub es una forja para alojar proyectos utilizando el sistema de control de versiones Git. Se utiliza principalmente para la creación de código fuente de programas de ordenador.

Framework Laravel
En la instalación se indicó que el ejecutable de php se encuentra en la carpeta de XAMPP, en la ruta: C:\xampp\htdocs\Laravel2341240.






##6. METODOLOGÍA DE PROYECTO
####6.1. Método Cascada
En pocas palabras, la gestión de proyectos en cascada es un proceso secuencial y lineal para la gestión de proyectos. Consiste en varias fases separadas. Ninguna fase empieza hasta que haya concluido la fase anterior, y la finalización de cada fase es definitiva: la gestión en cascada no te permite regresar a una fase previa. La única forma de revisar una fase es volver a empezar desde la fase uno.
 ![](https://github.com/MClk23/Academia/blob/master/public/README/CASCADA.png?raw=true)

El proyecto se divide en 5 fases:
1. Análisis: planificación, análisis y especificación de los requisitos.
2. Diseño: diseño y especificación del sistema.
3. Implementación: programación y pruebas unitarias.
4. Verificación: integración de sistemas, pruebas de sistema y de integración.
5. Mantenimiento: entrega, mantenimiento y mejora.





##7. REQUISITOS TÉCNICOS PARA DESARROLLAR EL SISTEMA

Para el correcto desarrollo del proyecto se usaron 2 Computadores con las siguientes características:
RAM: 64 GB
Disco Duro: 1.166 TB
Procesador: Intel(R)Xeon(R) W-10855M CPU @ 2,80 Ghz (12 CPUs), ~2.8GHz  
Pantalla: Intel(R) UHD Graphics P630
Servidores de prueba: No
Implementación en la nube: No
Ancho banda del internet: Descarga 13.41mps a Subida 26.08mps





##8. REQUISITOS TÉCNICOS PARA LA EJECUCIÓN DEL SISTEMA

La página web con todas sus funcionalidades, se podrá acceder desde cualquier computador que tenga mínimo estas características:
Procesador: Intel pentium y superior
RAM: 2GB o superior
Disco duro: 32GB y superior
Se ha probado que el sistema funciona correctamente en los siguientes navegadores:
Google Chrome en su última versión
Mozilla Firefox
Opera
Microsoft Edge
Brave

Ancho de banda: 5MB






##9. REGLAS DE NEGOCIO
Solo aplica para negocios reales. En el caso de “Academia Laravel”, basado en una situación imaginaria, puede citar aquí leyes colombianas sobre el tratamiento de datos personales y alguna ley o artículo sobre la educación superior.
LEY ESTATUTARIA 1581 DE 2012
TÍTULO I
OBJETO, ÁMBITO DE APLICACIÓN Y DEFINICIONES
Artículo 1°. Objeto. La presente ley tiene por objeto desarrollar el derecho constitucional que tienen todas las personas a conocer, actualizar y rectificar las informaciones que se hayan recogido sobre ellas en bases de datos o archivos, y los demás derechos, libertades y garantías constitucionales a que se refiere el artículo 15 de la Constitución Política; así como el derecho a la información consagrado en el artículo 20 de la misma.

Artículo 2°. Ámbito de aplicación. Los principios y disposiciones contenidas en la presente ley serán aplicables a los datos personales registrados en cualquier base de datos que los haga susceptibles de tratamiento por entidades de naturaleza pública o privada.

La presente ley aplicará al tratamiento de datos personales efectuado en territorio colombiano o cuando al Responsable del Tratamiento o Encargado del Tratamiento no establecido en territorio nacional le sea aplicable la legislación colombiana en virtud de normas y tratados internacionales.

Parágrafo. Los principios sobre protección de datos serán aplicables a todas las bases de datos, incluidas las exceptuadas en el presente artículo, con los límites dispuestos en la presente ley y sin reñir con los datos que tienen características de estar amparados por la reserva legal. En el evento que la normatividad especial que regule las bases de datos exceptuadas prevea principios que tengan en consideración la naturaleza especial de datos, los mismos aplicarán de manera concurrente a los previstos en la presente ley.

Artículo 3°. Definiciones. Para los efectos de la presente ley, se entiende por:

a) Autorización: Consentimiento previo, expreso e informado del Titular para llevar a cabo el Tratamiento de datos personales;
b) Base de Datos: Conjunto organizado de datos personales que sea objeto de Tratamiento;

c) Dato personal: Cualquier información vinculada o que pueda asociarse a una o varias personas naturales determinadas o determinables;

d) Encargado del Tratamiento: Persona natural o jurídica, pública o privada, que por sí misma o en asocio con otros, realice el Tratamiento de datos personales por cuenta del Responsable del Tratamiento;

e) Responsable del Tratamiento: Persona natural o jurídica, pública o privada, que por sí misma o en asocio con otros, decida sobre la base de datos y/o el Tratamiento de los datos;

f) Titular: Persona natural cuyos datos personales sean objeto de Tratamiento;

g) Tratamiento: Cualquier operación o conjunto de operaciones sobre datos personales, tales como la recolección, almacenamiento, uso, circulación o supresión.

LEY 30 DE 1992
ARTÍCULO 1o. La Educación Superior es un proceso permanente que posibilita el desarrollo de las potencialidades del ser humano de una manera integral, se realiza con posterioridad a la educación media o secundaria y tiene por objeto el pleno desarrollo de los alumnos y su formación académica o profesional.

ARTÍCULO 2o. La Educación Superior es un servicio público cultural, inherente a la finalidad social del Estado.

ARTÍCULO 3o. El Estado, de conformidad con la Constitución Política de Colombia y con la presente Ley, garantiza la autonomía universitaria y vela por la calidad del servicio educativo a través del ejercicio de la suprema inspección y vigilancia de la Educación Superior.




##10. DETALLES DE DISTRIBUCIÓN DE CARPETAS Y ARCHIVOS

Se colocan los pantallazos, explicando cada carpeta qué contiene, a qué se refiere cada archivo, se dan detalles de las rutas.
####10.1. Distribución de carpetas en el backend

####10.1.1. Controladores de recursos
 ![](https://github.com/MClk23/Academia/blob/master/public/README/RECURSOS.png?raw=true)
 
Dentro de Http tenemos la carpeta Controllers, donde a su vez tenemos los siguientes controladores que son de recursos:
CursoController.php: Se encarga de manejar toda la lógica para la tabla Cursos del sistema, donde se programan las acciones de crear nuevo curso, editar curso, mostrar curso, subir curso, guardar curso y eliminar curso
DocenteController.php: Se encarga de manejar toda la lógica para la tabla Docentes del sistema, donde se programan las acciones de crear nuevo docente, editar docente, mostrar docente, subir docente, guardar docente y eliminar docente.
StudentController.php: Se encarga de manejar toda la lógica para la tabla Students del sistema, donde se programan las acciones de crear nuevo estudiante, editar estudiante, mostrar estudiante, subir estudiante, guardar estudiante y eliminar estudiante.




####10.1.2. Migraciones
En el proyecto se pueden apreciar las siguientes migraciones, dentro de la ruta database->Migrations:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/MIGRACIONES.png?raw=true)
 
- Create_cursos_table: Esta migración se refiere a la tabla cursos
- Add_imagen_to_cursos: Esta migración se refiere a donde se almacena la imagen subida a la tabla cursos.
- create_docentes_table: Esta migración se refiere a la tabla Docentes
- add_imagen_to_docentes.php: Esta migración se refiere a donde se almacena la imagen subida a la tabla Docentes.
- create_students_table.php: Esta migración se refiere a la tabla Students.
- create_subject_table: Esta migración está se refiere a la tabla Subjects.
- create_countries_table: Esta migración se refiere a la tabla Countries.
- create_states_table.php: Esta migración se refiere a la tabla States.
- create_towns_table.php: Esta migración se refiere a la tabla Towns.
- create_curso_subjects_table.php: Esta migración relaciona las tablas curso y subjects.


####1. 10.1.2.1.
####Seeders
 ![](https://github.com/MClk23/Academia/blob/master/public/README/SEEDERS.png?raw=true)
 
Dentro de la carpeta seeders que está en la carpeta database, encontramos los seeders respectivos del proyecto.
Los seeders sirven para que en el momento que se reinicia la migración de las tablas se llenen automáticamente en la base de datos, mediante la migración de seeders que se hace con el respectivo comando: php artisan migrate --seed

- CountrySeeder.php: Llenar los campos(columnas) en la tabla countries.
- DatabaseSeeder.php: Llama a los seeders que serán migrados y utilizados.
- StateSeeder.php: Llenar los campos(columnas) en la tabla states.
- SubjectSeeder.php: Llenar los campos(columnas) en la tabla subjects.
- TownSeeder.php: Llenar los campos(columnas) en la tabla towns.

####10.1.3. Rutas principales para el proyecto Laravel
 ![](https://github.com/MClk23/Academia/blob/master/public/README/ROUTES.png?raw=true)
 
Dentro del archivo web.php que está en routes, encontramos las rutas principales del proyecto como:
- cursos: esta ruta provee acceso a la tabla Cursos, junto al controlador de cursos llamado CursoController.php.
Docente: esta ruta provee acceso a la tabla Docentes, junto al controlador de docentes llamado DocenteController.php.
student: Esta ruta provee acceso a la tabla Students, junto al controlador de estudiantes llamado StudentController.php.
subject: Esta ruta provee acceso a la tabla subject, con el controlador creado llamado SubjectController.php
Country: Esta ruta provee acceso a la tabla Countries, con el controlador llamado CountryController.php.
State: Esta ruta provee acceso a la tabla States, con el controlador llamado StatesController.php.
town: Esta ruta provee acceso a la tabla Town, con el controlador llamado TownController.php.

 ![](https://github.com/MClk23/Academia/blob/master/public/README/ROUTES2.png?raw=true)




##11. CONFIGURACIÓN DE LA BASE DE DATOS
Para el caso particular se usó MySQL y, específicamente, PhpMyadmin, herramienta contenida en Xampp.
Para poder trabajar en producción con la base de datos, se deben habilitar los servicios de Apache y  Mysql, dando clic en los botones start del control panel, este panel de control está ubicado en la aplicación Xampp control panel, se instala en el vínculo siguiente https://www.apachefriends.org/es/download_success.html
 ![](https://github.com/MClk23/Academia/blob/master/public/README/XAMPP.png?raw=true)
Si algún puerto está ocupado, se hace el respectivo cambio usando el botón Admin.
Los datos de acceso a la base de datos son:
Host: 127.0.0.1
Usuario: root
Clave: 1234555
Nombre de la BD: Academia

Para la correcto configuración del proyecto Laravel y su conexión con la base de datos se agrega la información respectiva en el archivo .env
 ![](https://github.com/MClk23/Academia/blob/master/public/README/DBCONNECTION.png?raw=true)
A través del siguiente panel se pueden hacer configuraciones en la base de datos:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/BASEDEDATOS.png?raw=true)
Se pueden dejar aquí todos los detalles que se consideren importantes para la configuración de la base de datos.

##Detalles de los modelos y migraciones Laravel:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/MIGRATIONS.png?raw=true)
####Detalle xxxx_create_table_students.
La cual generará los siguientes campos: id, tipodoc, numdoc, docident, fecexp, id_expmuni, nombres, priapelli, segapellido, genero, fechanacimiento, id_muni_nac, estrato, id_cursos, TimeStamp. Para detalles de estos campos, favor ver el Anexo xxx_Diccionario de Datos.pdf
 ![](https://github.com/MClk23/Academia/blob/master/public/README/TABLESTUDENTS.png?raw=true)
el modelo respectivo se llama:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/STUDENTPHP.png?raw=true)
####Detalle xxx_create_cursos_table: 
La cual generará los siguientes campos: Id, nombre, Descripción, Duración, TimeStamp. Para detalles de estos campos, favor ver el Anexo xxx_Diccionario de Datos.pdf
 ![](https://github.com/MClk23/Academia/blob/master/public/README/TABLECURSOS.png?raw=true)
el modelo respectivo se llama:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/CURSOS.PHP.png?raw=true)
####Detalle xxx_Add_imagen_to_cursos:
Esta migración se refiere a donde se almacena la imagen subida a la tabla cursos. Para detalles de estos campos, favor ver el Anexo xxx_Diccionario de Datos.pdf
 ![](https://github.com/MClk23/Academia/blob/master/public/README/IMAGENTOCURSOS.png?raw=true)
####Detalle xxx_create_docentes_table: 
La cual generará los siguientes campos: id, nombre, apellido, titulouniv, edad, fecha, imagen, documento, id_curso. Para detalles de estos campos, favor ver el Anexo xxx_Diccionario de Datos.pdf
 ![](https://github.com/MClk23/Academia/blob/master/public/README/TABLEDOCENTES.png?raw=true)
el modelo respectivo se llama:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/DOCENTE.PHP.png?raw=true)


####Detalle xxx_add_imagen_to_docentes.php:
Esta migración se refiere a donde se almacena la imagen subida a la tabla Docentes.
 ![](https://github.com/MClk23/Academia/blob/master/public/README/IMAGENTODOCENTE.png?raw=true)
####Detalle xxx_create_subject_table: 
La cual generará los siguientes campos: id, nombre, inthoraria. Para detalles de estos campos, favor ver el Anexo xxx_Diccionario de Datos.pdf
 ![](https://github.com/MClk23/Academia/blob/master/public/README/TABLESUBJECT.png?raw=true)
el modelo respectivo se llama:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/SUBJECTPHP.png?raw=true)
####Detalle xxx_create_countries_table:
La cual generará los siguientes campos: id, nombre. Para detalles de estos campos, favor ver el Anexo xxx_Diccionario de Datos.pdf
 ![](https://github.com/MClk23/Academia/blob/master/public/README/TABLECOUNTRIES.png?raw=true)
el modelo respectivo se llama:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/COUNTRYPHP.png?raw=true)


####Detalle xxx_create_states_table.php: 
La cual generará los siguientes campos: id, nombre, id_pais. Para detalles de estos campos, favor ver el Anexo xxx_Diccionario de Datos.pdf
 ![](https://github.com/MClk23/Academia/blob/master/public/README/TABLESTATES.png?raw=true)
el modelo respectivo se llama:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/STATESPHP.png?raw=true)
####Detalle xxx_create_towns_table.php:
La cual generará los siguientes campos: id, nombre, id_depa. Para detalles de estos campos, favor ver el Anexo xxx_Diccionario de Datos.pdf
 ![](https://github.com/MClk23/Academia/blob/master/public/README/TABLETOWN.png?raw=true)
el modelo respectivo se llama:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/TOWNPHP.png?raw=true)
####Detalle xxx_create_curso_subjects_table.php: 
La cual generará los siguientes campos: curso_id, subject_id.  Para detalles de estos campos, favor ver el Anexo Diccionario de Datos.pdf
 ![](https://github.com/MClk23/Academia/blob/master/public/README/RELACION.png?raw=true)





##12. DETALLES TÉCNICOS MÓDULOS DEL SISTEMA
###Módulo Estudiantes
Este módulo se ha creado para que se pueda crear un un estudiante, cualquier persona puede registrarse como estudiante, la información aquí suministrada se guardará en la tabla Students de la base de datos ya mencionada. Los campos han sido configurados para que en nombres y apellidos solo acepte letras. El campo para el número de documento debe contener máximo 10 dígitos. El campo donde se tiene que cargar la imagen del curso solo puede subir archivos PDF.
Este módulo conecta con el módulo de cursos, para que al momento de crear el estudiante, se vincule con qué curso va a quedar inscrito.
Al entrar a este módulo desde el navegador se vería así:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/ESTUDIANTEVISTA.png?raw=true)
 
La vista (view) en Laravel que permite renderizar esta vista es create.blade.php, dentro de la carpeta de Views, y dentro de la carpeta de students. Además, existen otras vistas, dentro de la carpeta cursos, relacionadas con este módulo, los cuales permiten realizar el respectivo CRUD, como son:
index.blade.php Vista que provee el siguiente listado de los estudiantes con su respectivo nombre y su documento de identidad en el navegador.

 ![](https://github.com/MClk23/Academia/blob/master/public/README/LISTADOESTUDIANTE.png?raw=true)



####Show.blade.php 
Vista que provee la siguiente información del estudiante como lo es:
Datos de expedición del estudiante: Tipo de documento, Número de documento, País de expedición del Documento, Departamento de expedición del Documento, Municipio de expedición del documento.
Datos de nacimiento del estudiantes: Nombres, Apellido, País de Nacimiento, Departamento de nacimiento y Municipio de Nacimiento
 ![](https://github.com/MClk23/Academia/blob/master/public/README/SHOWESTUDIANTE.png?raw=true)
 
####edit.blade.php:
Vista que provee un formulario con los datos ingresados al momento de crear al estudiante, donde si se requiere se hace una actualización del campo que se desea:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/EDITESTUDIANTE.png?raw=true)


###Modelo curso
Este módulo se ha creado para que se pueda crear un un curso, cualquier persona puede registrar; la información aquí suministrada se guardará en la tabla Cursos de la base de datos ya mencionada. Los campos han sido configurados para que en nombre y descripción solo acepte letras. El campo para la duración del curso debe contener mínimo 2 dígitos. El campo donde se tiene que cargar la imagen del curso solo puede subir archivos JPEG o PNG.
Al entrar a este módulo desde el navegador se vería así:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/VISTACURSO.png?raw=true)
La vista (view) en Laravel que permite renderizar esta vista es create.blade.php, dentro de la carpeta de Views, y dentro de la carpeta de cursos. Además, existen otras vistas, dentro de la carpeta cursos, relacionadas con este módulo, los cuales permiten realizar el respectivo CRUD, como son:

####index.blade.php: 
Vista que provee el siguiente listado de cursos en el navegador con el respectivo nombre del curso y la imagen del curso:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/LISTADOCURSO.png?raw=true)



####show.blade.php:
Vista que provee la siguiente información del curso, como la imagen del curso, la duración y su descripción:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/SHOWCURSO.png?raw=true)
 
####edit:blade.php: 
Vista que provee el siguiente formulario de edición de curso con los datos ingresados al momento de crear el curso:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/EDITCURSO.png?raw=true)
 
###Modelos Docentes:
Este módulo se ha creado para que se pueda crear un un docente, cualquier persona puede registrarse como docente, la información aquí suministrada se guardará en la tabla Docentes de la base de datos ya mencionada. Los campos han sido configurados para que en nombres, apellidos y título universitario solo acepte letras. El campo para la edad debe contener máximo 2  dígitos. El campo donde se tiene que cargar el documento de identidad solo admite archivos PDF y el campo donde se tiene que subir la foto del docente solo admite archivos JPEG o PNG.
Este módulo conecta con el módulo de cursos, para que al momento de crear el docente, se vincule con qué curso va a quedar vinculado.
Al entrar a este módulo desde el navegador se vería así:

 ![](https://github.com/MClk23/Academia/blob/master/public/README/VISTADOCENTE.png?raw=true)
 
La vista (view) en Laravel que permite renderizar esta vista es create.blade.php, dentro de la carpeta de Views, y dentro de la carpeta de docentes. Además, existen otras vistas, dentro de la carpeta cursos, relacionadas con este módulo, los cuales permiten realizar el respectivo CRUD, como son:}

####index.blade.php:
Vista que provee el siguiente listado en el navegador:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/LISTADODOCENTE.png?raw=true)
 
####show.blade.php: 
Vista que provee la siguiente información del docente|:
nombre, apellidos, edad, título universitario y documento de identidad.
 ![](https://github.com/MClk23/Academia/blob/master/public/README/SHOWDOCENTE.png?raw=true)

####edit.blade.php: 
Vista que provee el siguiente formulario de edición de docente:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/EDITDOCENTE.png?raw=true)





##13. MODELO RELACIONAL BD DEL SISTEMA
La base de datos para este sistema, como ya se informó se llama Aeternum(Academia) y el modelo es el siguiente:
 ![](https://github.com/MClk23/Academia/blob/master/public/README/MODELORELACIONAL.png?raw=true)





##14. DICCIONARIO DE DATOS
Se anexa documento Diccionario_Datos_Aeternum(Academia).pdf, anexo 1.





##15. CLASES, LIBRERÍAS Y MÉTODOS UTILIZADOS

####15.1. Clases utilizadas
  No se usaron clases especiales en este proyecto, salvo las que trae por default el framework:
####15.1.1. Clase No aplica

####15.2. Métodos utilizados:
Para este proyecto en la mayoría de controladores se utilizaron los siguientes métodos:
● Método index: Que lanza un listado de todos los registros de la tabla que se está trabajando.
● Método create: Se  lanza un formulario para crear el registro de la tabla que se está trabajando.
● Método store: Método que almacena los datos.
● Método show: Que muestra la información de un registro en específico de la tabla que se está trabajando
● Método update: Método que espera un array con los valores para poder actualizar los datos entregados.

