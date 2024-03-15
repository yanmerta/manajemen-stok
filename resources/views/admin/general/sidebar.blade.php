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
                     Pages
                     <i class="fas fa-angle-left right"></i>
                 </p>
             </a>
             <ul class="nav nav-treeview">
                 <li class="nav-item">
                     <a href="{{ route('admin.admin.container.index') }}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Invoice</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/profile.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Profile</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/e-commerce.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>E-commerce</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/projects.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Projects</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/project-add.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Project Add</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/project-edit.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Project Edit</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/project-detail.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Project Detail</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/contacts.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Contacts</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/faq.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>FAQ</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/contact-us.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Contact us</p>
                     </a>
                 </li>
             </ul>
         </li>
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
                         <i class="far fa-circle nav-icon"></i>
                         <p>Home Page</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.admin.hms.index') }}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Home Slider</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.admin.fitur.index') }}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Home Image Slider</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.admin.hms.image.index') }}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Projects</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.fiturmenu.index') }}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Project Add</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/project-edit.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Project Edit</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/project-detail.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Project Detail</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Contacts</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/faq.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>FAQ</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/examples/contact-us.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Contact us</p>
                     </a>
                 </li>
             </ul>
         </li>
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
