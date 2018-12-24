<?php
namespace NtSchool\Action;

use NtSchool\Model\Admin;
use NtSchool\Model\Comment;
use Psr\Http\Message\ServerRequestInterface;

final class AdminAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $adminIden = $request->getAttributes();

        $id = $adminIden['id'];

        $adminInfo = Admin::find($id);

        $comments = Comment::all();

        return $this->renderer->make('admin.admin',[
            'adminInfo' => $adminInfo,
            'comments' => $comments
        ]);
    }
}