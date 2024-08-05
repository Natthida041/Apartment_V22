<?php
require_once "config.php";

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // ... (PHP code remains unchanged)
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            max-width: 800px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }
        .card-header {
            background-color: #0071C3;
            color: white;
            border-bottom: none;
            padding: 1.5rem;
        }
        .card-header h3 {
            font-weight: 600;
            margin-bottom: 0;
        }
        .card-body {
            padding: 2rem;
        }
        .form-label {
            font-weight: 500;
            color: #495057;
        }
        .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid #ced4da;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .form-control:focus, .form-select:focus {
            border-color: #0071C3;
            box-shadow: 0 0 0 0.2rem rgba(0, 113, 195, 0.25);
        }
        .btn-primary {
            background-color: #0071C3;
            border-color: #0071C3;
            border-radius: 10px;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.2s ease-in-out;
        }
        .btn-primary:hover {
            background-color: #005a9e;
            border-color: #005a9e;
            transform: translateY(-2px);
        }
        .input-group-text {
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 10px 0 0 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">ลงทะเบียน</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="row g-3">
                    <div class="col-md-6">
                        <label for="username" class="form-label">ชื่อผู้ใช้งาน</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">รหัสผ่าน</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="First_name" class="form-label">ชื่อ</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            <input type="text" id="First_name" name="First_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Last_name" class="form-label">นามสกุล</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            <input type="text" id="Last_name" name="Last_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="room_number" class="form-label">หมายเลขห้อง</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-door-closed"></i></span>
                            <input type="text" id="room_number" name="room_number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="role" class="form-label">บทบาท</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                            <select id="role" name="role" class="form-select" required>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                                <option value="3">Technician</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <input type="submit" value="ลงทะเบียน" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>