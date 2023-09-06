<?php

namespace App\Http\Controllers;

use App\Events\ChangePassword;
use App\Http\Requests\AccountRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Services\AccountService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        session()->flash('success', 'Account has been successfully update.');

        return back();
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $request->validated();
        $user = $request->user();

        if ($user->password == $request->old_password) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            ChangePassword::dispatch($request->user());
        }

        return redirect()->back();
    }

}
