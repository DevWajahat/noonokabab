<?php
include "headerr.php";
?>
<div class="content-body ">
	<div class="container-fluid">
		<!-- row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="profile card card-body px-3 pt-3 pb-0">
					<div class="profile-head">
						<div class="photo-content">
							<div class="cover-photo rounded"></div>
						</div>
						<div class="profile-info">
							<div class="profile-photo position-relative">
								<img src="public/images/profile/profile.png" class="img-fluid rounded-circle" id="profile-preview" alt="">
								<input type="file" class="d-none" name="" id="profile-input"  accept="image/*" onchange="readURL(this)">
								<label class="profile-label" for="profile-input">
									<i class="fa-solid fa-camera"></i>
								</label>
							</div>
							<div class="profile-details">
								<div class="profile-name px-3 pt-2">
									<h4 class="text-primary mb-0">Mitchell C. Shay</h4>
									<!-- <p>UX / UI Designer</p> -->
								</div>
								<div class="profile-email px-2 pt-2">
									<h4 class="text-muted mb-0">info@example.com</h4>
									<p>Email</p>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-4">
			<div class="col-12 col-lg-9">
				<div class="bg-white">
					<div class="card-body">
						<div class="profile-tab">
							<div class="custom-tab-1">
								<div class="tab-content">

									<div  class="tab-pane  active show fade">
										<div class="">
											<div class="settings-form">
												<h4 class="section-title">Profile</h4>
												<form action="." class="mb-0">
													<div class="row">
														<div class="mb-3 col-12 col-lg-6">
															<label class="form-label">First Name</label>
															<input type="text" placeholder="First Name" class="form-control">
														</div>
														<div class="mb-3 col-12 col-lg-6">
															<label class="form-label">Last Name</label>
															<input type="text" placeholder="Last Name" class="form-control">
														</div>
														<div class="mb-3 col-12 col-lg-6">
															<label class="form-label">Email</label>
															<input type="email" placeholder="Email" class="form-control">
														</div>
														<div class="mb-3 col-12 col-lg-6">
															<label class="form-label">Phone Number</label>
															<input type="number" placeholder="Phone Number" class="form-control">
														</div>
														<div class="mb-3 col-12">
															<label class="form-label">Address</label>
															<input type="text" placeholder="1234 Main St" class="form-control">
														</div>
														<div class="mb-3 col-12">
															<label class="form-label">Address 2</label>
															<input type="text" placeholder="Apartment, studio, or floor" class="form-control">
														</div>
														<div class="mb-3 col-12">
															<label class="form-label">Discription</label>
															<textarea class="form-control" placeholder="Discription" name="" id=""></textarea>
														</div>
														<!-- <div class="mb-3 col-12 col-lg-6">
															<label class="form-label">City</label>
															<input type="text" class="form-control">
														</div>
														<div class="mb-3 col-12 col-lg-4">
															<label class="form-label">State</label>
															<select class="form-control default-select wide" id="inputState">
																<option selected="">Choose...</option>
																<option>Option 1</option>
																<option>Option 2</option>
																<option>Option 3</option>
															</select>
														</div>
														<div class="mb-3 col-6 col-lg-2" >
															<label class="form-label">Zip</label>
															<input type="number" class="form-control">
														</div> -->
														<div class="col-12 text-end">
															<button class="btn btn-primary" type="submit">Update Profile</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>

								</div>
							</div>
							<!-- Modal
							<div class="modal fade" id="replyModal">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Post Reply</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
										</div>
										<div class="modal-body">
											<form>
												<textarea class="form-control" rows="4">Message</textarea>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">btn-close</button>
											<button type="button" class="btn btn-primary">Reply</button>
										</div>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-3">
				<div class="bg-white">
					<div class="card-body">
						<div class="profile-tab">
							<div class="custom-tab-1">
								<div class="tab-content">

									<div  class="tab-pane  active show fade">
										<div class="">
											<div class="settings-form">
												<h4 class="section-title">Reset Password</h4>
												<form action="." class="mb-0">
													<div class="row">
														<div class="mb-3 col-12">
															<label class="form-label">New Password</label>
															<div class="position-relative">
																<input type="password" placeholder="New Password" class="form-control myInput">
																<button type="button" class="pass-eye-btn eye-btn">
																	<i class="fa-solid fa-eye-slash"></i>
																</button>
															</div>
														</div>
														<div class="mb-3 col-12">
															<label class="form-label">Confirm Password</label>
															<div class="position-relative">
																<input type="password" placeholder="Confirm Password" class="form-control myInput">
																<button type="button" class="pass-eye-btn eye-btn">
																	<i class="fa-solid fa-eye-slash"></i>
																</button>
															</div>
														</div>
														
														
														<div class="col-12 text-center">
															<button class="btn btn-primary" type="submit">Update Password</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>

								</div>
							</div>
							<!-- Modal
							<div class="modal fade" id="replyModal">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Post Reply</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
										</div>
										<div class="modal-body">
											<form>
												<textarea class="form-control" rows="4">Message</textarea>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">btn-close</button>
											<button type="button" class="btn btn-primary">Reply</button>
										</div>
									</div>
								</div>
							</div> -->
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

<script>
	

	// profile image js

	let noimage = "./assets/images/blank-pro-img.png";

	function readURL(input) {
		console.log(input.files);
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$("#profile-preview").attr("src", e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		} else {
			$("#profile-preview").attr("src", noimage);
		}
	}
</script>