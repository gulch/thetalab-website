<?php

namespace ThetaLab\Page;

use InvalidArgumentException;

class FilePageReader implements PageReader
{
    private $pageFolder;

    public function __construct($pageFolder)
    {
        if (!is_string($pageFolder)) {
            throw new InvalidArgumentException('pageFolder must be a string');
        }
        $this->pageFolder = $pageFolder;
    }

    public function readBySlug($slug)
    {
        if (!is_string($slug)) {
            throw new InvalidPageException($slug);
        }

        $slug = ucfirst(strtolower($slug));
        $filename = $slug.'.php';

        $path = "$this->pageFolder/$filename";

        if (!file_exists($path)) {
            throw new InvalidPageException($slug);
        }

        return $filename;
    }
}
