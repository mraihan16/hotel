<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Hotel</title>
	<link rel="stylesheet" type"text/css" href="{!! asset('assets/css/style.css') !!}">
</head>
<body color="grey" widht="100%">
<nav>
    	  <div class="container">
     	   <div class="nav-left">
     	     <h1>Hotel Hebat</h1>
     	   </div>
      	  <div class="nav-right">
            <a href="dashboard">Home</a>
            
      	    <a href="kamar">Kamar</a>
     	
      	    <a href="fasilitas">Fasilitas</a>
       		</div>
     	 </div>
</nav>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <!-- <a class="btn btn-success" href="{{ route('') }}"> Create</a> -->
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        <!-- @foreach ( as ) -->
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $->ket}}</td>
            <td>
                <!-- <form action="{{ route('',) }}" method="POST"> -->
           
                    <!-- <a class="btn btn-primary" href="{{ route('',) }}">Edit</a> -->
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! ->links() !!}
        

</body>





</html>
