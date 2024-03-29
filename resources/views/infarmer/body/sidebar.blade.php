

  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ route('dashboard.index')}}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="" alt="">
						  <h3><b>Infarmer</b> App</h3>
              
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree" >  
		  
      		<li class="">
                <a href="{{ route('dashboard.index')}}">
                  <i data-feather="pie-chart"></i>
      			<span>Dashboard</span>
                </a>
            </li>

          <li class="header nav-small-cap">SHEEP </li>
          <li class="treeview ">
            <a href="#">
              <i data-feather="mail"></i> <span>Breed Administration</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li class=""><a href="{{ route('breed.create') }}"><i class="ti-more"></i>Add Breed</a></li>
                <li class=""><a href="{{ route('breed.view') }}"><i class="ti-more"></i>Manage Breeds</a></li>
            </ul>
          </li>

          <li class="treeview ">
            <a href="#">
              <i data-feather="mail"></i> <span>Sheep Administration</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li class=""><a href="{{ route('goat.create') }}"><i class="ti-more"></i>Add Sheep</a></li>
                <li class=""><a href="{{ route('goat.view') }}"><i class="ti-more"></i>View Sheep</a></li>
            </ul>
          </li>  

          <li class="treeview">
            <a href="">
              <i data-feather="message-circle"></i>
              <span>Sheep Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class=""><a href="{{ route('goat-profile-create') }}"><i class="ti-more"></i>Create Sheep Profile</a></li>
              <li class=""><a href="{{ route('goat-profiles') }}"><i class="ti-more"></i>View Sheep Profiles</a></li>
              
             
              
            </ul>
          </li> 
        <li class="header nav-small-cap">BREEDING</li>
        <li class="treeview ">
          <a href="#">
            <i data-feather="mail"></i> <span>Breeding Hub </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class=""><a href="{{ route('breeding-events-create') }}"><i class="ti-more"></i>Create Breeding Event</a></li>
              <li class=""><a href="{{ route('breeding-events') }}"><i class="ti-more"></i>Manage Breeding</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap">VACCINE AND HEALTH</li>
        <li class="treeview ">
          <a href="#">
            <i data-feather="mail"></i> <span>Vaccine Schedules </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class=""><a href="{{ route('disease.create') }}"><i class="ti-more"></i>Diseases</a></li>
              <li class=""><a href="{{ route('vaccination.create') }}"><i class="ti-more"></i>Schedule Vaccine</a></li>
              
              
          </ul>
        </li>
        <li class="treeview ">
          <a href="#">
            <i data-feather="mail"></i> <span>Health Record </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class=""><a href="{{ route('health-record-create') }}"><i class="ti-more"></i>Health Record Create</a></li>
              
              
          </ul>
        </li>
        <li class="header nav-small-cap">ACCOUNTING</li>
        <li class="treeview ">
          <a href="#">
            <i data-feather="mail"></i> <span>Cost Hub </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class=""><a href="{{ route('cost.create') }}"><i class="ti-more"></i>Cost Per Goat</a></li>
              <li class=""><a href="{{ route('general.create') }}"><i class="ti-more"></i>General Costs</a></li>
              
          </ul>
        </li>

        <li class="treeview ">
          <a href="#">
            <i data-feather="mail"></i> <span>Sale Hub </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class=""><a href="{{ route('sale.create') }}"><i class="ti-more"></i>Point Of Sale</a></li>
              <li class=""><a href="{{ route('sale.view') }}"><i class="ti-more"></i>View Sales</a></li>
              
          </ul>
        </li>

        <li class="treeview ">
          <a href="#">
            <i data-feather="mail"></i> <span>Users </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class=""><a href="{{ route('create-user') }}"><i class="ti-more"></i>View Users</a></li>
              
              
          </ul>
        </li>
        <li class="header nav-small-cap">REPORTS</li>
        <li class="treeview ">
          <a href="#">
            <i data-feather="mail"></i> <span>Reports </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class=""><a href="{{ route('goat-full-report') }}"><i class="ti-more"></i>Sheep Full Report</a></li>
              <li class=""><a href="{{ route('general-report') }}"><i class="ti-more"></i>General Cost Report</a></li>
              <li class=""><a href="{{ route('cost-report') }}"><i class="ti-more"></i>Cost Per Goat Report</a></li>
              <li class=""><a href="{{ route('sale-report') }}"><i class="ti-more"></i>Sales Report</a></li>
              
              
          </ul>
        </li>
 

       
   
		 
        

        
		    
        
        


 

		    

		 

    
       


        

      </ul>
    </section>
	
	
  </aside>