@extends('layouts.dashboard')


@section('content')
    <div class="heading">
        <h1 class="card-title">Edit {{$product->name}}</h1>
    </div>

    <div class="container-fluid">

        @if($product != null)

            <form method="POST" action="/products/edit/save/{{$product->id}}" class="mrsif-form">
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
                <input class="form-control" type="text" name="name" placeholder="Enter product name" value="{{$product->name}}"><br/>

                <label>Link to wholesale</label>
                <input class="form-control" type="text" name="link" placeholder="Enter link to wholesale" value="{{$product->link}}"><br/>

                <label>Buy price from wholesale</label>
                <input class="form-control" type="text" name="buyprice" placeholder="Enter Buy price from wholesale" value="{{$product->buyprice}}"><br/>

                <label>Sell price</label>
                <input class="form-control" type="text" name="sellprice" placeholder="Enter Sell price" value="{{$product->sellprice}}"><br/>

                <input type="submit" name="submit" class="btn btn-primary">
            </form>

        @endif
        

    </div>
@endsection

<script>

</script>
