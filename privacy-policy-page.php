<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<style>
    .info-container {
        max-width: 1500px;
        margin: 0 auto;
        padding: 20px;
    }

    .img-fluid {
        width: 100%;
        object-fit: contain;
        object-position: center top;
        filter: brightness(50%);
    }

    .blue-box {
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

    h1 {
        font-size: 26px;
        position: relative;
        padding-left: 20px;
    }

    .highlight-bar {
        position: absolute;
        width: 4px;
        height: 20px;
        background-color: #f4c900;
        left: 0;
        top: 5px;
    }

    .textdate {
        margin-left: 30px;
        padding: 0.2em 0.4em;
        padding-left: 16px;
        padding-right: 16px;
        margin-bottom: 0.5em;
        background-color: #e2e3e5;
        color: #6c757d;
        border-radius: 20px;
        display: inline-block;
        font-size: 16px;
    }

    .textinfo {
        font-size: 16px;
        margin-left: 40px;
    }

    .back-container {
        text-decoration: none;
        max-width: 1214px;
        margin: 0 auto;
    }
    
    .policy-header {
        display: flex;
        align-items: center;
    }

    .home {
        display: flex; 
        align-items: center;
        margin-left: auto;
    }

    .home a {
        text-decoration: none;
        font-size: 16px;
        margin-right: 5px;
    }

    .arrow {
        color: #0d6efd;
        font-weight: bold;
        font-size: 20px;
        line-height: 2;
    }

    .back-text {
        font-size: 16px;
        position: static;
        margin: 0;
        display: flex;
    }

</style>

<body>
    <div>
        <?php include './include/navbar.php'; ?>
    </div>
    <main>
    <div class="image-container">
          <img src="assets/images/policy-pic.jpg" class="img-fluid" alt="Policy Image">
          <div class="blue-box">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</div>
    </div>

    <div class="back-container">
        <div class="policy-header">
            <a href="javascript:history.back()" class="btn">
                <span class="arrow">&lt;</span>
            </a>
            <div class="back-text">
                ย้อนกลับ
            </div>
            <div class="home">
                <a href="#"><i class="bi bi-house-door"></i></a> > นโยบายการคุ้มครองข้อมูลส่วนบุคคล
            </div>
        </div>
    </div>

    <hr class="mt-0 mb-4">

    <div class="info-container">
        <h1><span class="highlight-bar"></span>นโยบายการคุ้มครองข้อมูลส่วนบุคคล</h1>
        <div class="textdate">จัดทำเมื่อวันที่ 15 พฤสจิกายน 2556</div>
        <div class="textinfo">กรมท่าอากาศยานได้จัดทำนโยบายการคุ้มครองข้อมูลส่วนบุคคลฉบับนี้ขึ้นเพื่อคุ้มครองข้อมูลส่วนบุคคลของ ผู้ใช้บริการทุกท่าน (Personal Information)ที่ติดต่อเข้ามายังเว็บไซต์ของกรมท่าอากาศยาน ดังนี้</div>
    </div>

    <div class="info-container">
        <h1><span class="highlight-bar"></span>การเก็บรวบรวมข้อมูลส่วนบุคคล</h1>
        <div class="textinfo">
            <ol>
                <li>เพื่อความสะดวกในการให้บริการ แก่ผู้ใช้บริการทุกท่านที่เข้ามาใช้บริการเว็บไซต์ของกรมท่าอากาศยานทางเว็บไซต์ จึงได้จัดเก็บรวบรวมข้อมูลส่วนบุคคล ของท่านไว้ เช่น อีเมล์แอดเดรส (Email Address) ชื่อ (Name) ที่อยู่หรือที่ทำงาน (Home or Work Address) เขตไปรษณีย์ (ZIP Code) หรือหมายเลขโทรศัพท์ (Telephone Number) เป็นต้น</li>
                <li>ในกรณีที่ท่านสมัคร (Sign Up) เพื่อสมัครสมาชิก หรือเพื่อใช้บริการอย่างใดอย่างหนึ่ง กรมท่าอากาศยานจะเก็บ รวบรวมข้อมูลส่วนบุคคลของท่านเพิ่มเติม ได้แก่ เพศ (Sex) อายุ (Gender) สิ่งที่โปรดปราน/ความชอบ (Preferences/Favorites) ความสนใจ (Interests) หรือหมายเลขบัตรเครดิต (Credit Card Number) และที่อยู่ในการแจ้งค่าใช้จ่าย (Billing Address)
                </li>
                <li>นอกจากนั้น เพื่อสำรวจความนิยมในการใช้บริการอันจะเป็นประโยชน์ในการนำสถิติไปใช้ในการปรับปรุง คุณภาพในการให้บริการ ของกรมท่าอากาศยาน จึงจำเป็น ต้องจัดเก็บรวบรวมข้อมูล ของท่านบางอย่าง เพิ่มเติม ได้แก่ หมายเลขไอพี (IP Address) ชนิดของโปรแกรมค้นผ่าน (Browser Type) โดเมนเนม (Domain Name) บันทึกหน้าเว็บ (web page) ของเว็บไซต์ ที่ผู้ใช้เยี่ยมชม เวลาที่เยี่ยมชมเว็บไซต์ (Access Times) และเว็บไซต์ที่ผู้ใช้บริการเข้าถึงก่อนหน้านั้น (Referring Website Addresses)
                </li>
                <li>กรมท่าอากาศยาน ขอแนะนำให้ท่านตรวจสอบนโยบายการคุ้มครองข้อมูลส่วนบุคคล (Privacy Policy) ของเว็บไซต์อื่นที่เชื่อมโยงจากเว็บไซต์นี้ เพื่อจะได้ทราบและเข้าใจว่าเว็บไซต์ดังกล่าวเก็บรวบรวมใช้ หรือดำเนินการ เกี่ยวกับข้อมูลส่วนบุคคลของท่านอย่างไร ทั้งนี้กรมท่าอากาศยาน ไม่สามารถรับรองข้อความ หรือรับรองการ ดำเนินการใดๆ ตามที่ได้มีการประกาศไว้ในเว็บไซต์ดังกล่าวได้ และไม่ขอรับผิดชอบใดๆ หากเว็บไซต์เหล่านั้นไม่ได้ ปฏิบัติการหรือดำเนินการใดๆ ตามนโยบายการคุ้มครองข้อมูลส่วนบุคคลที่เว็บไซต์ดังกล่าวได้ประกาศไว้</li>
            </ol>
        </div>
    </div>

    <div class="info-container">
        <h1><span class="highlight-bar"></span>การใช้ข้อมูลส่วนบุคคล</h1>
        <div class="textinfo">
            <ol>
                <li>กรมท่าอากาศยาน จะใช้ข้อมูลส่วนบุคคล ของท่านเพียงเท่าที่จำเป็น เช่น ชื่อ และ ที่อยู่ เพื่อใช้ในการติดต่อ ให้บริการประชาสัมพันธ์ หรือให้ข้อมูลข่าวสารต่างๆ รวมทั้งสำรวจความคิดเห็น ของท่านในกิจการ หรือกิจกรรม ของกรมท่าอากาศยานเท่านั้น
                </li>
                <li>กรมท่าอากาศยาน ขอรับรอง ว่าจะไม่นำข้อมูล ส่วนบุคคลของท่านที่กรมท่าอากาศยานได้เก็บรวบรวมไว้ ไปขาย หรือเผยแพร่ให้กับบุคคลภายนอกโดยเด็ดขาดเว้นแต่จะได้รับอนุญาตจากท่านเท่านั้น
                </li>
                <li>ในกรณีที่กรมท่าอากาศยาน ได้ว่าจ้างหน่วยงานอื่นเพื่อให้ดำเนินการเกี่ยวกับข้อมูลส่วนบุคคลของท่าน เช่น การจัดส่งพัสดุไปรษณีย์ การวิเคราะห์เชิงสถิติในกิจการหรือกิจกรรมของกรมท่าอากาศยาน เป็นต้น กรมท่าอากาศยาน จะกำหนดให้หน่วยงาน ที่ได้ว่าจ้างให้ดำเนินการดังกล่าว เก็บรักษาความลับและความปลอดภัยของข้อมูลส่วนบุคคลของท่าน และกำหนดข้อห้ามมิให้มีการนำข้อมูลส่วนบุคคลดังกล่าวไปใช้นอกเหนือจากกิจกรรมหรือกิจการของ กรมท่าอากาศยาน</li>
        </div>
    </div>

    <div class="info-container">
        <h1><span class="highlight-bar"></span>สิทธิในการควบคุมข้อมูลส่วนบุคคลของท่าน</h1>
        <div class="textinfo">
        เพื่อประโยชน์ในการรักษาความเป็นส่วนตัวของท่านๆ มีสิทธิเลือกที่จะให้มีการใช้หรือแชร์ข้อมูลส่วนบุคคลของ ท่าน หรืออาจ เลือกที่จะไม่รับข้อมูล หรือสื่อทางการตลาดใด ๆ จากกรมท่าอากาศยานก็ได้ โดยเพียงแต่ท่านกรอก ความจำนงดังกล่าวเพื่อแจ้งให้กรมท่าอากาศยานทราบในหน้าเว็บ http://portal.aviation.go.th
        </div>
    </div>

    <div class="info-container">
        <h1><span class="highlight-bar"></span>การรักษาความปลอดภัยสำหรับข้อมูลส่วนบุคคล</h1>
        <div class="textinfo">
        เพื่อประโยชน์ในการรักษาความลับและความปลอดภัยสำหรับข้อมูลส่วนบุคคลของท่านกรมท่าอากาศยานจึง ได้กำหนดระเบียบภายในหน่วยงานเพื่อกำหนดสิทธิในการเข้าถึงหรือใช้ข้อมูลส่วนบุคคลของท่าน และเพื่อรักษาความลับและความ ปลอดภัยของข้อมูลบางอย่างที่มีความสำคัญอย่างยิ่ง เช่น หมายเลขบัตรเครดิต เป็นต้น กรมท่าอากาศยานจึงได้จัดให้มีช่องทางการสื่อสาร แบบปลอดภัยสำหรับข้อมูล ดังกล่าว ด้วยการเข้ารหัสลับข้อมูลดังกล่าวเช่น จัดให้มีการใช้ Secure Socket Layer (SSL) protocol เป็นต้น
        </div>
    </div>

    <div class="info-container">
        <h1><span class="highlight-bar"></span>การใช้คุกกี้ (Cookies)</h1>
        <div class="textinfo">
        “คุกกี้” คือ ข้อมูลที่กรมท่าอากาศยานส่งไปยังโปรแกรมค้นผ่านเว็บไซต์ (Web browser) ของผู้ใช้บริการและ เมื่อมีการติดตั้งข้อมูลดังกล่าวไว้ในระบบของท่านแล้วหากมีการใช้ “คุกกี้” ก็จะทำให้เว็บไซต์ของกรมท่าอากาศยานสามารถ บันทึก หรือจดจำข้อมูลของผู้ใช้บริการไว้ จนกว่าผู้ใช้บริการจะออกจากโปรแกรมค้นผ่านเว็บไซต์ หรือจนกว่า ผู้ใช้บริการจะทำ การลบ “คุกกี้” นั้น เสีย หรือไม่อนุญาตให้ “คุกกี้” นั้นทำงานอีกต่อไป หากท่านเลือกใช้ “คุกกี้” แล้วท่านจะได้รับ ความสะดวกสบายในการท่องเว็บไซต์มากขึ้น เพราะ “คุกกี้” จะช่วยจดจำเว็บไซต์ที่ท่านแวะหรือเยี่ยมชม ทั้งนี้ กรมท่าอากาศยานจะนำข้อมูลที่ “คุกกี้” ได้บันทึก หรือเก็บรวบรวมไว้ไปใช้ในการวิเคราะห์เชิงสถิติ หรือในกิจกรรมอื่นของกรมท่าอากาศยานเพื่อปรับปรุงคุณภาพการให้บริการของกรมท่าอากาศยาน ต่อไป
        </div>
    </div>
    </main>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>