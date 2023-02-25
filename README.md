# BecaGIS HomagePage

```shell
composer create-project --prefer-dist typerocket/typerocket BecaGIS_HomePage_TR
cd BecaGIS_HomePage_TR
composer config http-basic.satis.typerocket.com ttungbmt your-license-key
composer require typerocket/professional
php galaxy extension:publish typerocket/professional

php galaxy wp:download
```