<?php
require_once "config.php";

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // ... (PHP code remains unchanged)
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap');

        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f0f8ff;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .register-container {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 113, 195, 0.2);
            overflow: hidden;
            padding: 30px;
        }
        .register-title {
            color: #0071C3;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-label {
            color: #0071C3;
            font-weight: 500;
        }
        .form-control, .form-select {
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #0071C3;
            transition: all 0.3s;
        }
        .form-control:focus, .form-select:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 113, 195, 0.25);
            border-color: #0071C3;
        }
        .btn-register {
            background-color: #0071C3;
            border: none;
            color: #fff;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.3s;
        }
        .btn-register:hover {
            background-color: #005a9e;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 113, 195, 0.3);
        }
        .input-group-text {
            background-color: #0071C3;
            border: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-container">
            <h2 class="register-title">ลงทะเบียน</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="username" class="form-label">ชื่อผู้ใช้</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">รหัสผ่าน</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="First_name" class="form-label">ชื่อ</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                            <input type="text" id="First_name" name="First_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Last_name" class="form-label">นามสกุล</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                            <input type="text" id="Last_name" name="Last_name" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="room_number" class="form-label">เลขห้อง</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                            <input type="text" id="room_number" name="room_number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="role" class="form-label">บทบาท</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                            <select id="role" name="role" class="form-select" required>
                                <option value="" disabled selected>เลือกบทบาท</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                                <option value="3">Technician</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 d-grid">
                        <button type="submit" class="btn btn-register">ลงทะเบียน</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>