<?php

include('src/TestBase.php');

$readmeStr = file_get_contents(__DIR__ . '/../README.md');

// match providers
$pattern = '/### (?:SupGeekRod|Faker)[^(###)]*?```php.*?```/s';
preg_match_all($pattern, $readmeStr, $providerMatchRes);

foreach ($providerMatchRes[0] as $providerItem) {
    // match caption
    preg_match('/### .*/', $providerItem, $captionMatchRes);
    $caption = $captionMatchRes[0];

    // match $faker methods
    preg_match_all('/\$faker.*?;/s', $providerItem, $methodMatchRes);
    $methods = $methodMatchRes[0];

    TestBase::run($caption, $methods);
}