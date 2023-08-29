## TEST

### Ejercicio de entrevista técnica

#### Version 08.2023

### Instalación

1. Clonar Repo

2. Crear una rama que desprenda de `main` con el nombre de la persona, ej: `jhon-doe`

3. Renombrar el arhivo `.env.example` por `.env` y configurar los datos de conexion a base de datos y otras variables necesarias.

4. Instalar los paquetes de PHP Composer.

5. Instalar los paquetes de NodeJs

### Recursos

**Development**

En la carpeta `/resources/` es donde están los `css` y `js` para este entorno.

Siempre luego de cada modificación se deberá ejecutar las tareas de `npm` desde la linea de comandos:

- `npm run dev` para modificaciones en `localhost` o `demo`

Para la incorporación de `plugins`, `js` o `css` hay que incorporarlos en el archivo `webpack.mix.js`

### Tareas

1. Revisar en la vista principal, que está faltando una variable llamada `$TitleForm`, la cual debe tener el contenido `Lorem ipsum dolor`

2. Desarrollar un código en vanilla javascript para que envíe la información por ajax al controller. Deseable utilizar `fetch` y el método `post`

3. Crear una función en el controller `Frontend` que permita recibir la información del formulario, para luego:

    a. utilizando la función `form_validation` de Codeigniter, validar los campos del formulario para que no se envíe vacío, el campo `email` sea un correo electrónico válido en su sintaxis y el campo `celular` sólo permita números

    b. crear una tabla en la base de datos `test_entrevista` que se encuentra en el archivo `base.sql` para persistir los campos del formulario de contacto; y también agregar la fecha y hora en el cual el formulario fue enviado.

💡 En lo posible realizar un commit por cada paso de la tarea. Una vez finalizado todo el ejercicio, pushear la rama correspondiente.
