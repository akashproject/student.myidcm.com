<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5">
   <!-- Sidebar scroll-->
   <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
         <ul id="sidebarnav" class="p-t-30">
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/') }}" target="_blank" aria-expanded="false"><i class="mdi mdi-web"></i><span class="hide-menu">Visit Site</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
            <li class="sidebar-item">
               <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Users </span></a>
               <ul aria-expanded="false" class="collapse  first-level">
                  <li class="sidebar-item"><a href="{{ route('admin-users') }}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> All User</span></a></li>
                  <li class="sidebar-item"><a href="{{ url('administrator/university-login') }}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> User Type</span></a></li>
               </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin-settings') }}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings </span></a></li>
            <li class="sidebar-item">
               <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Accessibility</span></a>
               <ul aria-expanded="false" class="collapse  first-level">
                  <li class="sidebar-item"><a href="{{ route('manage-roles') }}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Accessibility</span></a></li>
                  <li class="sidebar-item"><a href="{{ route('role-master') }}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Create Accessibility</span></a></li>
               </ul>
            </li>         
         </ul>
      </nav>
      <!-- End Sidebar navigation -->
   </div>
   <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->