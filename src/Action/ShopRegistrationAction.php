<?php
namespace NtSchool\Action;




use Illuminate\Support\Facades\Request;
use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;
use Ruslan\Notifier\Adapter\TelegramNotifierAdapter;

final class ShopRegistrationAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $notifier;

    public function __construct($view, TelegramNotifierAdapter $notifier)
    {
        $this->renderer = $view;
        $this->notifier = $notifier;
    }


    public function __invoke(ServerRequestInterface $request)
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $user = new User();
            $user->first_name = $_POST['name'];
            $user->last_name = $_POST['last_name'];
            $user->email = $_POST['email'];
            $user->phone = $_POST['phone'];
            $user->password = password_hash($_POST['password'], PASSWORD_ARGON2I) ;
            $user->password_confirmation = password_hash($_POST['passwordConfirmation'], PASSWORD_ARGON2I) ;
            $userNotification = $user->save();

            if($userNotification == true) {
                $this->notifier->error('new user register');
            }
        }

        return $this->renderer->make('shop-registration');
    }
}