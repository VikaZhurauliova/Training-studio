<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Services\AccountService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
}
