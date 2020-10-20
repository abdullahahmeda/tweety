<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DeleteUnUploadedFiles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($request->method() == 'GET') {
            $uploadedFiles = session('uploaded_files', []);
            File::delete($uploadedFiles);
            session([ 'uploaded_files' => [] ]);
        }

        return $response;
    }
}
