<?php
namespace NtSchool\Action;

use NtSchool\Model\Product;
use Psr\Http\Message\ServerRequestInterface;

final class ProductAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $id = $request->getAttribute('id');

        $products = Product::find($id);
        return $this->renderer->make('product',[
            'products' => $products
            ]);
    }
}