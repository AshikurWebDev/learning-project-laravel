
    @extends('layout.app')
    @section('title', 'Laravel Curd Operation')
   <section>
        
             @section('content')
             <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card mt-5">
                            <div class="card-header">
                                <h2 class="text-center"> Add New Post</h2>
                            </div>
                            <div class="card-body">
                                @if(Session::has('post-created'))
                                    <div class="alert alert-success" role="alert">{{Session::get('post-created')}}</div>
                                @endif
                                <form method="POST" action="{{'add-post'}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Post Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter the title">
                                    </div><br>
                                    <div class="form-group">
                                        <label for="body">Post Title</label>
                                        <input type="text" name="body" class='form-control' placeholder="Enter the body">
                                    </div><br>
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             @endsection   
        
   </section>
