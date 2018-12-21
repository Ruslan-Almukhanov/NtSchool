<?php
namespace NtSchool\Action;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;
use NtSchool\Model\Category;
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
        $categories = Category::all();

        $page = $request->getQueryParams()['page'] ?? 1;
        $postsPerPage = 3;
        $offset = $page == 1 ? 0 : ($page - 1) * $postsPerPage;

        $query = Post::skip($offset)->take($postsPerPage);
        $total = Post::count();

        $category = Category::where('key', '=', $request->getAttribute('category'))->first();
        if ($category !== null) {
            $query = $query->whereHas('categories', function($query) use ($category) {
                $query->where('id', '=', $category->id);
            });

            $total = Manager::table('posts')
                ->join('category_post', 'posts.id', '=', 'category_post.post_id')
                ->where('category_post.category_id', '=', $category->id)
                ->count();
        }

        $posts = new Paginator(
          $query->get(),
          $postsPerPage,
          $page
        );

        $comments = Comment::all();
        return $this->renderer->make('blog',[
            'title' => 'Блог',
            'posts' => $posts,
            'total' => round($total / $postsPerPage),
            'cats' => $categories,
            'comments' => $comments
        ]);
    }
}