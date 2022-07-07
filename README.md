supgeek-rod/faker-zh
============================================

Provide chinese lorem to [fakerphp/faker](https://github.com/fakerphp/faker)

[![Latest Stable Version](https://poser.pugx.org/supgeek-rod/faker-zh/v)](https://packagist.org/packages/supgeek-rod/faker-zh) 
[![Total Downloads](https://poser.pugx.org/supgeek-rod/faker-zh/downloads)](https://packagist.org/packages/supgeek-rod/faker-zh) 
[![Latest Unstable Version](https://poser.pugx.org/supgeek-rod/faker-zh/v/unstable)](https://packagist.org/packages/supgeek-rod/faker-zh) 
[![License](https://poser.pugx.org/supgeek-rod/faker-zh/license)](https://packagist.org/packages/supgeek-rod/faker-zh) 
[![PHP Version Require](https://poser.pugx.org/supgeek-rod/faker-zh/require/php)](https://packagist.org/packages/supgeek-rod/faker-zh)

## Install

```bash
$ composer require supgeek-rod/faker-zh
```

## Usage

### Add Provider

```php
$faker = Faker\Factory::create();
$faker->addProvider(new \SupGeekRod\FakerZh\ZhCnDataProvider($faker));
```

### SupGeekRod\FakerZh\Provider\zh_CN\Lorem

```php
$faker->word();                                                             // '难已'
$faker->words($nb = 3, $asText = false);                                    // array('知变', '长放', '每该')
$faker->sentence($nbWords = 6, $variableNbWords = true);                    // '维外山石难比取管什战划设本天边子。'
$faker->sentences($nb = 3, $asText = false);                                // array('装几路而政全小放品候小她那度志。', '生规和包儿单于共知间利门育第革养或。', '利关外林百风意政斯规三称张般所且片且铁意还照名说头光。')
$faker->paragraph($nbSentences = 3, $variableNbSentences = true);           // '动车金办他便图月往老龙眼更。资发传主包油我时一育气物着龙。自集何花调实市位使造金种。'
$faker->paragraphs($nb = 3, $asText = false);                               // array('任将品量比向提团易成采资约。调你东队该都或业至流选认亲资种划具任领。土百写清专影热部道命生铁值石数间向他而声现党。业实识位政之以器问开速样际理这始方思。', '得权自效支调件易色技着。调定京按老定际因式证装常山看有立但她决部工受年。把基理少已给立。海矿不器已众写张速经能必正活到十。', '领分命切型名西单元给术争然值。发手示路到化光导中该被算眼同直们处厂先日好反。任它称角往半连各便何属际。干话专济程该群维资儿设集例油如。')
$faker->text($maxNbChars = 200);                                            // '及品深者查眼样住务认农产清部经领队边然全么才克。金导动断数场来完题引战提北公通代则三影小消。证又是三运亲海经交标我间表直应水素行。压当南还高具总斯支过能商石是儿理特义那命体。易层张间离术决这做深后量许放及导克向方的县各。验金作组织类意选代门选圆书矿高算学么通。史小很以多门再快领新白记很。道今统物三就发信定确六半。'
```

## Credits

- https://github.com/ganlvtech/faker-chinese-lorem
- https://github.com/imvkmark/poppy-faker

## License

MIT