<div class="left-side-bar">
    <div class="brand-logo" style="padding-top: 50px; padding-bottom: 45px">
        <a href="index.html">
            <img src="{{asset('templete/vendors/images/logo.png')}}" alt="" class="dark-logo">
            <img src="{{asset('templete/vendors/images/logo-white.png')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="dropdown-divider"></div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ url('/coba') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kategori.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-diagram"></span><span class="mtext">Kategori Barang</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('barang.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-box"></span><span class="mtext">Barang</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('supplier.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-shop"></span><span class="mtext">Supplier</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-users"></span><span class="mtext">Data User</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('BarangKeluar.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-outbox"></span><span class="mtext">Barang Keluar</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('BarangMasuk.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-inbox"></span><span class="mtext">Barang Masuk</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
