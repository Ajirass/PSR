<?php
use Cocur\Slugify\Slugify;
use Web1\StringGenerator\PasswordGenerator;

require __DIR__.'/vendor/autoload.php';


echo PasswordGenerator::generateCharacter(0, PasswordGenerator::PASSWORD_HARD);

