<?php

namespace ThetaLab\Template;

use jnmorse\DataUri;
use Twig_Environment;
use Twig_SimpleFilter;

class TwigRenderer implements Renderer
{
    private $engine;

    public function __construct(Twig_Environment $engine)
    {
        $this->engine = $engine;
        $this->addFilterBaseUri();
    }

    private function addFilterBaseUri()
    {
        $filter = new Twig_SimpleFilter('baseuri', function ($string) {
            return DataUri::make($string);
        });
        $this->engine->addFilter($filter);
    }

    public function render($template, $data = [])
    {
        return $this->engine->render($template, $data);
    }
}
