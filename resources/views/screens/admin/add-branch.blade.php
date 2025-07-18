<?php
    include "headerr.php";
?>

<div class="content-body ">
	<div class="container-fluid">
		<div class="row mb-4">
			<div class="col-12">
				<div class="bg-white">
					<div class="card-body">
                            <h4 class="section-title">Add Branch</h4>
                        <form action="." class="mb-0">
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Select Location</label>
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option disabled selected>Select Location</option>
                                        <option value="">Location One</option>
                                        <option value="">Location Two</option>
                                        <option value="">Location Three</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Branch Name</label>
                                    <input type="text" placeholder="Branch Name" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Contact Number</label>
                                    <input type="number" placeholder="Contact Number" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Open Time</label>
                                    <input type="time" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Close Time</label>
                                    <input type="time" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Code</label>
                                    <input type="number" placeholder="Code" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Password</label>
                                    <div class="position-relative">
                                        <input type="password" placeholder="Password" name="" id="" class="form-control">
                                        <button class="eye-btn" type="button">
                                            <i class="toggleIcon fa-solid fa-eye-slash"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary bg-deepblue" type="submit">Add Branch</button>
                                </div>
                            </div>
                        </form>
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
    const eyeBtns = document.querySelectorAll(".eye-btn");

    eyeBtns.forEach((eyeBtn) => {
        eyeBtn.addEventListener("click", () => {
            const myInput = eyeBtn.previousElementSibling;
            const icon = eyeBtn.querySelector("i");

            if (myInput.type === "password") {
                myInput.type = "text";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            } else {
                myInput.type = "password";
                icon.classList.add("fa-eye-slash");
                icon.classList.remove("fa-eye");
            }
        });
    });
</script>