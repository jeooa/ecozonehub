<!doctype html>
<html lang="en">

<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        <?php admin_view_layout(); ?>

        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3 class="mb-0">Categories</h3>
                        </div>
                        <div class="col-sm-4">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Categories</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">
                    <?php include 'add_modal.php'; ?>
                    <?php include '../includes/success_message.php'; ?>
                    <?php include '../includes/error_message.php'; ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title mt-2">Category List</h3>
                                    <div class="card-tools">
                                        <a href="#addCategoryModal" data-bs-toggle="modal" class="btn btn-primary"><i class="bi bi-plus"></i>Add New</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="categoryTable" class="table table-striped nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Category Name</th>
                                                <th>Date Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $db = Database::getInstance()->getConnection();
                                            $stmt = $db->query("SELECT * FROM tbl_categories ORDER BY category_name");
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                                                $categoryId = htmlspecialchars($row['category_id']);
                                            ?>
                                                <tr>
                                                    <td><?= htmlspecialchars($row['category_name']); ?></td>
                                                    <td><?= date('M d, Y', strtotime($row['date'])); ?></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-sm btn-light" type="button" id="categoryActionMenu<?= $categoryId; ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical fs-5 fw-bold"></i>

                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="categoryActionMenu<?= $categoryId; ?>">
                                                                <li><a class="dropdown-item" href="#editCategoryModal<?= $categoryId; ?>" data-bs-toggle="modal"><i class="bi bi-pencil text-muted me-2"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" href="#deleteCategoryModal<?= $categoryId; ?>" data-bs-toggle="modal"><i class="bi bi-trash text-danger me-2"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <?php include 'edit_modal.php'; ?>
                                                <?php include 'delete_modal.php'; ?>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->

        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <script>
        $(document).ready(function() {
            $('#categoryTable').DataTable({
                responsive: true,
                paging: true,
                searching: true,
                lengthChange: true,
                info: true
            });
        });
    </script>

    <!--end::Script-->
</body>
<!--end::Body-->

</html>