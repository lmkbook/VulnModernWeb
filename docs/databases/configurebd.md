# **⚙️ Configuración de las Bases de Datos**

**📝 Editar archivos de base de datos**

Para que este aplicativo funcione correctamente, será necesario configurar manualmente algunos archivos relacionados con las bases de datos.

Debes editar los siguientes 2 archivos para ajustar la conexión, credenciales u otros parámetros según tu entorno:

  * connect.py [`connect`](../../python/connect.py)

  * config.php [`config`](../../database/config.php)


**📁 Estos archivos se encuentran en la carpeta correspondiente dentro del proyecto.**

Se recomienda consultar el siguiente archivo, ya que contiene información específica sobre las tablas de la base de datos que se va a utilizar.
También se detallan las diferencias entre cada una y su propósito dentro del sistema.([`explicacion`](../../docs/databases/explicacionbd.md)).

Asegúrate de revisar y adaptar cada archivo según los nombres de base de datos, usuarios, contraseñas y configuraciones necesarias.

# **Configuración para config.php**

Primero editaremos el archivo `connect.php` o `connection.php` para ello nos dirigiremos al directorio 

```
VulnModernWeb/
└── database/
    ├── config.php
    ├── connect.php
    └── connection.php
```

⚠️ Nota: Si no estás utilizando XAMPP o estás trabajando en un servidor local aislado, 
deberás editar el archivo manualmente de acuerdo a la configuración específica de tu entorno

🔧 Configuración de Archivos PHP de Conexión

Linux:

```bash
nano /opt/lampp/htdocs/VulnModernWeb/database/config.php
```

Tanto `connect.php` como `connection.php` deben configurarse de la misma forma para establecer correctamente la conexión con la base de datos.

En ambos archivos, asegúrate de editar las siguientes variables y reemplazarlas con tus credenciales:

```
$GLOBALS['host'] = '127.0.0.1'; // Cambiar si usuas otro Host MySQL

$GLOBALS['user'] = 'root'; // Tu usuario de MySQL

$GLOBALS['password'] = ''; // Tu contraseña de MySQL

$GLOBALS['bd'] = 'VMW'; // Name base de datos          
```
**📄 ¿Diferencias entre las bases de datos?**

Para más información sobre las diferencias entre las bases de datos utilizadas en este proyecto, consulta la documentación en:
[`diferencias`](../../docs/databases/explicacionbd.md)

# **Configuracion de connec.py**

 Luego editaremos el archivo `connect.py`  para ello nos dirigiremos al directorio 

```
VulnModernWeb/
└── python/
    ├── requeriments.txt
    ├── app.py
    └── connect.py
```

Linux:

**🔎 Ubicación de las credenciales en connect.py**

Para editar las credenciales de conexión, abre el archivo connect.py:

```bash
nano /opt/lampp/htdocs/VulnModernWeb/python/connect.py
```

Dentro del archivo, encontrarás una línea como esta:

```
cxn = mysql.connector.connect(user='root', password='', host='', database='VMW')
```

**✏️ Edición de Parámetros en connect.py**

Deberás modificar los valores de user, password y host según los datos de tu entorno local o de desarrollo:

```
cxn = mysql.connector.connect(user='root', password='', host='127.0.0.1', database='VMW')
```
💡 Asegúrate de que estos datos coincidan con la configuración de tu entorno local (por ejemplo, XAMPP, MySQL local o servidor externo).

# **🗄️ Creación de la Base de Datos**

Para completar la configuración del proyecto, es necesario crear la base de datos que utilizará la aplicación.

Puedes hacerlo utilizando phpMyAdmin (si estás trabajando con XAMPP) o desde la terminal de MySQL.

**✅ Opción 1: phpMyAdmin**

   * Accede a http://localhost/phpmyadmin

   * Haz clic en "Nueva"

   * Asigna el nombre: VMW

   * (Opcional) Selecciona el cotejamiento: utf8_general_ci

   * Haz clic en "Crear"

**⚠️ Nota:**

Si no estás utilizando un entorno local como XAMPP, accede al phpMyAdmin de tu servidor aislado (ya sea en un servidor local, virtual o en la nube) y crea la base de datos de la misma forma, asegurándote de que el nombre coincida con el configurado en la aplicación (VMW por defecto).

**✅ Opción 2: Terminal MySQL**

**Si estás usando XAMPP en Linux:**

Abre una terminal y ejecuta:

```bash
/opt/lampp/bin/mysql -u root -h 127.0.0.1 -p
```
Este comando utiliza el cliente MySQL incluido en XAMPP.

**Si estás usando un servidor MySQL independiente (no XAMPP):**

Ejecuta el siguiente comando desde cualquier terminal donde tengas instalado MySQL:
Si esta usuando un servidor mysql ejecute

```bash
mysql -u root -h 127.0.0.1 -p
```

Cambia 127.0.0.1 por la IP o nombre de host de tu servidor si no estás trabajando en local.

Una vez que hayas accedido correctamente al cliente de MySQL, ya sea desde XAMPP o desde un servidor externo, ejecuta el siguiente comando para crear la base de datos:

```bash
CREATE DATABASE IF NOT EXISTS VMW;
```
📌 Asegúrate de que el nombre VMW coincida con el que usaste en los archivos de configuración ([`connect.py`](../../python/connect.py), [`connect.php`](../../database/connect.php) y [`connection.php`](../../database/connection.php).

**🔔 RECOMENDACIÓN**

Una vez terminada la configuración de la base de datos, para que la aplicación funcione correctamente debes iniciar los servidores de **Flask** y **PHP**.

Para más información detallada sobre cómo hacerlo, consulta la sección correspondiente [`Iniciar Servidores`](../../docs/Iniciar_Servidores/start.md) en la documentación, donde se explica paso a paso.
