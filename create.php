<?php include('includes/header.php');?>
<?php include_once('database/functions.php');?>

<br>
<br>
<br>
<div class="container">
    <h2 align="center">Create your job listing</h2> <br>
    <div class="msg"></div>
    <form action="" method="post" class="form-group">
        <div class="form-group">
            <label for="title">Job Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label for="title">Company</label>
            <input type="text" class="form-control" name="company" required>
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" class="form-control" name="salary" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="location" required>
        </div>
        <div class="form-group">
            <label for="description">Job Description</label>
            <input type="text" class="form-control" name="description" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" required>
                <option value="0">Choose Category</option>
                <?php $cat = getCategories();
                foreach ($cat as $c) { ?>
                <option value=<?=$c['id'] ?>><?= $c['name']?>
                </option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="go" class="btn btn-danger" required>
        </div>
    </form>
</div>

<?php
if (isset($_POST['go'])) {
                    create();
                }  ?>

<?php include('includes/footer.php');
