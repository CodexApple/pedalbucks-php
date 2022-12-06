<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/account/">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
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
                $stringUtils->setMessage("success", "Successfully added a new profile.");
            } else {
                $stringUtils->setMessage("error", "Failed to add new profile.");
            }
        }
        ?>

        <!-- Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form id="taskForm" class="modal-content" method="POST" action="/account/">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Create New User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Distance <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="taskDistance" class="form-control" placeholder="Enter task distance" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Reward <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="reward" class="form-control" placeholder="Enter reward value" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Challenge <i class="text-danger">(Required)</i></label>
                                <select form="taskForm" name="isChallenge" class="form-control">
                                    <option value="1">No</option>
                                    <option value="0">Yes</option>
                                </select>
                            </div>
                            <!-- <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="customFile" required />
                                <label class="custom-file-label" for="customFile">Choose File...</label>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">
                                <i class="fas fa-times-circle"></i>
                                <span>Cancel</span>
                            </button>
                            <button type="submit" name="uploadTaskBtn" class="btn btn-primary">
                                <i class="fas fa-upload"></i>
                                <span>Create Task</span>
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
                            <i class="fas fa-upload"></i>Save Profile
                        </button>
                        <button class="btn btn-app bg-danger" data-toggle="modal" data-target="#resetModal">
                            <span class="badge bg-teal">DEBUG MODE</span>
                            <i class="fas fa-trash"></i>Reset Profile
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User Tools</h3>
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
                                    <th>User#UUID</th>
                                    <th>Full Name</th>
                                    <th>Address</th>
                                    <th>Birthday</th>
                                    <th>Telephone</th>
                                    <th>Cellphone</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($profile->getAllData() as $key => $data) : ?>
                                    <tr>
                                        <td><?= strtoupper($data->user_uuid); ?></td>
                                        <td><?= $data->firstname . " " . $data->lastname; ?></td>
                                        <td><?= $data->address ?></td>
                                        <td><?= $data->birthday; ?></td>
                                        <td><?= $data->telephone; ?></td>
                                        <td><?= $data->cellphone; ?></td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-info" style="margin-right: 5px;">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                                <a href="#" class="btn btn-warning" style="margin-right: 5px;">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
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