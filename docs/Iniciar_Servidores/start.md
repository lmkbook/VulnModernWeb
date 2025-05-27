# **🚀 Iniciar Servidores Flask y PHP**

Esta sección es un breve recordatorio, ya que en la sección de instalación se explica detalladamente cómo iniciar el servidor Flask.
Asimismo, se asume que ya estás familiarizado con cómo iniciar el servidor PHP utilizando XAMPP o desde tu entorno local.

**🟢 Iniciar el Servidor Flask**

Si estás utilizando XAMPP y ya tienes el entorno virtual configurado correctamente, sigue estos pasos para iniciar el servidor Flask:

1. Abre una terminal y dirígete al directorio python/:

```bash
cd /opt/lampp/htdocs/VulnModernWeb/python
```
2. ▶️ Procede a iniciar el servidor

Después de activar el entorno virtual y situarte en el directorio correcto, ejecuta el siguiente comando para iniciar el servidor Flask:

```bash
flask --app app run --debug
```

**🟠 Iniciar el Servidor PHP con XAMPP**

Para iniciar el servidor PHP usando XAMPP, abra la terminal y ejecute:

```bash
sudo /opt/lampp/./xampp start
```

**Nota:**

De esta manera, el entorno ya estará listo para utilizar la aplicación de forma efectiva.

**✅ Ya puede acceder a:** 
```
http://127.0.0.1/VulnModernWeb/view/
```

# **⚠️ Advertencia**

Si estás utilizando un servidor aislado o remoto, es posible que debas realizar configuraciones adicionales, como:

  * Habilitar puertos en el firewall

  * Ajustar reglas de red o seguridad

  * Configurar el entorno para permitir conexiones externas

Esto es necesario para asegurar que la aplicación funcione correctamente fuera de un entorno local.
