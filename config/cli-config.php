<?php
//Doctrine CLI vonfiguration file

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__.'./../src/bootstrap.php';

return ConsoleRunner::createHelperSet($entityManager);