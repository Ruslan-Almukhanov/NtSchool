<?php
namespace NtSchool\Action;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;
use NtSchool\Model\Comment;
use NtSchool\Model\Post;
use Psr\Http\Message\ServerRequestInterface;

final class BlogAction
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
        $offset = $page == 1 ? 0 : ($page - 1) * $postsPerPage;

        $total = Manager::select('select Count(*) as counter from posts');

        $posts = new Paginator(
          Post::skip($offset)->take($postsPerPage)->get(),
          $postsPerPage,
          $page
        );

        $comments = Comment::all();
        return $this->renderer->make('blog',[
            'title' => 'Блог',
            'posts' => $posts,
            'total' => round($total[0]->counter / $postsPerPage),
            'comments' => $comments
        ]);
    }
}