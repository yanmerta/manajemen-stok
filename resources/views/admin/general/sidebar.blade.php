 <nav class="mt-2">
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
         <li class="nav-header">INTRO</li>
         <li class="nav-item {{ request()->routeIs('admin.admin.dashboard') ? 'menu-open active' : '' }}">
             <a href="{{ route('admin.admin.dashboard') }}" class="nav-link">
                 <i class="nav-icon fas fa fa-th"></i>
                 <p>
                     Dashboard
                 </p>
             </a>
         </li>
         <li class="nav-item">
             <a href="{{ url('/') }}" class="nav-link">
                 <i class="nav-icon fas fa-globe"></i>
                 <p>
                     See Website
                 </p>
             </a>
         </li>
         <li class="nav-header">MANAGE PAGE</li>
         <li class="nav-item">
             <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-book"></i>
                 <p>
                     Home
                     <i class="fas fa-angle-left right"></i>
                 </p>
             </a>
             <ul class="nav nav-treeview">
                 <li class="nav-item {{ request()->routeIs('admin.home.index') ? 'menu-open active' : '' }}">
                     <a href="{{ route('admin.admin.home.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>Home Page</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.admin.hms.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>Home Slider</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.admin.hms.image.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>Image Slider</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.admin.container.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>Container</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.admin.fitur.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>Fitur</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.fiturmenu.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>Fitur Menu</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.workprocces.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>WorkProcces</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.workprocces_2.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>WorkProcces 2</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.gallery.image.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>Gallery Image</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.gallery.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>Gallery</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.combine.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>Combine</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.price.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>Price</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.listprice.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>List Price</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.contact.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>Contact</p>
                     </a>
                 </li>
             </ul>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-pen"></i>
                 <p>
                     Blog
                     <i class="fas fa-angle-left right"></i>
                 </p>
             </a>
             <ul class="nav nav-treeview">
                 <li class="nav-item {{ request()->routeIs('admin.home.index') ? 'menu-open active' : '' }}">
                     <a href="{{ route('admin.category.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>category</p>
                     </a>
                 </li>
                 <li class="nav-item {{ request()->routeIs('admin.blog.index') ? 'menu-open active' : '' }}">
                     <a href="{{ route('admin.blog.index') }}" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>post</p>
                     </a>
                 </li>
                 <li class="nav-item {{ request()->routeIs('admin.home.index') ? 'menu-open active' : '' }}">
                     <a href="#" class="nav-link">
                         <i class="fas fa-circle nav-icon"></i>
                         <p>See Blog</p>
                     </a>
                 </li>
             </ul>
         <li class="nav-header">MASTER DATA</li>
         <li class="nav-item {{ request()->routeIs('admin.admin.users') ? 'menu-open active' : '' }}">
             <a href="{{ route('admin.admin.users') }}" class="nav-link">
                 <i class="nav-icon fas fa-user-alt"></i>
                 <p>
                     Data Admin
                 </p>
             </a>
         </li>
         <li class="nav-item {{ request()->routeIs('masterLanguageList') ? 'menu-open active' : '' }}">
             <a href="{{ route('masterLanguageList') }}" class="nav-link">
                 <i class="nav-icon fas fa-envelope"></i>
                 <p>
                     Data Email
                 </p>
             </a>
         </li>
         <li class="nav-item {{ request()->routeIs('masterLanguageList') ? 'menu-open active' : '' }}">
             <a href="{{ route('masterLanguageList') }}" class="nav-link">
                 <i class="nav-icon fas fa-globe-asia"></i>
                 <p>
                     Data Language
                 </p>
             </a>
         </li>

     </ul>
 </nav>
 <!-- /.sidebar-menu -->
 </div>
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         // Dapatkan path URL saat ini
         var path = window.location.pathname;

         // Dapatkan semua item menu dengan class 'nav-link'
         var menuItems = document.querySelectorAll('.nav-link');

         // Loop melalui setiap item menu
         menuItems.forEach(function(item) {
             // Dapatkan atribut href dari item menu
             var href = item.getAttribute('href');

             // Periksa apakah path saat ini dimulai dengan atribut href
             if (path.startsWith(href)) {
                 // Hapus class 'active' dari semua item menu
                 document.querySelectorAll('.nav-item').forEach(function(navItem) {
                     navItem.classList.remove('menu-open', 'active');
                 });

                 // Tambahkan class 'active' ke 'nav-item' parent
                 item.closest('.nav-item').classList.add('menu-open', 'active');
             }
         });
     });
 </script>
