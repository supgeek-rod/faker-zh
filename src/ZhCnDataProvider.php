<?php

namespace SupGeekRod\FakerZh;

class ZhCnDataProvider
{
    public function __construct($faker)
    {
        $faker->addProvider(new \SupGeekRod\FakerZh\Provider\zh_CN\Address($faker));
        $faker->addProvider(new \SupGeekRod\FakerZh\Provider\zh_CN\Color($faker));
        $faker->addProvider(new \SupGeekRod\FakerZh\Provider\zh_CN\Company($faker));
        $faker->addProvider(new \SupGeekRod\FakerZh\Provider\zh_CN\DateTime($faker));
        $faker->addProvider(new \SupGeekRod\FakerZh\Provider\zh_CN\Internet($faker));
        $faker->addProvider(new \SupGeekRod\FakerZh\Provider\zh_CN\Lorem($faker));
        $faker->addProvider(new \SupGeekRod\FakerZh\Provider\zh_CN\Payment($faker));
        $faker->addProvider(new \SupGeekRod\FakerZh\Provider\zh_CN\Person($faker));
        $faker->addProvider(new \SupGeekRod\FakerZh\Provider\zh_CN\PhoneNumber($faker));
    }
}
