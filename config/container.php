<?php

/** @var $renderer \Illuminate\View\Factory */

use Aura\Di\ContainerBuilder;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$builder = new ContainerBuilder();
$container = $builder->newInstance();

$container->set('file-logger', function() {
    $log = new Logger('name');
    $log->pushHandler(new StreamHandler(__DIR__ . '/../resources/logs/main.log'));
    $notifier = new \Ruslan\Notifier\Adapter\MonologNotifierAdapter($log);
    return $notifier;
});

//$container->set('logger', function() {
//    $logger = new \NtSchool\KatzgrauLogger(
//        new Katzgrau\KLogger\Logger(__DIR__ . '/../resources/logs'));
//    return $logger;
//});

$container->set('telegram-logger', function() {
    $notifier = new \Ruslan\Notifier\Adapter\TelegramNotifierAdapter(
        '759235133:AAHF2_46P2PPgrtk-LhErTxn5AeoN2zaYOI',
        '428376868'
    );
    return $notifier;
});

$container->set('notifier', function () use ($container) {
   $notifier = new  \Ruslan\Notifier\NotifierObserver();
   $notifier->add($container->get('file-logger'));
   $notifier->add($container->get('telegram-logger'));
   return $notifier;
});

$container->set(\NtSchool\Action\HomeAction::class, function () use ($renderer, $container) {
    return new \NtSchool\Action\HomeAction($renderer, $container->get('notifier'));
});

$container->set(\NtSchool\Action\ShopMainAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ShopMainAction($renderer);
});

$container->set(\NtSchool\Action\ProductAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ProductAction($renderer);
});

$container->set(\NtSchool\Action\ShopCartAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ShopCartAction($renderer);
});

$container->set(\NtSchool\Action\CheckOutAction::class, function () use ($renderer) {
    return new \NtSchool\Action\CheckOutAction($renderer);
});

$container->set(\NtSchool\Action\ShopRegistrationAction::class, function () use ($renderer, $container) {
    return new \NtSchool\Action\ShopRegistrationAction($renderer, $container->get('notifier'));
});

$container->set(\NtSchool\Action\TimeTableAction::class, function () use ($renderer) {
    return new \NtSchool\Action\TimeTableAction($renderer);
});

$container->set(\NtSchool\Action\TeamAction::class, function () use ($renderer) {
    return new \NtSchool\Action\TeamAction($renderer);
});

$container->set(\NtSchool\Action\TeamSingleAction::class, function () use ($renderer) {
    return new \NtSchool\Action\TeamSingleAction($renderer);
});

$container->set(\NtSchool\Action\ServicesAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ServicesAction($renderer);
});

$container->set(\NtSchool\Action\ServiceSingleAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ServiceSingleAction($renderer);
});

$container->set(\NtSchool\Action\FaqAction::class, function () use ($renderer) {
    return new \NtSchool\Action\FaqAction($renderer);
});

$container->set(\NtSchool\Action\NotFoundPageAction::class, function () use ($renderer) {
    return new \NtSchool\Action\NotFoundPageAction($renderer);
});

$container->set(\NtSchool\Action\BlogAction::class, function () use ($renderer) {
    return new \NtSchool\Action\BlogAction($renderer);
});

$container->set(\NtSchool\Action\BlogSingleAction::class, function () use ($renderer) {
    return new \NtSchool\Action\BlogSingleAction($renderer);
});

$container->set(\NtSchool\Action\BlogSingleVideoAction::class, function () use ($renderer) {
    return new \NtSchool\Action\BlogSingleVideoAction($renderer);
});

$container->set(\NtSchool\Action\ContactsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ContactsAction($renderer);
});

$container->set(\NtSchool\Action\AdminAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminAction($renderer);
});


