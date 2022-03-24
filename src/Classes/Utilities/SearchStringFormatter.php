<?php

namespace DinoFinder\Classes\Utilities;

class SearchStringFormatter {
    /**Verifies that search input is between 1 and 255
     *
     * @param string $string of search input
     *
     * @return string character verified $string of search input
     */
    public static function notTooManyChar (string $string): string {
        if (strlen($string) > 0 && strlen($string) <= 255) {
            return $string;
        } else if (strlen($string) == 0 ) {
            return 'Your search input was empty! Please enter a search term';
        } else {
            return 'Your search input was too long! Please try shortening';
        }
    }

    /**Verifies that search input does not contain any numbers
     *
     * @param string $string of search input
     *
     * @return string as long as it does not contain any numbers
     */
    public static function noNumbers (string $string): string {
        if (preg_match('/[\d]/', $string) ) {
            return 'Please remove any numbers from your search';
        } else {
            return $string;
        }
    }

    public static function checkSpecialCharacters(string $string): string {
        $testingCharLength = self::notTooManyChar($string);

        $numberlessString = self::noNumbers($testingCharLength);

        $checkSpecialCharactersString = filter_var($numberlessString, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        return $checkSpecialCharactersString;
    }

}