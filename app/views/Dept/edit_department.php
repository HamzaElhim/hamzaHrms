<!DOCTYPE html>
<html>
<head>
    <title>Edit Department</title>
    <!-- Include your CSS and JavaScript libraries here -->
</head>
<body>
    <div class="container">
        <form class="add-department-section" method="post" action="editdpt">
            <h1>Edit Department</h1>
            <input type="hidden" name="Id" value="<?= $data['id'] ?>">
            <div class="add-department-form">
                <div class="form-group">
                    <label for="department_name">Department Name:</label>
                    <input type="text" id="department_name" name="department_name" placeholder="Enter Department Name" required>
                </div>
                <div class="form-group">
                    <label for="head_department">Head Department:</label>
                    <input type="text" id="head_department" name="head_department" placeholder="Enter Head Department" required>
                </div>
                <button type="submit" name="edit">Submit</button>
            </div>
        </form>
    </div>

<?PHP require_once APPROOT.'views/inc/footer.php';?>
<link rel="stylesheet" href="<?PHP echo URLROOT.'css/dept/edit';?>">
