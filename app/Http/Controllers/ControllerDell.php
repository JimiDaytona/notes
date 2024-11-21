<?php

namespace App\Http\Controllers;

use App\Models\Note;

class ControllerDell extends Controller
{
    public function destroy($id)
    {
        Note::destroy($id);
        return redirect('/');
    }

}
