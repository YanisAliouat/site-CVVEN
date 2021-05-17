<style>
  .center {
    margin: 10px 50px 20px;
    text-align: center;
  }
  body {

    background-color: #C6F1DF;

  }



  .section {
	position: relative;
	height: 100vh;
}

.section .section-center {
	position: absolute;
	top: 30%;
	left: 0;
	right: 0;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}

#booking {
	font-family: 'Montserrat', sans-serif;
	background-image: url('../img/background.jpg');
	background-size: cover;
	background-position: center;
}

#booking::before {
	content: '';
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	background-color: #C6F1DF;
}
.booking-form {
	max-width: 642px;
	width: 100%;
	margin: auto;
}

.booking-form .form-header {
	text-align: center;
	margin-bottom: 25px;
}

.booking-form .form-header h1 {
	font-size: 40px;
	text-transform: uppercase;
	font-weight: 700;
	color: #ffc001;
	margin: 0px;
}

.booking-form>form {
	background-color: #101113;
	padding: 30px 20px;
	border-radius: 3px;
}

.booking-form .form-group {
	position: relative;
	margin-bottom: 15px;
}

.booking-form .form-control {
	background-color: #f5f5f5;
	border: none;
	height: 45px;
	border-radius: 3px;
	-webkit-box-shadow: none;
	box-shadow: none;
	font-weight: 400;
	color: #101113;
}

.booking-form .form-control::-webkit-input-placeholder {
	color: rgba(16, 17, 19, 0.3);
}

.booking-form .form-control:-ms-input-placeholder {
	color: rgba(16, 17, 19, 0.3);
}

.booking-form .form-control::placeholder {
	color: rgba(16, 17, 19, 0.3);
}

.booking-form input[type="date"].form-control:invalid {
	color: rgba(16, 17, 19, 0.3);
}

.booking-form select.form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.booking-form select.form-control+.select-arrow {
	position: absolute;
	right: 0px;
	bottom: 6px;
	width: 32px;
	line-height: 32px;
	height: 32px;
	text-align: center;
	pointer-events: none;
	color: #101113;
	font-size: 14px;
}

.booking-form select.form-control+.select-arrow:after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.booking-form .form-label {
	color: #fff;
	font-size: 12px;
	font-weight: 400;
	margin-bottom: 5px;
	display: block;
	text-transform: uppercase;
}

.booking-form .submit-btn {
	color: #101113;
	background-color: #ffc001;
	font-weight: 700;
	height: 50px;
	border: none;
	width: 100%;
	display: block;
	border-radius: 3px;
	text-transform: uppercase;
}
</style>


<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Reserver un sejour</h1>
						</div>
						<form>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">nom</span>
										<input class="form-control" type="text" placeholder="Entrer votre">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" placeholder="Entrer votre email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">numero de telephone</span>
								<input class="form-control" type="tel" placeholder="Entrer votre numero de telephone">
							</div>


							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">date debut</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">jours</span>
												<select class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Chambre</span>
												<select class="form-control">
                                                    <option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>

												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Reserver</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
