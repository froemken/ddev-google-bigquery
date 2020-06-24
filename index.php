<?php
require 'vendor/autoload.php';

$credentials = \Google\Auth\ApplicationDefaultCredentials::getCredentials(
    'https://www.googleapis.com/auth/bigquery'
);

$bigQuery = new \Google\Cloud\BigQuery\BigQueryClient([
    'projectId' => $credentials->getProjectId()
]);

// Run a query and inspect the results.
$queryJobConfig = $bigQuery->query(
    'SELECT * FROM `' . $credentials->getProjectId() . '.[DataSet ID].[Table ID]`'
);
$queryResults = $bigQuery->runQuery($queryJobConfig);

foreach ($queryResults as $row) {
    print_r($row);
}
