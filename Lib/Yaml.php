<?php
/**
 * Symfony Yaml component support for CakePHP
 *
 * ONZRA: Enterprise Development
 * Copyright 2012, ONZRA LLC (http://www.ONZRA.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2012, ONZRA LLC (http://www.ONZRA.com)
 * @link          https://github.com/onzra/CakeRateLimiter CakeRateLimiter
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

//Import all requires Symfony YAML component files
App::import('Vendor', 'Yaml.Vendor.Yaml', array('file' => 'Yaml/Yaml.php'));
App::import('Vendor', 'Yaml.Vendor.Parser', array('file' => 'Yaml/Parser.php'));
App::import('Vendor', 'Yaml.Vendor.Inline', array('file' => 'Yaml/Inline.php'));
App::import('Vendor', 'Yaml.Vendor.Dumper', array('file' => 'Yaml/Dumper.php'));
App::import('Vendor', 'Yaml.Vendor.Escaper', array('file' => 'Yaml/Escaper.php'));
App::import('Vendor', 'Yaml.Vendor.ExceptionInterface', array('file' => 'Yaml/Exception/ExceptionInterface.php'));
App::import('Vendor', 'Yaml.Vendor.DumpException', array('file' => 'Yaml/Exception/DumpException.php'));
App::import('Vendor', 'Yaml.Vendor.ParseException', array('file' => 'Yaml/Exception/ParseException.php'));
