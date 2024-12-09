<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('dashboard') }}" class="logo">
                <img src="{{ asset('assets/img/logo-gsa2.png') }}" alt="navbar brand" class="navbar-brand" width="180"
                    style="border-radius: 15px;" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>

                <!-- Member Management -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Kelola User</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#admin-management">
                        <i class="fas fa-user"></i>
                        <p>Semua User</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="admin-management">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.index') }}">
                                    <span class="sub-item">Semua Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('members.index') }}">
                                    <span class="sub-item">Semua Member</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.distributors.index') }}">
                                    <span class="sub-item">Semua Distributor</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.vendors.index') }}">
                                    <span class="sub-item">Semua Vendor</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Product Management -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Kelola Produk</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#product-management">
                        <i class="fas fa-shopping-cart"></i>
                        <p>Produk</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="product-management">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.produk.index') }}">
                                    <span class="sub-item">Semua Produk</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#dist-port-management">
                        <i class="fas fa-warehouse"></i>
                        <p>Semua Layanan</p>
                        @if ($totalPendingProducts > 0)
                            <span class="badge bg-danger">{{ $totalPendingProducts }}</span>
                        @endif
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dist-port-management">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.quotations.index') }}">
                                    <span class="sub-item">Quotation</span>
                                    @if ($pendingCount > 0)
                                        <span class="badge bg-danger">{{ $pendingCount }}</span>
                                    @endif
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.purchase-orders.index') }}">
                                    <span class="sub-item">Purchase Orders</span>
                                    @if ($pendingPOs > 0)
                                        <span class="badge bg-danger">{{ $pendingPOs }}</span>
                                    @endif
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.quotations.negotiations.index') }}">
                                    <span class="sub-item">Negosiasi</span>
                                    @if ($pendingNegotiations > 0)
                                        <span class="badge bg-danger">{{ $pendingNegotiations }}</span>
                                    @endif
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.proforma-invoices.index') }}">
                                    <span class="sub-item">Proforma Invoices</span>
                                    @if ($pendingPIs > 0)
                                        <span class="badge bg-danger">{{ $pendingPIs }}</span>
                                    @endif
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('invoices.index') }}">
                                    <span class="sub-item">Invoices</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.tickets.index') }}">
                                    <span class="sub-item">Tiketing</span>
                                    @if ($openTickets > 0)
                                        <span class="badge bg-danger">{{ $openTickets }}</span>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Content Management -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Kelola Konten</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#content-management">
                        <i class="fas fa-info-circle"></i>
                        <p>Meta & Konten</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="content-management">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.meta.index') }}">
                                    <span class="sub-item">Meta</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.slider.index') }}">
                                    <span class="sub-item">Slider</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.activity.index') }}">
                                    <span class="sub-item">Aktivitas</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.brand.index') }}">
                                    <span class="sub-item">Mitra</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Information & FAQ -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Informasi & Pertanyaan</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#information-section">
                        <i class="fas fa-phone"></i>
                        <p>Informasi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="information-section">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.location.index') }}">
                                    <span class="sub-item">Lokasi Pengguna</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#pertanyaan-section">
                        <i class="fa fa-question-circle"></i>
                        <p>Pertanyaan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="pertanyaan-section">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.faq.index') }}">
                                    <span class="sub-item">QnA Member</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.guest-messages.index') }}">
                                    <span class="sub-item">Guest Message</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Master Data -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Data Master</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#master-data">
                        <i class="fas fa-database"></i>
                        <p>Data Master</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="master-data">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('bidangperusahaan.index') }}">
                                    <span class="sub-item">Bidang Perusahaan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.kategori.index') }}">
                                    <span class="sub-item">Kategori Produk</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.activity.category-activity.index') }}">
                                    <span class="sub-item">Kategori Aktivitas</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('parameter.index') }}">
                                    <span class="sub-item">Parameter</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.visitors') }}">
                                    <span class="sub-item">Pengunjung</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
