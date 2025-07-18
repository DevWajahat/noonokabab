<?php
    include "headerr.php";
?>

<div class="content-body ">
	<div class="container-fluid">
		<div class="row mb-4">
			<div class="col-12">
				<div class="bg-white">
					<div class="card-body">
                            <h4 class="section-title">Add Menu</h4>
                        <form action="." class="mb-0">
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Select Branch</label>
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option disabled selected>Select Location</option>
                                        <option value="">Branch One</option>
                                        <option value="">Branch Two</option>
                                        <option value="">Branch Three</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Menu Name</label>
                                    <input type="text" placeholder="Menu Name" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Price</label>
                                    <input type="number" placeholder="Price" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Upload Image</label>
                                    <input type="file" placeholder="Price" name="" id="" accept="image/*" class="form-control ">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                        <input id="regular" class="input-checkbox" type="checkbox" name="menu" id="">
                                        <label for="regular" class="form-label m-0 cursor-pointer">Regular</label>
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <div class="d-flex justify-content-start align-items-center gap-3">
                                        <input id="lunch-special" class="input-checkbox" type="checkbox" name="menu" id="">
                                        <label for="lunch-special" class="form-label m-0 cursor-pointer">Lunch Special</label>
                                    </div>
                                </div>
                                <div class="mb-3 col-12">
                                    <label class="form-label">discription</label>
                                    <textarea class="form-control" name="" id=""></textarea>
                                </div>
                                
                                
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary bg-deepblue" type="submit">Add Menu</button>
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


