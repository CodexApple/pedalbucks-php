<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Task</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/account/">Home</a></li>
                    <li class="breadcrumb-item active">Tasks</li>
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
                $stringUtils->setMessage("success", "Successfully added a new task.");
            } elseif ($_GET['action'] == "successUpdate") {
                $stringUtils->setMessage("success", "Successfully updated task.");
            } elseif ($_GET['action'] == "failedUpdate") {
                $stringUtils->setMessage("error", "Failed to update task.");
            } else {
                $stringUtils->setMessage("error", "Failed to add new task.");
            }
        }
        ?>

        <!-- Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form id="taskForm" class="modal-content" method="POST" action="/account/">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Task Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter task name" required />
                            </div>
                            <div class="form-group">
                                <label>Task Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Enter task description" required />
                            </div>
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
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
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
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form id="taskFormUpdate" class="modal-content" method="POST" action="/account/">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="uuid" id="uuid" value="">
                            <div class="form-group">
                                <label>Task Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter task name" required />
                            </div>
                            <div class="form-group">
                                <label>Task Description</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Enter task description" required />
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Distance <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="taskDistance" class="form-control" id="distance" placeholder="Enter task distance" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Reward <i class="text-danger">(Required)</i></label>
                                        <input type="text" name="reward" class="form-control" id="reward" placeholder="Enter reward value" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Challenge <i class="text-danger">(Required)</i></label>
                                <select form="taskFormUpdate" name="isChallenge" class="form-control" id="challenge">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="updateTask" class="btn btn-success">
                                <i class="fas fa-upload"></i>
                                <span>Update Task</span>
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
                            <i class="fas fa-upload"></i>Save Task
                        </button>
                        <button class="btn btn-app bg-danger" data-toggle="modal" data-target="#resetModal">
                            <span class="badge bg-teal">DEBUG MODE</span>
                            <i class="fas fa-trash"></i>Reset Task
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
                                    <th>Task#ID</th>
                                    <th>Challenge</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Points</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($task->getAllData() as $key => $data) : ?>
                                    <tr>
                                        <td>#<?= $data->id; ?></td>
                                        <td><span class="badge badge-pill bg-<?= $stringUtils->coloredTask($data->is_challenge); ?>"><?= $stringUtils->translateTask($data->is_challenge); ?></span></td>
                                        <td><?= $data->task_name; ?></td>
                                        <td><?= $data->task_description; ?></td>
                                        <td><?= $data->task_reward; ?></td>
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
            url: '/account/api/task?task_id=' + uuid,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                var task_id = response['taskID'];
                var name = response['taskName'];
                var description = response['taskDescription'];
                var distance = response['distanceRequired'];
                var difficulty = response['taskDifficulty'];
                var reward = response['reward'];
                var challenge = response['challengeInt'];

                document.getElementById("uuid").value = task_id;
                document.getElementById("name").value = name;
                document.getElementById("description").value = description;
                document.getElementById("distance").value = distance;
                document.getElementById("reward").value = reward;
                document.getElementById("challenge").value = challenge;
            }
        });
    }
</script>