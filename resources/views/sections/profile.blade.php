<h2>Profile</h2>
<p class="lead">

	&ldquo;Be like a diamond, precious and rare, not like a stone, found everywhere.&rdquo;<br />
	</p>
	
<hr/>

<div class="row">
	<div class="col-md-4">
		<h3>About me</h3>
		<p class="text-justify">
			To work with a position where honesty, positive and energetic approach to work, self-motivated, leadership skills as well as a self-starter and very fast learner. To keep up with the cutting edge of technologies with solving problems in an creative way.
		</p>
	</div>
	<div class="col-md-4 text-center">
		<img src="{{ asset('vorsurm')}}/images/moshiur.png" alt="Moshiur Rahman" width="246" height="246" />
	</div>
	<div class="col-md-4">
		<h3>Details</h3>
		<p>
			<strong>Name:</strong><br />
			Md. Moshiur Rahman<br />
			<strong>Age:</strong><br />
			{{ \Carbon\Carbon::parse('02-12-1992')->diff(\Carbon\Carbon::now())->format('%y Years, %m Months and %d Days') }} 
			<br />
			<strong>Location:</strong><br />
			Nikunja 2, Khilkhet, Dhaka-1229, Bangladesh.
		</p>
		
	</div>
	
</div>
<div class="text-center">
	<p>Are you inspired? Then following the projects and talk to me for the next contact.</p>
	<button class="btn btn-warning"> <a  class="btn-sp" href="#projects"> Projects </a></button> 
</div>