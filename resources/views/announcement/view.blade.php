@extends('layouts.app')

@section('content')
  @if(Session::has('info')) 
  <div class="row"> 
    <div class="col-md-12"> 
      <p class="alert alert-info">{{ Session::get('info') }}</p> 
    </div> 
  </div> 
  @endif

  <span>
  
  <div class="card" style="margin-right: 20%; margin-left: 20%">
      @if($data->photo)
        <img class="card-img-top"src="{{url($data->photo->url)}}" alt="Card image cap">
      @elseif((rand(0, 1)))
        <img class="card-img-top"src="https://picsum.photos/400" alt="Card image cap">
      @endif
      <div class="card-body">
        <h5 class="card-title">{{$data->title}}</h5>
        <p class="card-text">{{$data->content}}</p>
      <div class="float-right" style="margin-bottom: 10px">
        <p class="card-text"><p class="text-muted">
        <a href="#">{{$data->user->login}}</a> at {{ $data->date}}</p>
        <a href="{{route('announcement.like', ['id'=> $data->id, 'rate' => 1])}}"><i class="material-icons medium" style="margin: 10px" >thumb_up</i>
          {{ $data->likes}} 
        </a>
        <a href="{{route('announcement.like', ['id'=> $data->id, 'rate' => -1])}}"><i class="material-icons medium" style="margin: 10px" >thumb_down</i>
          {{ $data->dislikes}} 
        </a>
      </div>
      </div>
</div>

<div style="margin-left: 20%; margin-right: 20%">
    <!-- <p class="h2" style="margin-left: 5%">Comments:</p> -->
    @foreach ($data->comments as $com)
    <div class="card" style="margin-right: 5%; margin-left: 10%; margin-top: 10px;">
    <div class="card p-3">
    <div style=" margin: 10px; margin-left: 15px;">
      <a href="" style="font-size: 16px; text-align: bottom;">
        <img class="card-img-top rounded-circle float-left" src="https://picsum.photos/400" alt="Card image cap" style="width: 50px; height: 50px;">
      </a>
      <p style="position: absolute; top: 40px; left: 90px;">{{$com->user->name}}</p>
    </div>
    <blockquote class="blockquote mb-0 card-body">
      <p>{{$com->message}}</p>
      <p class="card-text"><small class="text-muted">At {{$com->created_at}}</small></p>
    </blockquote>
    </div>
    </div>
    @endforeach
<div class="card" style="margin-right: 20%; margin-left: 23%;margin-top: 10px;">
    <div class="card p-3 ">
    <div style=" margin: 10px; margin-left: 15px;">
      <a href="" style="font-size: 16px; text-align: bottom;">
        <img class="card-img-top rounded-circle float-left" src="https://picsum.photos/400" alt="Card image cap" style="width: 50px; height: 50px;">
      </a>
      <p style="position: absolute; top: 40px; left: 90px;">{{Auth::user()->name}}</p>
    </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <form method="POST" action="{{ route('comment.create') }}">
        @csrf
        <textarea name="message" class="form-control" rows="3" id="comment"></textarea>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <input type="hidden" name="announcement_id" value="{{$data->id}}">
        <input type="submit" class="btn btn-primary" style="margin-top: 5px" value="Comment!">
      </form>
    </div>
    </div>
    </div>

  </span>
@endsection
