#!/usr/bin/env php
<?php
use SwaggerGen\GenerateModels;
use SwaggerGen\GenerateRequests;

require __DIR__.'/vendor/autoload.php';

$namespace = "SturentsLib\\Api";
$dir = "src/";
$yaml = __DIR__.'/swagger/api.yml';
$uri = "/api";

shell_exec("find ./{$dir}/Models -type f -delete");
shell_exec("find ./{$dir}/Requests -type f -delete");

$generate_models = new GenerateModels($namespace);
$generate_models->runFull($yaml, $dir);

echo "Generated ".count($generator->classes)." files in $dir\n";

$generate_requests = new GenerateRequests($namespace, $uri);
$generate_requests->runFull($yaml, $dir);

echo "Generated ".count($generator->classes)." files in $dir\n";
