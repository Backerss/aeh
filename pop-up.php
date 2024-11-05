<html>
  <?php 
  session_start();

    if(!isset($_SESSION["users_id"])){
        header("Location: login.php");
    }
  ?>
    <head>
        <link rel="stylesheet" href="assets/css/pop-up.css">
</head>
        <body>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
<div class="container">
  <div class="heading">
    <h1 class="heading__text">แบบทดสอบแนวเพลงที่ชอบ</h1>
  </div>

  <!-- Quiz section -->
  <div class="quiz">
    <div class="quiz__heading">
      <h2 class="quiz__heading-text">
        Your are <span class="result"></span> right.
      </h2>
    </div>

    <div class="quiz-form" id="#form">
      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
          1. ปกติฟังเพลงบ่อยแค่ไหน?
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q1" value="A"/>
          <span class="design"></span>
          <span class="text">ไม่ค่อยฟัง</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q1" value="B" />
          <span class="design"></span>
          <span class="text">ฟังบางครั้ง</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q1" value="C" />
          <span class="design"></span>
          <span class="text">ฟังเป็นประจำ</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q1" value="D" />
          <span class="design"></span>
          <span class="text">ฟังทุกเวลา</span>
        </label>
      </div>

      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
          2. ภาพยนตร์เกี่ยวกับเพลงที่คุณชื่นชอบคือ____ นี่คือตัวเลือกภาพยนตร์บางส่วนที่ควรพิจารณา
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q2"value="A" />
          <span class="design"></span>
          <span class="text">สารคดีเกี่ยวกับวงดนตรี</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q2"value="B" />
          <span class="design"></span>
          <span class="text">ละครเพลงที่มีการแสดงอารมณ์</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q2"value="C" />
          <span class="design"></span>
          <span class="text">ภาพยนตร์อินดี้ที่มีเพลงประกอบเป็นเอกลักษณ์</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q2"value="D" />
          <span class="design"></span>
          <span class="text">ภาพยนตร์เต้นที่มีพร้อมจังหวะที่ติดหู</span>
        </label>
      </div>

      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
          3. เมื่อพูดถึงกิจวัตรประจำวันของคุณ ดนตรีมีความสำคัญแค่ไหน? ดนตรีเข้ากับวันปกติของคุณอย่างไร?
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q3"value="A" />
          <span class="design"></span>
          <span class="text">เติมพลังและทำให้ฉันมีกำลังใจขึ้น</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q3" value="B" />
          <span class="design"></span>
          <span class="text">ปลอบโยนและปลอบประโลมจิตวิญญาณของฉัน</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q3"value="C" />
          <span class="design"></span>
          <span class="text">จัดเตรียมเพลงประกอบความคิดของฉัน</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q3"value="D" />
          <span class="design"></span>
          <span class="text">กำหนดโทนเสียงสำหรับอารมณ์ต่างๆ</span>
        </label>
      </div>

      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
          4. คุณมีปฏิกิริยาอย่างไรต่อการค้นพบศิลปินหน้าใหม่และไม่รู้จัก?
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q4"value="A" />
          <span class="design"></span>
          <span class="text">ความตื่นเต้น โดยเฉพาะอย่างยิ่งถ้าสิ่งเหล่านั้นสั่นสะเทือนอย่างรุนแรง</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q4"value="B" />
          <span class="design"></span>
          <span class="text">การชื่นชมความสามารถอันเปี่ยมด้วยจิตวิญญาณของพวกเขา</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q4" value="C" />
          <span class="design"></span>
          <span class="text">มีความสนใจในเสียงและสไตล์อันเป็นเอกลักษณ์</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q4"value="D" />
          <span class="design"></span>
          <span class="text">ความอยากรู้อยากเห็น โดยเฉพาะอย่างยิ่งหากจังหวะของพวกเขาเหมาะสมต่อการเต้น</span>
        </label>
      </div>

      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
          5. เวลาขับรถหรือเดินทาง คุณมักจะเลือกฟังเพลงแบบไหน
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q5"value="A" />
          <span class="design"></span>
          <span class="text">เพลงวงBodyslam</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q5"value="B" />
          <span class="design"></span>
          <span class="text">เพลงวงThree man down</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q5"value="C" />
          <span class="design"></span>
          <span class="text">เพลงวงคณะขวัญใจ</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q5" value="D" />
          <span class="design"></span>
          <span class="text">เพลงวง4eve</span>
        </label>
      </div>

      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
          6. เนื้อเพลงของคุณเป็นแบบไหน?
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q6"value="A" />
          <span class="design"></span>
          <span class="text">เพลงท่อนฮุคที่ติดหูและท่อนคอรัส</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q6"value="B" />
          <span class="design"></span>
          <span class="text">เพลงบอกเล่าเรื่องราวและกระตุ้นอารมณ์</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q6" value="C" />
          <span class="design"></span>
          <span class="text">เพลงที่มีการเล่นคำที่ไพเราะและบทกลอน</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q6"value="D" />
          <span class="design"></span>
          <span class="text">เพลงที่มีการแสดงความรู้สึกที่ตรงไปตรงมาและตรงไปตรงมา</span>
        </label>
      </div>

      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
          7. คุณชอบฟังเพลงของศิลปินท่านใด?
        </p>
        <label class="quiz-form__ans" >
          <input type="text" name="q7"/>
        </label>

      </div>

      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
          8. เพลงที่คุณชอบฟัง คือเพลงอะไร เพราะอะไร?
        </p>
        <label class="quiz-form__ans">
          <input type="text" name="q8" />
        </label>
      </div>

      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
          9. คุณเคยฟังเพลง ซ่อน(ไม่หา) (Jeff Satur) คุณชอบหรือไม่ชอบ?
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q9" value="A" />
          <span class="design"></span>
          <span class="text">เคย</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q9"value="B" />
          <span class="design"></span>
          <span class="text">ไม่เคย</span>
        </label>
      </div>

      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
          10. คุณเคยฟังเพลง อยู่ต่อเลยได้ไหม (สิงโตนำโชค) คุณชอบหรือไม่ชอบ?
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q10" value="A" />
          <span class="design"></span>
          <span class="text">เคย</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q10" value="B" />
          <span class="design"></span>
          <span class="text">ไม่เคย</span>
        </label>
      </div>

      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
        11. คุณเคยฟังเพลงสาบานได้เลย (ฮันเตอร์)  คุณชอบหรือไม่ชอบ?
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q11"value="A" />
          <span class="design"></span>
          <span class="text">เคย</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q11"value="B" />
          <span class="design"></span>
          <span class="text">ไม่เคย</span>
        </label>
      </div>

      <div class="quiz-form__quiz">
      <p class="quiz-form__question">
      12. คุณเคยฟังเพลง หน้าหนาวที่แล้ว(The toys)  คุณชอบหรือไม่ชอบ?
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q12" value="A" />
          <span class="design"></span>
          <span class="text">เคย</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q12"value="B" />
          <span class="design"></span>
          <span class="text">ไม่เคย</span>
        </label>
      </div>

      <div class="quiz-form__quiz">
      <p class="quiz-form__question">
      13. คุณเคยอยากแต่งเพลงแนวที่คุณชอบหรือไม่?
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q13"value="A" />
          <span class="design"></span>
          <span class="text">เคย</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q13" value="B" />
          <span class="design"></span>
          <span class="text">ไม่เคย</span>
        </label>
      </div>

      <div class="quiz-form__quiz">
        <p class="quiz-form__question">
          14. ถ้าเลือกเป็นเพลงได้จะเป็นเพลงไหน?
        </p>
        <label class="quiz-form__ans">
          <input type="radio" name="q14" value="A" />
          <span class="design"></span>
          <span class="text">เพลงเพื่อชีวิต</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q14"value="B" />
          <span class="design"></span>
          <span class="text">เพลงคลาสสิค</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q14"value="C" />
          <span class="design"></span>
          <span class="text">เพลงรัก</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q14"value="D" />
          <span class="design"></span>
          <span class="text">เพลงเศร้า</span>
        </label>
        <label class="quiz-form__ans">
          <input type="radio" name="q14"value="E" />
          <span class="design"></span>
          <span class="text">เพลงแร็ป</span>
        </label>
      </div>

      <input class="submit" type="submit" id="submit-btn" value="submit" />
    </div>
  </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="assets/js/pop-up.js"></script>

</html>