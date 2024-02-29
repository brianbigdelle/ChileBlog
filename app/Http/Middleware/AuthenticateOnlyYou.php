<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateOnlyYou
{
    public function handle($request, Closure $next)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        // Replace 'your_email@example.com' and 'your_password' with your actual credentials
        if ($credentials['email'] === 'brianbigdelle@gmail.com' && $credentials['password'] === '16hollow') {
            return $next($request);
        }

        // If credentials don't match, deny access
        return redirect()->route('login')->with('error', 'Unauthorized access.');
    }
}
