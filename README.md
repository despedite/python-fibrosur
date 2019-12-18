<p align="center">
    <img src="https://raw.githubusercontent.com/despediteerik/python-fibrosur/master/assets/logo.jpg" width="250">
</p>

<h3 align="center">Fibrosur Arg</h3>

Una aplicación que introduce los datos de una base de datos MySQL en tablas (Alumnos, Profesores, Preceptores y Usuarios) para fácil visualización, con log-ins jerárquicos: Usuarios, con permisos de sólo lectura y menos entradas para ver, Administradores, con lectura y escritura a Alumnos, Profesores y Preceptores, y Super Usuarios, con permisos de lectura y escritura para Usuarios. Editá, buscá, modificá y eliminá entradas en unos clicks; haciendo guardar datos escolares más fácil. *Originalmente creado en el transcurso de 2019, para Diseño Web (EEST N°4).*

[Descargar código fuente](https://github.com/despediteerik/ADE/archive/master.zip)

![](https://raw.githubusercontent.com/despediteerik/ADE/master/alumnos.png)

# Instalación
Para instalar ADE en tu computadora:

- [Descarga el código fuente](https://github.com/despediteerik/ADE/archive/master.zip).
- Activa Apache y MySQL en [XAMPP](https://www.apachefriends.org/es/index.html).
- Dirigite a localhost/phpmyadmin en tu navegador de elección.
- Crea una base de datos con el nombre 'ade'.
- Haz clic en el botón de Importar. Importá el archivo ade.sql proporcionado.
- Copiá los contenidos de la carpeta, y pegalos en el directorio de instalación de XAMPP/htdocs/ade.
- Entrá a localhost/ade en un navegador.

# Permisos de usuario
Hay tres niveles de usuario. Si no querés pasar por la molestia de crear cada tipo de usuario individualmente, también hay usuarios creados por defecto.
- *Usuario regular*: Es el que se crea cuando te registrás en ADE de forma tradicional. Sólo puede leer las tablas de Profesor, Alumno y Preceptor. No puede leer la tabla de Usuario, y las tablas tienen menos información (por ejemplo, no podes ver el email de los Preceptores). **Nombre de usuario:** user@ade.com **Contraseña:** user
- *Administrador:* Este se tiene que pedir por un formulario en Formularios de Google. El usuario administrador tiene permisos de escritura y lectura en las tablas de Preceptor, Alumno y Profesor. No puede leer la tabla de Usuario. Este usuario puede modificar, eliminar, y agregar entradas; así que se recomienda que sólo se otorgue este nivel a staff del colegio autorizado. **Nombre de usuario:** admin@ade.com **Contraseña:** admin
- *Super-usuario:* El usuario que tiene todos los permisos. Tiene acceso de escritura y lectura a todas las tablas (Profesor, Preceptor, Alumno, Usuario). Se diferencia del Administrador porque puede, en la tabla de Usuarios, cambiar los permisos que tenga un usuario. Sólo otorguelé este permiso al administrador de red, ú otra persona que se encargue de cambiar los permisos del resto de los usuarios. **Nombre de usuario:** root@ade.com **Contraseña:** root

# Créditos y licencia
ADE proporciona una API para que cualquiera pueda usar los datos en la base de datos del sistema, pero no es soportada oficialmente. La API que se crea a partir de una base de datos en MySQL es posible gracias a [Automatic-API-REST](https://github.com/GeekyTheory/Automatic-API-REST).

ADE está bajo la licencia [GNU - General Public License 3.0](https://github.com/despediteerik/ADE/blob/master/LICENSE). Podés usar ADE de forma comercial o privada, y permite la distribución y modificación; mientras que compartas el código fuente, documentes los cambios  y uses la misma licencia.

# Proyectos relacionados
[APIHook cumple una tarea similar](https://github.com/despediteerik/trinomio-api), tomando los datos desde una API en vez de una base de datos. Por otro lado, está escrita exclusivamente en Javascript, y no tiene sistemas de inicio de sesión y registro.
