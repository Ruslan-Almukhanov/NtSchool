<?php
namespace NtSchool\Action\admin;


use Illuminate\Database\DatabaseManager;
use Illuminate\Pagination\Paginator;
use MongoDB\Driver\Manager;
use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;

final class AdminUsersListAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {

        $page = $request->getQueryParams()['page'] ?? 1;
        $postsPerPage = 3;
        $offset = $page == 1 ? 0 : ($page -1 ) * $postsPerPage;
        $query = User::skip($offset)->take($postsPerPage);
        $total = User::all()->count();


        $users = new Paginator(
            $query->get(),
            $postsPerPage,
            $page
        );

        return $this->renderer->make('admin.admin-users-list',[
            'users' => $users,
            'total' => round($total/$postsPerPage)
        ]);
    }
}