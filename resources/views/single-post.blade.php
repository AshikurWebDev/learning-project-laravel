
    @extends('layout.app')
    @section('title', 'Laravel Curd Operation Single page post')
   <section>
        
             @section('content')
             <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card mt-5">
                            <div class="card-header">
                                <h2 class="text-center"> Post Details </h2>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="title">Post Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="Enter the title">
                                    </div><br>
                                    <div class="form-group">
                                        <label for="body">Post Title</label>
                                        <textarea type="text" name="body" class='form-control' placeholder="Enter the body">{{$post->body}}</textarea>
                                    </div><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             @endsection   
        
   </section>
