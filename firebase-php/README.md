# Firebase Admin SDK for PHP

Interact with [Google Firebase](https://firebase.google.com) from your PHP application.

[![Current version](https://img.shields.io/packagist/v/kreait/firebase-php.svg)](https://packagist.org/packages/kreait/firebase-php)
[![Supported PHP version](https://img.shields.io/packagist/php-v/kreait/firebase-php.svg)]()
[![Total Downloads](https://img.shields.io/packagist/dt/kreait/firebase-php.svg)](https://packagist.org/packages/kreait/firebase-php/stats)
[![Build Status](https://travis-ci.org/kreait/firebase-php.svg?branch=master)](https://travis-ci.org/kreait/firebase-php)
[![Gitter](https://badges.gitter.im/kreait/firebase-php.svg)](https://gitter.im/kreait/firebase-php)

## Resources

- [Documentation](https://firebase-php.readthedocs.io/)
- [Example project](https://github.com/jeromegamez/firebase-php-examples)
- [Tutorials](https://firebase-php.readthedocs.io/en/latest/tutorials.html)
- Support
  - [Issue Tracker](https://github.com/kreait/firebase-php/issues/)
  - [Gitter Chat](https://gitter.im/kreait/firebase-php)
  - [Stack Overflow](https://stackoverflow.com/questions/tagged/firebase+php)

## Feature matrix

| Feature | PHP | Node.js | Java | Python | Go |
| --- | :---: | :---: | :---: | :---: | :---: |
| [Custom Token Minting](https://firebase.google.com/docs/auth/admin/create-custom-tokens) | ✅ | ✅ | ✅ | ✅ | ✅ |
| [ID Token Verification](https://firebase.google.com/docs/auth/admin/verify-id-tokens)	| ✅ | ✅ | ✅ | ✅ | ✅ |
| [Realtime Database API](https://firebase.google.com/docs/database/admin/start) | ✅* | ✅ | ✅ | ✅* | ✅ |
| [User Management API](https://firebase.google.com/docs/auth/admin/manage-users) | ✅ | ✅ | ✅ | ✅ | ✅ |
| [Remote Config](https://firebase.google.com/docs/remote-config/) | ✅ | | | | |
| [Cloud Messaging API](https://firebase.google.com/docs/cloud-messaging/admin/) | ✅ | ✅ | ✅ | ✅ | ✅ |				
| [Cloud Storage API](https://firebase.google.com/docs/storage/admin/start) | ✅ | ✅ | ✅ | ✅ | ✅ |
| [Cloud Firestore API](https://firebase.google.com/docs/firestore/) | # | ✅ | ✅ | ✅ | ✅ |

> \* The Realtime Database API currently does not support realtime event listeners.

> \# An integration with [google/cloud-firestore](https://github.com/GoogleCloudPlatform/google-cloud-php-firestore) 
  is currently not available to avoid the need to install the `grpc` PHP extension when using this SDK.
> The following projects provide support for Firestore without the need to install the `grpc` PHP extension:
> - [ahsankhatri/firestore-php](https://github.com/ahsankhatri/firestore-php)
> - [morrislaptop/firestore-php](https://github.com/morrislaptop/firestore-php)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
