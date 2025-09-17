<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware // This middleware is used to specify which hosts are trusted by the application.
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function hosts(): array
    {
        return [
            $this->allSubdomainsOfApplicationUrl(), // This method returns a pattern that matches all subdomains of the application's URL.
            'localhost', // This allows requests from localhost.

        ];
    }
}
 //this middleware is typically used to enhance security 
 // by ensuring that only requests from trusted hosts are processed by the application.