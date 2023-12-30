@extends('dashboard.layout.layout')
@section('content')
    <div class="card pb-3">
        <h5 class="card-header">All Accepted Data</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Email</th>
                        {{-- <th>Apply</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ( $acceptedData as $data)
                  
                    <tr>
                        <td>{{$data->user->id}}</td>
                        <td>{{$data->user->name}}</td>
                        <td>{{$data->user->number}}</td>
                        <td>{{$data->user->email}}</td>
                        @if ($data->status == 1)
                            <td class="text-success">Approved</td>
                        @else
                            <td class="text-danger">Pending</td>
                        @endif
                        {{-- <td>{{$data->user->where('role',2)->find()}}</td> --}}
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('acceptedDetails',$data->id)}}"><i class="bx bx-edit-alt me-1"></i>  View </a>

                                    <div class="dropdown-item"> 
                                        <form action="{{route('job_seeker.delete',$data->id)}}" method="post">
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
