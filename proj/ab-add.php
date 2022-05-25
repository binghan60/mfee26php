<?php require __DIR__ . '/parts/connect_db.php';
$pageName = 'ab-add';
$title = '牛奶的網站 - 新增通訊錄資料';
?>

<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>
                    <form name="form1">
                        <div class="mb-3" onsubmit="return false;">
                            <label for="name" class="form-label">* name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="form-text"></div>
                        </div>
                        <form name="form1">
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="email" class="form-control" id="email" name="email">
                                <div class="form-text"></div>
                            </div>
                            <form name="form1">
                                <div class="mb-3">
                                    <label for="mobile" class="form-label">mobile</label>
                                    <input type="number" class="form-control" id="mobile" name="mobile" pattern="09\d{8}">
                                    <div class="form-text"></div>
                                </div>
                                <form name="form1">
                                    <div class="mb-3">
                                        <label for="birthday" class="form-label">birthday</label>
                                        <input type="date" class="form-control" id="birthday" name="birthday">
                                        <div class="form-text"></div>
                                    </div>
                                    <form name="form1">
                                        <div class="mb-3">
                                            <label for="address" class="form-label">address</label>
                                            <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
                                            <div class="formtext"></div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/html-foot.php' ?>