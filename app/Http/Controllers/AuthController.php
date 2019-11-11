<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * View Home Page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show Login Form.
     *
     * @return \Illuminate\View\View
     */
    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * Do Login.
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt([
            'email'    => $request->get('email'),
            'password' => $request->get('password'),
        ], $request->get('remember'))) {
            return redirect()
                ->intended('/page')
                ->with('flash_notification.message', 'Вход успешен')
                ->with('flash_notification.level', 'success');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('flash_notification.message', 'Не правильній логин или пароль')
            ->with('flash_notification.level', 'danger');
    }

    /**
     * Logout.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/')
            ->with('flash_notification.message', 'Выход успешен')
            ->with('flash_notification.level', 'success');
    }
}
