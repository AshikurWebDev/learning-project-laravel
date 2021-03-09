
    @extends('layout.app')
    @section('title', 'Laravel Curd Operation Update the Post')
   <section>
        
             @section('content')
             <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card mt-5">
                            <div class="card-header">
                                <h2 class="text-center">Edit Post Details </h2>
                            </div>
                            <div class="card-body">
                                  @if(Session::has('post-updated'))
                                    <div class="alert alert-success" role="alert">{{Session::get('post-updated')}}</div>
                                  @endif
                                <form method="POST" action="/update-post">
                                   @csrf
                                    <input type="hidden" name="id" value="{{$post->id}}">
                                    <div class="form-group">
                                        <label for="title">Post Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="Enter the title">
                                    </div><br>
                                    <div class="form-group">
                                        <label for="body">Post Title</label>
                                        <textarea type="text" name="body" class='form-control' rows="3" placeholder="Enter the body">{{$post->body}}</textarea>
                                    </div><br>
                                    <input type="submit" class="btn btn-success" value="Update">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             @endsection   
        
   </section>
