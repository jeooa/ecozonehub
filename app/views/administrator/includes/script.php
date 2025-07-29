<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
  integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
<!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script src="<?= baseurl() ?>/libs/bootstrap/js/bootstrap.min.js"></script>
<!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
<script src="<?= baseurl() ?>/dist/js/adminlte.js"></script>
<!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
<script>
  const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
  const Default = {
    scrollbarTheme: 'os-theme-light',
    scrollbarAutoHide: 'leave',
    scrollbarClickScroll: true,
  };
  document.addEventListener('DOMContentLoaded', function () {
    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
    if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
      OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
        scrollbars: {
          theme: Default.scrollbarTheme,
          autoHide: Default.scrollbarAutoHide,
          clickScroll: Default.scrollbarClickScroll,
        },
      });
    }
  });
</script>
<!--end::OverlayScrollbars Configure-->
<!-- OPTIONAL SCRIPTS -->
<!-- sortablejs -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
  integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script>
<!-- sortablejs -->
<script>
  const connectedSortables = document.querySelectorAll('.connectedSortable');
  connectedSortables.forEach((connectedSortable) => {
    let sortable = new Sortable(connectedSortable, {
      group: 'shared',
      handle: '.card-header',
    });
  });

  const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
  cardHeaders.forEach((cardHeader) => {
    cardHeader.style.cursor = 'move';
  });
</script>
<!-- ApexCharts -->

<script>
  // document.addEventListener("DOMContentLoaded", function () {

  //   // Line Chart: User Growth
  //   var userChart = new ApexCharts(document.querySelector("#userChart"), {
  //     chart: { type: 'line', height: 300 },
  //     series: [{
  //       name: 'Users',
  //       data: [10, 41, 35, 51, 49, 62, 69]
  //     }],
  //     xaxis: {
  //       categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
  //     },
  //     colors: ['#0d6efd']
  //   });
  //   userChart.render();

  //   // Bar Chart: Orders per Product
  //   var barChart = new ApexCharts(document.querySelector("#barChart"), {
  //     chart: { type: 'bar', height: 300 },
  //     series: [{
  //       name: 'Orders',
  //       data: [30, 40, 25, 50, 49]
  //     }],
  //     xaxis: {
  //       categories: ['Shoes', 'Hats', 'Bags', 'Watches', 'Jackets']
  //     },
  //     colors: ['#198754']
  //   });
  //   barChart.render();

  //   // Pie Chart: User Roles
  //   var pieChart = new ApexCharts(document.querySelector("#pieChart"), {
  //     chart: { type: 'pie', height: 300 },
  //     series: [70, 30],
  //     labels: ['Customers', 'Suppliers'],
  //     colors: ['#ffc107', '#dc3545']
  //   });
  //   pieChart.render();

  // });
  // </script>

<!-- apexcharts -->
<script src="<?= baseurl() ?>/libs/apexcharts/apexcharts.min.js"></script>