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
            } elseif ($_GET['action'] == "successUpdate") {
                $stringUtils->setMessage("success", "Successfully updated profile.");
            } elseif ($_GET['action'] == "failedUpdate") {
                $stringUtils->setMessage("error", "Failed to update profile.");
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

        <!-- Update Modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <form id="taskForm" class="modal-content" method="POST" action="/account/">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <input type="hidden" name="uuid" id="uuid" value="">
                                    <input type="hidden" name="choice" id="choice" value="">
                                    <div class="form-group">
                                        <label>First Name <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="firstname" class="form-control" id="firstname" required />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Middle Name <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="middlename" class="form-control" id="middlename" required />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Last Name <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="lastname" class="form-control" id="lastname" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Address <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="address" class="form-control" id="address" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Cellphone <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="cellphone" class="form-control" id="cellphone" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Telephone <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="telephone" class="form-control" id="telephone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Distance Goal <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="distance" class="form-control" id="distance" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Height <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="height" class="form-control" id="height" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Weight <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="weight" class="form-control" id="weight" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Calories <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="calories" class="form-control" id="calories" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="updateProfile" class="btn btn-success">
                                <i class="fas fa-upload"></i>
                                <span>Update Profile</span>
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
            url: '/account/api/profile?uuid=' + uuid,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                var uuid = response['user_uuid'];

                var firstname = response['firstname'];
                var middlename = response['middlename'];
                var lastname = response['lastname'];
                var address = response['address'];
                var cellphone = response['cellphone'];
                var telephone = response['telephone'];

                var choice = response['type_choice'];
                var distance = response['distance_goal'];
                var height = response['height'];
                var weight = response['weight'];
                var calories = response['calories'];

                document.getElementById('uuid').value = uuid;
                document.getElementById('choice').value = choice;

                document.getElementById('firstname').value = firstname;
                document.getElementById('middlename').value = middlename;
                document.getElementById('lastname').value = lastname;
                document.getElementById('address').value = address;
                document.getElementById('cellphone').value = cellphone;
                document.getElementById('telephone').value = telephone;

                document.getElementById('distance').value = distance;
                document.getElementById('height').value = height;
                document.getElementById('weight').value = weight;
                document.getElementById('calories').value = calories;
            }
        });
    }
</script>