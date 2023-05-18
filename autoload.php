<?php
namespace Autoload;
class Autoload
{
    static string $rootNamespace = 'itea\vehicle';
    static string $rootProject = 'vehicle';
    static public function loading($className)
    {
        $modifyClassName = str_replace(self::$rootNamespace, self::$rootProject, $className);
        $segments = explode("\\", $modifyClassName);
        $fileName = implode("/",$segments);
        $fullFileName = __DIR__."/".$fileName.".php";
        if (file_exists($fullFileName)) {
            require_once $fullFileName;
        }
    }
}