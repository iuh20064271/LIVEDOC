<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Livedoc | Landing, Responsive &amp; Business Templatee</title>



    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo _WEB_ROOT; ?>/public/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo _WEB_ROOT; ?>/public/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo _WEB_ROOT; ?>/public/img/favicons/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo _WEB_ROOT; ?>/public/img/favicons/favicon.ico">
    <link rel="manifest" href="<?php echo _WEB_ROOT; ?>/public/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?php echo _WEB_ROOT; ?>/public/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <link href="<?php echo _WEB_ROOT; ?>/public/css/theme.css" rel="stylesheet" />

</head>



<body>
    <a href="<?php echo _WEB_ROOT; ?>/Personal/" style="font-size: 20px; position:absolute; left: 20px;"><i class="bi bi-house-door" style="font-size: 50px;"></i><span>Quay lại</span></a>

    <div class="container border p-4 mt-3">

        <div class="row">
            <div class="col-xl-12 col-xxl-1">
                <img src="<?php echo _WEB_ROOT; ?>/public/img/gallery/logo.png" alt="" width="100px" class="mt-2">
            </div>
            <div class="col-xl-12 col-xxl-11">
                <span>Bệnh viện đa khoa LIVEDOC</span>
                <p>Địa chỉ: 12 Nguyễn Văn Bảo, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh</p>
            </div>

            <hr>
            <div class="col-12 text-end m-3">
                <?php
                // Lấy ngày tháng năm hiện tại
                $ngayThangNam = date("\\n\g\à\y d \\t\h\á\\n\g m \\n\ă\m Y");

                ?>

                <span><b>TP Hồ Chí Minh</b>, <?php echo   $ngayThangNam; ?></span>
            </div>

            <div class="col-12 text-center m-3">
                <h3>PHIẾU KHÁM BỆNH</h3>
            </div>
        </div>


        <form action="#" method="POST">
            <div class="form-group row">
                <div class="col-sm-12 col-md-6">
                    <label for="hoTen">Họ và Tên:</label>
                    <?php if(isset($_POST['savebill'])){
                       echo $_POST['hoten'];
                    }
                   ?>
                </div>

                <div class="col-sm-12 col-md-6">
                    <label for="ngaySinh">Ngày Sinh:</label>
                 
                </div>
            </div>

            <div class="form-group">
                <label for="điện thoại">Điện thoại:</label>
            
            </div>

            <div class="form-group">
                <label for="trieuChung">Email:</label>
              
            </div>

            <div class="form-group">
                <label for="trieuChung">Giới tính:</label>
                
            </div>

            <div class="form-group row">
                <span class="col-lg-12 col-xl-2" for="" style="font-weight: 500;">Kết quả chuẩn đoán:</span>
                <textarea name="diagnostic" id="responsiveTextarea" class="border-0 col-lg-12 col-xl-10" style="margin-left: -20px; outline: none;" rows="5" placeholder="Nhập chuẩn đoán kết quả khám..."></textarea>
            </div>

            <div class="form-group" style="position: relative;">
                <table class="table" id="medicineTable">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên thuốc</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Đơn vị tính</th>
                    

                        </tr>
                    </thead>
                    <tbody>

                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                            <tr>
                                <th scope="row"><?php echo $i ?></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <tr>
                                    <td colspan="4">Hướng dẫn dùng: <input type="text" name="" id="" style="border: none; outline: none; width: 85%;" placeholder="Nhập hướng dẫn..."></td>
                                </tr>
                            </tr>


                        <?php } ?>

                     


                    </tbody>

                </table>


            </div>

            <div class="col-12" style="margin-top: 50px;">

                <?php
                $thoiGianHienTai = date("H \g\\i\ờ i \p\h\ú\\t, \\n\g\à\y d \\t\h\á\\n\g m \\n\ă\m Y");
                ?>
                <p><?php echo $thoiGianHienTai; ?></p>
                <p> Bác sĩ khám: Nguyễn Hồ Minh Huân</p>
                <div class="row">
                    <span class="col-lg-12 col-xl-2" for="" style="font-weight: 500;">Lời dặn của bác sĩ:</span>
                    <textarea name="" id="responsiveTextarea" class="border-0 col-lg-12 col-xl-10" style="margin-left: -30px; outline: none;" rows="4" placeholder="Nhập lời dặn..."></textarea>
                </div>
            </div>


            <div class="col-12 row">
                <div class="col-4 text-center">
                    <h5>Bệnh nhân</h5>
                    <p>(Ký, họ tên)</p>
                    <p>Huân</p>
                    <p>Nguyễn Hồ Minh Huân</p>
                </div>
                <div class="col-4 text-center">
                    <h5>Nhân viên thu ngân</h5>
                    <p>(Ký, họ tên)</p>
                    <p>Huân</p>
                    <p>Nguyễn Hồ Minh Huân</p>
                </div>
                <div class="col-4 text-center">
                    <h5>Bác sĩ</h5>
                    <p>(Ký, họ tên)</p>
                    <p>Huân</p>
                    <p>Nguyễn Hồ Minh Huân</p>
                </div>
            </div>
            <div class="col-12 text-center" style="margin-bottom: 50px; margin-top: 100px;">
                <input type="submit" class="btn btn-primary text-center col-12" value="Xuất phiếu"></input>
            </div>
        </form>

    </div>








</body>

</html>

