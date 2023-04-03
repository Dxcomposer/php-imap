<?php

require_once 'vendor/autoload.php';

$class = new \Dxkjcomposer\PhpImap\Mailbox('', '', '');

print_r($class->getMail('')); 