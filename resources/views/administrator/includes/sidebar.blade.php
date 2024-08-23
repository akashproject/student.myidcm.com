<!-- Menu -->
   <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo">
         <a href="{{ route('administrator') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
               <img src="{{ url('/assets/administrator/img/logo.png') }}" class="width-60" />
            </span>
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
      </div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">
         <!-- Dashboard -->
         <li class="menu-item active">
            <a href="index.html" class="menu-link">
               <i class="menu-icon tf-icons bx bx-home-circle"></i>
               <div data-i18n="Analytics">Dashboard</div>
            </a>
         </li>

         <!-- Layouts -->
         <li class="menu-item">
            <a href="{{ route('website') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-globe"></i>
               <div data-i18n="globe">Visit Site</div>
            </a>
         </li>

         <li class="menu-header small text-uppercase">
            <span class="menu-header-text">-</span>
         </li>
         <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
               <i class="menu-icon tf-icons bx bx-user"></i>
               <div data-i18n="Account Settings">Users</div>
            </a>
            <ul class="menu-sub">
               <li class="menu-item">
                  <a href="{{ route('admin-users') }}" class="menu-link">
                     <div data-i18n="Connections"> Users </div>
                  </a>
               </li>
               <li class="menu-item">
                  <a href="{{ route('admin-students') }}" class="menu-link">
                     <div data-i18n="Connections"> Students </div>
                  </a>
               </li>
            </ul>
         </li>
         <li class="menu-item">
            <a href="{{ route('admin-media') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-image"></i>
               <div data-i18n="Settings">Media Library</div>
            </a>
         </li>
         <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
               <i class="menu-icon tf-icons bx bx-file-blank"></i>
               <div data-i18n="Authentications">Page</div>
            </a>
            <ul class="menu-sub">
               <li class="menu-item">
                  <a href="{{ route('admin-pages') }}" class="menu-link">
                     <div data-i18n="Basic">Pages</div>
                  </a>
               </li>
               <li class="menu-item">
                  <a href="{{ route('admin-add-page') }}" class="menu-link">
                     <div data-i18n="Basic">Add Pages</div>
                  </a>
               </li>
            </ul>
         </li>
         <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
               <i class="menu-icon tf-icons bx bx-package"></i>
               <div data-i18n="Authentications">Product</div>
            </a>
            <ul class="menu-sub">
               <li class="menu-item">
                  <a href="{{ route('admin-products') }}" class="menu-link">
                     <div data-i18n="Basic">Products</div>
                  </a>
               </li>
               <li class="menu-item">
                  <a href="{{ route('admin-add-product') }}" class="menu-link">
                     <div data-i18n="Basic">Add Product</div>
                  </a>
               </li>
            </ul>
         </li>
         <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
               <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
               <div data-i18n="Authentications">Accessibility</div>
            </a>
            <ul class="menu-sub">
               <li class="menu-item">
                  <a href="{{ route('manage-roles') }}" class="menu-link">
                     <div data-i18n="Basic">Manage Accessibility</div>
                  </a>
               </li>
               <li class="menu-item">
                  <a href="{{ route('role-master') }}" class="menu-link">
                     <div data-i18n="Basic">Create Accessibility</div>
                  </a>
               </li>
            </ul>
         </li>
         <li class="menu-item">
            <a href="{{ route('admin-settings') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-cog"></i>
               <div data-i18n="Settings">Settings</div>
            </a>
         </li>
      </ul>
   </aside>
<!-- / Menu -->