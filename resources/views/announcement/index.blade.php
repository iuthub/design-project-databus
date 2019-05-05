@extends('layouts.app')

@section('content')
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
        <a href="#">{{$record->user->login}}</a> at {{ $record->date}}</p>
        <small class="text-muted"><i class="material-icons small">visibility</i>{{$record->views}} views</small>
        <small class="text-muted"><i class="material-icons small">comment</i>{{count($record->comments)}} commments</small>
      </p>
      <div class="float-left">
        <a href='{{route("announcement.view", ["id"=>$record->id])}}' class="btn btn-success"><i class="material-icons small">assignment</i> View</a>
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