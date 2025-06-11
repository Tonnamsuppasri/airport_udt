<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
    .image-container .img-fluid {
        width: 100%;
        object-fit: contain;
        object-position: center top;
        filter: brightness(50%);
    }

    .image-container .blue-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 82, 170, 0.7);
        color: white;
        padding: 10px 20px;
        font-size: 30px;
        text-align: center;
        white-space: nowrap;
    }

    .image-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        max-height: 250px;
    }

    .sitemap-container {
        max-width: 1500px;
        margin: 0 auto;
        padding: 20px;
    }

    .sitemap-container h1 {
        font-size: 26px;
        position: relative;
        padding-left: 20px;
    }

    .sitemap-container .highlight-bar {
        position: absolute;
        width: 4px;
        height: 20px;
        background-color: #f4c900;
        left: 0;
        top: 5px;
    }

    .sitemap-container .header {
        display: flex;
        justify-content: space-between; 
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .sitemap-container .home {
        display: flex; 
        align-items: center;
        margin-left: auto;
    }

    .sitemap-container .home a {
        font-size: 16px;
        margin-right: 5px;
    }

    .sitemap-container .row {
        margin-bottom: 22px
    }

    .sitemap-container .col ul {
        list-style-type: none;
    }
    
    .sitemap-container .dropdown {
        background: none;
        border: none;
        color: black;
    }
    
    .sitemap-container .dropdown i {
        margin-right: 6px;
    }
    @media (max-width: 768px) {
        .blue-box {
            font-size: 1rem;
            padding: 8px 15px;
        }
    }


    @media (max-width: 576px) {
        .blue-box {
            font-size: 0.9rem;
            padding: 5px 10px;
        }
    }
</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
    <div class="image-container">
          <img src="assets/images/airport-pic.jpg" class="img-fluid" alt="FAQ Image">
          <div class="blue-box">แผนผังเว็ปไซต์</div>
    </div>

    <div class="sitemap-container">
        <div class="header">
            <div class="home">
                <a href="#"><i class="bi bi-house-door"></i></a> > แผนผังเว็ปไซต์
            </div>
        </div>
        <h1><span class="highlight-bar"></span>แผนผังเว็ปไซต์</h1>
        <br>
        
    <div class="sitemap-container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <a href="#" class="sitemap-link">หน้าหลัก</a>
                </div>
                <div class="row">
                    <a href="#" class="sitemap-link">เที่ยวบิน</a>
                </div>
                <div class="row">
                    <a href="#" class="sitemap-link">คำถามที่พบบ่อย</a>
                </div>
                <div class="row">
                    <a href="#" class="sitemap-link">ติดต่อเรา</a>
                </div>
                <div class="row">
                    <a href="#" class="sitemap-link">เกี่ยวกับเรา</a>
                    <div class="col">
                    <ul>
                        <li>ข่าวประชาสัมพันธ์</li>
                        <li>จัดซื้อจัดจ้าง</li>
                        <li>รับสมัครบุคลากร</li>
                        <li>รับสมัครบุคลากร</li>
                    </ul>
                </div>
                </div>
                

            </div>
            
            <div class="col">
                
                <a href="#" class="sitemap-link">ข่าวประชาสัมพันธ์</a>
                <div class="col">
                    <ul>
                        <li>ข่าวประชาสัมพันธ์</li>
                        <li>จัดซื้อจัดจ้าง</li>
                        <li>รับสมัครบุคลากร</li>
                    </ul>
                </div>
                    <br>
                    <br>
                    <br>
                <div class="row">
                    <a href="#" class="sitemap-link">เว็บไซต์ท่าอากาศยาน</a>
                    <div class="dropdown" style="background:none;">
                        <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chevron-down"></i>ภาคเหนือ
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chevron-down"></i>ภาคใต้
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chevron-down"></i>ภาคตะวันออกเฉียงเหนือ
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-alt-fill"> ...</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <a href="#" class="sitemap-link">คำแนะนำผู้โดยสาร</a>
                <div class="col">
                    <ul>
                        <li>การเดินทางไปสนามบิน</li>
                        <li>คู่มือผู้โดยสาร</li>
                        <li>แผนที่สนามบิน</li>
                        <li>มาตรการช่วยเหลือ Covid-19</li>
                        <li>คู่มือประชาชน</li>
                    </ul>
                    <br>
                    <a href="#" class="sitemap-link">สถานที่น่าสนใจ</a>
                    <div class="col">
                    <ul>
                        <li>ข่าวประชาสัมพันธ์</li>
                        <li>จัดซื้อจัดจ้าง</li>
                        <li>รับสมัครบุคลากร</li>
                    </ul>
                </div>
                </div>
            </div>
            
            <div class="col">
                <a href="#" class="sitemap-link">สิ่งอำนวยความสะดวก</a>
                <div class="col">
                    <ul>
                        <li>ห้องผู้โดยสารขาเข้า</li>
                        <li>ห้องผู้โดยสารขาออก</li>
                        <li>จุดบริการรถเข็นสัมภาระ</li>
                        <li>ที่จอดรดสนามบิน</li>
                        <li>รถบัสรับส่งสนามบิน</li>
                        <li>รถ TAXI</li>
                        <li>รถเช่า</li>
                        <li>เคาน์เตอร์ประชาสัมพันธ์</li>
                        <li>WIFI</li>
                        <li>ตู้ไปรษณีย์อัตโนมัติ</li>
                        <li>ที่ทำการไปรษณีย์</li>
                        <li>จุดบริการโทรศัพท์</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <a href="#" class="sitemap-link">นโยบายเว็บไซต์</a>
            </div>
            <div class="col-8">
                <a href="#" class="sitemap-link">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</a>
            </div>
        </div>
    </div>
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>