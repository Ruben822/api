<h1>Comandos de despliegue e informacion .env</h1>
<p>Una vez clonado el repositorio se debe de crear una base de datos con nombre <b>adoptame</b>. Ya estando creada procedemos a ejecutar los siguientes comandos </p>
<ul>
    <li>php artisan migrate</li>
    <li>php artisan db:seed</li>
    <li>php artisan serve</li>
</ul>
<p>Al ejecutar el ultimo comando nos arrojara un puerto que abriremos en el navegador seguido de <b>/api/mascotas </b> que es la ruta inicial del proyecto.
Ejemplo: <b>http://127.0.0.1:8000/api/mascotas</b>
</p>

<h1>Documentacion</h1>
<h2>Navegacion</h2>
<p>
En la vista inicial se trae la lista de mascotas y damos las opciones para cada uno de los registros (editar-borrar). Tambien damos la opcion de crear una mascota. Tambien esta la opcion de listar todas las mascotas borradas gracias al <b>softdelete</b><br>
Esta la opcion <b>Instituciones</b>, que tiene brinda las mismas opciones de la vista inicial.
</p>
<h2>Registro de Mascotas e Instituciones</h2>
<p>
Para registrar una mascota o una institucion se deberan llenar los campos requiredos en el planteamiento del proyecto, en caso de que no se cumpla por lo requerido de alguno de los campos estos se vaciaran y no se registrara la mascota o institucion. En el caso del campo <b>correo</b> que se requiere en el registro de la institucion se debe tener en cuenta que no se podra repetir un correo en dos instituciones distintas ni aunque una de ellas este borrada
</p>
<h2>Actualizacion de Mascotas e Instituciones</h2>
<p>
Para actualizar es un proceso similar al de registro. Se tendra en cuenta las mismas reglas de validacion, se manejara de la misma manera los campos requeridos.Esto aplica que el campo <b>correo</b> en el registro de una institucion sera igualmente validado.
</p>
<h2>Borrado de Mascotas e Instituciones</h2>
<p>
Al momento de "borrar" un registro se aplica el softdelete, por lo cual no se perdera ningun registro y al registro "borrado" se le agregara una fecha de en la cual se habria borrado el registro. de esta manera se manejara el listado de registros
</p>
