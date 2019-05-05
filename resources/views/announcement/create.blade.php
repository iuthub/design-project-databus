@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add announcement</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('announcement.create') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>

                            <div class="col-md-6">
                                <textarea id="content" rows=3 class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" name="content" value="{{ old('content') }}" required autocomplete="content" autofocus>
                                </textarea>
                                @if ($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="extra" class="col-md-4 col-form-label text-md-right">Extra</label>

                            <div class="col-md-6">
                                <input id="content" type="text" class="form-control{{ $errors->has('extra') ? ' is-invalid' : '' }}" name="extra" value="{{ old('extra') }}" required autocomplete="extra" autofocus></textarea>
                                @if ($errors->has('extra'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('extra') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <select class="browser-default custom-select" name="city_id" required>
                                    <option value="0" selected>Tashkent</option>
                                    <option value="1">Ne tashkent</option>
                                </select>

                                @if ($errors->has('city_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>
                            <div class="col-md-6">
                                <select class="browser-default custom-select" name="type" required>
                                    <option value="0" selected>Announcement</option>
                                    <option value="1">Event</option>
                                </select>

                                @if ($errors->has('type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control{{ $errors->has('extra') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" name="image">
                                <!-- <input id="content" type="text"  required autocomplete="extra" autofocus></textarea> -->
                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>
                        
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="submit" class="btn btn-primary" style="margin-top: 5px" value="Save!">
                        </div>

                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection