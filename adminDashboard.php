<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<div class="container-fluid mt-4">
    <h2 class="mb-4">Admin Dashboard</h2>

    <!-- Cards -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Departments</h5>
                    <p class="card-text display-6">10</p> <!-- PHP count here -->
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Schemes</h5>
                    <p class="card-text display-6">25</p> <!-- PHP count here -->
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Active Schemes</h5>
                    <p class="card-text display-6">20</p> <!-- PHP count here -->
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">New This Month</h5>
                    <p class="card-text display-6">5</p> <!-- PHP count here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Schemes Table -->
    <div class="card">
        <div class="card-header">
            <h5>Recent Schemes</h5>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Scheme Name</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Data | Replace with PHP -->
                    <tr>
                        <td>1</td>
                        <td>MNREGA</td>
                        <td>Rural Development</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>2025-04-20</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <!-- Add PHP loop here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
