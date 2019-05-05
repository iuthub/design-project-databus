@extends('layouts.app')

@section('content')
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"-->
  <span>
    
  <div class="card" style="margin-right: 20%; margin-left: 20%">

    
      <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLSDtdAOHXZCEEL8ScUqAENlq8-72Xnu8xt9zN2TD9T4O7vYGsqw" alt="Card image cap" >
      <div class="card-body">
        <h5 class="card-title">Card title that wraps to a new line</h5>
        <p class="card-text">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32..</p>
      

      <div class="float-right" style="margin-bottom: 10px">
        <p class="card-text"><p class="text-muted">
        <a href="#">Aziz The Sloth</a> 3 mins ago</p>
        <a href="#"><i class="material-icons medium float-right" style="margin: 10px" >thumb_up</i></a>
        <a href="#"><i class="material-icons medium float-right" style="margin: 10px" >thumb_down</i></a>
      </div>
      </div>
   
    
      
</div>
<hr>

<div style="margin-left: 20%; margin-right: 20%">
    <p class="h2" style="margin-left: 5%">Comments:</p>

   <div class="card" style="margin-right: 5%; margin-left: 10%; margin-top: 10px;">

    <div class="card p-3">
    <div style=" margin: 10px; margin-left: 15px;">
      <a href="#to_user_profile" style="font-size: 16px; text-align: bottom;"><img class="card-img-top rounded-circle float-left "  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_DZ6ET1hmhXoNt9wNyvv2IXAzIfoievwbHcKAqKuFcvTiWndcLw" alt="Card image cap" style="width: 50px; height: 50px;">  Abihamid Abdumalikov</a>
    </div>
    <blockquote class="blockquote mb-0 card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </blockquote>
  </div>
    
    </div>


<div class="card" style="margin-right: 5%; margin-left: 10%;margin-top: 10px;">

    <div class="card p-3">
    <div style=" margin: 10px; margin-left: 15px;">
      <a href="#to_user_profile" style="font-size: 16px; text-align: bottom;"><img class="card-img-top rounded-circle float-left "  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_DZ6ET1hmhXoNt9wNyvv2IXAzIfoievwbHcKAqKuFcvTiWndcLw" alt="Card image cap" style="width: 50px; height: 50px;">  Abihamid Abdumalikov</a>
    </div>
    <blockquote class="blockquote mb-0 card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </blockquote>
  </div>
    
    </div>



  </div>
<div class="card" style="margin-right: 20%; margin-left: 23%;margin-top: 10px;">

    <div class="card p-3 ">
    <div style=" margin: 10px; margin-left: 15px;">
      <a href="#to_user_profile" style="font-size: 16px; text-align: bottom;"><img class="card-img-top rounded-circle float-left "  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_DZ6ET1hmhXoNt9wNyvv2IXAzIfoievwbHcKAqKuFcvTiWndcLw" alt="Card image cap" style="width: 50px; height: 50px;">  Abihamid Abdumalikov</a>
    </div>
    <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="3" id="comment" ></textarea>
  <input type="submit" class="btn btn-info" style="margin-top: 5px" value="Submit Button">
</div>
  </div>
    
    </div>

  </span>



<!--   no photo   


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








-->




@endsection
