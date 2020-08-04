<?php

namespace RobotKudos\RKHelpers;

class Date {
    public static function copyrightYear($startYear) {
        $currentYear = date('Y');
        return $currentYear == $startYear ? $currentYear : $startYear . ' - ' . $currentYear;
    }
}