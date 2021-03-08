<?php

define('PAGINATION', 10);

if (!function_exists('comaSeparateTags')) {
    /**
     * @param $tags
     * @return string
     */
    function comaSeparateTags($tags)
    {
        $tagString = [];
        foreach ($tags as $tag) {
            $tagString[] = '<a class="ml-1" href="' . url('tag/' . $tag->slug) . '" >#' . $tag->name . '</a>';
        }

        return implode(' ', $tagString);
    }
}

if (!function_exists('formatDate')) {
    /**
     * @param $date
     * @return false|string
     */
    function formatDate($date)
    {
        return date('F d, Y', strtotime($date));
    }
}

if (! function_exists('readingTime')) {
    /**
     * @param $post
     * @return string
     */
    function readingTime($post) {
        $word = str_word_count(strip_tags($post));
        $m = floor($word / 200);

        if (!$m) {
            return 'less than a minute';
        }

        $est = $m . ' minute' . ($m == 1 ? '' : 's');

        return $est;
    }
}

if (!function_exists('highlightWords')) {
    /**
     * @param $text
     * @param $word
     * @return string|string[]|null
     */
    function highlightWords($text, $word){
        return preg_replace(
            '#'. preg_quote($word) .'#i',
            '<span style="background-color: #F9F902; padding: 2px 5px 2px 5px;">\\0</span>',
            $text
        );
    }
}
