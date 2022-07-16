<?php

include('TestBase.php');

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