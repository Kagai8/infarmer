@extends('infarmer.admin_master')
@section('title')
<title>Sheep Profiles Full Report</title>
@endsection
@section('admin')


  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->

		<!-- Main content -->
			<section class="content">
			  	<div class="row">
						<div class="col-12">

						 <div class="box">
							<div class="box-header with-border">
								  <h3 class="box-title">Sheep Profiles Full Report <span class="badge badge-pill badge-danger"> {{ count($goat_profiles) }} </span></h3>
								  <div class="bb-1 clearFix">
											<div class="text-right pb-15">
					                <a href="{{ route('export-goat-profiles') }}" class="btn btn-rounded btn-success" target="_blank">
							        		<span><i class="fa fa-file-excel-o"></i>Excel</span>
							    				</a>
			                </div>
					  			</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<div class="table-responsive">
								  <table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Tag</th>
											<th>Name </th>
											<th>Breed</th>
											<th>Gender</th>
											<th>Age </th>
											<th>Date Born</th>
											<th>Parent(Ram) </th>
											<th>Parent Tag(Ram) </th>
											<th>Parent(Ewe) </th>
											<th>Parent Tag(Ewe) </th>
											<th>Color </th>
											<th>Weight </th>
											<th>Height</th>
											<th>Maturity</th>
											<th>Life Status </th>
											<th>Health Status</th>
											<th>Breeding Status </th>
											<th>Sale Status </th>
											<th>Created By</th>
											<th>Created At </th>
											<th>Updated At</th>
											
										</tr>
									</thead>
										<tbody>
										 @foreach($goat_profiles as $item)
										 <tr>
												<td>S{{ $item->goat->id }}</td>
												<td>{{ $item->goat->name }}</td>
												<td>{{ $item->breed->breed }}</td>
												<td>{{ $item->goat->goat_gender }}</td>
												<td>
												 	@php
	                						// Parse the date of birth into a Carbon instance
							                $dob = \Carbon\Carbon::createFromFormat('Y-m-d', $item->date_born);
							                
							                // Calculate the age for the current goat
							                $age = $dob->diff(Carbon\Carbon::now());
							                $years = $age->format('%y');
							                $months = $age->format('%m');
							                $days = $age->format('%d');
							            	@endphp
	            						{{ $years }} yr(s), {{ $months }} mth(s),  {{ $days }} d(s)
	          						</td>
												<td> {{ $item->date_born }}</td>
												<td>{{ $item->ram->name }}</td>
												<td>{{ $item->ram->id }}</td>
												<td>{{ $item->ewe->name }}</td>
												<td>{{ $item->ewe->id }}</td>
												<td> {{ $item->goat_color }}</td>
												<td> {{ $item->goat_weight }}</td>
												<td> {{ $item->goat_height }}</td>
												<td> {{ $item->goat_maturity }}</td>
												<td>
													@if($item->status == 1)
                            <p>Alive</p>
                            @elseif($item->status == 2)
                            <p>Coma</p>
                            @elseif($item->status == 3)
                            <p>Deceased</p>
                            @else
                            <p>Sold</p>
                          @endif
                        </td>
                        <td>
													@if($item->health_status == 1)
                            <p>Healthy</p>
                            @elseif($item->health_status == 2)
                            <p>Sickly</p>
                            @elseif($item->health_status == 3)
                            <p>Very Sick</p>
                            @else
                            <p>Under Treatment</p>
                          @endif
                        </td>
                        <td>
													@if($item->breeding_status == 0)
                            <p>Not Breeding</p>
                            @else
                            <p>Currently Breeding</p>
                          @endif
                        </td>
												<td>
													@if($item->sale_status == 0)
                            <p>Not For Sale</p>
                            @else
                            <p>Available for Sale</p>
                          @endif
                        </td>
                        <td>{{ $item->created_by }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at )->format('d F Y')}}</td>
                        <td>{{ \Carbon\Carbon::parse($item->updated_at )->format('d F Y')}}</td>		 
										 </tr>
										  @endforeach
										</tbody>
							 
						  			</table>
								</div>
							</div>
						<!-- /.box-body -->
				  		</div>
				  <!-- /.box -->

				          
						</div>
				<!-- /.col -->

	 
	 


			  	</div>
			  <!-- /.row -->


		
			</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection