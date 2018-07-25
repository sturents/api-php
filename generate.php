<?php

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Property;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Yaml\Yaml;

require __DIR__.'/vendor/autoload.php';

$namespace_name = 'SturentsLib\\Api\\Models';
$dir = 'src/ModelsTemp';

$api = Yaml::parseFile(__DIR__.'/swagger/api.yml');

if (!file_exists($dir)){
	mkdir($dir, 0775, true);
}

$converter = new CamelCaseToSnakeCaseNameConverter;
$namespace = new \Nette\PhpGenerator\PhpNamespace($namespace_name);
foreach ($api['definitions'] as $class_name => $class_details){
	$class = new ClassType($class_name, $namespace);

	if (!empty($class_details['description'])){
		$class->addComment($class_details['description']);
	}

	foreach ($class_details['properties'] as $property_name => $property_details){
		/**
		 * @var Property $property
		 */
		$property = $class->addProperty($property_name)->setVisibility('private');
		if (!empty($property_details['description'])){
			$property->addComment($property_details['description']);
		}

		$property->addComment('@var '.$property_details['type']);

		$capital_case = $converter->denormalize($property_name);#
		$capital_case = ucfirst($capital_case);
		$class->addMethod('get'.$capital_case)->setBody("return \$this->$property_name;");
		$class->addMethod('set'.$capital_case)->setBody("\$this->$property_name = \$$property_name;")->addParameter($property_name);
	}

	$php_file = (string) $class;
	$php_file = "<?php\nnamespace $namespace_name;\n\n$php_file\n";
	file_put_contents("{$dir}/{$class_name}.php", $php_file);
}
