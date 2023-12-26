@extends('dashboard.layout.layout')
@section('content')
    <div class="card pb-3">
        <h5 class="card-header">All Guardians</h5>
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ( $guardian as $data)
                  
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->number}}</td>
                        <td>{{$data->email}}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('guardian.details',$data->id)}}"><i class="bx bx-edit-alt me-1"></i>  View </a>

                                    <div class="dropdown-item"> 
                                        <form action="{{route('guardian.delete',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-light btn-sm ps-0"><i class="bx bx-trash "></i>Delete</button>
                                          </form>
                                    </div>
                                                                           
                                    {{-- @endif --}}
                                    
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
