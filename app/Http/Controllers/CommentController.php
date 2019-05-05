<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::all();
        return view("comments.index")
                    ->with("data", $comments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), []); //todo:: add rules
        $validator->validate();
        $data = $request->all();
        $announce_id = $data['announcement_id'];
        $data['likes'] = 0;
        $data['dislikes'] = 0;
        Comment::create($data);
        return redirect()
                ->route("announcement.view", ['id' => $announce_id])
                ->with("info", "Added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $comments = Comment::find($request->id);
        return view("comments.view")
                ->with("data", $comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //no edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //no update
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = $request->all();
        $com = Comment::find($request->id);
        $announce_id = $com->announcement->id;
        $com->delete();
        return redirect()
            ->route("announcement.view", ['id' => $announce_id])
            ->with("info", "Deleted!");
    }
}
