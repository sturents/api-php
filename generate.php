#!/usr/bin/env php
<?php
use SwaggerGen\GenerateModels;

require __DIR__.'/vendor/autoload.php';

$root_namespace = 'Models';
$namespace = "SturentsLib\\Api\\$root_namespace";
$dir = "src/$root_namespace";

$generator = new GenerateModels($namespace);
$generator->generate(__DIR__.'/swagger/api.yml');
$generator->saveClasses($dir);

echo "Generated ".count($generator->classes)." files in $dir\n";
