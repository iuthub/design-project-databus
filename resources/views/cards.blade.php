@extends('layouts.app')

@section('content')
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"-->
<div class="card-columns">
  <div class="card">

	<div style=" margin: 10px; margin-left: 15px;">
  		<a href="#to_user_profile" style="font-size: 16px; text-align: bottom;"><img class="card-img-top rounded-circle float-left "  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_DZ6ET1hmhXoNt9wNyvv2IXAzIfoievwbHcKAqKuFcvTiWndcLw" alt="Card image cap" style="width: 50px; height: 50px;"> Abihamid Abdumalikov</a>
  	</div>
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLSDtdAOHXZCEEL8ScUqAENlq8-72Xnu8xt9zN2TD9T4O7vYGsqw" alt="Card image cap" style="margin-top: 10px;">


    <div class="card-body">
      <h5 class="card-title">Card title that wraps to a new line</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
   


   	<i class="material-icons md-18" style="margin: 10px" >thumb_up</i>
    <i class="material-icons md-18" style="margin: 10px" >thumb_down</i>

   	
	
  </div>



<!--   no photo   -->


  <div class="card p-3">
  	<div style=" margin: 10px; margin-left: 15px;">
  		<a href="#to_user_profile" style="font-size: 16px; text-align: bottom;"><img class="card-img-top rounded-circle float-left "  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_DZ6ET1hmhXoNt9wNyvv2IXAzIfoievwbHcKAqKuFcvTiWndcLw" alt="Card image cap" style="width: 50px; height: 50px;">  Abihamid Abdumalikov</a>
  	</div>
    <blockquote class="blockquote mb-0 card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>






  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_kzJ0rydH34OAftFVHOlKNkEywRfLw3qWgb_xRBk3GkDxq4CU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

</div>





















@endsection
