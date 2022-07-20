<?php

include_once(__DIR__ . '/../../vendor/autoload.php');

class TestBase
{
    public static function run($caption, $methods)
    {
        $climate = new League\CLImate\CLImate;
        $faker = Faker\Factory::create('zh_CN');
        $faker->addProvider(SupGeekRod\FakerZh\Provider\zh_CN\Lorem::class);

        $climate->br()->blue()->out($caption);
        $climate->border();

        foreach ($methods as $method) {
            $climate->br()->underline()->yellow()->out($method);

            preg_match('/\$faker->(.*?)\(/', $method, $matchRes);
            $climate->green()->dump(call_user_func([$faker, $matchRes[1]]));
        }
    }
}
