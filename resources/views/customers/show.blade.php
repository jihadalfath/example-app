@extends('customers.layout')

  

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Lihat Pelanggan</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Kembali</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                {{ $customer->nama }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Gender:</strong>

                {{ $customer->gender }}

            </div>

       
        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                {{ $customer->email }}

            </div>

   
        
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>No telepon:</strong>

                {{ $customer->phone }}

            </div>

        </div>

    </div>

@endsection