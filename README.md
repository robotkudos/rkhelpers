# RKHelpers

A collection of helpers for laravel framework.

## Install

`composer require robotkudos/rkhelpers`

## Usage


### Date

#### copyrightDate
If date provided is same as current year, return current year, otherwise, [dateprovided] - [currentyear] 
```php
<?php

use RobotKudos\RKHelpers\Date as RKDate;
die(RKDate::copyrightDate(2020)); 