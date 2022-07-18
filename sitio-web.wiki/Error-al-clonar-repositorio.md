# github/git Checkout Returns 'error: invalid path' on Windows
### Windows-10: Error al ejecutar algunas herramientas del sistema.md

Este error es debido a la utilización de caracteres no válidos en el nombre de algún/algunos archivos. El nombre de un archivo no puede contener ninguno de los siguientes caracteres:   \ / : * ? " < > |

### Al clonar la zona Wiki de un repositorio es muy habitual que pueda ocurrir esto, porque no existen archivos en sí, sino páginas con un título.
Este título es el que Github convierte en archivos al realizar el "git clone" y donde puede surgir el error.

Por ejemplo: Si tenemos una página en nuestra zona wiki denominada; **_Windows 10: cómo hacer un backup?_** hab´ra dos errores y "git clone" no se ejecutará bien.

El primero los dos puntos (:) y el segundo la interrogación (?)

Conociendo esto, tenemos que ser imaginativos a la hora de titular nuestras páginas de la zona Wiki.