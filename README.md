[![Build Status](https://travis-ci.org/mpalourdio/zf2-twitter-widget.svg?branch=master)](https://travis-ci.org/mpalourdio/zf2-twitter-widget)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mpalourdio/zf2-twitter-widget/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mpalourdio/zf2-twitter-widget/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/mpalourdio/zf2-twitter-widget/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/mpalourdio/zf2-twitter-widget/?branch=master)
[![PHP 5.5+][ico-engine]][lang]
[![MIT Licensed][ico-license]][license]
[ico-engine]: http://img.shields.io/badge/php-5.5+-8892BF.svg
[lang]: http://php.net
[ico-license]: http://img.shields.io/packagist/l/adlawson/veval.svg
[license]: LICENSE

zf2-twitter-widget
==================

ZF2 view helper to easily display twitter timelines widgets. Based on this library : https://github.com/mpalourdio/TwitterWidgets

Requirements
============
PHP 5.5+ - Only Composer installation supported

Installation
============
Add to the **require** list of your composer.json
```"mpalourdio/zf2-twitter-widget" : "dev-master"```

Add "ZfTwitterWidget" to your **modules list** in **application.config.php**

Usage
=====
- 1) Create an embed timeline here : https://twitter.com/settings/widgets/new
- 2) In the javascript generated code, get the URL and the data-widget-id (minimum informations required)
- 3) Finally, in a view, use with 

```php
echo $this->tw(
        [
            'dataWidgetId' => '1245687955000', => the id must be a string (quotes), because of long integer converted to float
            'href'         => 'https://twitter.com/NickName',
            'hrefText'     => 'Here type a title'
        ],
        true/false (true is default)
    );
```

All the following options are handled : https://dev.twitter.com/web/embedded-timelines#options

Their PHP equivalent as array keys to use in the view helper are  :

```php
'class'           => 'A css class, by default it will be twitter-timeline',
'href'            => 'The link to the timeline',
'hrefText'        => 'A title for your timeline to display',
'dataWidgetId'    => 'Your data widget ID : must be a string (!)',
'dataTheme'       => 'ex: dark',
'dataLinkColor'   => 'ex: #cc0000',
'width'           => 300 (integer),
'height'          => 400 (integer,
'dataChrome'      => 'noheader nofooter noborders noscrollbar transparent', => a string with options separated by a single space
'dataBorderColor' => 'border color used by the widget',
'language'        => 'The widget language detected from the page, based on the HTML lang attribute of your content. You can also set the HTML lang attribute on the embed code itself.',
'dataTweetLimit'  => 20,
'dataRelated'     => 'benward,endform',
'dataAriaPolite'  => 'polite or assertive',
```

You can pass an instance of ```TwitterWidgets\Options\WidgetOptions``` instead of the array (or an implementation of ```TwitterWidgets\Timeline\TimelineBuilderInterface```).

```php
$options = new TwitterWidgets\Options\WidgetOptions();
$options->setDataWidgetId('1245687955000');
$options->setHref('https://twitter.com/NickName');
$options->setHrefText('Here type a title');
echo $this->tw($options);
```

The view helper second parameter is a boolean (true by default), that indicates if you must render the javascript code for your widget. If you have more that one widget on your page,
use the ```OneTimeJsViewHelper``` to only add once the javascript code, just before your ```</body>```. This will avoid overhead. See https://dev.twitter.com/web/javascript/loading

```php
echo $this->twJS();
```
