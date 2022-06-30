@extends('layouts.admin')

@section('title', 'Formation Employee Details')
@section('content-header', 'Formation Employee Details')
@section('content-actions')

@endsection

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
            <h4>Employee deatails for Formation Certificate</h4>
            <hr>

                <form action="newc" method="post">
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

