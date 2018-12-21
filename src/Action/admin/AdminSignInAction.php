<?php
namespace NtSchool\Action\admin;

use Illuminate\Validation\ValidationException;
use NtSchool\Model\Admin;
use Psr\Http\Message\ServerRequestInterface;

final class AdminSignInAction
{
    protected $renderer;
    /** @var \Illuminate\Validation\Factory */
    protected $validator;

    public function __construct($view, $validator)
    {
        $this->renderer = $view;
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
                        'email' => ['required', 'email', 'unique:users,email'],
                        'password' => ['required', 'min:8'],
                    ]
                );


            } catch (ValidationException $e) {
                $messages = $e->validator->errors();
            }
            $adminPassword = NULL;
            $admins = Admin::where('email', $data['email'])->get();
            if ($admins > 0) {
                foreach ($admins as $admin) {
                    $adminPassword = $admin->password;
                }

                if (strlen($data['password']) > 7) {
                    $verify = password_verify($data['password'], $adminPassword);

                    if($verify == 'TRUE') {
                        header("Location:/admin");
                    } else {
                        $messagesPassword = 'не верный пароль';
                    }
                }
            }
        }
        return $this->renderer->make('admin.admin-signIn',array_merge([
            'messages' => $messages,
            'messagesPassword' => $messagesPassword
        ]),$data);
    }

}