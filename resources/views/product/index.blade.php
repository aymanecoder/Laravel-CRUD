@extends('product.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="card my-5">

            <div class="card-body">

                <h5 class="card-title text-center display-5">Welcome to Product Center</h5>

                        <a href="{{route('product.create')}}" class="btn btn-primary ">Add</a>
                        <div class ="container mt-2 ">
                              @if($message = Session::get('success'))
                        
                        <div class="alert alert-success" role="alert">
                              {{$message}}
                        </div>
                        @endif
                    </div>
                <table class="table my-5">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ProductName</th>
                            <th scope="col">ProductPrice</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $item )
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm">
                                            <a class="btn btn-success" href="{{route('product.show',$item->id)}}">show</a>

                                            
                                        </div>
                                    
                                    
                                        <div class="col-sm">
                                            <a class="btn btn-warning" href="{{route('product.edit',$item->id)}}">edit</a>
                                        </div>
                                    
                                    <div class="col-sm">
                                        <form action="{{route('product.destroy',$item->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                                    <button class = "btn btn-danger">delete</button>
                                            </form>
                                    </div>
                                    </div>
                                </td>
                            
                            </tr>

                       @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>


@endsection