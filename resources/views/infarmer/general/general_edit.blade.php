@extends('infarmer.admin_master')
@extends('infarmer.admin_master')
@section('title')
<title>General Cost Edit for GC{{ $general_cost->id}}</title>
@endsection
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
<div class="container-full">
		<!-- Content Header (Page header) -->
		  

		<!-- Main content -->
	<section class="content">

		<div class="box">
			<div class="box-header with-border">
			  <h5 class="box-title">Edit Cost Record for ID: GC{{$general_cost->id  }} </h5>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
  					<form method="post" action="{{ route('general.update',['id' => $general_cost->id]) }}" enctype="multipart/form-data" >
		 			@csrf
					 	<div class="row">
							<div class="col-12">	
								
								<div class="row"> <!-- start 1st row  -->

									<div class="col-md-6">
	 									

										<div class="form-group">
											<div class="form-group">
												<h5>Amount:  <span class="text-danger">*</span></h5>
												<div class="controls">
												<input type="text" name="amount" class="form-control" required="" value="{{ $general_cost->amount }}">
											     @error('amount') 
												 <span class="text-danger">{{ $message }}</span>
												 @enderror
									 	  		</div>
		 									</div>
				
										</div>
				
										
									</div> <!-- end col md 4 -->

									<div class="col-md-6">
	 									<div class="form-group">

											<div class="form-group">
												<h5>Reason: <span class="text-danger">*</span></h5>
												<div class="controls">
												<input type="text" name="reason" class="form-control" required="" value="{{ $general_cost->reason }}">
											     @error('reason') 
												 <span class="text-danger">{{ $message }}</span>
												 @enderror
									 	  		</div>
		 									</div>
				
										</div>
									</div> 
			
								</div> <!-- end 1st row  -->
								<div class="row"> <!-- start 2nd row  -->

									<div class="col-md-6">
	 									<div class="form-group">

											<div class="form-group">
												<h5>Date : <span class="text-danger">*</span></h5>
												<div class="controls">
												<input type="date" name="date" class="form-control" required="" value="{{ $general_cost->date }}">
											     @error('date') 
												 <span class="text-danger">{{ $message }}</span>
												 @enderror
									 	  		</div>
		 									</div>
				
										</div>
									</div> 
								
			
								</div> <!-- end 2nd row  -->

								
								
						</div>
				

						<!-- Bank Details -->
					

						 
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Edit General Cost ">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		</div>

		
	</section>
</div>

		<!-- /.content -->

 <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                    	$('select[name="subsubcategory_id"]').html('');
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });



 $('select[name="subcategory_id"]').on('change', function(){
            var subcategory_id = $(this).val();
            if(subcategory_id) {
                $.ajax({
                    url: "{{  url('/category/sub-subcategory/ajax') }}/"+subcategory_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="subsubcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
 

    });
    </script>


<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
</script>


<script>
 
  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
   
  </script>




@endsection