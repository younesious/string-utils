<?php

namespace QueraCollege\StringUtils;

class Str
{
    /**
     * Determine if a given string contains a given substring.
     *
     * @param string $haystack
     * @param string|string[] $needles
     * @return bool
     */
    public static function contains($haystack, $needles)
    {
        foreach ((array)$needles as $needle) {
            if ($needle !== '' && mb_strpos($haystack, $needle) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine if a given string contains all array values.
     *
     * @param string $haystack
     * @param string[] $needles
     * @return bool
     */
    public static function containsAll($haystack, array $needles)
    {
        foreach ($needles as $needle) {
            if (!static::contains($haystack, $needle)) {
                return false;
            }
        }

        return true;
    }
}
