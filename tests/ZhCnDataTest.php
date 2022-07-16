<?php

include('TestBase.php');

// Faker\Provider\zh_CN\Person
TestBase::run([
    '$faker->title($gender = null|"male"|"female")',
    '$faker->titleMale()',
    '$faker->titleFemale()',

    '$faker->name($gender = null|"male"|"female")',
    '$faker->firstName($gender = null|"male"|"female")',
    '$faker->firstNameMale()',
    '$faker->firstNameFemale()',
    '$faker->lastName()',
]);


// Faker\Provider\zh_CN\Address
TestBase::run([
    '$faker->country()',
    '$faker->stateAbbr()',
    '$faker->state()',
    '$faker->city()',
    '$faker->area()',
    '$faker->address()',
    '$faker->postcode()',
    '$faker->latitude($min = -90, $max = 90)',
    '$faker->longitude($min = -180, $max = 180)',
]);


// SupGeekRod\FakerZh\Provider\zh_CN\Lorem
TestBase::run([
    '$faker->word()',
    '$faker->words($nb = 3, $asText = false)',

    '$faker->sentence($nbWords = 6, $variableNbWords = true)',
    '$faker->sentences($nb = 3, $asText = false)',

    '$faker->paragraph($nbSentences = 3, $variableNbSentences = true)',
    '$faker->paragraphs($nb = 3, $asText = false)',

    '$faker->text($maxNbChars = 200)',
]);
