<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(){

        request()->validate([
            // min 3 characters, max 240 (idea validation)
            'idea' => 'required|min:3|max:240'
        ]);

        $idea = Idea::create(
            [
            'content' => request()->get('idea', ''),
        ]
    );
        return redirect()->route('dashboard')->with('success', 'Idea was created successfully!');
    }

    public function destroy($id){
        Idea::where('id', $id)->firstOrFail()->delete();

        return redirect()->route('dashboard')->with('success', 'Idea was deleted successfully!');
    }
}
