    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
          <div class="sidebar-brand-text mx-3">
              PEALIP ADMIN </div>  
                  
        </a>
        
  
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Interface Dashboard
        </div>
        
        {{-- Dashboard --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Travel
        </div>
        
        {{-- paket travel --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('travel-package.index') }}">
              <i class="fas fa-fw fa-luggage-cart"></i>
              <span>Paket Travel</span></a>
        </li>
                 
                
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Galeri
        </div>
        
        {{-- galeri travel --}}
        <li class="nav-item">
        <a class="nav-link" href="{{ route('gallery.index') }}">
              <i class="fas fa-fw fa-images"></i>
              <span>Galeri Travel</span></a>
        </li>

         <!-- Divider -->
         <hr class="sidebar-divider">
  
         <!-- Heading -->
         <div class="sidebar-heading">
           Transaksi
         </div>
         
         {{-- Transaksi --}}
         <li class="nav-item">
             <a class="nav-link" href="{{ route('transaction.index') }}">
               <i class="fas fa-fw fa-dollar-sign"></i>
               <span>Transaksi</span></a>
         </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
 
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->