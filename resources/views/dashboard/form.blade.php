<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Hotel</title>
	<link rel="stylesheet" type"text/css" href="{!! asset('assets/css/style.css') !!}">
</head>
<body>

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
<br>
<br>
<br>
<br>
<div class="gambar">
<p align ="center">

    <img src="data:image/jpeg;base64,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" width="76%" height="250" align="bottom">
</p>
</div>
<p></p>
<div class="form">
<p>
<a href="">Pesan</a>
</p>
</div>

<div class="container">
                    <main class="form-">
                        <form action="/" method="POST">
                           @csrf
                            <h1 class="h3 mb-3 fw-normal">Form Pemesanan</h1>

                            <div class="form-floating">
                            <label for="name">Nama pemesan</label>
                                <input type="text" name="name" class="form-control mt-2" id="name" placeholder="">
                                
                            </div>
                            <div class="form-floating">
                            <label for="email">Email</label>
                                <input type="email" name="email" class="form-control mt-2" id="email" placeholder="">
                               
                            </div>
                            <div class="form-floating">
                            <label for="email">NoTelp</label>
                                <input type="angka" name="password" class="form-control mt-2" id="password" placeholder="">
                                
                            </div>
							<div class="form-floating">
                            <label for="password">Nama tamu</label>
                                <input type="text" name="password" class="form-control mt-2" id="password" placeholder="">
                                
                            </div>
							<div class="form-floating">
                            <label for="kamar">Tipe Kamar</label>
                                <select id="kamar" name="kamar" class="form-control mt-2"  placeholder=>
                                    <option value=""></option>
                                    <option value="superior">Superior</option>
                                    <option value="deluxe">Deluxe</option>
</select>
                            </div>

                            <div class="form-floating">
                            <label for="password">Tanggal Chasdaeck-in</label>
                                <input type="date" name="password" class="form-control mt-2" id="password" placeholder="">
                                
                            </div>

                            <div class="form-floating">
                            <label for="password">Tangga Check-out</label>
                                <input type="date" name="password" class="form-control mt-2" id="password" placeholder="">
                            
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                            
                        </form>

</body>



</html>