 <!-- MENU SIDEBAR-->
 <aside class="menu-sidebar d-none d-lg-block">
     <div class="logo">
         <a href="{{ route('dashboard')}}" class="flex">
             <h3 style="color: #DB4A84;"> <i class="fas fa-tags" style="margin-right: 5px;"></i><span style="color: #7C56CD;">AMBIL</span>PROMO.</h3>
         </a>
     </div>
     <div class="menu-sidebar__content js-scrollbar1">
         <nav class="navbar-sidebar">
             <ul class="list-unstyled navbar__list">
                 @if(Auth::user()->id_role == 1)
                 <li class="{{ Request::is('dashboard') ? 'active' : '' }} has-sub">
                     <a class="js-arrow" href="{{ route('dashboard')}}">
                         <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                 </li>
                 <li class="has-sub">
                     <a class="js-arrow" href="#">
                         <i class="fas fa-user"></i>Setting User</a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                         <li>
                             <a href="{{ route('datauser')}}">Data User</a>
                         </li>
                         <li>
                             <a href="{{ route('datarole')}}">Data Role</a>
                         </li>
                     </ul>
                 </li>
                 <li class="{{ Request::is('datadiskon') ? 'active' : '' }}">
                     <a href="{{ route('datadiskon')}}">
                         <i class="fas fa-percent"></i>Discount</a>
                 </li>
                 <li class="has-sub">
                     <a class="js-arrow" href="#">
                         <i class="fas fa-clipboard-list"></i>Category</a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                         <li>
                             <a href="{{ route('datakategori')}}">Category Promo</a>
                         </li>
                         <li>
                             <a href="{{ route('databarang')}}">Category Goods</a>
                         </li>
                     </ul>
                 </li>
                 <li class="has-sub">
                     <a class="js-arrow" href="#">
                         <i class="far fa-check-square"></i>Slider Settings</a>
                     <ul class="list-unstyled navbar__sub-list js-sub-list">
                         <li>
                             <a href="{{ route('datauser')}}">Top Promo Slider</a>
                         </li>
                         <li>
                             <a href="{{ route('datarole')}}">Items Slider</a>
                         </li>
                     </ul>
                 </li>
                 @else
                 <li class="{{ Request::is('dashboard') ? 'active' : '' }} has-sub">
                     <a class="js-arrow" href="{{ route('dashboard')}}">
                         <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                 </li>
                 <li class="{{ Request::is('datadiskon') ? 'active' : '' }}">
                     <a href="{{ route('datadiskon')}}">
                         <i class="fas fa-percent"></i>Discount</a>
                 </li>
                 <li class="{{ Request::is('items') ? 'active' : '' }}">
                     <a href="form.html">
                         <i class="far fa-check-square"></i>Items Slider</a>
                 </li>
                 @endif
             </ul>
         </nav>
     </div>
 </aside>
 <!-- END MENU SIDEBAR-->

 @include('include.jsadmin')
