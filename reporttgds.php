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
                    <div class="container-fluid">
                    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">แบบวัดภาวะซึมเศร้าในผู้สูงอายุไทย (Thai Geriatric Depression Scale: TGDS)</h1>
                    </div>
                        <div class="container">
                            <div class="row">
                                <!-- <div class="col"></div> -->
                                <div class="col">
                                    <div class="alert alert-warning" role="alert">
                                        <div class="card text-center border-warning">
                                            <div class="card-header alert-warning">
                                                ผลคะแนนการประเมิน
                                            </div>
                                             
                                        <div class="card-body"><h1 class="card-title">
                                            <?php 
                                            $_POST["one"];
                                            $_POST["two"];
                                            $_POST["tree"];
                                            $_POST["four"];
                                            $_POST["five"];
                                            $_POST["six"];
                                            $_POST["seven"];
                                            $_POST["eight"];
                                            $_POST["nine"];
                                            $_POST["ten"];
                                            $_POST["one1"];
                                            $_POST["two1"];
                                            $_POST["tree1"];
                                            $_POST["four1"];
                                            $_POST["five1"];
                                            $_POST["six1"];
                                            $_POST["seven1"];
                                            $_POST["eight1"];
                                            $_POST["nine1"];
                                            $_POST["ten2"];
                                            $_POST["one2"];
                                            $_POST["two2"];
                                            $_POST["tree2"];
                                            $_POST["four2"];
                                            $_POST["five2"];
                                            $_POST["six2"];
                                            $_POST["seven2"];
                                            $_POST["eight2"];
                                            $_POST["nine2"];
                                            $_POST["ten3"];
                                            echo $_POST["one"]+$_POST["two"]+$_POST["tree"]+$_POST["four"]+$_POST["five"]+$_POST["six"]+$_POST["seven"]+$_POST["eight"]+$_POST["nine"]+$_POST["ten"]+$_POST["one1"]+$_POST["two1"]+$_POST["tree1"]+$_POST["four1"]+$_POST["five1"]+$_POST["six1"]+$_POST["seven1"]+$_POST["eight1"]+$_POST["nine1"]+$_POST["ten2"]+$_POST["one2"]+$_POST["two2"]+$_POST["tree2"]+$_POST["four2"]+$_POST["five2"]+$_POST["six2"]+$_POST["seven2"]+$_POST["eight2"]+$_POST["nine2"]+$_POST["ten3"];
                                            ?>
                                            </h1><br>
                                            <h3 class="card-title">
                                            <?php 
                                            if ($_POST["one"]+$_POST["two"]+$_POST["tree"]+$_POST["four"]+$_POST["five"]+$_POST["six"]+$_POST["seven"]+$_POST["eight"]+$_POST["nine"]+$_POST["ten"]+$_POST["one1"]+$_POST["two1"]+$_POST["tree1"]+$_POST["four1"]+$_POST["five1"]+$_POST["six1"]+$_POST["seven1"]+$_POST["eight1"]+$_POST["nine1"]+$_POST["ten2"]+$_POST["one2"]+$_POST["two2"]+$_POST["tree2"]+$_POST["four2"]+$_POST["five2"]+$_POST["six2"]+$_POST["seven2"]+$_POST["eight2"]+$_POST["nine2"]+$_POST["ten3"] >=25) {
                                                echo "มีความรู้สึกเศร้า รุนแรง"; 
                                                echo "<br/>"; 
                                                echo "(severe depression)";
                                            }else if ($_POST["one"]+$_POST["two"]+$_POST["tree"]+$_POST["four"]+$_POST["five"]+$_POST["six"]+$_POST["seven"]+$_POST["eight"]+$_POST["nine"]+$_POST["ten"]+$_POST["one1"]+$_POST["two1"]+$_POST["tree1"]+$_POST["four1"]+$_POST["five1"]+$_POST["six1"]+$_POST["seven1"]+$_POST["eight1"]+$_POST["nine1"]+$_POST["ten2"]+$_POST["one2"]+$_POST["two2"]+$_POST["tree2"]+$_POST["four2"]+$_POST["five2"]+$_POST["six2"]+$_POST["seven2"]+$_POST["eight2"]+$_POST["nine2"]+$_POST["ten3"] >=19){
                                                echo "มีความรู้สึกเศร้า ปานกลาง";  
                                                echo "<br/>";
                                                echo "(moderate depression)";
                                            }else if ($_POST["one"]+$_POST["two"]+$_POST["tree"]+$_POST["four"]+$_POST["five"]+$_POST["six"]+$_POST["seven"]+$_POST["eight"]+$_POST["nine"]+$_POST["ten"]+$_POST["one1"]+$_POST["two1"]+$_POST["tree1"]+$_POST["four1"]+$_POST["five1"]+$_POST["six1"]+$_POST["seven1"]+$_POST["eight1"]+$_POST["nine1"]+$_POST["ten2"]+$_POST["one2"]+$_POST["two2"]+$_POST["tree2"]+$_POST["four2"]+$_POST["five2"]+$_POST["six2"]+$_POST["seven2"]+$_POST["eight2"]+$_POST["nine2"]+$_POST["ten3"] >=13){
                                                echo "มีความรู้สึกเศร้า เล็กน้อย";  
                                                echo "<br/>";
                                                echo "(mild depression)";
                                            }else if ($_POST["one"]+$_POST["two"]+$_POST["tree"]+$_POST["four"]+$_POST["five"]+$_POST["six"]+$_POST["seven"]+$_POST["eight"]+$_POST["nine"]+$_POST["ten"]+$_POST["one1"]+$_POST["two1"]+$_POST["tree1"]+$_POST["four1"]+$_POST["five1"]+$_POST["six1"]+$_POST["seven1"]+$_POST["eight1"]+$_POST["nine1"]+$_POST["ten2"]+$_POST["one2"]+$_POST["two2"]+$_POST["tree2"]+$_POST["four2"]+$_POST["five2"]+$_POST["six2"]+$_POST["seven2"]+$_POST["eight2"]+$_POST["nine2"]+$_POST["ten3"] <=12){
                                                echo "ผู้สูงอายุปกติ";
                                            } 
                                            ?>
                                            </h3><br>
                                        </div>
                                        </div>
                                        <div class="card-footer text-muted alert-warning"> </div>
                                    </div>
                                </div>
        
                            </div>
                            </div>
                            <hr>
                            <center><img class="card-img-top" src="assessment-tgds.png" alt="Card image cap"></center>
                    </form>
                    <hr>
                    <p class="text-right">ที่มา : หนังสือคู่มือการวัดทางจิตวิทยา สุชีรา ภัทรายุตวรรตน์. พ.ศ.2545</p>

                    <!-- Content Row ###############################################################-->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
                </main>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
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