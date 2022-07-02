@extends('layouts.admin')

@section('title', 'Formation Details')
@section('content-header', 'Formation And the Certified Person Details')
@section('content-actions')

@endsection

@section('content')

<div class="form1">
    <center>  <img class="resize" src="{{ asset('images/logo.png') }}"/></center>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-6 flex-column " >
            <h4><center>  Please Insert Information </center></h4>
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
                        <label for="">National Card ID</label>
                        <input type="text" class="form-control" name="cine" placeholder="Enter Electronique ID" value="{{ old('cine')}}">
                        <span style="color: red">@error('cine') {{$message}}

                            @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Date Of birth</label>
                        <input type="date" class="form-control" name="birthday" placeholder="Enter the day of birth" value="{{ old('birthday')}}">
                        <span style="color: red">@error('birthday') {{$message}}

                            @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">City of birth</label>
                        <input type="text" class="form-control" name="address" placeholder="City of birth" value="{{ old('address')}}">
                        <span style="color: red">@error('address') {{$message}}

                            @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Type of Formation</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter the Typer or the name of the Formation" value="{{ old('title')}}">
                        <span style="color: red">@error('title') {{$message}}

                            @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Departement</label>
                        <input type="text" class="form-control" name="depart" placeholder="Enter The Departemenet" value="{{ old('depart')}}">
                        <span style="color: red">@error('depart') {{$message}}

                            @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Started At</label>
                        <input type="date" class="form-control" name="start_date" value="{{ old('start_date')}}">
                        <span style="color: red">@error('start_date') {{$message}}

                            @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Finished at</label>
                        <input type="date" class="form-control" name="end_date" value="{{ old('end_date')}}">
                        <span style="color: red">@error('end_date') {{$message}}

                            @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Duration</label>
                        <input type="number" class="form-control" name="durer" placeholder="Enter duration of the formation (In Months)" value="{{ old('durer')}}">
                        <span style="color: red">@error('durer') {{$message}}

                            @enderror</span>
                    </div>


<hr>
                        <div class="form-group">
                    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </div>
                </form>
        </div>
    </div>
</div>


</div>


<style>
    input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.content{
    margin: auto;
    overflow-y: scroll;
    padding: auto;
    box-shadow:0 0 15px 4px rgba(0,0,0,0.5);
}
    /* .form1 {
        overflow-y: scroll;

        max-height: 800px;
      max-width: 500px;
      margin: auto;
      box-shadow:0 0 15px 4px rgba(0,0,0,0.04);

    } */
    .resize {
    width: 70px;
    height: auto;


}

    </style>
@endsection
