<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReplayController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'comment_id' => 'required',
        ]);
        $replay = new Replay();
        $replay->message = $request->message;
        $replay->comment_id = $request->comment_id;
        $replay->user_id = auth()->user()->id;
        $replay->save();
        $replay = Replay::find($replay->id);
        return response()->json($replay);
    }
    public function update(Request $request, Replay $replay)
    {
        $request->validate([
            'message' => 'required',
        ]);
        $replay->message = $request->message;
        $replay->save();
        return response()->json($replay);
    }
    public function delete($id)
    {
        $replay = Replay::find($id);
        $replay->delete();
        return response()->json($replay);
    }
}
