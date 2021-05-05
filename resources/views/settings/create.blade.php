@extends('layouts.dashboard')


@section('content')
    <div class="heading">
        <h1 class="card-title">Settings</h1>
    </div>

    <div class="container-fluid">


        <form method="POST" action="/settings/create/save" class="mrsif-form">
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
            <input class="form-control" type="text" name="importtax" placeholder="Enter import tax" value="0"><br/>

            <label>Local tax</label>
            <input class="form-control" type="text" name="localtax" placeholder="Enter local tax" value="0"><br/>

            <label>Gateway fee (%)</label>
            <input class="form-control" type="text" name="gatewayfee" placeholder="Enter gateway fee %" value="0"><br/>

            <label>Gateway fixed price</label>
            <input class="form-control" type="text" name="gatewayfixed" placeholder="Enter gateway fixed" value="0"><br/>

            <input type="submit" name="submit" class="btn btn-primary">
        </form>


        

    </div>
@endsection

<script>

</script>
