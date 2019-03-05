# DG Framework

## Introduction

Creates symlinks when deploying static view files.

## Install

```
composer require danielgheoltan/magento2-framework
php bin/magento setup:upgrade
php bin/magento module:enable DG_Framework
php bin/magento cache:flush
```

## Remove

```
composer remove danielgheoltan/magento2-framework
php bin/magento cache:flush
```

## Update

```
composer update danielgheoltan/magento2-framework
php bin/magento cache:flush
```
