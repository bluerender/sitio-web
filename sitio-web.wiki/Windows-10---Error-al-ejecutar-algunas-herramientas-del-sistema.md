A raiz de problemas de conexión de la red, al ejecutar el solucionador de problemas puede aparece la advertencia, que realmente es un error, siguiente:

![image](https://user-images.githubusercontent.com/108327516/178203239-4aba1c56-7501-4528-8de9-ba9408afc8f3.png)

Esto, **casi siempre es debido a archivos dañados del sistema**. 
## Procedimiento

Para solucionar esto, hay que realizar la siguiente secuencia de comandos sobre una ventana **CMD** que habremos abierto en modo **administrador**:

1. `Ejecutamos el comando: C:\sfc /scannow`

1. `Seguimos con: C:\dism.exe /online /cleanup-image /scanhealth`

1. `Finalizamos con: C:\dism.exe /online /cleanup-image /Restorehealth`

_(Tardará unos minutos en completarse estos comandos, unos más que otros)_

***
## Explicación de los comandos.
***
_**sfc /scannow**_
***
El comando _**sfc /scannow**_ examinará todos los archivos de sistema protegidos y remplaza los archivos dañados con una copia en caché ubicada en una carpeta comprimida en %WinDir%\System32\dllcache

El marcador de posición %WinDir% representa la carpeta del sistema operativo Windows.

Al finalizar el proceso puede mostrarse el siguiente mensaje:

Se completó la comprobación de 100%.

Protección de recursos de Windows encontró archivos dañados y los reparó correctamente.
Para las reparaciones en línea, los detalles se encuentran en el archivo de registro de CBS ubicado en
%windir%\Logs\CBS\CBS.log. Por ejemplo, %WinDir%\Logs\CBS\CBS.log. Para las reparaciones
sin conexión, los detalles se encuentran en el archivo de registro que proporciona la marca /OFFLOGFILE.
***
DISM.exe 
***
El comprobador de archivos DISM en Windows 10 cuenta con tres parámetros para poder reparar una imagen entre las que se incluyen «CheckHealth», «ScanHealth» y «RestoreHealth», ejecutándose en este mismo orden. Estos comandos permiten capturar y aplicar imágenes de Windows.

[Podemos encontrar información detallada de este comando y de sus parámetros siguiento este enlace](https://www.softzone.es/windows/como-se-hace/comandos-solucionar-problemas-windows-10/)