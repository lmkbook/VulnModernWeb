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

# **Configuración para connect.py**

Primero editaremos el archivo `connect.py` para ello nos dirigiremos al directorio 

```
VulnModernWeb/
  ├── database
    ├── connect.php
    ├── connection.php

```
