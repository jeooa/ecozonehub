<!-- Edit Category Modal -->
<div class="modal fade" id="editCategoryModal<?= $row['category_id']; ?>" tabindex="-1" aria-labelledby="editCategoryLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="POST" action="function/editCategory.php">
                    <input type="hidden" name="category_id" value="<?= htmlspecialchars($row['category_id']); ?>">

                    <div class="mb-3">
                        <label for="edit_category_name_<?= $row['category_id']; ?>" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="edit_category_name_<?= $row['category_id']; ?>"
                            name="category_name" value="<?= htmlspecialchars($row['category_name']); ?>" required
                            onkeyup="checkDuplicateCategoryNameEdit(<?= $row['category_id']; ?>)">
                        <small id="categoryNameResponseEdit<?= $row['category_id']; ?>" class="text-danger"></small>
                    </div>
            </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" id="edit_button_<?= $row['category_id']; ?>" name="edit" class="btn btn-warning">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Real-time category name validation for edit
    function checkDuplicateCategoryNameEdit(categoryId) {
        var categoryName = document.getElementById('edit_category_name_' + categoryId).value.trim();
        var categoryNameResponse = document.getElementById('categoryNameResponseEdit' + categoryId);
        var editButton = document.getElementById('edit_button_' + categoryId);

        if (categoryName !== '') {
            fetch('function/checkDuplicateCategoryName.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'category_name=' + encodeURIComponent(categoryName) + '&category_id=' + categoryId
                })
                .then(response => response.text())
                .then(data => {
                    if (data.trim() === 'exists') {
                        categoryNameResponse.textContent = 'Category name already exists. Please choose another.';
                        editButton.disabled = true;
                    } else {
                        categoryNameResponse.textContent = '';
                        editButton.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        } else {
            categoryNameResponse.textContent = '';
            editButton.disabled = false;
        }
    }
</script>