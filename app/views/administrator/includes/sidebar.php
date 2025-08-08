<aside class="app-sidebar bg-body-secondary" data-bs-theme="dark">
  <!-- Sidebar Brand -->
  <div class="sidebar-brand">
    <a href="#" class="brand-link">
      <img src="/ecozonehub/public/dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow" />
      <span class="brand-text fw-bold">Eco-Zone HUB</span>
    </a>
  </div>

  <!-- Sidebar Wrapper -->
  <div class="sidebar-wrapper overflow-auto">
    <nav class="mt-2">
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

        <!-- RECORDS -->
        <li class="nav-header">RECORDS</li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/dashboard"
            class="nav-link  <?= is_active('/administrator/dashboard',); ?>">
            <i class="nav-icon bi bi-columns-gap"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/products"
            class="nav-link  <?= is_active('/administrator/products',); ?>">

            <i class="nav-icon bi bi-box"></i>
            <p>Products</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/categories"
            class="nav-link  <?= is_active('/administrator/categories',); ?>">

            <i class="nav-icon bi bi-tags"></i>
            <p>Categories</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/stockin"
            class="nav-link  <?= is_active('/administrator/stockin',); ?>">
            <i class="nav-icon bi bi-plus-square"></i>
            <p>Stock In</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/sales" class="nav-link  <?= is_active('/administrator/sales',); ?>">
            <i class="nav-icon bi bi-cart-check"></i>
            <p>Sales</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/returns"
            class="nav-link  <?= is_active('/administrator/returns',); ?>">
            <i class="nav-icon bi bi-arrow-counterclockwise"></i>
            <p>Returns</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/damages"
            class="nav-link  <?= is_active('/administrator/damages',); ?>">
            <i class="nav-icon bi bi-exclamation-triangle"></i>
            <p>Damages</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/suppliers"
            class="nav-link  <?= is_active('/administrator/suppliers',); ?>">
            <i class="nav-icon bi bi-truck"></i>
            <p>Suppliers</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/customers"
            class="nav-link  <?= is_active('/administrator/customers',); ?>">
            <i class="nav-icon bi bi-people"></i>
            <p>Customers</p>
          </a>
        </li>

        <!-- REPORTS -->
        <li class="nav-header">REPORTS</li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/inventoryReports"
            class="nav-link  <?= is_active('/administrator/inventoryReports',); ?>">

            <i class="nav-icon bi bi-graph-up"></i>
            <p>Inventory Report</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/salesReports"
            class="nav-link  <?= is_active('/administrator/salesReports',); ?>">
            <i class="nav-icon bi bi-bar-chart-line"></i>
            <p>Sales Report</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/returnsReports"
            class="nav-link  <?= is_active('/administrator/returnsReports',); ?>">
            <i class="nav-icon bi bi-arrow-repeat"></i>
            <p>Returns Report</p>
          </a>
        </li>

        <!-- FINANCE -->
        <li class="nav-header">FINANCE</li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/expences"
            class="nav-link  <?= is_active('/administrator/expeneces',); ?>">
            <i class="nav-icon bi bi-currency-dollar"></i>
            <p>Expenses</p>
          </a>
        </li>

        <!-- <li class="nav-item">
          <a href="../finance/cashflow.php" class="nav-link <?= str_contains($currentPath, '/finance/cashflow.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-wallet2"></i>
            <p>Cash Flow</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../finance/statements.php" class="nav-link <?= str_contains($currentPath, '/finance/statements.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-file-earmark-bar-graph"></i>
            <p>Financial Statements</p>
          </a>
        </li> -->


        <!-- ADMINISTRATION -->
        <li class="nav-header">ADMINISTRATION</li>

        <li class="nav-item">
          <a href="../user_accounts/index.php"
            class="nav-link <?= str_contains($currentPath, '/user_accounts/index.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-person-circle"></i>
            <p>User Accounts</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../settings/index.php"
            class="nav-link <?= str_contains($currentPath, '/settings/index.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-gear"></i>
            <p>Settings</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= baseurl() ?>/administrator/logout" class="nav-link">
            <i class="nav-icon bi bi-box-arrow-right"></i>
            <p>Logout</p>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</aside>

<!-- <style>
  .bg-body-secondary {
    background: linear-gradient(180deg, #388e3c, #1b5e20); /* green gradient */
    color: #ffffff;
  }

  .app-sidebar .nav-link,
  .app-sidebar .brand-text {
    color: #ffffff;
  }

  .app-sidebar .nav-link.active {
    background-color: rgba(255, 255, 255, 0.15);
  }

  .app-sidebar .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.25);
  }

  .nav-header {
    color: #c8e6c9;
    font-weight: bold;
    font-size: 0.85rem;
    text-transform: uppercase;
  }

  .brand-link {
    background-color: transparent !important;
    color: #ffffff;
  }

  .brand-link .brand-image {
    border-radius: 50%;
  }
</style> -->