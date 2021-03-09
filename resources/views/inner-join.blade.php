
    @extends('layout.app')
    @section('title', 'All Post')
    @section('content')
    <table class="table table-striped table-hover">
        <caption style = 'caption-side: top;' class="text-center h1 text-uppercase">Inner joined Table</caption>
        <thead class='table-dark'>
            <tr>
                <th scope="col">Student Name</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($results as $result)
                <tr>
                    <td>{{$result->name}}</td>
                    <td>{{$result->title}}</td>
                    <td>{{$result->body}}</td>
                </tr>
            @endforeach
        </tbody>
</table>

    @endsection
