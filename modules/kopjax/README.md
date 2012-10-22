# Kopjax - Pjax jQuery ajax module for Kohana 3.1(.2)
Simplistic [Kohana 3](https://github.com/kohana/kohana) module implementation of Chris Wanstrath's [defunkt jquery-pjax](https://github.com/defunkt/jquery-pjax)

Pjax allows ajax loading of web page subparts while keeping browser url and history behaviour intact. 

NOTE: Pjax relies on HTML5 browser history.pushState - [FF4+, Chrome9+ etc. - forget Internet Explorer!](http://caniuse.com/#search=pushstate)

## Usage
Add the kopjax module to your Kohana 3.1(.2) installation. Navigate to http://[yourkohanainstallation]/pjaxdemo

## Info
This module includes a media controller for loading of the js files. If using in older Ko3 versions, there might be needed a change in the [media controller](https://github.com/cambiata/kopjax/blob/master/classes/controller/media.php) (response->check_cache should be replaced with request->check_cache).


## Credits
All credits to [defunkt (Chris Wanstrath)](https://github.com/defunkt)
and the [Kohana team](http://kohanaframework.org/team) for keeping up the great work!