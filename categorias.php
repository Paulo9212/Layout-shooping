
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

	.baloes {
		font-family: 'Cinzel', serif;
		border-style:hidden;
		font-size: 20px;
		margin: 5px;
		padding: 10px;
		background-color:#117f81;
	}

</style>
<script>
	document.addEventListener("mouseover", function(){
		g1_in(this)
	});

	document.addEventListener("mouseout", function(){
		
	});

	function g1_in (elemento) {
		elemento.style.backgroundColor = "white";
		$("a", elemento).css({
			"color": "black"
		})
		
	}
	function g1_out(elemento){
		elemento.style.backgroundColor = "#117f81";
		$("a", elemento).css({
			"color": "white"
		})
	}
</script>


<div id="categorias" class="container">
	<div class="row categoria-grupo g1">
		<div class="col baloes" onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#"style="color:white">Feminino</a></div>
		<div class="col baloes" onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#" style="color:white">Masculino</a></div>
		<div class="col baloes" onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#"  style="color:white">Infântil</a></div>
	</div>
	<div class="row categoria-grupo g2">
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#" style="color:white">Vestidos</a></div>
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#"  style="color:white">Social</a></div>
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#" style="color:white">Macacão</a></div>
		
	</div>
	<div class="row categoria-grupo g3">
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#" style="color:white">Camisas</a></div>
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#" style="color:white">Calças</a></div>
		<div class="col baloes"  onmouseover="g1_in(this)" onmouseout="g1_out(this)"><a href="#" style="color:white">Casacos</a></div>
	</div>

</div>





   
