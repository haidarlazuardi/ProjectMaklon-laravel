<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wizard-v3</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/images.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/images.png')}}">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/roboto-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/jquery-ui.min.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}"/>
</head>
<body>
	<div id="wrapper">

		@include('layout.include._sidebar')
		
		@include('layout.include._navbar')

		<div class="main">
				<div class="main-content">
				  <div class="container-fluid">
					<div class="row">
						<div class="panel">

								<div class="wizard-v3-content">
									<div class="col-sm-12">
											<div class="wizard-form">
													<div class="wizard-header">
														<h3 class="heading">Project Sourcing Maklon</h3>
														<p>Fill all form field to go next step</p>
													</div>
													<form class="form-register" action="#" method="post">
														<div id="form-total">
															<!-- SECTION 1 -->
															<div class="col-sm-2 offset-1">
																	<h2>
																			<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
																			<span class="step-text">  PKP</span>
																		</h2>
																		<section>
																			
																		</section>	
															</div>
															
															<!-- SECTION 2 -->
															<h2>
																<span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
																<span class="step-text">Personal</span>
															</h2>
															<section>
																<div class="inner">
																	<h3>Personal Information:</h3>
																	<div class="form-row">
																		<div class="form-holder">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="first_name" name="first_name" required>
																				<span class="label">First Name*</span>
																				  <span class="border"></span>
																			</label>
																		</div>
																		<div class="form-holder">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="last_name" name="last_name" required>
																				<span class="label">Last Name*</span>
																				  <span class="border"></span>
																			</label>
																		</div>
																	</div>
																	<div class="form-row">
																		<div id="radio">
																			<label>Gender*:</label>
																			<input type="radio" name="gender" value="male" checked class="radio-1"> Male
																			  <input type="radio" name="gender" value="female"> Female
																		</div>
																	</div>
																	<div class="form-row form-row-date">
																		<div class="form-holder form-holder-2">
																			<label for="date" class="special-label">Date of Birth*:</label>
																			<select name="date" id="date">
																				<option value="Day" disabled selected>Day</option>
																				<option value="16">16</option>
																				<option value="17">17</option>
																				<option value="18">18</option>
																				<option value="19">19</option>
																			</select>
																			<select name="month" id="month">
																				<option value="Month" disabled selected>Month</option>
																				<option value="Feb">Feb</option>
																				<option value="Mar">Mar</option>
																				<option value="Apr">Apr</option>
																				<option value="May">May</option>
																			</select>
																			<sele                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ct name="year" id="year">
																				<option value="Year" disabled selected>Year</option>
																				<option value="2017">2017</option>
																				<option value="2016">2016</option>
																				<option value="2015">2015</option>
																				<option value="2014">2014</option>
																				<option value="2013">2013</option>
																			</select>
																		</div>
																	</div>
																	<div class="form-row">
																		<div class="form-holder form-holder-2">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="phone" name="phone" required>
																				<span class="label">Phone Number*</span>
																				  <span class="border"></span>
																			</label>
																		</div>
																	</div>
																	<div class="form-row">
																		<div class="form-holder form-holder-1">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="address" name="address" required>
																				<span class="label">Address*</span>
																				  <span class="border"></span>
																			</label>
																		</div>
																	</div>
																</div>
															</section>
															<!-- SECTION 3 -->
															<h2>
																<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
																<span class="step-text">Payment</span>
															</h2>
															<section>
																<div class="inner">
																	<h3>Payment Information:</h3>
																	<div class="form-row">
																		<div class="form-holder form-holder-2">
																			<input type="radio" name="radio1" id="pay-1" value="pay-1" checked>
																			<label class="pay-1-label" for="pay-1"><img src="images/wizard_v3_icon_1.png" alt="pay-1">Credit Card</label>
																			<input type="radio" name="radio1" id="pay-2" value="pay-2">
																			<label class="pay-2-label" for="pay-2"><img src="images/wizard_v3_icon_2.png" alt="pay-2">Paypal</label>
																		</div>
																	</div>
																	<div class="form-row">
																		<div class="form-holder form-holder-2">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="holder" name="holder" required>
																				<span class="label">Holder Name*</span>
																				  <span class="border"></span>
																			</label>
																		</div>
																	</div>
																	<div class="form-row">
																		<div class="form-holder">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="card" name="card" required>
																				<span class="label">Card Number*</span>
																				<span class="border"></span>
																			</label>
																		</div>
																		<div class="form-holder">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="cvc" name="cvc" required>
																				<span class="label">CVC*</span>
																				<span class="border"></span>
																			</label>
																		</div>
																	</div>
																	<div class="form-row form-row-date form-row-date-1">
																		<div class="form-holder form-holder-2">
																			<label for="date" class="special-label">Expiry Date*:</label>
																			<select name="month_1" id="month_1">
																				<option value="Month" disabled selected>Month</option>
																				<option value="Feb">Feb</option>
																				<option value="Mar">Mar</option>
																				<option value="Apr">Apr</option>
																				<option value="May">May</option>
																			</select>
																			<select name="year_1" id="year_1">
																				<option value="Year" disabled selected>Year</option>
																				<option value="2017">2017</option>
																				<option value="2016">2016</option>
																				<option value="2015">2015</option>
																				<option value="2014">2014</option>
																				<option value="2013">2013</option>
																			</select>
																		</div>
																	</div>
																</div>
															</section>
															{{-- baru --}}
															<h2>
																	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
																	<span class="step-text">Payment</span>
																</h2>
																<section>
																	<div class="inner">
																		<h3>Payment Information:</h3>
																		<div class="form-row">
																			<div class="form-holder form-holder-2">
																				<input type="radio" name="radio1" id="pay-1" value="pay-1" checked>
																				<label class="pay-1-label" for="pay-1"><img src="images/wizard_v3_icon_1.png" alt="pay-1">Credit Card</label>
																				<input type="radio" name="radio1" id="pay-2" value="pay-2">
																				<label class="pay-2-label" for="pay-2"><img src="images/wizard_v3_icon_2.png" alt="pay-2">Paypal</label>
																			</div>
																		</div>
																		<div class="form-row">
																			<div class="form-holder form-holder-2">
																				<label class="form-row-inner">
																					<input type="text" class="form-control" id="holder" name="holder" required>
																					<span class="label">Holder Name*</span>
																					  <span class="border"></span>
																				</label>
																			</div>
																		</div>
																		<div class="form-row">
																			<div class="form-holder">
																				<label class="form-row-inner">
																					<input type="text" class="form-control" id="card" name="card" required>
																					<span class="label">Card Number*</span>
																					<span class="border"></span>
																				</label>
																			</div>
																			<div class="form-holder">
																				<label class="form-row-inner">
																					<input type="text" class="form-control" id="cvc" name="cvc" required>
																					<span class="label">CVC*</span>
																					<span class="border"></span>
																				</label>
																			</div>
																		</div>
																		<div class="form-row form-row-date form-row-date-1">
																			<div class="form-holder form-holder-2">
																				<label for="date" class="special-label">Expiry Date*:</label>
																				<select name="month_1" id="month_1">
																					<option value="Month" disabled selected>Month</option>
																					<option value="Feb">Feb</option>
																					<option value="Mar">Mar</option>
																					<option value="Apr">Apr</option>
																					<option value="May">May</option>
																				</select>
																				<select name="year_1" id="year_1">
																					<option value="Year" disabled selected>Year</option>
																					<option value="2017">2017</option>
																					<option value="2016">2016</option>
																					<option value="2015">2015</option>
																					<option value="2014">2014</option>
																					<option value="2013">2013</option>
																				</select>
																			</div>
																		</div>
																	</div>
																</section>
																{{-- baru --}}
															<h2>
																<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
																<span class="step-text">Payment</span>
															</h2>
															<section>
																<div class="inner">
																	<h3>Payment Information:</h3>
																	<div class="form-row">
																		<div class="form-holder form-holder-2">
																			<input type="radio" name="radio1" id="pay-1" value="pay-1" checked>
																			<label class="pay-1-label" for="pay-1"><img src="images/wizard_v3_icon_1.png" alt="pay-1">Credit Card</label>
																			<input type="radio" name="radio1" id="pay-2" value="pay-2">
																			<label class="pay-2-label" for="pay-2"><img src="images/wizard_v3_icon_2.png" alt="pay-2">Paypal</label>
																		</div>
																	</div>
																	<div class="form-row">
																		<div class="form-holder form-holder-2">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="holder" name="holder" required>
																				<span class="label">Holder Name*</span>
																					<span class="border"></span>
																			</label>
																		</div>
																	</div>
																	<div class="form-row">
																		<div class="form-holder">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="card" name="card" required>
																				<span class="label">Card Number*</span>
																				<span class="border"></span>
																			</label>
																		</div>
																		<div class="form-holder">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="cvc" name="cvc" required>
																				<span class="label">CVC*</span>
																				<span class="border"></span>
																			</label>
																		</div>
																	</div>
																	<div class="form-row form-row-date form-row-date-1">
																		<div class="form-holder form-holder-2">
																			<label for="date" class="special-label">Expiry Date*:</label>
																			<select name="month_1" id="month_1">
																				<option value="Month" disabled selected>Month</option>
																				<option value="Feb">Feb</option>
																				<option value="Mar">Mar</option>
																				<option value="Apr">Apr</option>
																				<option value="May">May</option>
																			</select>
																			<select name="year_1" id="year_1">
																				<option value="Year" disabled selected>Year</option>
																				<option value="2017">2017</option>
																				<option value="2016">2016</option>
																				<option value="2015">2015</option>
																				<option value="2014">2014</option>
																				<option value="2013">2013</option>
																			</select>
																		</div>
																	</div>
																</div>
															</section>
															<!-- SECTION 4 -->
															<h2>
																<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
																<span class="step-text">Confirm</span>
															</h2>
															<section>
																<div class="inner">
																	<h3>Confirm Details:</h3>
																	<div class="form-row table-responsive">
																		<table class="table">
																			<tbody>
																				<tr class="space-row">
																					<th>Full Name:</th>
																					<td id="fullname-val"></td>
																				</tr>
																				<tr class="space-row">
																					<th>Email Address:</th>
																					<td id="email-val"></td>
																				</tr>
																				<tr class="space-row">
																					<th>Phone Number:</th>
																					<td id="phone-val"></td>
																				</tr>
																				<tr class="space-row">
																					<th>User:</th>
																					<td id="username-val"></td>
																				</tr>
																				<tr class="space-row">
																					<th>Gender:</th>
																					<td id="gender-val"></td>
																				</tr>
																				<tr class="space-row">
																					<th>Address:</th>
																					<td id="address-val"></td>
																				</tr>
																				<tr class="space-row">
																					<th>Card Type:</th>
																					<td id="pay-val">Credit Card</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
															</section>
															{{-- section 5 --}}
															<h2>
																<span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
																<span class="step-text">Personal</span>
															</h2>
															<section>
																<div class="inner">
																	<h3>Personal Information:</h3>
																	<div class="form-row">
																		<div class="form-holder">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="first_name" name="first_name" required>
																				<span class="label">First Name*</span>
																				  <span class="border"></span>
																			</label>
																		</div>
																		<div class="form-holder">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="last_name" name="last_name" required>
																				<span class="label">Last Name*</span>
																				  <span class="border"></span>
																			</label>
																		</div>
																	</div>
																	<div class="form-row">
																		<div id="radio">
																			<label>Gender*:</label>
																			<input type="radio" name="gender" value="male" checked class="radio-1"> Male
																			  <input type="radio" name="gender" value="female"> Female
																		</div>
																	</div>
																	<div class="form-row form-row-date">
																		<div class="form-holder form-holder-2">
																			<label for="date" class="special-label">Date of Birth*:</label>
																			<select name="date" id="date">
																				<option value="Day" disabled selected>Day</option>
																				<option value="16">16</option>
																				<option value="17">17</option>
																				<option value="18">18</option>
																				<option value="19">19</option>
																			</select>
																			<select name="month" id="month">
																				<option value="Month" disabled selected>Month</option>
																				<option value="Feb">Feb</option>
																				<option value="Mar">Mar</option>
																				<option value="Apr">Apr</option>
																				<option value="May">May</option>
																			</select>
																			<select name="year" id="year">
																				<option value="Year" disabled selected>Year</option>
																				<option value="2017">2017</option>
																				<option value="2016">2016</option>
																				<option value="2015">2015</option>
																				<option value="2014">2014</option>
																				<option value="2013">2013</option>
																			</select>
																		</div>
																	</div>
																	<div class="form-row">
																		<div class="form-holder form-holder-2">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="phone" name="phone" required>
																				<span class="label">Phone Number*</span>
																				  <span class="border"></span>
																			</label>
																		</div>
																	</div>
																	<div class="form-row">
																		<div class="form-holder form-holder-1">
																			<label class="form-row-inner">
																				<input type="text" class="form-control" id="address" name="address" required>
																				<span class="label">Address*</span>
																				  <span class="border"></span>
																			</label>
																		</div>
																	</div>
																</div>
															</section>
														</div>
													</form>
												</div>
									</div>
									</div>
										
			
		

						</div>
					  </div>
					</div>
				  </div>

	</div>
	<script src="{{asset('admin/assets/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/jquery.steps.js')}}"></script>
	<script src="{{asset('admin/assets/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/main.js')}}"></script>
	
	{{-- <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script> --}}
	<script src="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
	
</body>
</html>