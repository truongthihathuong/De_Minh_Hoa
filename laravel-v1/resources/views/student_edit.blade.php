@extends('layouts.app') @section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 text-center pt-5">
        <form method="post" action="" class="border p-3 mt-2">
          <div class="control-group col-6 text-left" style="width:100%">
            <label for="fullname">fullname</label>
            <div>
              <input type="text" id="fullname" class="form-control mb-4" name="fullname"
                placeholder="Enter fullname" value ="{{$student->fullname}}" required>
            </div>
          </div>
          <div class="control-group col-6 text-left mt-2" style="width:100%">
            <label for="body">birthday</label>
            <div>
              <input id="birthday" class="form-control mb-4" name="birthday"  value ="{{$student->birthday}}" required>
            </div>
          </div>
          <div class="control-group col-6 text-left mt-2" style="width:100%">
            <label for="body">address</label>
            <div>
              <input type="text" id="address" class="form-control mb-4" name="address"
                          value ="{{ $student->address }}"	placeholder="Enter address" required>
            </div>
          </div>
          @csrf
          <div class="control-group col-6 text-left mt-2" style="width:100%"><button class="btn btn-primary">update</button></div>
        </form>
      </div>
    </div>
  </div>
  @endsection
      
  