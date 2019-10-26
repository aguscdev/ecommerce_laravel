<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li{{$menu_active==1? ' class=active':''}}><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Kategory</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Tambah Kategory</a></li>
                <li><a href="{{route('category.index')}}">List Category</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Produk</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Tambah Produk</a></li>
                <li><a href="{{route('product.index')}}">List Produk</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Kupon</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">Tambah Kupon</a></li>
                <li><a href="{{route('coupon.index')}}">List Kupon</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->