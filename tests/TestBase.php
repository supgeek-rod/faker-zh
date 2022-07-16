<?php

include_once(__DIR__ . '/../vendor/autoload.php');

class TestBase
{
    public static function run($items)
    {
        $climate = new League\CLImate\CLImate;
        $faker = Faker\Factory::create('zh_CN');
        $faker->addProvider(SupGeekRod\FakerZh\Provider\zh_CN\Lorem::class);

        foreach ($items as $item) {
            $climate->br()->underline()->yellow()->out($item);

            preg_match('/\$faker->(.*?)\(/', $item, $matchRes);
            $climate->green()->dump(call_user_func([$faker, $matchRes[1]]));
        }
    }
}
