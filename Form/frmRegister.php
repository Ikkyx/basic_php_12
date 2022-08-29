<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next one</title>
</head>
<body>
    <?php
include("header.php")
    ?>
<main>
    <div class="container-fluid">
        <div class="card">
    
            <div class="card-header">
    สมัครสมาชิก
        </div>
    <div class="card-body">
        <form name="form1" action="insert.php" method="post">
            <div class="row"><!-- row1 -->
                <div class="col-md-2">
                <label for="exampleFormControlInput1" class="form-label">คำนำหน้าชื่อ </label>
                <select  name="txt_Firstname" id="txt_Firstname" class="form-control"placeholder="กรุณาระบุคำนำหน้าชื่อ">
                <option value="">คำนำหน้าชื่อ</option>
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
                </select>
                </div>

                <div class="col-md-5">
                <label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="กรุณาระบุชื่อ">
                </div>
               
                <div class="col-md-5    ">
                <label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="กรุณาระบุนามสกุล">
                </div><!-- row1 -->

                
                <div class="row"><!-- row2 -->
                <div class="col-md-2">
                <label for="exampleFormControlInput1" class="form-label">เพศ </label>
                <input type="radio" class="form-check-input" name="gender" id="gender"value ="ชาย">ชาย
                <input type="radio" class="form-check-input" name="gender" id="gender"value ="หญิง">หญิง
                </div>
             

                <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">วันเกิด(ว/ด/ป)</label>
                <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate"placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th">
                </div>
               
                <div class="col-md-7">
                <label for="exampleFormControlInput1" class="form-label">ที่อยู่</label>
                <textarea class="form-control" name="txt_address" id="txt_address" placeholder="กรุณาระบุที่อยู่"></textarea>
                </div><!-- row2-->
                <div class="row"><!-- row1 -->

                <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">เบอร์โทร </label>
                <input type="text" class="form-control" name="call" id="call" placeholder="กรุณาระบุเบอร์โทร">
                </div>


                <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">อีเมล์</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="กรุณาระบุอีเมล์">
                </div>
            
               &nbsp;
               &nbsp;
               &nbsp;
                <div class="row">
                <div class="col -md-12 text-center">
                <button class="btn btn-success" type="submit"><i class="bi bi-check-lg"></i>บันทึก</button>
                <button class="btn btn-warning" type= "reset"><i class="bi bi-exclamation-triangle-fill"></i>ยกเลิก</button>
                </div>  
            </div>  
        </form>
            </div>
        </div>
    </div>
</div>
    
</main>
<?php
  include("footer.php")
  ?>
</body>
</html>
</body>
</html>