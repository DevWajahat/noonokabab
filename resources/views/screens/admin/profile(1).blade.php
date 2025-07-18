<?php
include "headerr.php";
?>
<div class="content-body ">
	<!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-xl-12">
						<div class="card profile-card">
							<div class="card-header flex-wrap border-0 pb-0">
								<h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Edit Profile</h3>
								<div class="d-sm-flex d-block">
									<div class="d-flex me-5 align-items-center">
										<div class="form-check custom-checkbox">
											<input type="checkbox" class="form-check-input" id="customCheckBox1" required>
											<label class="form-check-label" for="customCheckBox1">Available for hire?</label>
										</div>
									</div>
									<a href="#" class="btn btn-dark light btn-rounded me-3 mb-2">Cancel</a>
									<a class="btn btn-primary btn-rounded mb-2" href="#">Save Changes</a>
								</div>
							</div>
							<div class="card-body">
								<form>
									<div class="mb-5">
										<div class="title mb-4"><span class="fs-18 text-black font-w600">Generals</span></div>
										<div class="row">
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control" placeholder="Enter name">
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Middle Name</label>
													<input type="text" class="form-control" placeholder="Type here">
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control" placeholder="Last name">
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Username</label>
													<input type="text" class="form-control" placeholder="User name">
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Password</label>
													<input type="password" class="form-control" placeholder="Enter password">
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Re-Type Password</label>
													<input type="password" class="form-control" placeholder="Enter password">
												</div>
											</div>
										</div>
									</div>
									<div class="mb-5">
										<div class="title mb-4"><span class="fs-18 text-black font-w600">CONTACT</span></div>
										<div class="row">
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>MobilePhone</label>
													<div class="input-group input-icon mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
														</div>
														<input type="text" class="form-control" placeholder="Phone no.">
													</div>
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Whatsapp</label>
													<div class="input-group input-icon mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon2"><i class="fab fa-whatsapp" aria-hidden="true"></i></span>
														</div>
														<input type="text" class="form-control" placeholder="Phone no.">
													</div>
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Email</label>
													<div class="input-group input-icon mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon3"><i class="las la-envelope"></i></span>
														</div>
														<input type="text" class="form-control" placeholder="Enter email">
													</div>
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Address</label>
													<div class="input-group">
														<input type="text" class="form-control" placeholder="Enter adress">
													</div>
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>City</label>
													<select class="form-control">
														<option>London</option>
														<option>United State</option>
														<option>United Kingdom</option>
														<option>Germany</option>
														<option>Netherland</option>
													</select>
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Country</label>
													<select class="form-control">
														<option>England</option>
														<option>United State</option>
														<option>United Kingdom</option>
														<option>Germany</option>
														<option>Netherland</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="mb-0">
										<div class="title mb-4"><span class="fs-18 text-black font-w600">About me</span></div>
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group">
													<label>Tell About You</label>
													<textarea class="form-control" rows="6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum que laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta su
													</textarea>
												</div>
											</div>
										</div>
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
<?php
include "footerr.php";
?>