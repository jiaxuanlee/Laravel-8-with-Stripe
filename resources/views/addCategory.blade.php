@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Create New Catogory</h3>
        <form action="">
            <div class="form-group">
                <label for="catogoryName">Category Name</label>
                <input type="text" class="form-control" id="catogoryName" name="catogoryName">
            </div>
            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>

</div>
@endsection