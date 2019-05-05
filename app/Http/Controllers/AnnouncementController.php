<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::with(["user", "comments", "photo"])
                            ->orderBy("created_at")
                            ->get();
        return view("announcement.index")
                ->with("data", $announcements); // change to index for annoucements
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("announcement.create");
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
        $data['views'] = 0;
        $data['likes'] = 0;
        $data['dislikes'] = 0;
        $data['district_id'] = 0;
        $data['status'] = 0;
        $data['lat'] = 0;
        $data['lng'] = 0;
        $data['date'] = date('Y-m-d');
        $an = Announcement::create($data);
        if($request->hasFile("image")) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $an->photo()->create([
                'announcement_id' => $an->id, 
                'url' => "images/".$imageName
            ]);
        }
        return redirect()
                ->route("announcement.index")
                ->with("info", "Created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $announcement = Announcement::with("comments")
                            ->find($request->id);
        $announcement->views = $announcement->views + 1;
        $announcement->save(); 
        return view("announcement.view")
                ->with("data", $announcement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $announcement = Announcement::find($request->id);
        return view("announcement.edit")
                ->with("data", $announcement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        //validation of request?
        $data = $request->all();
        $announcement = Announcement::find($request->id);
        $announcement->update($data);
        return redirect()
            ->route("announcement.view")
            ->with("info", "Updated!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $announcement = Announcement::find($request->id);
        // $announcement->delete();
        return redirect()
                ->route("announcement.index")
                ->with("info", "Deleted");

    }
}
