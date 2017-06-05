
	    @extends('layouts.app')

	@section('content')
	<style type="text/css">
	/*unTUK mengatur ukuran font*/
	   .satu {
	   font-size: 15px;
	   font: verdana;
	   }
	</style>

	    <main class="site-main page-spacing">
	        <!-- Page Banner -->
	        <div class="container-fluid page-banner about-banner">
	            <div class="container">
	                <h3>Detail Pesanan</h3>
	                <ol class="breadcrumb">
	                    <li><a href="{{ url('/home')}}">Home</a></li>
	                    <li class="active">Pesanan Saya</li>
	                </ol>
	            </div>
	        </div><!-- Page Banner /- -->
	        
	                <div class="section-top-padding"></div>

	        <!-- Recommended Section -->
	        <div id="recommended-section" class="recommended-section container-fluid no-padding">

	            <!-- Container -->
	            <div class="container ">
	             @include('layouts._flash')

	                 <div class="row">
	                    <div class="col-md-4">
	                      <ul class="nav nav-pills nav-stacked">
	                        <li ><a href="{{ route('profil.edit')}}">Ubah Profil</a></li>
	                        <li class="active"><a href="{{ route('pesanan')}}">Pesanan Saya</a></li>
	                       
	                      </ul>
	                   </div>
	                   <div class="col-md-8">

						  <div class="panel panel-default">
						    <div class="panel-heading" style="background-color:#df9915;color:#fff"><b><h4>Detail Pesanan</h4></head></b></div>
						    <div class="panel-body">
						    	<div class="row">
						    		<div class="col-sm-4">
						    			<p>Dipesan Oleh <br><br>
						    				<b>{!! $pesanan_homestay->nama !!}</b></p>
						    		</div>
						    		<div class="col-sm-4">
						    			<p>Tanggal Pemesanan<br><br>
						    			<b>{!! $waktu_pesan !!}</b></p>
						    		</div>
						    		<div class="col-sm-4">
						    			<p>No. Pesanan <br><br>
						    			<b>{!! $pesanan_homestay->id !!}</b></p>
						    		</div>
						    	</div>
						    </div>
						    <hr>
						    <div class="panel-body">
						    	<div class="row">
						    		<div class="col-sm-4">
						    			<p>Jumlah Orang<br><br>
						    				<b>{!! $pesanan_homestay->jumlah_orang  !!} {!! "Orang" !!}</b></p>
						    		</div>
						    		<div class="col-sm-4">
						    			<p>Status Pesanan<br><br>

						    		     <div class="alert alert-warning" role="alert">
		                                     <strong>@if($pesanan_homestay->status_pesanan == 0)
							    				{!! "Anda baru saja melakukan pemesanan" !!}

							    				@elseif($pesanan_homestay->status_pesanan == 1)
							    				{!! "Admin Sedang Melakukan Pengecekan Pembayaran anda" !!} 

							    				@elseif($pesanan_homestay->status_pesanan == 2)
							    				{!! "Pesanan Anda Telah dikonfirmasi oleh admin" !!}

							    				@elseif($pesanan_homestay->status_pesanan == 3)
							    				{!! "Check In" !!}  

							    				@elseif($pesanan_homestay->status_pesanan == 4)
							    				{!! "Check Out" !!}  

							    				@elseif($pesanan_homestay->status_pesanan == 5)
							    				{!!"Pesanan Batal" !!}   

							    				@endif
							    			</strong> 
	                                      </div></p>
						    		</div>
						    		<div class="col-sm-4">
						    			<p> Jumlah Malam <br><br>
						    			<b>{!! $pesanan_homestay->jumlah_malam !!}{!! " Malam" !!}</b></p><br>
						    		</div>
						    		<div class="col-sm-12">
						    			@if ($pesanan_homestay->status_pesanan < 1 )
											<a href="{{ route('pembayaran.index', $pesanan_homestay->id) }}" class="btn read-more">Pembayaran<i class="fa fa-long-arrow-right"></i></a>
											<a href="{{ url('pemesanan/homestay/batal/'.$pesanan_homestay->id) }}" class="btn read-more">Batal<i class="fa fa-long-remove-circle"></i></a>	
						    			@elseif ($pesanan_homestay->status_pesanan == 2 )
											<a href="{{ url('pemesanan/homestay/check_in/'.$pesanan_homestay->id) }}" class="btn read-more">Check In<i class="fa fa-long-hand-right"></i></a>	
						    			@elseif ($pesanan_homestay->status_pesanan == 3 )
											<a href="{{ url('pemesanan/homestay/check_out/'.$pesanan_homestay->id) }}" class="btn read-more">Check Out<i class="fa fa-long-hand-left"></i></a>	

										@endif
						    		</div>
						    	</div>
						    </div>
						  </div>

							{!! $tampil_detail !!}
	                   </div>
	                
	                         
	                   
	                </div> <!-- Row /- -->
	            </div><!-- Container /- -->
	            <div class="section-padding"></div>
	        </div><!-- Recommended Section /- -->
	        
	    </main>

	@endsection    

