<?php

namespace SupGeekRod\FakerZh;

class ZhCnDataProvider
{
    public function __construct($faker)
    {
        $faker->addProvider(new \SupGeekRod\FakerZh\Provider\zh_CN\Lorem($faker));
    }
}
