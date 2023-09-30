@extends('customers.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Tambah Pelanggan Baru</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Kembali</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('customers.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                <input type="string" name="nama" class="form-control" placeholder="Name">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Gender:</strong>

                <input type="string" name="gender" class="form-control" placeholder="gender">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                <input type="string" name="email" class="form-control" placeholder="email">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No Telepon:</strong>

                <input type="string" name="phone" class="form-control" placeholder="Nomor">

            </div>

        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">simpan</button>

        </div>

    </div>

   

</form>

@endsection