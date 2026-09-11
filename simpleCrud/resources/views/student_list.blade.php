@extends('layouts.main')

@push('title')
    <title>Student List</title>
@endpush

@section('main-section')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Student_ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $std)
                        <tr>
                            <td>{{ $std->std_id }}</td>
                            <td>{{ $std->name }}</td>
                            <td>{{ $std->f_name }}</td>
                            <td>{{ $std->email }}</td>
                            <td>
                             {{ ucfirst($std->gender) }}
                            </td>
                            <td>{{ $std->address }}</td>
                            <td>
                                @if ($std->status == 1)
                                    <a href=''>
                                        <span class="badge rounded-pill bg-success"'>Active</span>
                                    </a>    
                                @else
                                    <a href=''>
                                        <span class="badge rounded-pill bg-danger"'>Inactive</span>                                    
                                    </a>    
                                @endif
                            </td>
                            <td>
                                <a id="" class="btn btn-sm btn-primary" href="#" role="button">Edit</a>
                                <a id="" class="btn btn-sm btn-danger" href="#" role="button">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
