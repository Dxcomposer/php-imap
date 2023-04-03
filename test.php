<?php

require_once 'vendor/autoload.php';

$class = new \Dxkjcomposer\PhpImap\Mailbox('{mail.dingstartech.com:993/imap/ssl}', 'phptest2@dingstartech.com', 'Ifun_123');

print_r($class->getMail(223));