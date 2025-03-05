<?php

namespace BrizyPlaceholders;

/**
 * Class Extractor
 */
interface ExtractorInterface
{
    public function stripPlaceholders($content);

    /**
     * @param $content
     *
     * @return array
     */
    public function extract($content);

    public function extractIgnoringRegistry($content, $callback = null);
}
