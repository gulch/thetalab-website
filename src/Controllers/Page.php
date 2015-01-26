<?php

namespace ThetaLab\Controllers;

use Http\Response;
use ThetaLab\Template\Renderer;
use ThetaLab\Page\PageReader;
use ThetaLab\Page\InvalidPageException;

class Page {

    private $response;
    private $renderer;
    private $pageReader;

    public function __construct(
        Response $response,
        Renderer $renderer,
        PageReader $pageReader
    ) {
        $this->response = $response;
        $this->renderer = $renderer;
        $this->pageReader = $pageReader;
    }

    public function show($params)
    {
        if(!sizeof($params)) $params['slug'] = 'Home';
        $slug = $params['slug'];

        try {
            $tmpl = $this->pageReader->readBySlug($slug);
        } catch (InvalidPageException $e) {
            return $this->show404();
        }

        $html = $this->renderer->render($tmpl);
        $this->response->setContent($html);
    }

    public function show404()
    {
        $this->response->setStatusCode(404);
        return $this->response->setContent($this->renderer->render('Errors/404.php'));
    }

    public function showErrorPage()
    {
        $this->response->setStatusCode(404);
        return $this->response->setContent($this->renderer->render('Errors/Unknown.php'));
    }
}