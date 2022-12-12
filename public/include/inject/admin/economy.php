<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Economy</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/account/">Home</a></li>
                    <li class="breadcrumb-item active">Economy</li>
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
                $stringUtils->setMessage("success", "Successfully added a new wallet.");
            } elseif ($_GET['action'] == "successUpdate") {
                $stringUtils->setMessage("success", "Successfully updated wallet.");
            } elseif ($_GET['action'] == "failedUpdate") {
                $stringUtils->setMessage("error", "Failed to update wallet.");
            } else {
                $stringUtils->setMessage("error", "Failed to add new wallet.");
            }
        }
        ?>

        <!-- Update Modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form id="taskForm" class="modal-content" method="POST" action="/account/">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update User Points</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>User UUID <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="uuid" class="form-control" id="uuid" placeholder="Enter task distance" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Points <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="points" class="form-control" id="points" placeholder="Enter reward value" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="updatePoints" class="btn btn-success">
                                <i class="fas fa-upload"></i>
                                <span>Update Points</span>
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
                            <i class="fas fa-upload"></i>Save Data
                        </button>
                        <button class="btn btn-app bg-danger" data-toggle="modal" data-target="#uploadModal">
                            <span class="badge bg-teal">DEBUG MODE</span>
                            <i class="fas fa-trash"></i>Reset Data
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Economy</h3>
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
                                    <th>User#ID</th>
                                    <th>Username</th>
                                    <th>Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($wallet->getAllData() as $key => $data) : ?>
                                    <tr>
                                        <td><?= $data->user_uuid ?></td>
                                        <td><?= $user->getData($data->user_uuid)->username; ?></td>
                                        <td><?= $data->user_points ?></td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-info" style="margin-right: 5px;">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                                <button class="btn btn-warning" data-toggle="modal" data-target="#updateModal" onclick="updateBtn('<?= $data->user_uuid ?>')" style="margin-right: 5px;">
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
            url: '/account/api/wallet?uuid=' + uuid,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {

                var uuid = response['uuid'];
                var points = response['userPoints'];

                document.getElementById('uuid').value = uuid;
                document.getElementById('points').value = points;

            }
        });
    }
</script>