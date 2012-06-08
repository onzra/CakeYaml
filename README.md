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

Licensing
========
ONZRA: Enterprise Development
Copyright 2012, ONZRA LLC (http://www.ONZRA.com)

Licensed under The MIT License
Redistributions of files must retain the above copyright notice.
