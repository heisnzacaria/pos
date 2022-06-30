

 @extends('layouts.admin')

 @section('title', 'Update Company Details')
 @section('content-header', 'Update Company Details',)
 @section('content-actions')

 @endsection


 @section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
            <h4>Company Details Update </h4>
            <div class="alert alert-warning">
                you can only change the new detail
            </div>
            <hr>

                <form action="update_comp" method="post">
                    @csrf
                    @foreach ($company as $company)
                    <div class="form-group">
                        <label for="">New Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter New name" value="{{$company->name}}">
                        <span style="color: red">@error('name') {{$message}}

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
                        <input type="text" class="form-control" name="address" value="{{$company->address}}"" placeholder="Enter Adress">
                        <span style="color: red">@error('address') {{$message}}

                            @enderror</span>

                    </div>
                        <div class="form-group">
                            <button type="submit" class="btn btbn-primary" name="submit"> update </button>
                </div>
                @endforeach
                </form>
        </div>
    </div>



        </div>
        @endsection
