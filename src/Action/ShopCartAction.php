<?php
namespace NtSchool\Action;

use NtSchool\Model\Product;
use Psr\Http\Message\ServerRequestInterface;

class ShopCartAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {

        return $this->renderer->make('shop-cart');
    }
}