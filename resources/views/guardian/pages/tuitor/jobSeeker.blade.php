@extends('guardian\layout\layout')
@section('content')
    <div class="card pb-3">
        <h5 class="card-header">Tuitor</h5>
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
                        {{-- <th>City</th>
                        <th>Address </th> --}}
                        <th>Genger</th>
                        <th>Status</th>
                        {{-- <th>Class</th>
                        <th>Subjects</th>
                        <th>Salary </th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ( $jobSeeker as $data)
                  
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->user->name}}</td>
                        {{-- <td>{{$data->city->city_name}}</td> --}}
                        <td>{{$data->user->gender}}</td>

                        <td>
                            @if ($data->status == 0)
                                <span class="text-danger">Pending</span>
                            @else
                            <span class="text-success">Accepted</span>
                            @endif
                        </td>
                        {{-- <td>{{$data->category->category_name}}</td>
                        <td>{{$data->studentClass->class_name}}</td>
                        <td>{{$data->subject->subject_name}}</td>
                        <td>{{$data->salary}}</td> --}}
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                
                                <div class="dropdown-menu">
                                    {{-- <a class="dropdown-item" href="{{route('guardian_tuitor.edit',$data->tuitor_id)}}"><i class="bx bx-edit-alt me-1"></i>  Accept</a> --}}
                                    <div class="dropdown-item"> 
                                        <form action="{{route('apply_accept',$data->id)}}" method="post">
                                            @csrf
                                            {{-- @method('put') --}}

                                            @if ($data->status == 0)
                                                <button type="submit" class="btn btn-primary btn-sm"></i>Accept</button>
                                            @else
                                                <button type="submit" class="btn btn-primary btn-sm disabled"></i>Already Accepted</button>
                                            @endif
                                            
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
