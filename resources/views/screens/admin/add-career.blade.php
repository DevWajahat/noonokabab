<?php
    include "headerr.php";
?>

<div class="content-body ">
	<div class="container-fluid">
		<div class="row mb-4">
			<div class="col-12">
				<div class="bg-white">
					<div class="card-body">
                        <h4 class="section-title">Add Career</h4>
                        <form action="." class="mb-0">
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Id</label>
                                    <input type="number" placeholder="Id" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Badge</label>
                                    <input type="text" placeholder="Badge" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Title</label>
                                    <input type="text" placeholder="Title" name="" id="" class="form-control">
                                </div>
                                 <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Type</label>
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option disabled selected>Select Type</option>
                                        <option value="Part-time">Part time</option>
                                        <option value="Full-time">Full time</option>
                                    </select>
                                </div>
                                
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary bg-deepblue" type="submit">Add Career</button>
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