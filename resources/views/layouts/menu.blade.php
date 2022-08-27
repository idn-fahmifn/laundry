<div class="sidebar-heading">
    MAIN MENU
</div>

@if(Auth::user()->level=='admin')
<li class="nav-item">
    <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-user"></i>
        <span>Petugas</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-users"></i>
        <span>Pelanggan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-store"></i>
        <span>Outlet</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-box"></i>
        <span>Daftar Paket</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-shopping-cart"></i>
        <span>pesanan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-exchange-alt"></i>
        <span>Transaksi</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-download"></i>
        <span>Report</span>
    </a>
</li>
@elseif(Auth::user()->level=='petugas')
<li class="nav-item">
    <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-users"></i>
        <span>Pelanggan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-shopping-cart"></i>
        <span>pesanan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-exchange-alt"></i>
        <span>Transaksi</span>
    </a>
</li>
@else
<li class="nav-item">
    <a class="nav-link" href="/pesanan">
        <i class="fas fa-fw fa-shopping-cart"></i>
        <span>Pesanan</span>
    </a>
</li>
@endif



