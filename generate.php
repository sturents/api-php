#!/usr/bin/env php
<?php
use SwaggerGen\GenerateModels;
use SwaggerGen\GenerateRequests;

require __DIR__.'/vendor/autoload.php';

$namespace = "SturentsLib\\Api";
$dir = "src/";
$yaml = __DIR__.'/swagger/api.yml';
$uri = "https://sturents.com/api";

shell_exec("find ./{$dir}/Models -type f -delete");
shell_exec("find ./{$dir}/Requests -type f -delete");

$generator = new GenerateModels($namespace);
$generator->generate($yaml);
$generator->saveClasses($dir);
$generator->dumpParentClass($dir);

echo "Generated ".count($generator->classes)." files in $dir\n";

$generator = new GenerateRequests($namespace, $uri);
$generator->generate($yaml);
$generator->saveClasses($dir);
$generator->dumpParentClass($dir);

echo "Generated ".count($generator->classes)." files in $dir\n";
