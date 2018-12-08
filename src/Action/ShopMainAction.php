<?php
namespace NtSchool\Action;

use NtSchool\Model\Product;
use Psr\Http\Message\ServerRequestInterface;

final class ShopMainAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $products = Product::all();
        return $this->renderer->make('shopMain',[
            'title' => 'Магазин',
            'products' => $products
        ]);
    }
}