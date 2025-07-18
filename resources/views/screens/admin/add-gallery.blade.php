<?php
    include "headerr.php";
?>

<div class="content-body ">
	<div class="container-fluid">
		<div class="row mb-4">
			<div class="col-12">
				<div class="bg-white">
					<div class="card-body">
                        <h4 class="section-title">Add Gallery</h4>
                        <form action="." class="mb-0">
                            <div class="row">

                                <div class="mb-3 col-12 col-lg-6">
                                    <label class="form-label">Categories Name</label>
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected>Branch</option>
                                        <option value="1">Branch One</option>
                                        <option value="2">Branch Two</option>
                                        <option value="3">Branch Three</option>
                                    </select>
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
                                    <button class="btn btn-primary bg-deepblue" type="submit">Add Gallery</button>
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
