@extends('layouts.app')

@section('content')
@if(Session::has('info')) 
  <div class="row"> 
    <div class="col-md-12"> 
      <p class="alert alert-info">{{ Session::get('info') }}</p> 
    </div> 
  </div> 
@endif
@isset($info)
<div class="text-center"><h1>{{$info}}'s announcements</h2></div>
@endif
<div class="card-columns">
  @foreach ($data as $record)
  <div class="card">
    @if($record->photo)
      <img class="card-img-top"src="{{url($record->photo->url)}}" alt="Card image cap">
    @elseif((rand(0, 1)))
      <img class="card-img-top"src="https://picsum.photos/400" alt="Card image cap">
    @endif
    <div class="card-body">
      <h5 class="card-title">{{$record->title}}</h5>
      <p class="card-text">{{$record->content}}</p>
      <p class="card-text"><p class="text-muted">
        <a href="{{route('user.index', $record->user->id)}}">{{$record->user->login}}</a> at {{ $record->date}}</p>
        <small class="text-muted"><i class="material-icons small">visibility</i>{{$record->views}} views</small>
        <small class="text-muted"><i class="material-icons small">comment</i>{{count($record->comments)}} commments</small>
      </p>
      <div class="float-left">
        <a href='{{route("announcement.view", ["id"=>$record->id])}}' class="btn btn-success"><i class="material-icons small">assignment</i> View</a>
        @if(Auth::user()->status == 1)
          <a href='{{route("announcement.delete", ["id"=>$record->id])}}' class="btn btn-danger"><i class="material-icons small">delete</i> Delete</a>
          <a href='{{route("announcement.edit", ["id"=>$record->id])}}' class="btn btn-primary"><i class="material-icons small">assignment</i> Edit</a>
        @elseif(Auth::user()->id == $record->id)
          <a href='{{route("announcement.edit", ["id"=>$record->id])}}' class="btn btn-primary"><i class="material-icons small">assignment</i> Edit</a>
        @endif
      </div>
      <div class="float-right" style="margin-bottom: 10px">
        <a href="{{route('announcement.like', ['id'=> $record->id, 'rate' => 1])}}"><i class="material-icons medium" style="margin: 10px" >thumb_up</i>
          {{ $record->likes}} 
        </a>
        <a href="{{route('announcement.like', ['id'=> $record->id, 'rate' => -1])}}"><i class="material-icons medium" style="margin: 10px" >thumb_down</i>
          {{ $record->dislikes}} 
        </a>
      </div>
    </div>
  </div>
  @endforeach
</div>





















@endsection