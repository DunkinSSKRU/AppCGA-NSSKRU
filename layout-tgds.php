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
                        <h1 class="h3 mb-0 text-gray-800">แบบวัดภาวะซึมเศร้าในผู้สูงอายุไทย (Thai Geriatric Depression Scale: TGDS)</h1>

                    </div>

                    <!-- Content Row ###############################################################-->
                    <hr>
                    <form name="assessment" action="reporttgds.php" method="post" enctype="multipart/form-data">
                        <div class="container">
                            <div class="table-responsive shadow">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="alert-success">
                                        <tr class="text-center">
                                            <th>ในช่วงเวลา 1 สัปดาห์ที่ผ่านมา</th>
                                            <th>ใช่</th>
                                            <th>ไม่ใช่</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1. คุณพอใจกับชีวิตความเป็นอยู่ตอนนี้</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one" id="one1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one" id="one2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2. คุณไม่อยากทำในสิ่งที่เคยสนใจหรือเคยทำเป็นประจำ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two" id="two1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center"> 
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two" id="two2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3. คุณรู้สึกชีวิตของคุณช่วงนี้ว่างเปล่าไม่รู้จะทำอะไร</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree" id="tree1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree" id="tree2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4. คุณรู้สึกเบื่อหน่ายบ่อย ๆ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four" id="four1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four" id="four2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5. คุณหวังว่าจะมีสิ่งที่ดี เกิดขึ้นในวันหน้า</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five" id="five1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five" id="five2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6. คุณมีเรื่องกังวลอยู่ตลอดเวลา และเลิกคิดไม่ได้</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six" id="six1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six" id="six2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7. ส่วนใหญ่แล้วคุณรู้สึกอารมณ์ดี</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven"
                                                        id="seven1" value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven"
                                                        id="seven2" value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8. คุณรู้สึกกลัวว่าจะมีเรื่องไม่ดีเกิดขึ้นกับคุณ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight"
                                                        id="eight1" value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight"
                                                        id="eight2" value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9. ส่วนใหญ่คุณรู้สึกมีความสุข</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine" id="nine1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine" id="nine2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10. บ่อยครั้งที่คุณรู้สึกไม่มีที่พึ่ง</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten" id="ten1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten" id="ten2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11. คุณรู้สึกกระวนกระวาย กระสับกระส่ายบ่อย ๆ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one1" id="one1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one1" id="one2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12. คุณชอบอยู่กับบ้านมากกว่าที่จะออกนอกบ้าน</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two1" id="two1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two1" id="two2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13. บ่อยครั้งที่คุณรู้สึกวิตกกังวลเกี่ยวกับชีวิตข้างหน้า</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree1" id="tree1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree1" id="tree2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14. คุณคิดว่าความจำของคุณไม่ดีเท่าคนอื่น</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four1" id="four1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four1" id="four2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15. การที่มีชีวิตอยู่ถึงปัจจุบันนี้ เป็นเรื่องน่ายินดีหรือไม่</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five1" id="five1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five1" id="five2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>16. คุณรู้สึกหมดกำลังใจ หรือเศร้าใจบ่อย ๆ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six1" id="six1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six1" id="six2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17. คุณรู้สึกว่าชีวิตคุณค่อนข้างไม่มีคุณค่า</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven1"
                                                        id="seven1" value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven1"
                                                        id="seven2" value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>18. คุณรู้สึกกังวลมากกับชีวิตที่ผ่านมา</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight1"
                                                        id="eight1" value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight1"
                                                        id="eight2" value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>19. คุณรู้สึกว่าชีวิตนี้ยังมีเรื่องน่าสนุกอีกมาก</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine1" id="nine1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine1" id="nine2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>20. คุณรู้สึกลำบากที่จะเริ่มต้นทำอะไรใหม่ ๆ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten2" id="ten1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten2" id="ten2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21. คุณรู้สึกกระตือรือร้น</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one2" id="one1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="one2" id="one2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>22. คุณรู้สึกสิ้นหวัง</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two2" id="two1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="two2" id="two2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>23. คุณคิดว่าคนอื่นดีกว่าคุณ</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree2" id="tree1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tree2" id="tree2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24. คุณอารมณ์เสียง่ายกับเรื่องเล็ก ๆ น้อยๆ อยู่เสมอ</td>
                                            <td class="text-center"> 
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four2" id="four1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="four2" id="four2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>25. คุณรู้สึกอยากร้องไห้บ่อยๆ </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five2" id="five1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="five2" id="five2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>26. คุณมีความตั้งใจในการทำสิ่งหนึ่งสิ่งใดได้ไม่นาน</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six2" id="six1"
                                                        value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="six2" id="six2"
                                                        value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>27. คุณรู้สึกสดชื่นในเวลาตื่นนอนตอนเช้า</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven2"
                                                        id="seven1" value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="seven2"
                                                        id="seven2" value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28. คุณไม่อยากพบปะพูดคุยกับคนอื่น</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight2"
                                                        id="eight1" value="1">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="eight2"
                                                        id="eight2" value="0" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>29. คุณตัดสินใจอะไรได้เร็ว</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine2" id="nine1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="nine2" id="nine2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>30. คุณมีจิตใจ สบาย แจ่มใสเหมือนก่อน</td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten3" id="ten1"
                                                        value="0">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ten3" id="ten2"
                                                        value="1" checked>
                                                </div>
                                            </td>
                                        </tr>


                                    </tbody>
                                    <tfoot>

                                    </tfoot>

                                </table>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <button class="btn btn-primary btn-block" type="submit"
                                        name="submit">Submit</button>

                                </div>
                            </div>
                        </div>

                    </form>         
<div class="row">
        <p class="text-right">ที่มา : หนังสือคู่มือการวัดทางจิตวิทยา สุชีรา ภัทรายุตวรรตน์. พ.ศ.2545</p>

    </div>
    <div class="copyright text-center my-auto">
                            <h5>
                                <br>
                                <br>
                                <marquee> ภาควิชาการพยาบาลผู้ใหญ่และผู้สูงอายุ คณะพยาบาลศาสตร์ มหาวิทยาลัยราชภัฏศรีสะเกษ </marquee>
                            </h5>
                        </div>

                    <hr>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
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