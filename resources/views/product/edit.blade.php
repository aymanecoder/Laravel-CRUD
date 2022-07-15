@extends('product.layout')

@section('content')
<div class="container">
        <div class="row mt-5 d-flex justify-content-center align-items-center ">
            <div class="col-md-6">
                <div class="card  mt-5">
                    <div class="row mt-3">
                        <div class="col-md-12">

                            <div class="card-body">
                                <form action = "{{route('product.update',$product->id)}}" method = "POST" >
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="exampleInputName" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputName"
                                          value="{{$product->name}}" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPrice" class="form-label">Price</label>
                                        <input type="number" name="price" class="form-control"
                                            aria-describedby="priceHelp" value="{{$product->price}}" >

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputdetails" class="form-label">details</label>
                                        <textarea class="form-control" name="details" aria-label="With textarea">{{$product->details}}</textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection