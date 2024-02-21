<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Comprehensive Geriatric Assessment</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php"> <img src="Logo-Nurse.png" height="60" width="60" class="img-fluid"> </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                    <!-- Divider -->
                            <hr class="sidebar-divider my-0">
                    <!-- Nav Item - Dashboard -->
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">
                                <i class="fas fa-fw fa-home"></i>
                                    <span>หน้าหลัก (Home)</span></a>
                            </li>
                    <!-- Divider -->
                        <hr class="sidebar-divider">
                    <!-- Heading -->
                        <div class="sb-sidenav-menu-heading">การประเมินสุขภาพ</div>
                        <!-- Nav Item - Charts -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Physical" aria-expanded="false" aria-controls="Physical">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            ด้านร่างกาย <br> (Physical Assessment)
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="Physical" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-TUGT.php"> การประเมินภาวะหกล้ม</a>
                                <a class="nav-link" href="layout-oaknee.php">การคัดกรองโรคข้อเข่าเสื่อม</a>
                                <a class="nav-link" href="layout-OxfordKneeScore.php">แบบประเมินระดับความรุนแรงของโรคข้อเข่าเสื่อม</a>
                                <a class="nav-link" href="layout-eye.php">การคัดกรองสุขภาวะทางตา</a>
                                <a class="nav-link" href="layout-incon.php">การคัดกรองภาวะกลั้นปัสสาวะ</a>
                                <a class="nav-link" href="layout-sleep.php">การประเมินปัญหาการนอน</a>
                                <a class="nav-link" href="layout-MNA.php">การคัดกรองภาวะโภชนาการในผู้สูงอายุ</a>
                                <a class="nav-link" href="layout-frt.php">การประเมินการได้ยิน</a>
                            </nav>
                        </div>
                        <!-- Nav Item - Charts -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Function" aria-expanded="false" aria-controls="Function">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            ด้านการทำหน้าที่ <br> (Function Assessment)
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="Function" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-ADL.php">ADL</a>
                                <a class="nav-link" href="layout-chula.php">Chula ADL</a>
                            </nav>
                        </div>
                        <!-- Nav Item - Charts -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Mental" aria-expanded="false" aria-controls="Mental">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            ด้านจิตสังคม<br>(Mental Assessment)
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="Mental" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-mmse.php">MMSE T-2002</a>
                                <a class="nav-link" href="layout-moca.php">MOCA-T</a>
                                <a class="nav-link" href="layout-2q.php">2Q</a>
                                <a class="nav-link" href="layout-9q.php">9Q</a>
                                <a class="nav-link" href="layout-tgds.php">TGDS</a>
                            </nav>
                        </div>
                        <!-- Nav Item - Charts -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Social" aria-expanded="false" aria-controls="Social">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            ประเมินปัจจัยเอื้อ <br> ต่อภาวะสุขภาพ
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="Social" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-environment.php">Environment Assessment</a>
                                <a class="nav-link" href="layout-apgar.php">Social Assessment</a>
                            </nav>
                        </div>
                        <!-- Nav Item - Charts -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#caregiver" aria-expanded="false" aria-controls="Social">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            การประเมินผู้ดูแล
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="caregiver" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-csl.php">แบบประเมินความเครียดในผู้ดูแล</a>
                            </nav>
                        </div>
                            <div class="sb-sidenav-menu-heading">อื่นๆ</div>
                            <a class="nav-link" href="https://docs.google.com/forms/สมมติ">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                แบบประเมินความพึงพอใจ
                            </a>
                        </div>
                    </div>

                    <div class="sb-sidenav-footer">
                        <div class="small">จำนวนผู้เข้าชม</div>
                        <?php
                        if(file_exists("counter.txt")){ 
                            // file_exists() คือ Function ที่ใช้ในการตรวจสอบไฟล์ หากไฟล์นั้นมีอยู่จริงจะคืนค่า true 
                        $f=fopen("counter.txt","r"); //เปิดไฟล์เพื่ออ่านค่า
                        /* fopen() เป็นการเปิดไฟล์ตามที่ และเราจำเป็นต้องกำหนด Option ให้แก่การเปิดไฟล์ด้วย Option ต่าง ๆ ดังนี้ 
                        r สำหรับการอ่านไฟล์ 
                        w สำหรับการเขียนไฟล์ และข้อมูลจะถูกเขียนทับใหม่ทั้งหมด
                        a สำหรับการเขียนไฟล์ แต่ข้อมูลจะถูกเขียนต่อข้อมูลเดิมที่มีอยู่ในไฟล์นั้น
                        */ 
                        $data=fread($f,5); 
                        // fread() เป็นการอ่านไฟล์ เลข 5 คือจำนวน byte ของข้อมูลที่ต้องการอ่านค่า
                        fclose($f);
                        $data++;
                        }else{$data=0;}
                        //เขียนข้อมูลลงไฟล์
                        $f=fopen("counter.txt","w");
                        fputs($f,$data); 
                        fclose($f);
                        $data=sprintf("%05d",$data);
                        /* 
                        %05d คือ Option ที่ใช้ในการกำหนดรูปแบบของตัวเลข
                        ส่วนของเลข 5 สามารถกำหนดได้ตามต้องการ จะเป็นการกำหนดจำนวนหลักของตัวเลขที่แสดงผล โดยถ้าจำนวนหลักน้อยกว่าตัวเลขที่กำหนด จะนำเลข 0 นำหน้าตัวเลขนั้นให้ครบ 5 หลัก เป็นต้น
                        */ 
                        echo $data; 
                        ?> 
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Comprehensive Geriatric Assessment</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">การประเมินสุขภาพผู้สูงอายุแบบองค์รวม</li>
                        </ol>
                    </div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">แบบประเมินความสามารถในการปฏิบัติกิจวัตรพื้นฐาน (Barthel ADL Index)</h1>

        </div>
        <form name="assessment" action="reportadl.php" method="post" enctype="multipart/form-data">
            <!-- ข้อที่ 1 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading"> 1. Feeding
                            (รับประทานอาหารเมื่อเตรียมสำรับไว้ให้เรียบร้อยต่อหน้า)</h4>
                        <h5></h5>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-feed0.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">0 คะแนน</h5>
                            <p class="card-text">ไม่สามารถตักอาหารเข้าปากได้ ต้องมีคนช่วยป้อนให้</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">

                                <input class="form-check-input" type="radio" name="feed" id="feed1"
                                    value="0" checked>
                                <label class="form-check-label" for="feed1">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-feed1.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">1 คะแนน</h5>
                            <p class="card-text">ตักอาหารเองได้ แต่ต้องมีคนช่วย เช่น
                                ช่วยใช้ช้อนตักเตรียมไว้ให้ หรือตัดเป็นคำเล็กๆไว้ล่วงหน้า</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="feed" id="feed2"
                                    value="1">
                                <label class="form-check-label" for="feed2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-feed2.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">2 คะแนน</h5>
                            <p class="card-text">ตักอาหารและช่วยตัวเองได้ปกติ</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="feed" id="feed3"
                                    value="2">
                                <label class="form-check-label" for="feed3">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ข้อที่ 2 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading"> 2. Grooming (ล้างหน้า หวีผม แปรงฟัน โกนหนวด ในระยะเวลา
                            24-28
                            ชั่วโมงที่ผ่านมา)</h4>
                        <h5></h5>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-groom0.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">0 คะแนน</h5>
                            <p class="card-text">ต้องการความช่วยเหลือ</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="groom" id="groom1"
                                    value="0" checked>
                                <label class="form-check-label" for="groom1">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-groom1.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">1 คะแนน</h5>
                            <p class="card-text">ทำเองได้ (รวมทั้งที่ทำได้เองถ้าเตรียมอุปกรณ์ไว้ให้)</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="groom" id="groom2"
                                    value="1">
                                <label class="form-check-label" for="groom2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อที่ 3 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading"> 3. Transfer (ลุกนั่งจากที่นอน หรือจากเตียงไปยังเก้าอี้)
                        </h4>
                        <h5></h5>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-tranfer0.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">0 คะแนน</h5>
                            <p class="card-text">ไม่สามารถนั่งได้ (นั่งแล้วจะล้มเสมอ)
                                หรือต้องใช้สองคนช่วยกันยกขึ้น</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="transfer" id="transfer1"
                                    value="0" checked>
                                <label class="form-check-label" for="transfer1">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-tranfer1.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">1 คะแนน</h5>
                            <p class="card-text">ต้องการความช่วยเหลืออย่างมากจึงจะนั่งได้ เช่น
                                ต้องใช้คนที่แข็งแรงหรือมีทักษะ 1 คน หรือใช้คนทั่วไป 2
                                คนพยุงหรือดันขึ้นมาจึงจะนั่งได้</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="transfer" id="transfer2"
                                    value="1">
                                <label class="form-check-label" for="transfer2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-tranfer2.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">2 คะแนน</h5>
                            <p class="card-text">ต้องการความช่วยเหลือบ้าง เช่น บอกให้ทำตาม
                                หรือช่วยพยุงเล็กน้อย
                                หรือต้องมีคนดูแลเพื่อความปลอดภัย</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="transfer" id="transfer2"
                                    value="2">
                                <label class="form-check-label" for="transfer2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-tranfer3.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">3 คะแนน</h5>
                            <p class="card-text">ทำได้เอง</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="transfer" id="transfer2"
                                    value="3">
                                <label class="form-check-label" for="transfer2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อที่ 4 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading"> 4. Toilet use (ใช้ห้องน้ำ)</h4>
                        <h5></h5>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-toilet0.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">0 คะแนน</h5>
                            <p class="card-text">ช่วยตัวเองไม่ได้</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="toilet" id="toilet1"
                                    value="0" checked>
                                <label class="form-check-label" for="toilet1">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-toilet1.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">1 คะแนน</h5>
                            <p class="card-text">ทำเองได้บ้าง (อย่างน้อยทำความสะอาดตัวเองได้
                                หลังจากเสร็จธุระ)
                                แต่ต้องการความช่วยเหลือในบางสิ่ง</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="toilet" id="toilet2"
                                    value="1">
                                <label class="form-check-label" for="toilet2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-toilet2.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">2 คะแนน</h5>
                            <p class="card-text">ช่วยตัวเองได้ดี (ขึ้นนั่งและลงจากโถส้วมเองได้
                                ทำความสะอาดได้เรียบร้อยหลังจากเสร็จธุระ ถอดใส่เสื้อผ้าได้เรียบร้อย)</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="toilet" id="toilet2"
                                    value="2">
                                <label class="form-check-label" for="toilet2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อที่ 5 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading"> 5. Mobility (การเคลื่อนไหว)</h4>
                        <h5></h5>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-mobility0.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">0 คะแนน</h5>
                            <p class="card-text">เคลื่อนที่ไปไหนไม่ได้</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mobility" id="mobility1"
                                    value="0" checked>
                                <label class="form-check-label" for="mobility1">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-mobility1.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">1 คะแนน</h5>
                            <p class="card-text">ต้องใช้รถเข็นช่วยตัวเองให้เคลื่อนที่ได้เอง
                                (ไม่ต้องมีคนเข็นให้)
                                และอาจจะต้องเข้าออกมุมห้องหรือประตูได้</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mobility" id="mobility2"
                                    value="1">
                                <label class="form-check-label" for="mobility2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-mobility2.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">2 คะแนน</h5>
                            <p class="card-text">เดินหรือเคลื่อนที่ได้โดยมีคนช่วย เช่น พยุง หรือบอกให้ทำตาม
                                หรือให้ความสนใจดูแลเพื่อความปลอดภัย</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mobility" id="mobility2"
                                    value="2">
                                <label class="form-check-label" for="mobility2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-mobility3.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">3 คะแนน</h5>
                            <p class="card-text">เดินหรือเคลื่อนที่ได้เอง</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mobility" id="mobility3"
                                    value="3">
                                <label class="form-check-label" for="mobility3">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อที่ 6 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading"> 6. Dressing (การสวมใส่เสื้อผ้า)</h4>
                        <h5></h5>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-dress0.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">0 คะแนน</h5>
                            <p class="card-text">ต้องมีคนสวมใส่ให้ ช่วยตัวเองแทบไม่ได้หรือได้น้อย</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dress" id="dress1"
                                    value="0" checked>
                                <label class="form-check-label" for="dress1">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-dress1.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">1 คะแนน</h5>
                            <p class="card-text">ช่วยตัวเองได้ประมาณร้อยละ 50</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dress" id="dress2"
                                    value="1">
                                <label class="form-check-label" for="dress2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-dress2.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">2 คะแนน</h5>
                            <p class="card-text">ช่วยตัวเองได้ดี (รวมทั้งการติดกระดุม รูดซิป
                                หรือใช้เสื้อผ้าที่ดัดแปลงให้เหมาะสมก็ได้)</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dress" id="dress2"
                                    value="2">
                                <label class="form-check-label" for="dress2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อที่ 7 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading"> 7. Stairs (การขึ้นลงบันได 1 ชั้น)</h4>
                        <h5></h5>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-stairs0.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">0 คะแนน</h5>
                            <p class="card-text">ไม่สามารถทำได้</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="stairs" id="stairs1"
                                    value="0" checked>
                                <label class="form-check-label" for="stairs1">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-stairs1.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">1 คะแนน</h5>
                            <p class="card-text">ต้องการคนช่วย</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="stairs" id="stairs2"
                                    value="1">
                                <label class="form-check-label" for="stairs2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-stairs2.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">2 คะแนน</h5>
                            <p class="card-text">ขึ้นลงได้เอง (ถ้าต้องใช้เครื่องช่วยเดิน เช่น Walker
                                จะต้องเอาขึ้นลงได้ด้วย)</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="stairs" id="stairs2"
                                    value="2">
                                <label class="form-check-label" for="stairs2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อที่ 8 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading"> 8. Bathing (การอาบน้ำ)</h4>
                        <h5></h5>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-bath0.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">0 คะแนน</h5>
                            <p class="card-text">ต้องมีคนช่วยหรือทำให้</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bath" id="bath1"
                                    value="0" checked>
                                <label class="form-check-label" for="bath1">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-bath1.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">1 คะแนน</h5>
                            <p class="card-text">อาบน้ำได้เอง</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bath" id="bath2"
                                    value="1">
                                <label class="form-check-label" for="bath2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อที่ 9 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading"> 9. Bowels (การกลั้นการถ่ายอุจจาระในระยะ 1
                            สัปดาห์ที่ผ่านมา)
                        </h4>
                        <h5></h5>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-bowels0.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">0 คะแนน</h5>
                            <p class="card-text">กลั้นไม่ได้ หรือต้องการการสวนอุจจาระอยู่เสมอ</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bowels" id="bowels1"
                                    value="0" checked>
                                <label class="form-check-label" for="bowels1">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-bowels1.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">1 คะแนน</h5>
                            <p class="card-text">กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่า 1 ครั้งต่อสัปดาห์)</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bowels" id="bowels2"
                                    value="1">
                                <label class="form-check-label" for="bowels2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-bowels2.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">2 คะแนน</h5>
                            <p class="card-text">กลั้นได้เป็นปกติ</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bowels" id="bowels2"
                                    value="2">
                                <label class="form-check-label" for="bowels3">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อที่ 10 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading"> 10. Bladder (การกลั้นปัสสาวะในระยะ 1 สัปดาห์ที่ผ่านมา)
                        </h4>
                        <h5></h5>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-bladder0.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">0 คะแนน</h5>
                            <p class="card-text">กลั้นไม่ได้ หรือใส่สายสวนปัสสาวะแต่ไม่สามารถดูแลตัวเองได้
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bladder" id="bladder1"
                                    value="0" checked>
                                <label class="form-check-label" for="bladder1">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-bladder1.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">1 คะแนน</h5>
                            <p class="card-text">กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่าวันละ 1 ครั้ง)</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bladder" id="bladder2"
                                    value="1">
                                <label class="form-check-label" for="bladder2">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="assessment-bladder2.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">2 คะแนน</h5>
                            <p class="card-text">กลั้นได้เป็นปกติ</p>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bladder" id="bladder3"
                                    value="2">
                                <label class="form-check-label" for="bladder3">
                                    เลือกเป็นคำตอบ
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            

            <hr>
            <div class="row">

                <div class="col-xl-3 col-md-4 mb-4">
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>

                </div>
            </div>
        </form>
        <!-- Content Row -->

    <hr>
    <div class="row">
        <p class="text-right">ที่มา : สมุดบันทึกสุขภาพผู้สูงอายุ กรมอนามัย กระทรวงสาธารณสุข,2565</p>

    </div>
    <!-- Content Row ###############################################################-->
<div class="copyright text-center my-auto">
                            <h5>
                                <br>
                                <br>
                                <marquee> ภาควิชาการพยาบาลผู้ใหญ่และผู้สูงอายุ คณะพยาบาลศาสตร์ มหาวิทยาลัยราชภัฏศรีสะเกษ </marquee>
                            </h5>
                        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
            <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <!-- <img src="./img/223d24a551fe1db9d78fe6a71a76b055.gif" class="img-fluid w-90" alt="..."> -->
                        
                        
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>