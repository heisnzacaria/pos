

 @extends('layouts.admin')

 @section('title', 'Update Company Details')
 @section('content-header', 'Update Company Details',)
 @section('content-actions')

 @endsection


 @section('content')
<div class="form1">
    <center>  <img class="resize" src="{{ asset('images/logo.png') }}"/></center>
  <div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-6" style="margin-top:1%">
            <h4><center> Company Details Update</center> </h4>
            <div class="alert alert-secondary">
               <center>You can Change one or Multiples Details</center>
            </div>
            <hr>

                <form action="update_comp" method="post">
                    @csrf
                    @foreach ($company as $company)
                    <div class="form-group" >
                        <label for="">New Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter New name" value="{{$company->name}}">
                        <span style="color: red">@error('name') {{$message}}

                        @enderror</span>

                    </div>
                    <div class="form-group" >
                        <label for="">New Responsable</label>
                        <input type="text" class="form-control" name="responsable" placeholder="Enter the name of the new responsable" value="{{$company->responsable}}">
                        <span style="color: red">@error('responsable') {{$message}}

                        @enderror</span>

                    </div>
                    <div class="form-group">
                        <label for="">New RC</label>
                        <input type="text" class="form-control" name="rc" placeholder="Enter new RC" value="{{$company->rc}}">
                        <span style="color: red">@error('rc') {{$message}}

                        @enderror</span>

                    </div>


                    <div class="form-group">
                        <label for="">New Patent</label>
                        <input type="text" class="form-control" name="patent" placeholder="Patent" value="{{$company->patent}}">
                        <span style="color: red">@error('patent') {{$message}}

                            @enderror</span>

                    </div>
                    <div class="form-group">
                        <label for="">New IF</label>
                        <input type="text"class="form-control" name="if" value="{{$company->if}}" placeholder="Enter IF">
                        <span style="color: red">@error('if') {{$message}}

                            @enderror</span>

                    </div>
                    <div class="form-group">
                        <label for="">New ICE</label>
                        <input type="text" class="form-control" name="ice" value="{{$company->ice}}" placeholder="Enter ice">
                        <span style="color: red">@error('ice') {{$message}}

                            @enderror</span>
                            <div class="form-group">
                                <label for="">New Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$company->phone}}"  placeholder="Enter Adress">
                                <span style="color: red">@error('phone') {{$message}}

                                    @enderror</span>

                            </div>

                    </div>
                    <div class="form-group">
                        <label for="">New Address</label>
                        <input type="text" class="form-control" name="address"  value="{{$company->address}}"" placeholder="Enter Adress">
                        <span style="color: red">@error('address') {{$message}}

                            @enderror</span>

                    </div>
                    <div class="form-group">
                        <label for="">New town</label>
                        <input type="text" class="form-control" name="ville"  value="{{$company->ville}}"" placeholder="Enter the new town">
                        <span style="color: red">@error('ville') {{$message}}

                            @enderror</span>

                    </div>
                    <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger btn-lg btn-block">Update</button>
                </div>
                @endforeach
                </form>
        </div>
    </div>
</div>

</div>
<style>

.content{
    margin: auto;
    overflow-y: scroll;
    padding: auto;
    box-shadow:0 0 15px 4px rgba(0,0,0,0.04);
}
/* .form1 {




max-height: 800px;
      max-width: 500px;
      margin: auto;
      box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
    } */

    .resize {
    width: 70px;
    height: auto;


}

</style>
        @endsection
