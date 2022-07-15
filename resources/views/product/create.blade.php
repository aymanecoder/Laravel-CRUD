@extends('product.layout')

@section('content')
<div class="container">
        <div class="row mt-5 d-flex justify-content-center align-items-center ">
            <div class="col-md-6">
                <div class="card  mt-5">
                    <div class="row mt-3">
                        <div class="col-md-12">

                            <div class="card-body">
                                <form action = "{{route('product.store')}}" method = "POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputName" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputName"
                                           ">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPrice" class="form-label">Price</label>
                                        <input type="number" name="price" class="form-control"
                                            aria-describedby="priceHelp" " >

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputdetails" class="form-label">details</label>
                                        <textarea class="form-control" name="details" aria-label="With textarea"></textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection