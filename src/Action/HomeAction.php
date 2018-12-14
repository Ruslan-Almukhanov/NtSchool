<?php

namespace NtSchool\Action;

use Psr\Http\Message\ServerRequestInterface;
use NtSchool\loggerInterface;


final class HomeAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $logger;

    public function __construct($view, LoggerInterface $logger)
    {
        $this->renderer = $view;
        $this->logger = $logger;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $this->logger->error('some error');
        return $this->renderer->make('index',[
            'title' => 'Главная страница'
        ]);
    }
}
