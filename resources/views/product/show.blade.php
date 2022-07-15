@extends('product.layout')

@section('content')
<div class="container">
        <div class="row mt-5 d-flex justify-content-center align-items-center ">
            <div class="col-md-6">
                <div class="card  mt-5">
                    <div class="row mt-3">
                        <div class="col-md-12">

                            <div class="card-body">
                               <p><strong>{{$product->name}}</strong></p>
                               <p><strong>{{$product->price}}</strong></p>
                               <p>{{$product->details}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection