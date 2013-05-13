<?php
use Symfony\Component\Console\Helper\HelperSet,
		Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper,
		Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper;

define('BASEPATH', __DIR__ . '/../../../../system/');
define('APPPATH', '/Applications/MAMP/htdocs/ci/application/');

require_once APPPATH.'libraries/Doctrine.php';

$doctrine = new Doctrine;
 
$em = $doctrine->em;

$helperSet = new HelperSet(array(
    'db' => new ConnectionHelper($em->getConnection()),
    'em' => new EntityManagerHelper($em)
));