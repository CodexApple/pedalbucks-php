<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Advertisement</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/account/">Home</a></li>
                    <li class="breadcrumb-item active">Advertisements</li>
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
                $stringUtils->setMessage("success", "Successfully added a new advertisement.");
            } elseif ($_GET['action'] == "successUpdate") {
                $stringUtils->setMessage("success", "Successfully updated advertisement.");
            } elseif ($_GET['action'] == "failedUpdate") {
                $stringUtils->setMessage("error", "Failed to update advertisement.");
            } else {
                $stringUtils->setMessage("error", "Failed to add new advertisement.");
            }
        }
        ?>

        <!-- Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form id="taskForm" class="modal-content" method="POST" action="/account/">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Create New Advertisement</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Company Name <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="company" class="form-control" placeholder="Enter company name" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Advertised Product <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="product" class="form-control" placeholder="Enter product name" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Product Description <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="description" class="form-control" placeholder="Enter product name" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image <i class="text-danger">(Required)</i></label>
                                <input type="text" name="image" class="form-control" placeholder="Enter image link" required />
                            </div>
                            <!-- <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="customFile" required />
                                <label class="custom-file-label" for="customFile">Choose File...</label>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="saveAdvertisement" class="btn btn-success">
                                <i class="fas fa-upload"></i>
                                <span>Create Ads</span>
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
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form id="taskForm" class="modal-content" method="POST" action="/account/">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update Advertisement</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" id="uuid" value="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Company Name <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="company" class="form-control" id="name" placeholder="Enter company name" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Advertised Product <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="product" class="form-control" id="product" placeholder="Enter product name" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Product Description <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="description" class="form-control" id="description" placeholder="Enter product name" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image <i class="text-danger">(Required)</i></label>
                                <input type="text" name="image" class="form-control" id="image" placeholder="Enter image link" required />
                            </div>
                            <!-- <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="customFile" required />
                                <label class="custom-file-label" for="customFile">Choose File...</label>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="updateAds" class="btn btn-success">
                                <i class="fas fa-upload"></i>
                                <span>Update Advertisement</span>
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
                            <!-- <span class="badge bg-info">10</span> -->
                            <i class="fas fa-upload"></i>Publish Ads
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Advertisements</h3>
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
                                    <th>Ad#ID</th>
                                    <th>Company</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ads->getAllData() as $key => $data) : ?>
                                    <tr>
                                        <td><?= $data->id ?></td>
                                        <td><?= $data->company ?></td>
                                        <td><?= $data->product_ad ?></td>
                                        <td><?= $data->description ?></td>
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
    function updateBtn(uuid) {
        $.ajax({
            url: '/account/api/add?id=' + uuid,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                var uuid = response['id'];

                var company = response['company'];
                var product = response['product_ad'];
                var description = response['description'];
                var image = response['image'];

                document.getElementById('uuid').value = uuid;
                document.getElementById('name').value = company;
                document.getElementById('product').value = product;
                document.getElementById('description').value = description;
                document.getElementById('image').value = image;
            }
        });
    }
</script>