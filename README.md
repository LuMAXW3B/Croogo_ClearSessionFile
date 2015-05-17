# ClearSessionFile

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.txt)
[![Total Downloads](https://img.shields.io/packagist/dt/lumaxw3b/croogo_clearsessionfile.svg?style=flat-square)](https://packagist.org/packages/lumaxw3b/croogo_clearsessionfile)

Croogo CMS ClearSessionFile plugin for session file delete in the tmp/sessions folder.

## Installing ClearSessionFile

This plugin works with a specific CakePHP/ Croogo session storage configuration.
Before installing this plugin change the session configuration in app/Config/croogo.php


``` php
Configure::write('Session', array(
	'defaults' => 'cake',
	// 'timeout' => 30, // The session will timeout after 30 minutes of inactivity
	// 'cookieTimeout' => 1440, // The session cookie will live for at most 24 hours, this does not effect session timeouts
	'checkAgent' => false,
	// 'autoRegenerate' => true, // causes the session expiration time to reset on each page load
	'ini' => array(
		'session.cookie_secure' => false,
		'session.cookie_httponly' => true
	),
));
```
After setting up the Croogo configuration we have to create the sessions folder under app/tmp/ and here we go,
install the ClearSessionFile plugin and delete all saved session files from app/tmp/sessions/ with one klick.

## Issues

Please report any issues you have with the plugin to the [issue tracker](http://github.com/LuMAXW3B/Croogo_ClearSessionFile/issues) on github.

## License

Asset Compress is offered under an [MIT license](http://www.opensource.org/licenses/mit-license.php).

## Copyright

2015 Lukas Marks (http://lumax-web.de/)

### Authors

See the [github contributors list](http://github.com/LuMAXW3B/Croogo_ClearSessionFile/graphs/contributors)

### Changelog

See CHANGELOG for changes only available on `master`. See
[github releases](http://github.com/LuMAXW3B/Croogo_ClearSessionFile/releases) for changelogs on previous releases.
