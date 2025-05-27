# **⚙️ Configuración de las Bases de Datos**

**📝 Editar archivos de base de datos**

Para que este aplicativo funcione correctamente, será necesario configurar manualmente algunos archivos relacionados con las bases de datos.

Debes editar los siguientes 3 archivos para ajustar la conexión, credenciales u otros parámetros según tu entorno:

  * connect.py [`connect`](../../python/connect.py)

  * connection.php [`connection`](../../database/connection.php)

  * connect.php [`connect`](../../database/connect.php)

**📁 Estos archivos se encuentran en la carpeta correspondiente dentro del proyecto.**

Se recomienda consultar el siguiente archivo, ya que contiene información específica sobre las bases de datos que se van a utilizar.
También se detallan las diferencias entre cada una y su propósito dentro del sistema.([`explicacion`](../../docs/databases/explicacionbd.md)).

Asegúrate de revisar y adaptar cada archivo según los nombres de base de datos, usuarios, contraseñas y configuraciones necesarias.

# **Configuración para connect.py y connection.php**

Primero editaremos el archivo `connect.php` o `connection.php` para ello nos dirigiremos al directorio 

```
VulnModernWeb/
└── database/
    ├── connect.php
    └── connection.php
```

⚠️ Nota: Si no estás utilizando XAMPP o estás trabajando en un servidor local aislado, 
deberás editar el archivo manualmente de acuerdo a la configuración específica de tu entorno

🔧 Configuración de Archivos PHP de Conexión

Linux:

```bash
nano /opt/lampp/htdocs/VulnModernWeb/database/connect.php
```

```bash
nano /opt/lampp/htdocs/VulnModernWeb/database/connection.php
```
Tanto connect.php como connection.php deben configurarse de la misma forma para establecer correctamente la conexión con la base de datos.

En ambos archivos, asegúrate de editar las siguientes variables y reemplazarlas con tus credenciales:

```
private $host = "localhost";     // Cambiar si usas otro host
private $user = "root";          // Tu usuario de MySQL
private $password = "";          // Tu contraseña de MySQL
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
