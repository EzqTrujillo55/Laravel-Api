Hola muchachos, aquí está el api con Laravel hasta la sesión número 8.

Para usarlo deben clonarse el repositorio en su pc o descargarlo como zip.

Para clonarlo:
1. Deben dirigirse hacia cualquier directorio de su pc ya sea con cmd o cualquier otra consola (recomiendo descargar git bash)
    Una vez dentro del directorio corren el comando git clone https://github.com/EzqTrujillo55/Laravel-Api.git
    
2. Una vez clonado el proyecto ingresamos a la raíz del mismo y corremos composer install, eso instalará todas las dependencias necesarias para que el proyecto funcione en su máquina. 

3. Además de eso deben configurar el archivo .env con las credenciales y la base de datos previamente creada en phpmyadmin o workbench donde ustedes deseen. 

4. Una vez seteado eso necestan correr la migración para que su base de datos se llene con las tablas del proyecto
    php artisan migrate
   
5. Finalmente corren los seeders para llenar las tablas con datos de prueba
   php artisan db:seed --class=NombreSeeder
   Los seeder los encuentran en database/seeds/
   
   
Eso sería todo, saludos ! 
