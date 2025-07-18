<?php
    include "headerr.php";
?>

<div class="content-body ">
	<div class="container-fluid">
		<div class="row mb-4">
			<div class="col-12">
				<div class="bg-white">
					<div class="card-body">
                        <h4 class="section-title">Add Externals</h4>
                        <form action="." class="mb-0">
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">From</label>
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected>Branch</option>
                                        <option value="1">Branch One</option>
                                        <option value="2">Branch Two</option>
                                        <option value="3">Branch Three</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">To</label>
                                    <input type="url" placeholder="Url" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Upload Image</label>
                                    <input accept="image/*" type="file" name="" id="" class="form-control border-none">
                                </div>
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary bg-deepblue" type="submit">Add External</button>
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


