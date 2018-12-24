<?php

$routerContainer = new \Aura\Router\RouterContainer();
$router = $routerContainer->getMap();

$router->get('home', '/', \NtSchool\Action\HomeAction::class);
$router->get('shopMain', '/shoping', \NtSchool\Action\ShopMainAction::class);
$router->get('product', '/product{id}', \NtSchool\Action\ProductAction::class);
$router->get('shop-cart', '/shop-cart', \NtSchool\Action\ShopCartAction::class);
$router->get('checkout', '/checkout', \NtSchool\Action\CheckOutAction::class);
$router->get('registration', '/registration', \NtSchool\Action\ShopRegistrationAction::class);
$router->post('registration-up', '/registration', \NtSchool\Action\ShopRegistrationAction::class);
$router->get('timetable', '/timetable', \NtSchool\Action\TimeTableAction::class);
$router->get('team', '/team', \NtSchool\Action\TeamAction::class);
$router->get('team-single', '/team-single', \NtSchool\Action\TeamSingleAction::class);
$router->get('services', '/services', \NtSchool\Action\ServicesAction::class);
$router->get('service-single', '/service-single', \NtSchool\Action\ServiceSingleAction::class);
$router->get('faq', '/faq', \NtSchool\Action\FaqAction::class);
$router->get('404', '/404', \NtSchool\Action\NotFoundPageAction::class);
$router->get('blog', '/blog{/category}', \NtSchool\Action\BlogAction::class);
$router->get('blog-single', '/blog-single', \NtSchool\Action\BlogSingleAction::class);
$router->get('blog-video', '/blog-video', \NtSchool\Action\BlogSingleVideoAction::class);
$router->get('contacts', '/contacts', \NtSchool\Action\ContactsAction::class);
$router->get('admin', '/admin/{id}', \NtSchool\Action\AdminAction::class);
$router->get('admin-registration', '/admin-registration', \NtSchool\Action\admin\AdminRegistrationAction::class);
$router->post('admin-registration-post', '/admin-registration', \NtSchool\Action\admin\AdminRegistrationAction::class);
$router->get('admin-signIn', '/admin-signin', \NtSchool\Action\admin\AdminSignInAction::class);
$router->post('admin-signInPost', '/admin-signin', \NtSchool\Action\admin\AdminSignInAction::class);
$router->get('admin-profile-edit', '/admin-profile-edit/{id}', \NtSchool\Action\admin\AdminProfileEditAction::class);
$router->get('admin-users-list', '/admin-users-list', \NtSchool\Action\admin\AdminUsersListAction::class);
