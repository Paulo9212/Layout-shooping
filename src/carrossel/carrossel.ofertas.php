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
			color: #000000
		}

		.product-grid1 .priceSale {
			color: #000000;
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
		.priceSale {
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

        .ticket_sale{
            height: 30px;
            font-size: 20px;
            font-family: 'Montserrat Alternates', sans-serif;
            color: red;
            border-style: none;
            margin-left: 11%;
            margin-bottom: 0px;
            font-style: oblique;
            font-weight: bolder;
        }
	</style>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


				<div id="row" class="row justify-content-center">
                    
					<div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">10% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

					<div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">40% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

					<div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">70% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

					<div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">50% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

					<div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">30% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

					<div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">40% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

				</div>

			
        <hr>
			
        <div id="row" class="row justify-content-center">
                    
                    <div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">10% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

					<div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">10% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

					<div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">30% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

					<div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">20% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

					<div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">50% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

					<div class="col-sx product-grid1" style=" width: 212px; height: 478px; margin-left: 10px;">
                        <div class="ticket_sale">
                            <span class="product-new-label">40% OFF</span>
                        </div>
                            <div class="product-image4" style="width: 0px;">
                                <img class="pic-1 align-content-center ml-3" style="height: 240px;" src='/src/img/img-fundo.png'>		
                            </div>
                            <div class="product-content1">
                                <h3 class="title1" style="font: size 1.2em;">
                                    Camisa Masculina 
                                </h3>
                                <hr>
                                <small style="text-decoration: line-through; font-style:italic " class="text-muted">R$ 90,43</small>
                                <div class="priceSale" style="font-size:1.2vw;">
                                    R$ 27,99 <br>
                                </div>
                                <div id="btn_destaque">
                                    <a class="btn btn-outline-dark" href="">+ Carrinho</a>
                                    <a class="btn btn-outline-success" href=" ">Comprar</a>
                                </div>
                            </div>

					</div>

				</div>

			

