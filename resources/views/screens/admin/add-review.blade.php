<?php
    include "headerr.php";
?>

<div class="content-body ">
	<div class="container-fluid">
		<div class="row mb-4">
			<div class="col-12">
				<div class="bg-white">
					<div class="card-body">
                        <h4 class="section-title">Add Review</h4>
                        <form action="." class="mb-0">
                            <div class="row">

                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Id</label>
                                    <input type="number" placeholder="Id" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Review Title</label>
                                    <input type="text" placeholder="Review Title" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Review Heading</label>
                                    <input type="text" placeholder="Review Heading" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" placeholder="Name" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Review Type</label>
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option disabled selected>Select Review Type</option>
                                        <option value="Guest-review">Guest review</option>
                                        <option value="Media-review">Media review</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Source</label>
                                    <input type="text" placeholder="Source" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Address</label>
                                    <input type="text" placeholder="Address" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">City</label>
                                    <input type="text" placeholder="City" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">State</label>
                                    <input type="text" placeholder="State" name="" id="" class="form-control">
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Discription</label>
                                     <textarea class="form-control" placeholder="Discription" name="" id=""></textarea>
                                </div>
                                <div class="mb-3 col-12 col-lg-6">
                                    <div class="">
                                        <label class="form-label">Upload Logo</label>
                                        <input type="file" name="" id="" onchange="readURL(this);" class="form-control">
                                    </div>
                                    <div class="pre-img-area mt-3">
                                        <img id="logo-image" class="preview-img" src="{{ asset("assets/admin/images/no-image.png") }}" alt="your image" />
                                    </div>
                                </div>

                                <div class="col-12 text-end">
                                    <button class="btn btn-primary bg-deepblue" type="submit">Add Review</button>
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
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#logo-image')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
