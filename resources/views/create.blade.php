@extends('layouts.app')

@section('content')
<div class="container">


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

   <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Name:</strong>
               <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
         </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Size:</strong>
               <input type="text" name="size" class="form-control" placeholder="Name">
            </div>
         </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Color:</strong>
               <input type="text" name="color" class="form-control" placeholder="Name">
            </div>
         </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Price:</strong>
               <input type="text" name="price" class="form-control" placeholder="Name">
            </div>
         </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Ratting:</strong>
               <input type="text" name="ratting" class="form-control" placeholder="Name">
            </div>
         </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Verification:</strong>
               <input type="text" name="verification" class="form-control" placeholder="Name">
            </div>
         </div>



         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Image:</strong>
               <input type="file" name="image" class="form-control" placeholder="image">
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
      </div>

   </form>
</div>
@endsection