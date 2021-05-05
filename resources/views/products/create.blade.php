@extends('layouts.dashboard')


@section('content')
    <div class="heading">
        <h1 class="card-title">Add new product</h1>
    </div>

    <div class="container-fluid">


        <form method="POST" action="/products/create/save" class="mrsif-form">
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

            
            <label>Product name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter product name" value=""><br/>

            <label>Link to wholesale</label>
            <input class="form-control" type="text" name="link" placeholder="Enter link to wholesale" value=""><br/>

            <label>Buy price from wholesale</label>
            <input class="form-control" type="text" name="buyprice" placeholder="Enter Buy price from wholesale" value=""><br/>

            <label>Sell price</label>
            <input class="form-control" type="text" name="sellprice" placeholder="Enter Sell price" value=""><br/>

            <input type="submit" name="submit" class="btn btn-primary">
        </form>


        

    </div>
@endsection

<script>

</script>
