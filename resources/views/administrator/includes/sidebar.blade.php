<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5">
   <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
         <ul id="sidebarnav" class="p-t-30">
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/') }}" target="_blank" aria-expanded="false"><i class="mdi mdi-web"></i><span class="hide-menu">Visit Site</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/administrator') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>           
            <li class="sidebar-item">
               <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book-multiple-variant"></i><span class="hide-menu">Pages </span></a>
               <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item"><a href="{{ url('administrator/pages') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Pages </span></a></li>
                  <li class="sidebar-item"><a href="{{ url('administrator/add-page') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Add Page </span></a></li>
               </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('administrator/media') }}" aria-expanded="false"><i class="mdi mdi-folder-multiple-image"></i><span class="hide-menu">Media Library</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('administrator/settings') }}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings </span></a></li>            
         </ul>
      </nav>
      <!-- End Sidebar navigation -->
   </div>
</aside>