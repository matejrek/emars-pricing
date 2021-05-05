@extends('layouts.dashboard')


@section('content')
    <div class="heading">
        <h1 class="card-title">Settings</h1>
    </div>

    <div class="container-fluid">
        @if($settings === null)
            <div class="menu">
                <ul class="menuList">
                    <li><a class="btn btn-primary" href="/settings/create">Create new</a></li>
                </ul>
            </div>
        @endif

        @if($settings != null)

            <form method="POST" action="/settings/save/{{$settings->id}}" class="mrsif-form">
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

                
                <label>Import tax</label>
                <input class="form-control" type="text" name="importtax" placeholder="Enter import tax" value="{{$settings->importtax}}"><br/>

                <label>Local tax</label>
                <input class="form-control" type="text" name="localtax" placeholder="Enter local tax" value="{{$settings->localtax}}"><br/>

                <label>Gateway fee (%)</label>
                <input class="form-control" type="text" name="gatewayfee" placeholder="Enter gateway fee %" value="{{$settings->gatewayfee}}"><br/>

                <label>Gateway fixed price</label>
                <input class="form-control" type="text" name="gatewayfixed" placeholder="Enter gateway fixed" value="{{$settings->gatewayfixed}}"><br/>

                <input type="submit" name="submit" class="btn btn-primary">
            </form>

        @endif
        

    </div>
@endsection

<script>

</script>
