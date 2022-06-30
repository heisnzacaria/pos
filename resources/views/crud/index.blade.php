@extends('layouts.admin')

@section('title', 'Employee Details')
@section('content-header', 'Employee Details')
@section('content-actions')
    <a href="{{route('cart.index')}}" class="btn btn-primary">Open POS</a>
@endsection

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
            <h4>Employee deatails</h4>
            <hr>
            @if (Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
    </div>
            @endif
            @if (Session::get('fail'))
            <div class="alert alert-danger">
            (Session::get('success'))</div>
            @endif
                <form action="new" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" name="full_name" placeholder="Enter Full name" value="{{ old('full_name')}}">
                        <span style="color: red">@error('full_name') {{$message}}

                        @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">CINE</label>
                        <input type="text" class="form-control" name="cine" placeholder="Enter Electronique ID" value="{{ old('cine')}}">
                        <span style="color: red">@error('cine') {{$message}}

                            @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Departemant</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter the Departement" value="{{ old('title')}}">
                        <span style="color: red">@error('title') {{$message}}

                            @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Start Date</label>
                        <input type="date" class="form-control" name="start_date" value="{{ old('start_date')}}">
                        <span style="color: red">@error('start_date') {{$message}}

                            @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">End Date</label>
                        <input type="date" class="form-control" name="end_date" value="{{ old('end_date')}}">
                        <span style="color: red">@error('end_date') {{$message}}

                            @enderror</span>
                    </div>
                        <div class="form-group">
                    <button type="submit" class="btn btbn-primary" name="submit"> Submit </button>
                </div>
                </form>
        </div>
    </div>



        </div>

@endsection

