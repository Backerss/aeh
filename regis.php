<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="assets/css/regis.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>การสมัครสมาชิก</h1>
        
        <form action="save_regis.php" method="post">
            <div class="row mb-3">
                <label for="prefix" class="col-sm-2 col-form-label">คำนำหน้า</label>
                <div class="col-sm-2">
                    <select class="form-select" id="prefix" name="prefix">
                        <option selected>กรุณาเลือก...</option>
                        <option value="Mr">นาย</option>
                        <option value="Mrs">นาง</option>
                        <option value="Miss">นางสาว</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="firstName" class="col-sm-2 col-form-label">ชื่อ</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="firstName" placeholder="ชื่อ">
                </div>
            </div>
            <div class="row mb-3">
                <label for="lastName" class="col-sm-2 col-form-label">นามสกุล</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="lastName" placeholder="นามสกุล">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-3">
                    <input type="email" class="form-control" name="email" placeholder="อีเมล">
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">รหัสผ่าน</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
                </div>
            </div>
            <div class="row mb-3">
                <label for="birthDate" class="col-sm-2 col-form-label">วันเดือนปีเกิด</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="birthDate">
                </div>
            </div>
            <div class="row mb-3">
                <label for="gender" class="col-sm-2 col-form-label">เพศ</label>
                <div class="col-sm-3">
                    <select class="form-select" name="gender">
                        <option selected>กรุณาเลือก...</option>
                        <option value="Male">ชาย</option>
                        <option value="Female">หญิง</option>
                        <option value="Other">อื่นๆ</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="studentId" class="col-sm-2 col-form-label">รหัสนักศึกษา</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="studentId" placeholder="รหัสนักศึกษา">
                </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-sm-2 col-form-label">เบอร์โทรศัพท์</label>
                <div class="col-sm-3">
                    <input type="tel" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์">
                </div>
            </div>
            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label">ที่อยู่</label>
                <div class="col-sm-3">
                    <textarea class="form-control" name="address" rows="3" placeholder="ที่อยู่"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2 offset-sm-2">
                <input class="submit" type="submit" id="submit-btn" value="submit" />
                </div>
            </div>
        </form>


    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
