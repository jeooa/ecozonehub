<!-- Delete Category Modal -->
<div class="modal fade" id="deleteCategoryModal<?= $row['category_id']; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>Are you sure you want to delete this category?</p>
                <h4 class="fw-bold"><?= htmlspecialchars($row['category_name']); ?></h4>
                <p class="text-muted">This action cannot be undone.</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <a href="function/deleteCategory.php?id=<?= $row['category_id']; ?>" class="btn btn-danger">Yes, Delete</a>
            </div>
        </div>
    </div>
</div>