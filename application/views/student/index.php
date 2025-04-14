<div class="box">
    <div class="box-header">
        <h3 class="box-title">Students List</h3>
        <a href="<?= site_url('student/create') ?>" class="btn btn-success pull-right">Add Student</a>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Address</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= $student->id ?></td>
                        <td><?= $student->name ?></td>
                        <td><?= $student->email ?></td>
                        <td><?= $student->address ?></td>
                        <td>
                            <a href="<?= site_url('student/edit/'.$student->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('student/delete/'.$student->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this student?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
