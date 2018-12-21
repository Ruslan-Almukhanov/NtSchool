<?php
namespace NtSchool\Action\admin;

use Illuminate\Validation\ValidationException;
use NtSchool\Model\Admin;
use Psr\Http\Message\ServerRequestInterface;
use Ruslan\Notifier\NotifierObserverInterface;

class AdminRegistrationAction
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
        $messages = NULL;
        $data = [];
        if($request->getMethod() == 'POST') {
            $data = $request->getParsedBody();

            try {
                $this->validator->validate(
                    $data, [
                        'name' => ['required','min:1'],
                        'email' => ['required','email','unique:users,email'],
                        'password' => ['required','min:8','confirmed'],
                        'password_confirmation' => ['required','min:8'],
                    ]
                );

                $admin = new Admin();
                $admin->name = $data['name'];
                $admin->email = $data['email'];
                $admin->password = password_hash($data['password'],PASSWORD_ARGON2I);
                $admin->password_confirmation = password_hash($data['password_confirmation'],PASSWORD_ARGON2I);
                $notifierAdmin = $admin->save();

                if($notifierAdmin == true) {
                $this->notifier->info('new admin register');
                header("Location:/admin-signin");
            }

            } catch (ValidationException $e) {
                $messages = $e->validator->errors();
            }
        }
        return $this->renderer->make('admin.admin-registration',array_merge([
            'messages' => $messages
        ]),$data);
    }
}