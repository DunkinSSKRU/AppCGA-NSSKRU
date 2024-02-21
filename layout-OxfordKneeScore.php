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
                        <h1 class="h3 mb-0 text-gray-800">แบบประเมินระดับความรุนแรงของโรคข้อเข่าเสื่อม (Oxford Knee Score)</h1>
                        <br>
                    </div>
                  <!-- Content Row ###############################################################-->
                  <form name="assessment" action="reportoks.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">1.ลักษณะอาการเจ็บปวดเข่า หรือข้อพับของท่าน</h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one" id="one1"
                                                value="4" checked>
                                            <label class="form-check-label" for="one1">
                                                4 &nbsp; &nbsp;ไม่มีอาการ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one" id="one2"
                                                value="3">
                                            <label class="form-check-label" for="one2">
                                                3 &nbsp; &nbsp; มีอาการปวดลึกๆที่เข่าเล็กน้อย เฉพาะเวลาขยับตัวหรืออยู่ในบางท่าเท่านั้น
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one" id="one3"
                                                value="2">
                                            <label class="form-check-label" for="one3">
                                                2 &nbsp; &nbsp;หลังใช้งานนาน อาการปวดเข่ามากขึ้น พักแล้วดีขึ้น เป็นๆหายๆ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one" id="one4"
                                                value="1">
                                            <label class="form-check-label" for="one4">
                                                1 &nbsp; &nbsp; อาการปวดเข่าเพิ่มมากขึ้น ปวดนานขึ้น
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one" id="one5"
                                                value="0">
                                            <label class="form-check-label" for="one4">
                                                0 &nbsp; &nbsp;อยู่เฉยๆก็ปวดมาก ขยับไม่ได้
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">2. ท่านมีปัญหาเรื่องเข่าในการทำกิจวัตรประจำวัน เช่น การยืนอาบน้ำ ใส่เสื้อผ้าหรือไม่</h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two" id="two1"
                                                value="4" checked>
                                            <label class="form-check-label" for="two1">  
                                                4 &nbsp; &nbsp;ไม่มีปัญหา
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two" id="two2"
                                                value="3">
                                            <label class="form-check-label" for="two2">
                                                3 &nbsp; &nbsp; มีอาการปวดเข่า/ข้อเข่าฝืดตึงขัดเล็กน้อย แต่น้อยมาก
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two" id="two3"
                                                value="2">
                                            <label class="form-check-label" for="two3">
                                                2 &nbsp; &nbsp;มีอาการปวดเข่า/ข้อเข่าฝืดตึงเล็กน้อย แต่บ่อยครั้ง
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two" id="two4"
                                                value="1">
                                            <label class="form-check-label" for="two4">
                                                1 &nbsp; &nbsp;เริ่มมีปัญหาทำด้วยความยากลำบาก
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two" id="two5"
                                                value="0">
                                            <label class="form-check-label" for="two4">
                                                0 &nbsp; &nbsp;ไม่สามารถทำได้
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">3. ท่านมีปัญหาเรื่องเข่า เมื่อก้าวขึ้น-ลงรถ หรือรถประจำทางหรือไม่
                                    
                                </h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tree" id="tree1"
                                                value="4" checked>
                                            <label class="form-check-label" for="tree1">
                                                4 &nbsp; &nbsp;ไม่อาการใดๆ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tree" id="tree2"
                                                value="3">
                                            <label class="form-check-label" for="tree2">
                                                3 &nbsp; &nbsp; มีอาการปวดเข่า/ข้อเข่าฝืดตึงขัดเล็กน้อย แต่น้อยมาก
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tree" id="tree3"
                                                value="2">
                                            <label class="form-check-label" for="tree3">
                                                2 &nbsp; &nbsp;มีอาการปวดเข่า/ข้อเข่าฝืดก้าวขึ้นลงได้ช้ากว่าปกติ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tree" id="tree4"
                                                value="1">
                                            <label class="form-check-label" for="tree4">
                                                1 &nbsp; &nbsp;มีอาการปวดเข่ามาก/ข้อเข่าฝืด ก้าวขึ้นลงด้วยความยกาลำบาก
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tree" id="tree5"
                                                value="0">
                                            <label class="form-check-label" for="tree4">
                                                0 &nbsp; &nbsp;ไม่สามารถทำได้
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">4. ท่าเดินได้มากที่สุดนานเท่าไร ก่อนที่จะมีอาการปวดเข่า</h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four" id="four1"
                                                value="4" checked>
                                            <label class="form-check-label" for="four1">
                                                4 &nbsp; &nbsp;เดินได้เกิน 1 ชั่วโมง โดยไม่มีอาการอะไร
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four" id="four2"
                                                value="3">
                                            <label class="form-check-label" for="four2">
                                                3 &nbsp; &nbsp; เดินได้ 6-60 นาที จึงเริ่มมีอาการปวด
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four" id="four3"
                                                value="2">
                                            <label class="form-check-label" for="four3">
                                                2 &nbsp; &nbsp;เดินได้เเพียง 5 นาที เริ่มมีอาการปวด
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four" id="four4"
                                                value="1">
                                            <label class="form-check-label" for="four4">
                                                1 &nbsp; &nbsp;เดินได้แค่รอบบ้านเท่านั้น เริ่มมีอาการปวด
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four" id="four5"
                                                value="0">
                                            <label class="form-check-label" for="four4">
                                                0 &nbsp; &nbsp;ทำไม่ได้หรือเดินไม่ไหว
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">5. หลังทานอาหารเสร็จแล้วลุกจากที่นั่ง เข่าของท่านมีอาการอย่างไร</h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five" id="five1"
                                                value="4" checked>
                                            <label class="form-check-label" for="five1">
                                                4 &nbsp; &nbsp; ไม่มีอาการ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five" id="five2"
                                                value="3">
                                            <label class="form-check-label" for="five2">
                                                3 &nbsp; &nbsp; มีอาการปวดเข่า/ข้อเข่าฝืดเล็กน้อย
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five" id="five3"
                                                value="2">
                                            <label class="form-check-label" for="five3">
                                                2 &nbsp; &nbsp;มีอาการปวดเข่า ข้อเข่าฝืดปานกลาง
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five" id="five4"
                                                value="1">
                                            <label class="form-check-label" for="five4">
                                                1 &nbsp; &nbsp;มีอาการปวดเข่ามาก/ข้อเข่าฝืด ลุกขึ้นยืนได้ด้วยความยากลำบาก
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five" id="five5"
                                                value="0">
                                            <label class="form-check-label" for="five4">
                                                0 &nbsp; &nbsp; ปวดมากไม่สามารถลุกขึ้นได้
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">6. ท่านต้องเดินโยกตัว (เดินกระโผลก กระเผลก) เพราะอาการที่เกิดจากเข่าของท่านหรือไม่</h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six" id="six1"
                                                value="4" checked>
                                            <label class="form-check-label" for="six1">
                                                4 &nbsp; &nbsp;ไม่เคย
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six" id="six2"
                                                value="3">
                                            <label class="form-check-label" for="six2">
                                                3 &nbsp; &nbsp; ในช่วง 2-3 ก้าวแรกที่ออกเดินเท่านั้น
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six" id="six3"
                                                value="2">
                                            <label class="form-check-label" for="six3">
                                                2 &nbsp; &nbsp;เป็นบางครั้ง
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six" id="six4"
                                                value="1">
                                            <label class="form-check-label" for="six4">
                                                1 &nbsp; &nbsp;เป็นส่วนใหญ่
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six" id="six5"
                                                value="0">
                                            <label class="form-check-label" for="six4">
                                                0 &nbsp; &nbsp; ตลอดเวลา
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">7. ท่านสามารถนั่งคุกเข่าและลุกขึ้นได้หรือไม่</h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven" id="seven1"
                                                value="4" checked>
                                            <label class="form-check-label" for="seven1">
                                                4 &nbsp; &nbsp; ลุกได้ง่าย
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven" id="seven2"
                                                value="3">
                                            <label class="form-check-label" for="seven2">
                                                3 &nbsp; &nbsp; ลุกได้ ลำบากเล็กน้อย
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven" id="seven3"
                                                value="2">
                                            <label class="form-check-label" for="seven3">
                                                2 &nbsp; &nbsp;ลุกได้แต่ยากขึ้น
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven" id="seven4"
                                                value="1">
                                            <label class="form-check-label" for="seven4">
                                                1 &nbsp; &nbsp; ลุกได้แต่ยากลำบากมาก
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven" id="seven5"
                                                value="0">
                                            <label class="form-check-label" for="seven4">
                                                0 &nbsp; &nbsp;ลุกไม่ไหว
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">8. ท่านมีปัญหาปวดเข่า ในขณะที่นอนกลางคืน หรือไม่</h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight" id="eight1"
                                                value="4" checked>
                                            <label class="form-check-label" for="eight1">
                                                4 &nbsp; &nbsp;ไม่เคย
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight" id="eight2"
                                                value="3">
                                            <label class="form-check-label" for="eight2">
                                                3 &nbsp; &nbsp; ใน 1 เดือนมี 1-2 ครั้ง
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight" id="eight3"
                                                value="2">
                                            <label class="form-check-label" for="eight3">
                                                2 &nbsp; &nbsp;บางคืน 1 สัปดาห์ มี 1-3 ครั้ง
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight" id="eight4"
                                                value="1">
                                            <label class="form-check-label" for="eight4">
                                                1 &nbsp; &nbsp; ส่วนมาก 1 สัปดาห์ มี 4-6 ครั้ง
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight" id="eight5"
                                                value="0">
                                            <label class="form-check-label" for="eight4">
                                                0 &nbsp; &nbsp;ทุกคืน
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">9. ในขณะทำงาน  หรือทำงานบ้านท่านมีอาการปวดเข่า หรือไม่</h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nine" id="nine1"
                                                value="4" checked>
                                            <label class="form-check-label" for="nine1">
                                                4 &nbsp; &nbsp; ไม่มี
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nine" id="nine2"
                                                value="3">
                                            <label class="form-check-label" for="nine2">
                                                3 &nbsp; &nbsp; น้อยมาก
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nine" id="nine3"
                                                value="2">
                                            <label class="form-check-label" for="nine3">
                                                2 &nbsp; &nbsp;บางครั้ง
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nine" id="nine4"
                                                value="1">
                                            <label class="form-check-label" for="nine4">
                                                1 &nbsp; &nbsp; ส่วนมาก
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nine" id="nine5"
                                                value="0">
                                            <label class="form-check-label" for="nine4">
                                                0 &nbsp; &nbsp; ตลอดเวลา
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">10. ท่านเคยมีความรู้สึกว่าเข่าของท่านทรุดลงทันที หรือหมดแรงทันทีจนตัวทรุดลง หรือไม่</h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ten" id="ten1"
                                                value="4" checked>
                                            <label class="form-check-label" for="ten1">
                                                4 &nbsp; &nbsp;ไม่เคย
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ten" id="ten2"
                                                value="3">
                                            <label class="form-check-label" for="ten2">
                                                3 &nbsp; &nbsp; ในช่วงแรกที่ก้าวเดินเท่านั้น
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ten" id="ten3"
                                                value="2">
                                            <label class="form-check-label" for="ten3">
                                                2 &nbsp; &nbsp;บางครั้ง
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ten" id="ten4"
                                                value="1">
                                            <label class="form-check-label" for="ten4">
                                                1 &nbsp; &nbsp; ส่วนมาก
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ten" id="ten5"
                                                value="0">
                                            <label class="form-check-label" for="ten4">
                                                0 &nbsp; &nbsp; ตลอดเวลา
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">11. ท่านสามารถเดินซื้อของใช้ต่างๆได้ด้วยตัวท่านเองหรือไม่</h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one1" id="one11"
                                                value="4" checked>
                                            <label class="form-check-label" for="one11">
                                                4 &nbsp;&nbsp; ได้เป็นปกติ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one1" id="one12"
                                                value="3">
                                            <label class="form-check-label" for="one12">
                                                3 &nbsp; &nbsp; ไปได้ เริ่มมีอาการปวดเข่า/ตึงเข่าเล็กน้อย
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one1" id="one13"
                                                value="2">
                                            <label class="form-check-label" for="one13">
                                                2 &nbsp; &nbsp; ไปได้ เริ่มมีอาการปวดเข่า/ตึงเข่ามากขึ้น
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one1" id="one14"
                                                value="1">
                                            <label class="form-check-label" for="one14">
                                                1 &nbsp; &nbsp;พอไปได้ แต่ด้วยความยากลำบาก
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one1" id="one15"
                                                value="0">
                                            <label class="form-check-label" for="one14">
                                                0 &nbsp; &nbsp; ไปไม่ไหว
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">12. ท่านสามารถเดินลงบันไดได้ หรือไม่</h4>
                                <hr>
                                <h5>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two1" id="two11"
                                                value="4" checked>
                                            <label class="form-check-label" for="two11">
                                                4 &nbsp; &nbsp; เดินลงได้ เป็นปกติ                                                    
                                                                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two1" id="two12"
                                                value="3">
                                            <label class="form-check-label" for="two12">
                                                3 &nbsp; &nbsp; เดินลงได้ เริ่มมีอาการปวดเข่า/ตึงเข่าเล็กน้อย
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two1" id="two13"
                                                value="2">
                                            <label class="form-check-label" for="two13">
                                                2 &nbsp; &nbsp; เดินลงได้ เริ่มมีอาการปวดเข่า/ตึงเข่ามากขึ้น
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two1" id="two14"
                                                value="1">
                                            <label class="form-check-label" for="two14">
                                                1 &nbsp; &nbsp;เดินลงได้ด้วยความยากลำบากมาก
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two1" id="two15"
                                                value="0">
                                            <label class="form-check-label" for="two14">
                                                0 &nbsp; &nbsp; เดินลงไม่ได้
                                            </label>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-xl-3 col-md-6 mb-4">
                            <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>

                        </div>
                </form>
                <hr>
                <p class="text-right">ที่มา : กรมอนามัย กระทรวงสาธารณสุข </p>
                </main>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <!-- <img src="./img/223d24a551fe1db9d78fe6a71a76b055.gif" class="img-fluid w-90" alt="..."> -->
                        <div class="copyright text-center my-auto">
                            <h5>
                                <br>
                                <br>
                                <marquee> ภาควิชาการพยาบาลผู้ใหญ่และผู้สูงอายุ คณะพยาบาลศาสตร์ มหาวิทยาลัยราชภัฏศรีสะเกษ </marquee>
                            </h5>
                        </div>
                        
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