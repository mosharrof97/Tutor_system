@extends('dashboard.layout.layout')
@section('content')
    <div class="card pb-3">
        <h5 class="card-header">View Tuition Type</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @elseif (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                <thead class="table-light">
                    <tr>
                        <th>Tuition Id</th>
                        <th>Tuition Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ( $city as $data)
                  
                    <tr>
                        <td>{{$data->city_id}}</td>
                        <td>{{$data->city_name}}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('city.edit',$data->city_id)}}"><i class="bx bx-edit-alt me-1"></i>  Edit</a>
                                    <div class="dropdown-item"> 
                                        <form action="{{route('city.delete',$data->city_id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="bx bx-trash me-1"></i>Delete</button>
                                          </form>
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                          
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
