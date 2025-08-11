<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" action="function/addCategory.php">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="category_name" name="category_name" required onkeyup="checkDuplicateCategoryName()">
                        <small id="categoryNameResponse" class="text-danger"></small>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_button" name="add" class="btn btn-primary" disabled>Save Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Real-time category name validation
    function checkDuplicateCategoryName() {
        var categoryName = document.getElementById('category_name').value.trim();
        var categoryNameResponse = document.getElementById('categoryNameResponse');
        var addButton = document.getElementById('add_button');

        if (categoryName !== '') {
            fetch('function/checkDuplicateCategoryName.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'category_name=' + encodeURIComponent(categoryName)
                })
                .then(response => response.text())
                .then(data => {
                    if (data.trim() === 'exists') {
                        categoryNameResponse.textContent = 'Category name already exists. Please choose another.';
                        addButton.disabled = true;
                    } else {
                        categoryNameResponse.textContent = '';
                        addButton.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        } else {
            categoryNameResponse.textContent = '';
            addButton.disabled = true;
        }
    }
</script>