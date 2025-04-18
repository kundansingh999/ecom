<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // dd($request->all());
        $checkuser = User::where('email',$request->email)->orwhere('mobile_no',$request->email)->first();
        if($checkuser->status === 1){
            $request->authenticate();
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->admin===0){
                return redirect()->intended(route('/', absolute: false));
            }else{
                return redirect()->intended(route('admin/dashboard', absolute: false));
            }
            
        }else{
            $request->session()->flash('success', 'Your Account is blocked please contact Admin.');
            return back();
        }
        
         // return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}