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
                            <h1 class="h3 mb-0 text-gray-800">แบบประเมินสมรรถภาพสมองเบื้องต้น ฉบับภาษาไทย (MMSE-Thai)
                            </h1>
    
                        </div>
    
                        <!-- Content Row ###############################################################-->
                        <hr>
                    <form name="assessment" action="reportmmse.php" method="post" enctype="multipart/form-data">
                    <!--form name="assessment" action="debug.php" method="post" enctype="multipart/form-data"-->
                        <div class="row shadow alert alert-warning">
                            <h4 style="margin-top: 1rem;">
                                คำชี้แจง </h4><br>
                                แบบสัมภาษณ์ชุดนี้มีวัตถุประสงค์เพื่อประเมินสมรรถภาพสมองของผู้สูงอายุที่มี
                                ภาวะการรู้คิดบกพร่อง (กรณีที่ผู้ทดสอบอ่านไม่ออก เขียนไม่ได้ ไม่ต้องทำข้อ 4,9 และ10)<br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="exampleRadios1" value="option1" checked
                                        name="case">
                                    <label class="form-check-label" for="exampleRadios1">
                                        ผู้ทดสอบอ่านออก เขียนได้
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="exampleRadios2" value="option2"
                                        name="case">
                                    <label class="form-check-label" for="exampleRadios2">
                                        ผู้ทดสอบอ่านไม่ออก เขียนไม่ได้ ไม่ต้องทำข้อ 4,9 และ10
                                    </label>
                                </div>
                            </h4>
                        </div>
                        
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-warning">
                                        <th scope="col">1. Orientation for time ( 5 คะแนน )<br>(ตอบถูกข้อละ 1 คะแนน)</th>
                                        <th scope="col" class="text-center">
                                            บันทึกคำตอบไว้ทุกครั้ง<br>(ทั้งคำตอบที่ถูกและผิด)</th>
                                        <th scope="col" class="text-center">คะแนน</th>
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1
                                            วันนี้วันที่เท่าไร</td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="onetext1">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" name="one1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2 วันนี้วันอะไร
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="onetext2">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="one2">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.3
                                            เดือนนี้เดือนอะไร</td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="onetext3">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="one3">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.4 ปีนี้ปีอะไร</td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="onetext4">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="one4">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.5 ฤดูนี้ฤดูอะไร
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="onetext5">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="one5">
                                            </div>
                                        </td>
                                    </tr>
    
                                </tbody>
                            </table>
                            <table class="table table-hover">
                                <tdead>
                                    <tr class="table-warning">
                                        <th scope="col">2. Orientation for place ( 5 คะแนน )<br>(ตอบถูกข้อละ 1 คะแนน)</th>
                                        <th scope="col" class="text-center">
                                            ให้เลือกข้อใดข้อหนึ่ง<br> (ระหว่าง 2.1 หรือ 2.2)</th>
                                        <th scope="col" class="text-center">คะแนน</th>
    
                                    </tr>
                                </tdead>
                                <tbody>
                                    <tr>
                                        <td colspan="2"><label class="font-weight-bold">2.1 กรณีอยู่ที่บ้าน</label>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="exampleRadios1"
                                                    value="option1" checked name="r2">
    
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.1
                                            สถานที่ตรงนี้เรียกว่าอะไร และชื่อว่าอะไร</td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="twotext1">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="two1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.2
                                            ขณะนี้ท่านอยู่ที่ชั้นที่เท่าไรของตัวอาคาร</td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="twotext2">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="two2">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.3 ที่อยู่ในอำเภอ
                                            - เขตอะไร</td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="twotext3">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="two3">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.4
                                            ที่นี่จังหวัดอะไร</td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="twotext4">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="two4">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1.5 ที่นี่ภาคอะไร
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="twotext5">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="two5">
                                            </div>
                                        </td>
                                    </tr>
    
                                    <tr class="table-Default">
                                        <td colspan="2"><label class="font-weight-bold">2.2 กรณีอยู่ที่สถานพยาบาล</label>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="exampleRadios1"
                                                    value="option2" name="r2">
    
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.1
                                            สถานที่ตรงนี้เรียกว่าอะไรและบ้านเลขที่อะไร</td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="two2text1">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="two21">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.2
                                            ที่นี่หมู่บ้านหรือละแวก/คุ้ม/ย่าน/ถนนอะไร </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="two2text2">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="two22">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.3
                                            ที่นี่อำเภอเขต/อะไร</td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="two2text3">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="two23">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.4
                                            ที่นี่จังหวัดอะไร</td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="two2text4">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="two24">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2.5 ที่นี่ภาคอะไร
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="two2text5">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="two25">
                                            </div>
                                        </td>
                                    </tr>
    
                                </tbody>
                            </table>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-warning">
                                        <th colspan="3">3. Registraion ( 3 คะแนน )</th>
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">ต่อไปนี้เป็นการทดสอบความจำ ดิฉันจำบอกชื่อของ 3 อย่าง คุณ (ตา ,
                                            ยาย....)
                                            ตั้งใจฟังให้ดีนะ
                                            เพราะจะบอกเพียงครั้งเดียว ไม่มีการบอกซ้ำอีก เมือ ผม (ดิฉัน) พูดจบ ให้
                                            คุณ(ตา,ยาย....)
                                            <label class="font-weight-bold text-dark">พูดทบทวนตามที่ได้ยิน ให้ครบ ทั้ง 3
                                                ชื่อ</label> แล้วพยามจำไว้ให้ดี เดี๋ยวดิฉันจะถามซ้ำ
                                            <br><label class="font-weight-bold text-dark">* การบอกชื่อแต่ละคำให้ห่างกันประมาณหนึ่งวินาที ต้องไม่ช้าหรือเร็วเกินไป
                                            ( ตอบถูก 1 คำได้ 1 คะแนน )</label>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="exampleRadios1"
                                                    value="option1" checked name="r3">
    
                                            </div>
                                        </td>
    
                                    </tr>
                                    <tr>
    
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="tree1" value="1"
                                                    name="tree1">
                                                <label class="form-check-label" for="tree1">ดอกไม้</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="tree2" value="1"
                                                    name="tree2">
                                                <label class="form-check-label" for="tree2">แม่น้ำ</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="tree3" value="1"
                                                    name="tree3">
                                                <label class="form-check-label" for="tree3">รถไฟ</label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="treetext1">
                                        </td>
                                        <td class="text-center">
    
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">ในกรณีที่ทำแบบทดสอบซ้ำภายใน 2 เดือน ให้ใช้คำว่า
                                        </th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="exampleRadios1"
                                                    value="option2" name="r3">
    
                                            </div>
                                        </td>
    
                                    </tr>
                                    <tr>
    
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="tree21" value="1"
                                                    name="tree21">
                                                <label class="form-check-label" for="tree21">ต้นไม้</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="tree22" value="1"
                                                    name="tree22">
                                                <label class="form-check-label" for="tree22">ทะเล</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="tree23" value="1"
                                                    name="tree23">
                                                <label class="form-check-label" for="tree23">รถยนต์</label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="tree2text1">
                                        </td>
                                        <td class="text-center">
    
                                        </td>
                                    </tr>
                                    <tr>
                                </tbody>
                            </table>
    
    
                            <!--  4 -->
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-warning">
                                        <th scope="col">4. Attention/Calculation ( 5 คะแนน ) (ให้เลือกข้อใดข้อหนึ่ง) </th>
                                        <th scope="col" class="text-center">
                                        </th>
                                        <th scope="col" class="text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3">ข้อนี้เป็นการคิดเลขในใจเพื่อทดสอบสมาธิ คุณ (ตา,ยาย....)
                                            คิดเลขในใจเป็นไหม ?
                                            ถ้าตอบคิดเป็นทำข้อ 4.1 ถ้าตอบคิดไม่เป็นหรือไม่ตอบให้ทำข้อ 4.2
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">4.1 คิดเลขในใจ บันทึกคำตอบตัวเลขไว้ทุกครั้ง (ทั้งคำตอบที่ถูกและผิด) ทำทั้งหมด 5ครั้ง
    ถ้าลบได้ 1,2,หรือ3 แล้วตอบไม่ได้  ก็คิดคะแนนเท่าที่ทำได้  ไม่ต้องย้ายไปทำข้อ 4.2
    
                                        </th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="exampleRadios1"
                                                    value="option1" checked name="r4">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> ข้อนี้คิดในใจเอา 100 ตั้ง ลบออกที่ละ 7 ไปเรื่อยๆ ได้ผลเท่าไรบอกมา </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="fourtext1">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="four1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> ข้อนี้คิดในใจเอา 93 ตั้ง ลบออกที่ละ 7 ไปเรื่อยๆ ได้ผลเท่าไรบอกมา </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="fourtext2">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="four2">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> ข้อนี้คิดในใจเอา 86 ตั้ง ลบออกที่ละ 7 ไปเรื่อยๆ ได้ผลเท่าไรบอกมา </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="fourtext3">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="four3">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> ข้อนี้คิดในใจเอา 79 ตั้ง ลบออกที่ละ 7 ไปเรื่อยๆ ได้ผลเท่าไรบอกมา </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="fourtext4">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="four4">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> ข้อนี้คิดในใจเอา 72 ตั้ง ลบออกที่ละ 7 ไปเรื่อยๆ ได้ผลเท่าไรบอกมา </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="fourtext5">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="four5">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">4.2 “ผม (ดิฉัน) จะสะกดคำว่า มะนาว ให้คุณ (ตา , ยาย....) ฟังแล้วให้คุณ (ตา , ยาย....) สะกดถอยหลังจากพยัญชนะตัวหลังไปตัวแรก 
    
                                        </th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="exampleRadios1"
                                                    value="option2"  name="r4">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> คำว่ามะนาวสะกดว่า มอม้า-สระอะ-นอหนู-สระอา-วอแหวน ไหนคุณ (ตา,ยาย....) สะกอถอยหลังให้ฟังซิ
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="four2text1">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="four21">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="four2text2">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="four22">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="four2text3">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="four23">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="four2text4">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="four24">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="four2text5">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="four25">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- 5 -->
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-warning">
                                        <th colspan="3">5. Recall ( 3 คะแนน)</th>
    
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th colspan="2">เมื่อสักครู่ที่ให้จำของ 3 อย่างจำได้ไหมมีอะไรบ้าง” ( ตอบถูก 1 คำได้
                                            1 คะแนน )
                                        </th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="exampleRadios1"
                                                    value="option1" checked name="r5">
    
                                            </div>
                                        </td>
    
                                    </tr>
                                    <tr>
    
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="five1" value="1"
                                                    name="five1">
                                                <label class="form-check-label" for="five1">ดอกไม้</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="five2" value="1"
                                                    name="five2">
                                                <label class="form-check-label" for="five2">แม่น้ำ</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="five3" value="1"
                                                    name="five3">
                                                <label class="form-check-label" for="five3">รถไฟ</label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="fivetext1">
                                        </td>
                                        <td class="text-center">
    
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">ในกรณีที่ทำแบบทดสอบซ้ำภายใน 2 เดือน ให้ใช้คำว่า
                                        </th>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="exampleRadios1"
                                                    value="option2" name="r5">
    
                                            </div>
                                        </td>
    
                                    </tr>
                                    <tr>
    
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="five21" value="1"
                                                    name="five21">
                                                <label class="form-check-label" for="five21">ต้นไม้</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="five22" value="1"
                                                    name="five22">
                                                <label class="form-check-label" for="five22">ทะเล</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="five23" value="1"
                                                    name="five23">
                                                <label class="form-check-label" for="five23">รถยนต์</label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="five2text1">
                                        </td>
                                        <td class="text-center">
    
                                        </td>
                                    </tr>
                                    <tr>
                                </tbody>
                            </table>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-warning">
                                        <th colspan="3">6. Naming ( 2 คะแนน)</th>
    
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.1
                                            ยื่นดินสอให้ผู้ถูกทดสอบดูแล้วถามว่า<br>
                                            <label class="font-weight-bold text-dark">“ของสิ่งนี้เรียกว่าอะไร”</label>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="sixtext1">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="six1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.2
                                            ชี้นาฬิกาข้อมือให้ผู้ถูกทดสอบดูแล้วถามว่า<br>
                                            <label class="font-weight-bold text-dark">“ของสิ่งนี้เรียกว่าอะไร”</label>
    
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="sixtext2">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="six2">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-warning">
                                        <th colspan="3">7. Repetition (1 คะแนน) (พูดตามได้ถูกต้องได้ 1 คะแนน)</th>
    
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตั้งใจฟังผม (ดิฉัน)
                                            เมื่อผม (ดิฉัน) พูดข้อความนี้
                                            แล้วให้คุณ (ตา,ยาย)พูดตาม ผม (ดิฉัน) จะบอกเพียงครั้งเดียว <br>
                                            <label class="font-weight-bold text-dark">“ใครใคร่ขายไก่ไข่”</label>
    
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="seventext1">
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                    id="blankCheckbox" value="1" name="seven">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-warning">
                                        <th colspan="3">8. Verbal command ( 3 คะแนน)</th>
    
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3">ข้อนี้ฟังคำสั่ง “ฟังดีๆ นะเดี๋ยวผม (ดิฉัน)จะส่งกระดาษให้คุณ
                                            แล้วให้คุณ (ตา , ยาย....)
                                            <label class="font-weight-bold text-dark">รับด้วยมือขวา พับครึ่งกระดาษ
                                                แล้ววางไว้ที่...........”(พื้น,โต๊ะ,เตียง)</label>
                                            ผู้ทดสอบแสดงกระดาษเปล่าขนาดประมาณ เอ-4 ไม่มีรอยผับ ให้ผู้ถูกทดสอบ
    
                                        </td>
    
                                    </tr>
                                    <tr>
    
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="eight1" value="1"
                                                    name="eight1">
                                                <label class="form-check-label" for="eight1">รับด้วยมือขวา </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="eight2" value="1"
                                                    name="eight2">
                                                <label class="form-check-label" for="eight2">พับครึ่ง </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="eight3" value="1"
                                                    name="eight3">
                                                <label class="form-check-label" for="eight3">วางไว้ที่”(พื้น,โต๊ะ,เตียง)
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="eighttext1">
                                        </td>
                                        <td class="text-center">
    
                                        </td>
                                    </tr>
    
                                    <tr>
                                </tbody>
                            </table>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-warning">
                                        <th colspan="3">9. Written command (1 คะแนน)</th>
    
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3">ต่อไปเป็นคำสั่งที่เขียนเป็นตัวหนังสือ ต้องการให้คุณ (ตา , ยาย....)
                                            อ่าน แล้วทำตาม (ตา , ยาย....) จะอ่านออกเสียงหรืออ่านในใจ
                                            ผู้ทดสอบแสดงกระดาษที่เขียนว่า <br> <label
                                                class="font-weight-bold text-dark">“หลับตา”</label>
                                        </td>
    
    
                                    </tr>
                                    <tr>
    
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="nine1" value="1"
                                                    name="nine1">
                                                <label class="form-check-label" for="nine1">หลับตา </label>
                                            </div>
    
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="ninetext1">
                                        </td>
                                        <td class="text-center">
    
                                        </td>
                                    </tr>
    
                                    <tr>
                                </tbody>
                            </table>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-warning">
                                        <th colspan="3">10. Writing (1 คะแนน)</th>
    
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3">ข้อนี้จะเป็นคำสั่งให้<label
                                                class="font-weight-bold text-dark">“คุณ (ตา ,
                                                ยาย....)
                                                เขียนข้อความอะไรก็ได้ที่อ่านแล้วรู้เรื่อง
                                                หรือมีความหมายมา 1 ประโยค”</label>
                                        </td>
    
    
                                    </tr>
                                    <tr>
    
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="ten1" value="1"
                                                    name="ten1">
                                                <label class="form-check-label" for="ten1">ประโยคมีความหมาย </label>
                                            </div>
    
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                name="tentext1">
                                        </td>
                                        <td class="text-center">
    
                                        </td>
                                    </tr>
    
                                    <tr>
                                </tbody>
                            </table>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-warning">
                                        <th colspan="2">11. Visuoconstruction (1 คะแนน)</th>
    
                                        <th class="text-center">คะแนน</th>
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3"> ข้อนี้เป็นคำสั่ง <label class="font-weight-bold text-dark">
                                                “จงวาดภาพให้เหมือนภาพตัวอย่าง”</label>
                                            (ในช่องว่างด้านขวาของภาพตัวอย่าง)
                                        </td>
                                    </tr>
                                    <tr>
    
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <img src="assessment-mmse.png" alt="..." class="rounded float-left">
                                            </div>
                                            <div id="imgControl" class="col-3">
                                                <img id="imgUpload" class="img-thumbnail">
                                            </div>
                                        </td>
                                        <td class="text-center">
    
    
    
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="one11" value="1"
                                                    name="one11">
    
                                            </div>
                                        </td>
                                    </tr>
    
                                    <tr>
                                </tbody>
                            </table>
                            
                            <div class="col-xl-3 col-md-6 mb-4">
                                <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>
    
                            </div>
                    </form>
    <hr>
    <div class="row">
        <p class="text-right">ที่มา : คณะกรรมการพัฒนาเครื่องมือคัดกรองและประเมินสุขภาพผู้สูงอายุกระทรวงสาธารณสุข คู่มือคัดกรอง
            และประเมินสุขภาพผู้สูงอายุ พ.ศ.2564</p>

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