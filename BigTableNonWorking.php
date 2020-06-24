<?php
require 'vendor/autoload.php';

$credentials = \Google\Auth\ApplicationDefaultCredentials::getCredentials(
    'https://www.googleapis.com/auth/cloud-bigtable.data'
);

$bigTable = new \Google\Cloud\Bigtable\V2\BigtableClient([
    'credentials' => $credentials
]);
$tableResource = $bigTable::tableName(
    '[Project ID]',
    '[Instance ID]',
    '[Table ID]'
);
var_dump($tableResource);

$stream = $bigTable->readRows($tableResource);

foreach ($stream->readAll() as $row) {
    print_r($row) . PHP_EOL;
}
