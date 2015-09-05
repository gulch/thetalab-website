<?php

namespace ThetaLab\Template;

interface Renderer
{
    public function render($template, $data = []);
}
