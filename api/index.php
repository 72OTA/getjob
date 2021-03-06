<?php

/*
 * Este Archivo es parte del Framework Ocrend Moldeado Especialmente para esta StartUp(GetJob)
 *
 * (C) <f.andradevalenzuela@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

# Definir ruta de acceso permitida
define('API_INTERFACE', '../');

# Cargadores principales
require '../Ocrend/vendor/autoload.php';
require '../Ocrend/autoload.php';
require '../Ocrend/Kernel/Config/Start.php';

# Preparar la API
$app = new Silex\Application();
unset($app['exception_handler']);

# Verbos HTTP
require 'http/get.php';
require 'http/post.php';
require 'http/put.php';
require 'http/delete.php';

# Arrancar
$app->run();
