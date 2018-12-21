<?php
namespace NtSchool\Action;




use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Request;
use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;
use Ruslan\Notifier\Adapter\TelegramNotifierAdapter;
use Ruslan\Notifier\NotifierObserverInterface;

final class ShopRegistrationAction
{

    protected $renderer;
    protected $notifier;
    /** @var \Illuminate\Validation\Factory */
    protected $validator;

    public function __construct($view, NotifierObserverInterface $notifier, $validator)
    {
        $this->renderer = $view;
        $this->notifier = $notifier;
        /**@ \Illuminate\ValidationExceptionion\Factory */
        $this->validator = $validator;
    }


    public function __invoke(ServerRequestInterface $request)
    {
//        if($_SERVER['REQUEST_METHOD'] === 'POST'){
//            $user = new User();
//            $user->first_name = $_POST['name'];
//            $user->last_name = $_POST['last_name'];
//            $user->email = $_POST['email'];
//            $user->phone = $_POST['phone'];
//            $user->password = password_hash($_POST['password'], PASSWORD_ARGON2I) ;
//            $user->password_confirmation = password_hash($_POST['passwordConfirmation'], PASSWORD_ARGON2I) ;
//            $userNotification = $user->save();
//
//            if($userNotification == true) {
//                $this->notifier->error('new user register');
//            }
//        }
        $messages = NULL;
        $data = [];
        if($request->getMethod() == 'POST') {
            $data = $request->getParsedBody();

            try {
                $this->validator->validate(
                    $data, [
                        'name' => ['required','min:1'],
                        'last_name' => ['required','min:1'],
                        'email' => ['required','email','unique:users,email'],
                        'phone' => ['required','min:10'],
                        'password' => ['required','min:8','confirmed'],
                        'password_confirmation' => ['required','min:8'],
                    ]
                );

                $user = new User();
                    $user->first_name = $data['name'];
                    $user->last_name = $data['last_name'];
                    $user->email = $data['email'];
                    $user->phone = $data['phone'];
                    $user->password = $data['password'];
                    $user->password_confirmation = $data['password_confirmation'];
                    $user->save();

            } catch (ValidationException $e) {
                $messages = $e->validator->errors();
            }
        }

        return $this->renderer->make('shop-registration',array_merge([
            'messages' => $messages
        ]),$data);
    }
}