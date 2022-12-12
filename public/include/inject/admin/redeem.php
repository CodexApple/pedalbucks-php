<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Redeem</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/account/">Home</a></li>
                    <li class="breadcrumb-item active">Reedemable</li>
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
                $stringUtils->setMessage("success", "Successfully added a new redeemable code.");
            } elseif ($_GET['action'] == "successUpdate") {
                $stringUtils->setMessage("success", "Successfully claimed redeemable code.");
            } elseif ($_GET['action'] == "failedUpdate") {
                $stringUtils->setMessage("error", "Failed to claim redeemable code.");
            } else {
                $stringUtils->setMessage("error", "Failed to add new redeemable code.");
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
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form class="modal-content" method="POST" action="/account/" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Redeem Code?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id" value="" />
                            <input type="hidden" name="code" id="code" value="" />
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="updateRedeem" class="btn btn-success">
                                <i class="fas fa-upload"></i>
                                <span>Redeem</span>
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
                            <span class="badge bg-teal">DEBUG MODE</span>
                            <i class="fas fa-upload"></i>Save Code
                        </button>
                        <button class="btn btn-app bg-danger" data-toggle="modal" data-target="#resetModal">
                            <span class="badge bg-teal">DEBUG MODE</span>
                            <i class="fas fa-trash"></i>Delete Code
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Reedemable</h3>
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
                                    <th>Redeem#ID</th>
                                    <th>Redeem#Code</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Current Claims</th>
                                    <th>Maximum Claims</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($redeem->getAllData() as $key => $data) : ?>
                                    <tr>
                                        <td><?= $data->id; ?></td>
                                        <td><?= $data->product_code ?></td>
                                        <td><?= $product->getData($data->product_id)->name ?></td>
                                        <td><?= $product->getData($data->product_id)->description ?></td>
                                        <td><?= $product->getData($data->product_id)->current_claim ?></td>
                                        <td><?= $product->getData($data->product_id)->max_claim ?></td>
                                        <td><span class="badge badge-pill bg-<?= $stringUtils->coloredClaim($data->is_used); ?>"><?= $stringUtils->translateClaim($data->is_used); ?></span></td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <?php if ($data->is_used != 1) : ?>
                                                    <button class="btn btn-warning" data-toggle="modal" data-target="#updateModal" onclick="updateBtn('<?= $data->user_uuid ?>', '<?= $data->id - 1 ?>')" style="margin-right: 5px;">
                                                        <i class="fas fa-edit"></i> Redeem
                                                    </button>
                                                <?php endif; ?>
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
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $(function() {
        $("#adsTable").DataTable({
            "responsive": true,
            "paging": true,
            "searching": true,
            "lengthChange": true,
            "autoWidth": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#adsTable .col-md-6:eq(0)');
    });

    function updateBtn(uuid, code) {
        $.ajax({
            url: '/account/api/redeem?uuid=' + uuid,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                var uuid = response[code]['userUUID'];
                var redeemCode = response[code]['voucherCode'];

                document.getElementById('id').value = uuid;
                document.getElementById('code').value = redeemCode;
            }
        });
    }
</script>