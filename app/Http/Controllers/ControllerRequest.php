<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class ControllerRequest extends Controller
{


public function handle (Request $request)
{
    if($request->filled(['title', 'text'])){
        $new_note = new Note();
        $new_note->title = $request->input('title');
        $new_note->text = $request->input('text');
        $new_note->user_id = $request->user()->id;
        $new_note->save();
    }
        return redirect('/');

}


}
