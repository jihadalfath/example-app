@extends('customers.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Pelanggan</h2>

            </div>

            <div class="pull-right">

                <a alignright class="btn btn-primary" href="{{ route('customers.index') }}"> Kembali</a>

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

  

    <form action="{{ route('customers.update',$customer->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama:</strong>

                    <input type="string" name="nama" value="{{ $customer->nama }}" class="form-control" placeholder="Nama">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Gender:</strong>

                    <textarea class="form-control" style="height:150px" name="gender" placeholder="gender">{{ $customer->gender }}</textarea>

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Email:</strong>

                    <textarea class="form-control" style="height:150px" name="email" placeholder="email">{{ $customer->email }}</textarea>

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>No telepon:</strong>

                    <textarea class="form-control" style="height:150px" name="phone" placeholder="Nomor">{{ $customer->phone }}</textarea>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button alignright type="submit" class="btn btn-primary" href="{{ route('customers.index') > Simpan</button>

            </div>

        </div>

   

    </form>

@endsection