# DG Framework

## Install

```
composer config repositories.dg/framework git https://github.com/danielgheoltan/magento2-framework.git
composer require dg/framework:dev-master
php bin/magento setup:upgrade
php bin/magento module:enable DG_Framework
php bin/magento cache:flush
```

## Remove

```
composer remove dg/framework
```

## Update

```
composer update dg/framework
php bin/magento cache:flush
```
