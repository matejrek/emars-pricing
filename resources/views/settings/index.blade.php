@extends('layouts.dashboard')


@section('content')
    <div class="heading">
        <h1 class="card-title">Lessons</h1>
    </div>

    <div class="container">
        <div class="menu">
            <ul class="menuList">
                <li><a class="btn btn-primary" href="/settings/edit">Edit</a></li>
            </ul>
        </div>


        <form method="POST" action="/admin/lesson/{{$lesson->id}}/edit/save" class="mrsif-form">
            {{ csrf_field() }}

            @if(count($errors) >0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach( $errors->all() as $error) 
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            'importtax', 'localtax', 'gatewayfee', 'gatewayfixed',
            
            <label>Content</label>
            <input class="form-control" type="text" name="title" placeholder="Enter lesson title" value="{{$lesson['title']}}"><br/>

            <label>Content</label>
            <input class="form-control" type="text" name="description" placeholder="Enter lesson description" value="{{$lesson['description']}}"><br/>

            <label>Content</label>



            <input type="submit" name="submit" class="btn btn-primary">
        </form>
        

    </div>
@endsection

<script>

</script>
