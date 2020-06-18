@guest
   @else 
     
 
 <!-- ########## START: LEFT PANEL ########## -->
 <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i>The Design Web</a></div>
 <div class="sl-sideleft">
   <div class="input-group input-group-search">
     <input type="search" name="search" class="form-control" placeholder="Search">
     <span class="input-group-btn">
       <button class="btn"><i class="fa fa-search"></i></button>
     </span><!-- input-group-btn -->
   </div><!-- input-group -->

   <label class="sidebar-label">Navigation</label>
   <div class="sl-sideleft-menu">
     <a href="index.html" class="sl-menu-link active">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
         <span class="menu-item-label">Dashboard</span>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <a href="widgets.html" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
         <span class="menu-item-label">Pesanan Saya</span>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
         <span class="menu-item-label">Produk</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
       <li class="nav-item"><a href="chart-morris.html" class="nav-link">Tambah Produk</a></li>
       <li class="nav-item"><a href="chart-flot.html" class="nav-link">Edit Produk</a></li>
       <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Katagori Produk</a></li>
       <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Stok Produk</a></li>
      
     </ul>
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
         <span class="menu-item-label">Page</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
       <li class="nav-item"><a href="form-elements.html" class="nav-link">Tambah Page</a></li>
       <li class="nav-item"><a href="form-layouts.html" class="nav-link">Edit Page</a></li>
       <li class="nav-item"><a href="form-validation.html" class="nav-link">Katagori Page</a></li>
       
     </ul>
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
         <span class="menu-item-label">Artikel</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
       <li class="nav-item"><a href="accordion.html" class="nav-link">Artikel</a></li>
       <li class="nav-item"><a href="alerts.html" class="nav-link">edit artikel</a></li>
      
     </ul>
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
         <span class="menu-item-label">Katagori</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
     <li class="nav-item"><a href="{{route ('category')}}" class="nav-link">Katagori</a></li>
       <li class="nav-item"><a href="{{route ('sub.categories')}}" class="nav-link">Sub Katagori</a></li>
       <li class="nav-item"><a href="{{route ('brands')}}" class="nav-link">Brand</a></li>
       <li class="nav-item"><a href="{{route ('admin.coupon')}}" class="nav-link">Coupon</a></li>
     </ul>
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
         <span class="menu-item-label">Maps</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
       <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
       <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
     </ul>
     <a href="mailbox.html" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
         <span class="menu-item-label">Mailbox</span>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <a href="#" class="sl-menu-link">
       <div class="sl-menu-item">
         <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
         <span class="menu-item-label">Pages</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
       </div><!-- menu-item -->
     </a><!-- sl-menu-link -->
     <ul class="sl-menu-sub nav flex-column">
       <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>
       <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
       <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
       <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
     </ul>
   </div><!-- sl-sideleft-menu -->

   <br>
 </div><!-- sl-sideleft -->
 <!-- ########## END: LEFT PANEL ########## -->
 @endguest
