<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/account/">Home</a></li>
                    <li class="breadcrumb-item active">System Logs</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">System Logs</h3>
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
                        <table id="systemlogs" class="table table-hover table-stripped">
                            <thead>
                                <tr>
                                    <th>Level</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($log->getAllData() as $key => $data) : ?>
                                    <tr>
                                        <td><?= $data->log_type ?></td>
                                        <td><?= $data->log_date ?></td>
                                        <td><?= $data->log_time ?></td>
                                        <td><?= $data->log_name ?></td>
                                        <td><?= $data->log_description ?></td>
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
    $(function() {
        $("#systemlogs").DataTable({
            "responsive": true,
            "paging": true,
            "searching": true,
            "lengthChange": true,
            "autoWidth": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#systemlogs .col-md-6:eq(0)');
    });

    // $(document).ready(function() {
    //     $("#systemlogs").DataTable({
    //         "responsive": true,
    //         "paging": true,
    //         "searching": true,
    //         "lengthChange": true,
    //         "autoWidth": true,
    //         "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    //     }).buttons().container().appendTo('#systemlogs .col-md-6:eq(0)');
    // });
</script>