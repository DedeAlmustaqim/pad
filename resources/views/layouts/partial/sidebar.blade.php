 <!-- BEGIN #sidebar -->
 <div id="sidebar" class="app-sidebar">
     <!-- BEGIN scrollbar -->
     <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
         <!-- BEGIN menu -->
         <div class="menu">
             <div class="menu-header">Navigation</div>
             <div class="menu-item active">
                 <a href="{{ url('/dashboard') }}" class="menu-link">
                     <span class="menu-icon"><i class="fa fa-laptop"></i></span>
                     <span class="menu-text">Home</span>
                 </a>
             </div>
             <div class="menu-item">
                 <a href="{{ url('/user') }}" class="menu-link">
                     <span class="menu-icon"><i class="fa fa-chart-pie"></i></span>
                     <span class="menu-text">User</span>
                 </a>
             </div>

         </div>
         <!-- END menu -->
     </div>
     <!-- END scrollbar -->

     <!-- BEGIN mobile-sidebar-backdrop -->
     <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
     <!-- END mobile-sidebar-backdrop -->
 </div>
 <!-- END #sidebar -->
