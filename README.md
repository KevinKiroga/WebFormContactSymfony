# WebFormContactSymfony
## Pasos para ejecutar el proyecto
1. Ubicar en que ruta del directorio quieres clonar el repositorio.
```cmd
cd ruta_directorio
```
2. Clonar el repositorio con el siguiente comando:
```bash
git clone https://github.com/KevinKiroga/WebFormContactSymfony.git
```
3. Abrir el proyecto con el siguiente comando (Si tienes el editor de texto VsCode se abre el proyecto en Visual Studio Code):
```cmd
code .
```
4. Ejecutar el siguiente comando al repositorio que se clono para instalar las dependencias del proyecto con Composer:
```bash
composer install
```

Después de completar los pasos anteriores, te recomendamos que consultes la documentación oficial de Symfony para  utilizar las funcionalidades relacionadas con bases de datos y el ORM Doctrine. Puedes encontrar información detallada en el siguiente enlace: Documentación de Symfony sobre Bases de Datos y el ORM Doctrine en el siguiente link: https://symfony.com/doc/current/doctrine.html.

5. Abrir la terminal y ejecutar los siguientes comando:
Instala el paquete ORM de Symfony
```bash
 composer require symfony/orm-pack
```
Instala el paquete Maker Bundle de Symfony para crear código
```bash
 composer require --dev symfony/maker-bundle
```

Crea la base de datos
```bash
 php bin/console doctrine:database:create
```

Ejecuta las migraciones de Doctrine
```bash
 php bin/console doctrine:migrations:migrate
```

6. Por ultimo ejecutar o iniciar el proyecto de symfony con el siguiente comando:
```bash
 symfony server:start
```

