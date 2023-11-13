<?php

include_once(__DIR__ . '/../../vendor/autoload.php');

class TestBase
{
    public static function run($caption, $methods)
    {
        $climate = new League\CLImate\CLImate;
        $faker = Faker\Factory::create('zh_CN');
        $faker->addProvider(new \SupGeekRod\FakerZh\ZhCnDataProvider($faker));

        $climate->br()->blue()->out($caption);
        $climate->border();

        foreach ($methods as $method) {
            $climate->br()->underline()->yellow()->out($method);

            preg_match('/\$faker->(.*?)\((.*?)\)/', $method, $matches);
            $fakerMethod = $matches[1];
            $fakerMethodArgs = (new self())->getFakerMethodArgs($matches[2]);

            $climate->green()->dump(call_user_func_array([$faker, $fakerMethod], $fakerMethodArgs));
        }
    }

    protected function getFakerMethodArgs($str)
    {
        $res = [];

        $argArr = explode(',', $str);
        foreach ($argArr as $argStr) {
            $argStr = str_replace([' ', '\'', '"'], '', $argStr);

            if (preg_match('/\$(.*)=(.*)/', $argStr, $matches)) {
                $res[] = (function ($value) {
                    if ($value === 'false') return false;
                    if ($value === 'true') return true;
                    if ($value === 'null') return null;

                    return $value;
                })($matches[2]);
            }
        }

        return $res;
    }
}
