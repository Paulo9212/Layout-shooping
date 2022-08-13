
<style> 
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;800;900&family=Raleway:wght@200&display=swap');
	#categorias  {
		text-decoration: none;
		text-align: center;
		display: block;
	}
	
	#categorias a {
		text-decoration: none;
	}

	.baloes{
		font-family: 'Cinzel', serif;
		border-style:hidden;
		font-size: 20px;
		margin: 5px;
		padding: 10px;
		background-color:black;
	}
	.baloes a {
		color: white;
	}

</style>
<script>

	function g1_in (elemento) {
		$(elemento).css({
			"background-color": "white"
		})

		$("a", elemento).css({
			"color": "black"
		})
		
	}
	function g1_out(elemento){
		$(elemento).css({
			"background-color":"black"
		})

		$("a", elemento).css({
			"color": "white"
		})
	}
</script>


<div id="categorias" class="container">
	<div class="row categoria-grupo g1">
		<div class="col baloes" onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#">Feminino</a></div>
		<div class="col baloes" onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#">Masculino</a></div>
		<div class="col baloes" onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#">Infântil</a></div>
	</div>
	<div class="row categoria-grupo g2">
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#">Vestidos</a></div>
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#">Social</a></div>
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#">Macacão</a></div>
		
	</div>
	<div class="row categoria-grupo g3">
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#">Camisas</a></div>
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#">Calças</a></div>
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#">Casacos</a></div>
	</div>

</div>





   
