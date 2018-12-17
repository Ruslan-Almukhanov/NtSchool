<?php

namespace NtSchool\Action;

use Psr\Http\Message\ServerRequestInterface;
use Ruslan\Notifier\Adapter\TelegramNotifierAdapter;
use Ruslan\Notifier\NotifierAdapterInterface;


final class HomeAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $notifier;

    public function __construct($view, TelegramNotifierAdapter $notifier)
    {
        $this->renderer = $view;
        $this->notifier = $notifier;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $this->notifier->error('new message from my library');
        return $this->renderer->make('index',[
            'title' => 'Главная страница'
        ]);
    }
}
