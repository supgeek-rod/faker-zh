supgeek-rod/faker-zh
============================================

[![Latest Stable Version](https://poser.pugx.org/supgeek-rod/faker-zh/v)](https://packagist.org/packages/supgeek-rod/faker-zh) 
[![Total Downloads](https://poser.pugx.org/supgeek-rod/faker-zh/downloads)](https://packagist.org/packages/supgeek-rod/faker-zh) 
[![Latest Unstable Version](https://poser.pugx.org/supgeek-rod/faker-zh/v/unstable)](https://packagist.org/packages/supgeek-rod/faker-zh) 
[![License](https://poser.pugx.org/supgeek-rod/faker-zh/license)](https://packagist.org/packages/supgeek-rod/faker-zh) 
[![PHP Version Require](https://poser.pugx.org/supgeek-rod/faker-zh/require/php)](https://packagist.org/packages/supgeek-rod/faker-zh)

Provide chinese lorem to [fakerphp/faker](https://github.com/fakerphp/faker) or [fzaninotto/faker](https://github.com/fzaninotto/Faker)

## Install

require PHP >= 7.1 || >= 8.0   
require fakerphp/faker >= 1.9

```bash
$ composer require supgeek-rod/faker-zh
```

## Usage

### Add Provider

```php
<?php

$faker = \Faker\Factory::create('zh_CN');
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

### Faker\Provider\zh_CN\Person

```php
$faker->title($gender = null|'male'|'female');                              // 老师

$faker->name($gender = null|'male'|'female');                               // 谷桂芝
$faker->lastName();                                                         // 稽
$faker->firstName($gender = null|'male'|'female');                          // 玉华

$faker->titleMale();                                                        // 老师
$faker->firstNameMale();                                                    // 博

$faker->titleFemale();                                                      // 小组
$faker->firstNameFemale();                                                  // 瑶
```

### Faker\Provider\zh_CN\Address

```php
$faker->country();                                  // 苏丹
$faker->stateAbbr();                                // 甘
$faker->state();                                    // 吉林省
$faker->city();                                     // 昆明
$faker->area();                                     // 兴山区
$faker->address();                                  // 天津高明区

$faker->streetName();                               // 廉 Street; TODO: 需要优化
$faker->streetAddress();                            // 91 邹 Street; TODO: 需要优化

$faker->postcode();                                 // 444700
$faker->latitude($min = -90, $max = 90);            // 77.147489
$faker->longitude($min = -180, $max = 180);         // 86.211205
```

### Faker\Provider\zh_CN\PhoneNumber

```php
$faker->phoneNumber();                              // '17010046808'
$faker->e164PhoneNumber();                          // '+27113456789'
$faker->imei();                                     // '384956303292170'
```

### Faker\Provider\zh_CN\Company

```php
$faker->company();                                  // 四通科技有限公司
$faker->companyPrefix();                            // 四通
$faker->companySuffix();                            // 科技有限公司
$faker->catchPhrase();                              // 中国移动通信，沟通从心开始！
$faker->jobTitle();                                 // 更感; TODO: 需要优化
```

### Faker\Provider\zh_CN\Internet

```php
$faker->email();                                    // 'tkshlerin@collins.com'
$faker->safeEmail();                                // 'king.alford@example.org'
$faker->freeEmail();                                // 'bradley72@gmail.com'
$faker->companyEmail();                             // 'russel.durward@mcdermott.org'
$faker->freeEmailDomain();                          // 'yahoo.com'
$faker->safeEmailDomain();                          // 'example.org'
$faker->userName();                                 // 'wade55'
$faker->password();                                 // 'k&|X+a45*2['
$faker->domainName();                               // 'wolffdeckow.net'
$faker->domainWord();                               // 'feeney'
$faker->tld();                                      // 'biz'
$faker->url();                                      // 'http://yan.biz.cn/相引-构容-量分-候党-半至-何受-准治.html'
$faker->slug();                                     // '织青-文影-会度-形准-会'
$faker->ipv4();                                     // '109.133.32.252'
$faker->localIpv4();                                // '10.242.58.8'
$faker->ipv6();                                     // '8e65:933d:22ee:a232:f1c1:2741:1f10:117c'
$faker->macAddress();                               // '43:85:B7:08:10:CA'
```

### Faker\Provider\zh_CN\DateTime

```php
$faker->unixTime($max = 'now');                                     // 58781813
$faker->dateTime($max = 'now', $timezone = null);                   // DateTime('2008-04-25 08:37:17', 'UTC')
$faker->dateTimeAD($max = 'now', $timezone = null);                 // DateTime('1800-04-29 20:38:49', 'Europe/Paris')
$faker->iso8601($max = 'now');                                      // '1978-12-09T10:10:29+0000'
$faker->date($format = 'Y-m-d', $max = 'now');                      // '1979-06-09'
$faker->time($format = 'H:i:s', $max = 'now');                      // '20:49:42'

$faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null);                  // DateTime('2003-03-15 02:00:49', 'Africa/Lagos')
$faker->dateTimeInInterval($startDate = '-30 years', $interval = '+ 5 days', $timezone = null);         // DateTime('2003-03-15 02:00:49', 'Antartica/Vostok')

$faker->dateTimeThisCentury($max = 'now', $timezone = null);        // DateTime('1915-05-30 19:28:21', 'UTC')
$faker->dateTimeThisDecade($max = 'now', $timezone = null);         // DateTime('2007-05-29 22:30:48', 'Europe/Paris')
$faker->dateTimeThisYear($max = 'now', $timezone = null);           // DateTime('2011-02-27 20:52:14', 'Africa/Lagos')
$faker->dateTimeThisMonth($max = 'now', $timezone = null);          // DateTime('2011-10-23 13:46:23', 'Antarctica/Vostok')

$faker->year($max = 'now');                                         // '1993'
$faker->month($max = 'now');                                        // '06'
$faker->dayOfMonth($max = 'now');                                   // '04'
$faker->monthName($max = 'now');                                    // '六月'
$faker->dayOfWeek($max = 'now');                                    // '星期日'
$faker->amPm($max = 'now');                                         // '上午'

$faker->century();                                                  // 'VI'
$faker->timezone();                                                 // 'Asia/Chongqing'
```

### Faker\Provider\zh_CN\Color

```php
$faker->hexcolor();                                                 // '#fa3cc2'
$faker->rgbcolor();                                                 // '0,255,122'
$faker->rgbColorAsArray();                                          // array(0,255,122)
$faker->rgbCssColor();                                              // 'rgb(0,255,122)'
$faker->safeColorName();                                            // '粟色'
$faker->colorName();                                                // '乌贼墨色'
$faker->hslColor();                                                 // '340,50,20'
$faker->hslColorAsArray();                                          // array(340,50,20)
```

### Faker\Provider\zh_CN\Payment

```php

$faker->bank();                                                     // '中国建设银行'

$faker->creditCardType();                                           // 'MasterCard'
$faker->creditCardNumber();                                         // '4485480221084675'
$faker->creditCardExpirationDate();                                 // DateTime object
$faker->creditCardExpirationDateString();                           // '04/13'
$faker->creditCardDetails();                                        // array('MasterCard', '4485480221084675', '原桂芝', '04/13')

$faker->iban($countryCode = null);                                  // 'IT31A8497112740YZ575DJ28BP4'
$faker->swiftBicNumber();                                           // 'RZTIAT22263'
```

## Test

```bash
$ cd ./vendor/supgeek-rod/faker-zh                                // Maybe you should go to this package directory
$ composer install --dev
$ php tests/run.php  
```

## License

MIT