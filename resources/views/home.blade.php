@extends('layouts.dashboard')


@section('content')
    <div class="heading">
        <h1 class="card-title">Products</h1>
    </div>


    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>
                    Product name
                </th>
                <th>
                    Link to product 
                </th>
                <th>
                    Price Bought for
                </th>
                <th>
                    Price to Sell for
                </th>
                <th>
                    Margin
                </th>
                <th>
                    -10% margin
                </th>
                <th>
                    -20% margin
                </th>
                <th>
                    -30% margin
                </th>
                <th>

                </th>
            </tr>
        </thead>
        <tbody id="productTable">
            @foreach($products as $item)
                <tr>
                    <td>
                        {{$item->name}}
                    </td>
                    <td>
                        <a href="{{$item->link}}" target="_blank"><span class="material-icons">link</span></a>
                    </td>
                    <td>
                        {{($item->buyprice + (($item->buyprice / 100) * $settings->importtax))}} €
                    </td>
                    <td>
                        {{$item->sellprice}} €
                    </td>
                    <td>
                        @php
                            $priceWithImportTax = ($item->buyprice + (($item->buyprice / 100) * $settings->importtax));   
                            $localTaxPrice = (($item->sellprice / 100) * $settings->localtax);
                            $gatewayPrice = (($item->sellprice / 100) * $settings->gatewayfee);
                            $finalMargin = $item->sellprice - $priceWithImportTax - $localTaxPrice - $settings->gatewayfixed;
                        @endphp

                        {{$finalMargin}} €
                    </td>
                    <td> 
                            @php
                            $discountedPrice10 = ($item->sellprice * 0.9);
                            $priceWithImportTax = ($item->buyprice + (($item->buyprice / 100) * $settings->importtax));   
                            $localTaxPrice10 = (($discountedPrice10 / 100) * $settings->localtax);
                            $gatewayPrice10 = (($discountedPrice10 / 100) * $settings->gatewayfee);
                            $finalMargin10 = $discountedPrice10 - $priceWithImportTax - $localTaxPrice - $settings->gatewayfixed;
                        @endphp

                        {{$finalMargin10}} €
                    </td>
                    <td> 
                            @php
                            $discountedPrice20 = ($item->sellprice * 0.8);
                            $priceWithImportTax = ($item->buyprice + (($item->buyprice / 100) * $settings->importtax));   
                            $localTaxPrice20 = (($discountedPrice20 / 100) * $settings->localtax);
                            $gatewayPrice20 = (($discountedPrice20 / 100) * $settings->gatewayfee);
                            $finalMargin20 = $discountedPrice20 - $priceWithImportTax - $localTaxPrice - $settings->gatewayfixed;
                        @endphp

                        {{$finalMargin20}} €
                    </td>
                    <td> 
                            @php
                            $discountedPrice30 = ($item->sellprice * 0.7);
                            $priceWithImportTax = ($item->buyprice + (($item->buyprice / 100) * $settings->importtax));   
                            $localTaxPrice30 = (($discountedPrice30 / 100) * $settings->localtax);
                            $gatewayPrice30 = (($discountedPrice30 / 100) * $settings->gatewayfee);
                            $finalMargin30 = $discountedPrice30 - $priceWithImportTax - $localTaxPrice - $settings->gatewayfixed;
                        @endphp

                        {{$finalMargin30}} €
                    </td>
                    <td>
                        <a href="/products/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!!$products->links("pagination::bootstrap-4")!!}

        

@endsection
@section('scripts')
    <script>
        $(window).on('load', function(){

        });
    </script>
@endsection