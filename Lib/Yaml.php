<?php

//Import all requires Symfony YAML component files
App::import('Vendor', 'Yaml.Vendor.Yaml', array('file' => 'Yaml/Yaml.php'));
App::import('Vendor', 'Yaml.Vendor.Parser', array('file' => 'Yaml/Parser.php'));
App::import('Vendor', 'Yaml.Vendor.Inline', array('file' => 'Yaml/Inline.php'));
App::import('Vendor', 'Yaml.Vendor.Dumper', array('file' => 'Yaml/Dumper.php'));
App::import('Vendor', 'Yaml.Vendor.Escaper', array('file' => 'Yaml/Escaper.php'));
App::import('Vendor', 'Yaml.Vendor.ExceptionInterface', array('file' => 'Yaml/Exception/ExceptionInterface.php'));
App::import('Vendor', 'Yaml.Vendor.DumpException', array('file' => 'Yaml/Exception/DumpException.php'));
App::import('Vendor', 'Yaml.Vendor.ParseException', array('file' => 'Yaml/Exception/ParseException.php'));
