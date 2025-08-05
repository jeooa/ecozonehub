<!doctype html>
<html lang="en">

<head>


  <style>
    .product-card {
      cursor: pointer;
      transition: all 0.3s ease;
      border: 1px solid #dee2e6;
      height: 100%;
    }

    .product-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-color: #007bff;
    }

    .product-image {
      height: 120px;
      object-fit: cover;
      width: 100%;
    }

    .invoice-table {
      max-height: 300px;
      overflow-y: auto;
    }

    .qty-btn {
      border: 1px solid #dc3545;
      color: #dc3545;
      background: white;
      width: 30px;
      height: 30px;
      border-radius: 4px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    .qty-btn:hover {
      background: #dc3545;
      color: white;
    }

    .category-filters {
      margin-bottom: 20px;
    }

    .category-btn {
      margin-right: 10px;
      margin-bottom: 10px;
    }

    @media (max-width: 576px) {
      .row.g-2.align-items-center>div {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .row.g-2.align-items-center {
        flex-direction: column !important;
      }

      .col-md-6.col-12.d-flex.gap-2.align-items-center {
        flex-direction: column !important;
        align-items: stretch !important;
        gap: 8px !important;
      }

      .btn.btn-warning.btn-sm.flex-shrink-0,
      #categoryDropdown {
        width: 100% !important;
      }
    }
  </style>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">

    <?php admin_view_layout(); ?>


    <main class="app-main">
      <div class="app-content-header">
        <div class="container-fluid">
          <div class="row">
            <!-- Optional header/breadcrumbs -->
          </div>
        </div>
      </div>

      <div class="app-content">
        <div class="container-fluid">
          <div class="row">
            <!-- Product Selection -->
            <div class="col-lg-6">
              <!-- Search Input -->
              <!-- <div class="col-lg-6"> -->
              <div class="card">
                <div class="card-body">
                  <div class="row g-2 align-items-center">
                    <!-- Search Input -->
                    <div class="col-md-8 col-12 mb-2 mb-md-0">
                      <div class="input-group">
                        <input type="text" id="productSearch" class="form-control form-control-sm"
                          placeholder="Search product by code or name">
                        <button class="btn btn-danger btn-sm" type="button"><i class="bi bi-plus"></i></button>
                      </div>
                    </div>

                    <!-- Category Button Group Dropdown -->
                    <div class="col-md-4 col-12 d-flex gap-2 align-items-center">
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-warning btn-sm" onclick="filterProducts('all')">
                          All Categories
                        </button>
                        <button type="button"
                          class="btn btn-outline-warning btn-sm dropdown-toggle dropdown-toggle-split"
                          id="categoryDropdownBtn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="categoryDropdownBtn">
                          <li><button class="dropdown-item" onclick="filterProducts('food')">Food</button></li>
                          <li><button class="dropdown-item" onclick="filterProducts('fruits')">Fruits</button></li>
                          <li><button class="dropdown-item" onclick="filterProducts('fashion')">Fashion</button></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- </div> -->

              <!-- Products Grid -->
              <div class="row mt-3" id="productsGrid">
                <!-- Products will be dynamically inserted here -->
              </div>
            </div>

            <!-- Invoice Section -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center flex-wrap gap-2">
                    <span class="fw-bold me-3">Quick Action</span>

                    <button class="btn btn-outline-success btn-sm">
                      <i class="bi bi-box"></i> Product List
                    </button>

                    <button class="btn btn-outline-primary btn-sm">
                      <i class="bi bi-graph-up-arrow"></i> Today Sales
                    </button>

                    <!-- <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-calculator"></i> Calculator
              </button> -->

                    <a href="<?= baseurl() ?>/administrator/dashboard" class="btn btn-outline-warning btn-sm">
                      <i class="bi bi-columns-gap"></i> Dashboard
                    </a>
                  </div>
                </div>

                <div class="card-body">
                  <!-- Customer Selection -->
                  <div class="row mb-3">
                    <div class="form-group col-6">
                      <div class="input-group">
                        <select id="customerSelect" class="form-select form-select-sm">
                          <option selected disabled>Select Customer</option>
                          <option>John Doe</option>
                          <option>Jane Smith</option>
                          <option>Walk-in Customer</option>
                        </select>
                        <button class="btn btn-danger btn-sm" type="button" id="addCustomerBtn">
                          <i class="bi bi-plus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="col-6">
                      <input type="date" class="form-control form-control-sm" value="2024-09-25">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-6">
                      <input type="text" class="form-control form-control-sm" placeholder="Invoice no.">
                    </div>
                    <div class="col-6">
                      <select class="form-select form-select-sm">
                        <option>Select Warehouse</option>
                        <option>Main Warehouse</option>
                        <option>Branch Warehouse</option>
                      </select>
                    </div>
                  </div>

                  <!-- Invoice Table -->
                  <div class="invoice-table table-responsive mb-3">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                          <th width="60">Image</th>
                          <th>Items</th>
                          <th width="60">Code</th>
                          <th width="50">Unit</th>
                          <th width="70">Price</th>
                          <th class="text-center" width="60">Qty</th>
                          <th width="70">Total</th>
                          <th width="40">Action</th>
                        </tr>
                      </thead>
                      <tbody id="invoiceItems">
                        <!-- Invoice items will be added here -->
                      </tbody>
                    </table>
                  </div>

                  <!-- Payment Summary -->
                  <div class="row mt-4">
                    <div class="col-6">
                      <div class="form-group">
                        <label class="form-label small">Receive Amount</label>
                        <input type="number" class="form-control form-control-sm" id="receiveAmount" value="0.00">
                      </div>
                      <div class="form-group">
                        <label class="form-label small">Change Amount</label>
                        <input type="number" class="form-control form-control-sm" id="changeAmount" value="0.00"
                          readonly>
                      </div>
                      <div class="form-group">
                        <label class="form-label small">Due Amount</label>
                        <input type="number" class="form-control form-control-sm" id="dueAmount" value="0.00" readonly>
                      </div>
                      <div class="form-group">
                        <label class="form-label small">Payment Type</label>
                        <select class="form-select form-select-sm">
                          <option>Cash</option>
                          <option>Card</option>
                          <option>Digital Wallet</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label small">Note</label>
                        <textarea class="form-control form-control-sm" rows="2" placeholder="Type note..."></textarea>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="summary">
                        <div class="row mb-2">
                          <div class="col">Sub Total</div>
                          <div class="col text-end fw-bold" id="subTotal">₱1000.00</div>
                        </div>
                        <div class="row mb-2">
                          <div class="col">
                            <div class="input-group input-group-sm">
                              <span class="input-group-text">Disc</span>
                              <input type="number" class="form-control" value="0" id="discountPercent">
                              <span class="input-group-text">%</span>
                              <input type="number" class="form-control" value="0" id="discountAmount">
                              <span class="input-group-text">₱</span>
                            </div>
                          </div>
                          <div class="col-auto"></div>
                        </div>
                        <div class="row mb-2">
                          <div class="col">
                            <div class="input-group input-group-sm">
                              <span class="input-group-text">Vat</span>
                              <input type="number" class="form-control" value="0" id="vatPercent">
                              <span class="input-group-text">%</span>
                              <input type="number" class="form-control" value="0" id="vatAmount">
                              <span class="input-group-text">₱</span>
                            </div>
                          </div>
                          <div class="col-auto"></div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col">
                            <p class="fw-bold">Total Amount</p>
                          </div>
                          <div class="col text-end">
                            <h5 class="text-primary" id="totalAmount">₱800.00</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Final Action Buttons -->
                  <div class="row mt-3">
                    <div class="col-6">
                      <button class="btn btn-warning w-100">
                        <i class="bi bi-save"></i> Save
                      </button>
                    </div>
                    <div class="col-6">
                      <button class="btn btn-danger w-100" onclick="makePayment()">
                        <i class="bi bi-credit-card"></i> Make Payment
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div> <!-- row -->
        </div> <!-- container-fluid -->
      </div> <!-- app-content -->

    </main>

  </div>



  <!-- Optional: Placeholder modals -->
  <div class="modal fade" id="productListModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">Product List Content</div>
    </div>
  </div>
  <div class="modal fade" id="todaySalesModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">Today Sales Content</div>
    </div>
  </div>
  <div class="modal fade" id="calculatorModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">Calculator Content</div>
    </div>
  </div>
  <script>
    // Sample products data
    const products = [
      {
        id: 1,
        name: "Wheat Thins Original",
        code: "58641",
        price: 20.25,
        category: "food",
        image: "https://images.unsplash.com/photo-1558961363-fa8fdf82db35?w=200&h=200&fit=crop",
        unit: "Pcs"
      },
      {
        id: 2,
        name: "Caramel Hard Candies",
        code: "58642",
        price: 25.25,
        category: "food",
        image: "https://images.unsplash.com/photo-1587048536688-1b6ad38e9531?w=200&h=200&fit=crop",
        unit: "Pcs"
      },
      {
        id: 3,
        name: "Corn Tortilla Chips",
        code: "58643",
        price: 20.25,
        category: "food",
        image: "https://images.unsplash.com/photo-1613919113640-25732ec5e61f?w=200&h=200&fit=crop",
        unit: "Pcs"
      },
      {
        id: 4,
        name: "Pastel Almond Blend",
        code: "58644",
        price: 20.25,
        category: "food",
        image: "https://images.unsplash.com/photo-1571506165871-ee72a35bc9d4?w=200&h=200&fit=crop",
        unit: "Pcs"
      },
      {
        id: 5,
        name: "Fresh Brown Coconut",
        code: "58645",
        price: 20.25,
        category: "fruits",
        image: "https://images.unsplash.com/photo-1587132137056-bfbf0166836e?w=200&h=200&fit=crop",
        unit: "Pcs"
      },
      {
        id: 6,
        name: "Cavendish Bananas",
        code: "58646",
        price: 20.25,
        category: "fruits",
        image: "https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?w=200&h=200&fit=crop",
        unit: "Pcs"
      },
      {
        id: 7,
        name: "Green Grapes",
        code: "58647",
        price: 20.25,
        category: "fruits",
        image: "https://images.unsplash.com/photo-1537640538966-79f369143f8f?w=200&h=200&fit=crop",
        unit: "Pcs"
      },
      {
        id: 8,
        name: "Organic Strawberry",
        code: "58648",
        price: 26.25,
        category: "fruits",
        image: "https://images.unsplash.com/photo-1464965911861-746a04b4bca6?w=200&h=200&fit=crop",
        unit: "Pcs"
      },
      {
        id: 9,
        name: "Cup Print T-Shirt",
        code: "58649",
        price: 20.25,
        category: "fashion",
        image: "https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=200&h=200&fit=crop",
        unit: "Pcs"
      },
      {
        id: 10,
        name: "Quilted Bomber Jacket",
        code: "58650",
        price: 20.25,
        category: "fashion",
        image: "https://images.unsplash.com/photo-1551028719-00167b16eac5?w=200&h=200&fit=crop",
        unit: "Pcs"
      },
      {
        id: 11,
        name: "Hot Stuff Hoodie",
        code: "58651",
        price: 20.25,
        category: "fashion",
        image: "https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=200&h=200&fit=crop",
        unit: "Pcs"
      },
      {
        id: 12,
        name: "Shoulder Bag",
        code: "58652",
        price: 20.25,
        category: "fashion",
        image: "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=200&h=200&fit=crop",
        unit: "Pcs"
      }
    ];

    let invoiceItems = [];
    let currentFilter = 'all';

    // Load products on page load
    document.addEventListener('DOMContentLoaded', function () {
      loadProducts();

      // Search functionality
      document.getElementById('productSearch').addEventListener('input', function (e) {
        const searchTerm = e.target.value.toLowerCase();
        const filteredProducts = products.filter(product =>
          product.name.toLowerCase().includes(searchTerm) ||
          product.code.toLowerCase().includes(searchTerm)
        );
        displayProducts(filteredProducts);
      });

      // Update calculations when amounts change
      document.getElementById('receiveAmount').addEventListener('input', updateCalculations);
      document.getElementById('discountPercent').addEventListener('input', updateTotals);
      document.getElementById('discountAmount').addEventListener('input', updateTotals);
      document.getElementById('vatPercent').addEventListener('input', updateTotals);
      document.getElementById('vatAmount').addEventListener('input', updateTotals);
    });

    function loadProducts() {
      displayProducts(products);
    }

    function displayProducts(productList) {
      const grid = document.getElementById('productsGrid');
      grid.innerHTML = '';

      productList.forEach(product => {
        const productCard = `
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card product-card" onclick="addToInvoice(${product.id})">
                    <img src="${product.image}" class="card-img-top product-image" alt="${product.name}">
                    <div class="card-body p-2">
                        <h6 class="card-title mb-1">${product.name}</h6>
                        <p class="card-text small text-muted mb-1">${product.category.charAt(0).toUpperCase() + product.category.slice(1)}</p>
                        <p class="card-text fw-bold text-primary">₱${product.price}</p>
                    </div>
                </div>
            </div>
        `;
        grid.innerHTML += productCard;
      });
    }

    function filterProducts(category) {
      currentFilter = category;
      if (category === 'all') {
        displayProducts(products);
      } else {
        const filteredProducts = products.filter(product => product.category === category);
        displayProducts(filteredProducts);
      }
    }

    function addToInvoice(productId) {
      const product = products.find(p => p.id === productId);
      const existingItem = invoiceItems.find(item => item.id === productId);

      if (existingItem) {
        existingItem.quantity += 1;
        existingItem.total = existingItem.quantity * existingItem.price;
      } else {
        invoiceItems.push({
          id: product.id,
          name: product.name,
          code: product.code,
          price: product.price,
          quantity: 1,
          total: product.price,
          image: product.image,
          unit: product.unit
        });
      }

      updateInvoiceTable();
      updateTotals();
    }

    function updateInvoiceTable() {
      const tbody = document.getElementById('invoiceItems');
      tbody.innerHTML = '';

      invoiceItems.forEach(item => {
        const row = `
            <tr>
                <td><img src="${item.image}" width="40" height="40"  class="rounded"></td>
                <td class="small">${item.name}</td>
                <td class="small">${item.code}</td>
                <td class="small">${item.unit}</td>
                <td class="small">₱${item.price}</td>
                <td>
                    <div class="d-flex align-items-center">
                        <span class="qty-btn" onclick="decreaseQuantity(${item.id})">-</span>
                        <span class="mx-2">${item.quantity}</span>
                        <span class="qty-btn" onclick="increaseQuantity(${item.id})">+</span>
                    </div>
                </td>
                <td class="small">₱${item.total.toFixed(2)}</td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="removeItem(${item.id})">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
        `;
        tbody.innerHTML += row;
      });
    }

    function increaseQuantity(itemId) {
      const item = invoiceItems.find(item => item.id === itemId);
      item.quantity += 1;
      item.total = item.quantity * item.price;
      updateInvoiceTable();
      updateTotals();
    }

    function decreaseQuantity(itemId) {
      const item = invoiceItems.find(item => item.id === itemId);
      if (item.quantity > 1) {
        item.quantity -= 1;
        item.total = item.quantity * item.price;
        updateInvoiceTable();
        updateTotals();
      }
    }

    function removeItem(itemId) {
      invoiceItems = invoiceItems.filter(item => item.id !== itemId);
      updateInvoiceTable();
      updateTotals();
    }

    function updateTotals() {
      const subtotal = invoiceItems.reduce((sum, item) => sum + item.total, 0);

      const discountPercent = parseFloat(document.getElementById('discountPercent').value) || 0;
      const discountAmount = parseFloat(document.getElementById('discountAmount').value) || 0;
      const vatPercent = parseFloat(document.getElementById('vatPercent').value) || 0;
      const vatAmount = parseFloat(document.getElementById('vatAmount').value) || 0;

      const totalDiscount = (subtotal * discountPercent / 100) + discountAmount;
      const totalVat = ((subtotal - totalDiscount) * vatPercent / 100) + vatAmount;
      const totalAmount = subtotal - totalDiscount + totalVat;

      document.getElementById('subTotal').textContent = `₱${subtotal.toFixed(2)}`;
      document.getElementById('totalAmount').textContent = `₱${totalAmount.toFixed(2)}`;

      updateCalculations();
    }

    function updateCalculations() {
      const totalAmount = parseFloat(document.getElementById('totalAmount').textContent.replace('₱', ''));
      const receiveAmount = parseFloat(document.getElementById('receiveAmount').value) || 0;

      const changeAmount = Math.max(0, receiveAmount - totalAmount);
      const dueAmount = Math.max(0, totalAmount - receiveAmount);

      document.getElementById('changeAmount').value = changeAmount.toFixed(2);
      document.getElementById('dueAmount').value = dueAmount.toFixed(2);
    }

    function makePayment() {
      if (invoiceItems.length === 0) {
        alert('Please add items to the invoice first!');
        return;
      }

      const totalAmount = parseFloat(document.getElementById('totalAmount').textContent.replace('₱', ''));
      const receiveAmount = parseFloat(document.getElementById('receiveAmount').value) || 0;

      if (receiveAmount < totalAmount) {
        alert('Insufficient payment amount!');
        return;
      }

      alert(`Payment successful! \nTotal: ₱${totalAmount.toFixed(2)}\nReceived: ₱${receiveAmount.toFixed(2)}\nChange: ₱${(receiveAmount - totalAmount).toFixed(2)}`);

      // Clear the invoice
      invoiceItems = [];
      updateInvoiceTable();
      updateTotals();
      document.getElementById('receiveAmount').value = '0.00';
    }
  </script>
</body>

</html>