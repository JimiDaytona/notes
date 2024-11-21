<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class ControllerProx extends Controller
{
    public function show(Request $request)
    {
        if ($request->has('text') and $request->has('title')) {

            return app(ControllerRequest::class)->handle($request);

        } else {
            return app(ControllerNote::class)->handle($request);
        }
    }
}
