<aside class="app-sidebar bg-body-secondary" data-bs-theme="dark">
  <!-- Sidebar Brand -->
  <div class="sidebar-brand">
    <a href="#" class="brand-link">
      <img src="/ecozonehub/public/dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow" />
      <span class="brand-text fw-bold">Eco-Zone HUB</span>
    </a>
  </div>

  <?php $currentPath = $_SERVER['REQUEST_URI']; ?>
  <!-- Sidebar Wrapper -->
  <div class="sidebar-wrapper overflow-auto">
    <nav class="mt-2">
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

        <!-- RECORDS -->
        <li class="nav-header">RECORDS</li>

        <li class="nav-item">
          <a href="../dashboard/index.php"
            class="nav-link <?= str_contains($currentPath, '/dashboard/index.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-columns-gap"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../products/index.php"
            class="nav-link <?= str_contains($currentPath, '/products/index.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-box"></i>
            <p>Products</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../categories/index.php"
            class="nav-link <?= str_contains($currentPath, '/categories/index.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-tags"></i>
            <p>Categories</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../stock_in/index.php"
            class="nav-link <?= str_contains($currentPath, '/stock_in/index.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-plus-square"></i>
            <p>Stock In</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../sales/index.php"
            class="nav-link <?= str_contains($currentPath, '/sales/index.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-cart-check"></i>
            <p>Sales</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../returns/index.php"
            class="nav-link <?= str_contains($currentPath, '/returns/index.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-arrow-counterclockwise"></i>
            <p>Returns</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../damages/index.php"
            class="nav-link <?= str_contains($currentPath, '/damages/index.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-exclamation-triangle"></i>
            <p>Damages</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../suppliers/index.php"
            class="nav-link <?= str_contains($currentPath, '/suppliers/index.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-truck"></i>
            <p>Suppliers</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../customers/index.php"
            class="nav-link <?= str_contains($currentPath, '/customers/index.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-people"></i>
            <p>Customers</p>
          </a>
        </li>

        <!-- REPORTS -->
        <li class="nav-header">REPORTS</li>

        <li class="nav-item">
          <a href="../reports/inventory.php"
            class="nav-link <?= str_contains($currentPath, '/reports/inventory.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-graph-up"></i>
            <p>Inventory Report</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../reports/sales.php"
            class="nav-link <?= str_contains($currentPath, '/reports/sales.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-bar-chart-line"></i>
            <p>Sales Report</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../reports/returns.php"
            class="nav-link <?= str_contains($currentPath, '/reports/returns.php') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-arrow-repeat"></i>
            <p>Returns Report</p>
          </a>
        </li>

        <!-- FINANCE -->
        <li class="nav-header">FINANCE</li>

        <li class="nav-item">
          <a href="../finance/expenses.php"
            class="nav-link <?= str_contains($currentPath, '/finance/expenses.php') ? 'active' : ''; ?>">
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
          <a href="../logout.php" class="nav-link <?= str_contains($currentPath, '/logout.php') ? 'active' : ''; ?>">
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