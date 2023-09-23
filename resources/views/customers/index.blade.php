@extends('customers.layout')

@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Pelanggan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('customers.create') }}"> Tambah Pelanggan</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            
            <th width="280px">Aksi</th>
        </tr>

        @foreach ($customer as $customers)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $customers->nama }}</td>
            <td>{{ $customers->gender }}</td>
            <td>{{ $customers->email }}</td>
            <td>{{ $customers->phone }}</td>
            <td>
                <form action="{{ route('customers.destroy',$customers->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('customers.show',$customers->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('customers.edit',$customers->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $customer->links() !!}
@endsection