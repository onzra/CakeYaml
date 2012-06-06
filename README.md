CakeYaml
========

CakePHP plugin to use the Symfony Yaml component

Usage
========

<?php

CakePlugin::load('Yaml');

App::import('Lib', 'Yaml.Yaml');

use Symfony\Component\Yaml\Yaml;

$data = Yaml::parse($yaml_file);