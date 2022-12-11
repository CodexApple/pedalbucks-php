<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/account/">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">

        <?php
        if (isset($_GET['action'])) {
            if ($_GET['action'] == "success") {
                $stringUtils->setMessage("success", "Successfully added a new product.");
            } elseif ($_GET['action'] == "successUpdate") {
                $stringUtils->setMessage("success", "Successfully updated product.");
            } elseif ($_GET['action'] == "failedUpdate") {
                $stringUtils->setMessage("error", "Failed to update product.");
            } else {
                $stringUtils->setMessage("error", "Failed to add new product.");
            }
        }
        ?>

        <!-- Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form id="taskForm" class="modal-content" method="POST" action="/account/">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add new product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter product name" required />
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Enter product description" required />
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Points Required <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="price" class="form-control" placeholder="Enter points required to claim" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Max Claims <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="max_claims" class="form-control" placeholder="Enter max claim amount" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Product Image</label>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="customFile" required />
                                <label class="custom-file-label" for="customFile">Choose File...</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="saveProduct" class="btn btn-success">
                                <i class="fas fa-upload"></i>
                                <span>Save Product</span>
                            </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                <i class="fas fa-times-circle"></i>
                                <span>Cancel</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Update Modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <form id="taskForm" class="modal-content" method="POST" action="/account/" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id" value="" />
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter product name" required />
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Enter product description" required />
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Points Required <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter points required to claim" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Max Claims <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="max_claims" class="form-control" id="max_claims" placeholder="Enter max claim amount" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Product Image</label>
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="customFile" required />
                                    <label class="custom-file-label" for="customFile">Choose File...</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="updateProduct" class="btn btn-success">
                                <i class="fas fa-upload"></i>
                                <span>Update Product</span>
                            </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                <i class="fas fa-times-circle"></i>
                                <span>Cancel</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Commands & Actions</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" disabled>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-app bg-warning" data-toggle="modal" data-target="#settingsModal">
                            <i class="fas fa-cogs"></i>Settings
                        </button>
                        <button class="btn btn-app bg-info" data-toggle="modal" data-target="#uploadModal">
                            <!-- <span class="badge bg-teal">DEBUG MODE</span> -->
                            <i class="fas fa-upload"></i>Save Product
                        </button>
                        <button class="btn btn-app bg-danger" data-toggle="modal" data-target="#resetModal">
                            <span class="badge bg-teal">DEBUG MODE</span>
                            <i class="fas fa-trash"></i>Delete Product
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" disabled>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="adsTable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Product#ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Current Claims</th>
                                    <th>Maximum Claims</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($product->getAllData() as $key => $data) : ?>
                                    <tr>
                                        <td>#<?= $data->id; ?></td>
                                        <td><?= $data->name ?></td>
                                        <td><?= $data->description; ?></td>
                                        <td><?= $data->price; ?></td>
                                        <td><?= $data->current_claim; ?></td>
                                        <td><?= $data->max_claim; ?></td>
                                        <td><span class="badge badge-pill bg-<?= $stringUtils->coloredProduct($data->is_archive); ?>"><?= $stringUtils->isArchive($data->is_archive); ?></span></td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-info" style="margin-right: 5px;">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                                <button class="btn btn-warning" data-toggle="modal" data-target="#updateModal" onclick="updateBtn('<?= $data->id ?>')" style="margin-right: 5px;">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                                <a href="#" class="btn btn-danger" style="margin-right: 5px;">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>
                                                <!-- <button class="btn bg-teal">
                                                    <i class="fas fa-trash"></i>
                                                    Publish
                                                </button> -->
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    function updateBtn(uuid) {
        $.ajax({
            url: '/account/api/product?prod_id=' + uuid,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                var prod_id = response['id'];
                var prod_name = response['name'];
                var prod_desc = response['description'];
                var prod_price = response['price'];
                var prod_claims = response['max_claim'];

                document.getElementById('id').value = prod_id;
                document.getElementById('name').value = prod_name;
                document.getElementById('description').value = prod_desc;
                document.getElementById('price').value = prod_price;
                document.getElementById('max_claims').value = prod_claims;
            }
        });
    }
</script>