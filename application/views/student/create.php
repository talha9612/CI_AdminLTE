<form method="post" action="<?= isset($student) ? site_url('student/update/'.$student->id) : site_url('student/store') ?>">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?= isset($student) ? $student->name : '' ?>" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= isset($student) ? $student->email : '' ?>" required>
    </div>
    <div class="form-group">
        <label>Address</label>
        <textarea name="address" class="form-control" required><?= isset($student) ? $student->address : '' ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary"><?= isset($student) ? 'Update' : 'Add' ?></button>
</form>
