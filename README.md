# ZipCodes Api resource.
## Here is the documentation.

1. Descargué el csv de zipcodes de la bd de datos postales de México.
2. Determiné si era mejor leer el archivo directo o utilizar una DB, me incliné por la DB ya que los indices me ayudarían con la velocidad.
3. Utilicé la api.php de laravel ya que despacha los headers de forma más ligera.
4. La BD la rellené con seeders de laravel leyendo el archivo csv ubicado en la carpeta public de laravel.
5. Se debe correr la migración correspondiente para crear la tabla necesaria.
6. La DB preferida es PostgreSQL