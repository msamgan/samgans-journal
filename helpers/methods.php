<?php

if (!function_exists('comaSeparateTags')) {
    /**
     * @param $tags
     * @return string
     */
    function comaSeparateTags($tags)
    {
        $tagString = [];
        foreach ($tags as $tag) {
            $tagString[] = '<a href="' . url('tag/' . $tag->slug) . '" >' . ucwords($tag->name) . '</a>';
        }

        return implode(', ', $tagString);
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
