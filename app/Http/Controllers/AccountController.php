<?php

namespace App\Http\Controllers;

use App\Events\ChangePassword;
use App\Http\Requests\AccountRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Services\AccountService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function account()
    {

        return view('auth.account', [
            'user' => Auth::user(),
        ]);
    }

    public function updateAccount(AccountRequest $request, AccountService $accountService): RedirectResponse
    {
        $accountService->updateAccount($request->validated());
        return back();
    }

    public function changePassword(ChangePasswordRequest $request)
    {

        ChangePassword::dispatch($request->user());
        return redirect()->back();
    }

}
