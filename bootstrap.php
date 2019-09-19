<?php

/**
 *
 * Стандарт построения загрузчита в системе.
 * @read https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
*/
/**
 * @param string $className
 * @return void
*/
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    $path = __DIR__ . DIRECTORY_SEPARATOR . $fileName;
    if(is_file($path))
        require $path;
}
spl_autoload_register('autoload');
