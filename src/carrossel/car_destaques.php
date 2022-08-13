	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,400;1,100;1,200;1,300;1,400&display=swap');

		.material-symbols-outlined {
			font-variation-settings:
				'FILL'1,
				'wght'700,
				'GRAD'0,
				'opsz'48
		}


		.product-grid1,
		.product-grid1 .product-image4 {
			position: relative;
			width: 0px;
		}

		.col-sx {
			width: 213px;
		}

		.product-grid1 {
			display: inline-block;
			border-style: hidden;
			margin: 10px;

			height: 100%;
			margin-left: 0;
			font-family: Poppins, sans-serif;
			text-align: center;
			border-radius: 5px;
			overflow: hidden;
			z-index: 1;
			transition: all .3s ease 0s;
		}

		#row {
			flex-wrap: wrap;
		}

		@media screen and (max-width: 700px) {

			.col-md-2 {
				width: 40%;
				margin-right: -43px;
			}

			.row {
				width: 105%;
				flex-wrap: wrap;
			}

			.col-sx {
				width: 178px;
			}

		}

		.product-grid1 .product-image4 img {
			width: 180px;
			height: 240px;
			padding: 10px;
			-moz-transition: all 0.5s;
			-webkit-transition: all 0.5s;
			transition: all 0.5s;
		}

		.product-grid1 .product-image4 img:hover {
			-moz-transform: scale(1.2);
			-webkit-transform: scale(1.2);
			transform: scale(1.2);
		}

		.product-grid1 .title1 a {

			text-transform: capitalize;
			margin: 0 0 7px;
			transition: all .3s ease 0s;
			color: #222;
			font-size: 1vw;
		}

		.product-grid1 .title1 a:hover {
			color: #16a085
		}

		.product-grid1 .price1 {
			color: #16a085;
			font-size: 2vw;
			font-weight: 700;
			margin: 0 2px 15px 0;
			display: block
		}


		.product-content1 {
			height: 202px;
			width: 100%;
		}


		.title1,
		.price1 {
			font-family: 'Montserrat Alternates', sans-serif;
			font: Regular 400;

		}

		#btn_destaque {
			display: inline;
			bottom: 0;
			padding-top: 0;
			width: 100%;
			padding-left: 0;
		}
	</style>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

	<div id="myCardestaque" class="carousel slide" data-ride="carousel2" data-interval="0">

		<div class="carousel-inner">
			<div class="carousel-item active" alt="0">
				<div id="row" class="row justify-content-center">

					<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>

					
					<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>

					
					<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>

					
					<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>

					
					<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>

					
					<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>


				</div>

			</div>

			<div class="carousel-item" alt="1">

				<div id="row" class="row justify-content-center">
					
				<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>

					
					<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>

					
					<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>

					
					<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>

					
					<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>

					
					<div class="col-sx product-grid1" style=" width: 212px; height: 448px; margin-left: 10px;">
						<div class="product-image4" style="width: 0px;">
							<img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
						</div>
						<div class="product-content1">
							<h3 class="title1" style="font: size 1.2em;">
								Camisa Masculina 
							</h3>
							<hr>
							<div class="price1" style="font-size:1.2vw;">
								R$ 27,99 <br>
							</div>
							<div id="btn_destaque">
								<a class="btn btn-outline-dark" href="">+ Carrinho</a>
								<a class="btn btn-outline-success" href=" ">Comprar</a>
							</div>
						</div>

					</div>


				</div>

			</div>

		<!--</INDICADORES> -->
		<a class="carousel-control-prev" style="display:flex; width:12%;" href="#myCardestaque" role="button"
			data-slide="prev">
			<span class="material-symbols-outlined" style=" font-size:55px; color:black">arrow_back_ios</span>
		</a>
		<a class="carousel-control-next" style="display:flex; width:12%;" href="#myCardestaque" role="button"
			data-slide="next">
			<span class="material-symbols-outlined" style="font-size:55px; color:black">arrow_forward_ios</span>
		</a>
		<!--</INDICADORES> -->
	</div>