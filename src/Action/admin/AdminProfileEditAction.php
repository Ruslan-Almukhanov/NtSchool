<?php
namespace NtSchool\Action\admin;


use NtSchool\Model\Admin;
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
        $adminIden = $request->getAttributes();

        $id = $adminIden['id'];

        $adminInfo = Admin::find($id);

        return $this->renderer->make('admin.admin-edit',[
            'adminInfo' => $adminInfo
        ]);
    }
}