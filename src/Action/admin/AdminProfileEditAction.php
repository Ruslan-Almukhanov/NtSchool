<?php
namespace NtSchool\Action\admin;


use Psr\Http\Message\ServerRequestInterface;

final class AdminProfileEditAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('admin.admin-edit');
    }
}