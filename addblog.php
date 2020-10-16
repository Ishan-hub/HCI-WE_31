<?php include('header1.php') ?>
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Add Blog Post</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index1.php">Home</a> / <span> Add Blog Post</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->
  
     
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://infinite.codingest.com/assets/vendor/bootstrap/css/bootstrap.min.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="https://infinite.codingest.com/assets/admin/css/AdminLTE.min.css">



<body class="hold-transition skin-blue sidebar-mini">
<div class="listpgWraper">
    <div class="container">
        <!-- Main content -->
        <section class="content">

<div class="row">
	<div class="col-sm-12">
		<!-- form start -->
		
      		<div class="row">
			<div class="col-sm-12">
				<div class="form-post">
					<div class="form-post-left">
						<div class="box">
	<div class="box-header with-border">
		<div class="left">
	<center>		<h2 class="box-title">Blog Post Details</h2> <br></center>
		</div>
	</div><!-- /.box-header -->
<form method="post" action="blogsuccess.php">
	<div class="box-body">
	

		<div class="form-group">
			<label class="control-label">Title</label>
			<input type="text" class="form-control" name="title" placeholder="Title"
				   value=""  required>
		</div>

		

		<div class="form-group">
			<label class="control-label"> Description</label>
			<input type="text" class="form-control" name="keywords"
					  name="summary" placeholder= "Description " required>
		</div>
                                                               
                            
		<div class="form-group">
			<label class="control-label">Keywords (Tags)</label>
			<input type="text" class="form-control" name="keywords"
				   placeholder="Keywords (Tag)" value="" required>
		</div>

		
				

		<div class="form-group">
			<div class="row">
				<div class="col-sm-12">
					<label class="control-label">Optional Url</label>
					<input type="text" class="form-control"
						   name="optional_url" placeholder="Optional Url"
						   value="" >
				</div>
			</div>
		</div>

 
                        
<div class="form-group">
<div class="row">
	<div class="col-sm-12">
		<label class="control-label">Content</label>
		
		<textarea class="tinyMCE form-control" name="content" ></textarea>
	</div>
</div>

					</div>

					
                           
			</div>
		</div>
        
       
        	</div>
</div> <br><div class="formpanel">
<input type="submit" class="btn" value="Submit">
  </form>          
</div><!-- /.content-wrapper -->
        </section>
    </div>
    
    </div>
            </div></section></div></div></body>

<script src="https://infinite.codingest.com/assets/admin/plugins/tinymce/jquery.tinymce.min.js"></script>
<script src="https://infinite.codingest.com/assets/admin/plugins/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '.tinyMCE',
        min_height: 500,
        valid_elements: '*[*]',
        relative_urls: false,
        remove_script_host: false,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code codesample fullscreen",
            "insertdatetime media table paste imagetools"
        ],
        toolbar: 'code preview | undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | image media link | fullscreen',
    });
  
</script>

<?php include('footer.php') ?>