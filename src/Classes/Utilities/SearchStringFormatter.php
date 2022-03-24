<?php

namespace DinoFinder\Classes\Utilities;

class SearchStringFormatter {

    /**Ensures that search input does not contain executable special characters
     *
     * @param string $string
     *
     * @return string with special characters as text
     */
    public static function checkSpecialCharacters(string $string): string
    {
            return filter_var($string, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    /**Verifies that search input is between 1 and 255
     *
     * @param string $string of search input
     *
     * @return boolean
     */
    public static function notTooManyChar(string $string): bool
    {
        if (strlen($string) > 0 && strlen($string) <= 255) {
            return true;
        } else {
            return false;
        }
    }

}