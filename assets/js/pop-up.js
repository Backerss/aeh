$(document).ready(function () {
    $('#submit-btn').click(function () {
      let result = [];
      let question = [];
      let genreScores = {
        rock: 0,
        rnb: 0,
        indie: 0,
        pop: 0
      };
  
      // เก็บคำตอบ
      for (let i = 1; i <= 14; i++) {
        let answer;
        if (i === 7 || i === 8) {
          answer = $(`input[name="q${i}"]`).val();
        } else {
          answer = $(`input[name="q${i}"]:checked`).val();
        }
        if (!answer) question.push(i); // เก็บข้อที่ไม่ได้ตอบ
  
        // คำนวณคะแนนประเภทเพลง
        if ([2, 3, 4, 5, 6, 14].includes(i)) {
          if (answer === "A") genreScores.rock++;
          if (answer === "B") genreScores.rnb++;
          if (answer === "C") genreScores.indie++;
          if (answer === "D") genreScores.pop++;
        }
  
        // คำนวณคะแนนพิเศษสำหรับข้อ 9-12
        if (i === 9 && answer === "A") genreScores.pop++;
        if (i === 10 && answer === "A") genreScores.indie++;
        if (i === 11 && answer === "A") genreScores.indie++;
        if (i === 12 && answer === "A") genreScores.rnb++;
      }
  
      // แจ้งข้อที่ยังไม่ได้ตอบ
      if (question.length > 0) {
        Swal.fire({
          icon: 'warning',
          title: 'ยังไม่ได้ตอบคำถาม!',
          text: `คุณยังไม่ได้ตอบคำถามในข้อที่: ${question.join(", ")}`,
          confirmButtonText: 'ตกลง'
        });
      } else {
        // คำนวณประเภทเพลงที่เหมาะสมที่สุด
        let recommendedGenre = Object.keys(genreScores).reduce((a, b) => 
          genreScores[a] > genreScores[b] ? a : b
        );
  
        // แปลงประเภทเพลงและข้อความที่เกี่ยวข้อง
        let genreDetails = {
          rock: {
            title: "ร็อค",
            description: "คุณเป็นคนหัวเสียในหัวใจ! ริฟฟ์พลังงานสูง เสียงร้องอันทรงพลัง และคอรัสเพลงสรรเสริญพระบารมีเติมพลังให้กับจิตวิญญาณของคุณ เปิด AC/DC แล้วปล่อยมันไป!",
            image: "https://www.theguitarmag.com/wp-content/uploads/2018/06/Bodyslam.jpg" // ใส่ URL รูปภาพสำหรับแนวร็อค
          },
          rnb: {
            title: "โซล/อาร์แอนด์บี",
            description: "อารมณ์ของคุณไหลลึก คุณปรารถนาเสียงร้องที่เปี่ยมด้วยจิตวิญญาณ เนื้อเพลงที่จริงใจ และดนตรีที่เข้าถึงแก่นแท้ของคุณ Aretha Franklin และ Marvin Gaye คือฮีโร่ของคุณ",
            image: "https://www.coca-cola.com/content/dam/onexp/global/central/offerings/coke-studio/artists/NEW_JEANS_GROUP_01_WORKING_1-1.jpg" // ใส่ URL รูปภาพสำหรับแนว R&B
          },
          indie: {
            title: "อินดี้",
            description: "คุณแสวงหาความคิดริเริ่มและเสียงที่กระตุ้นความคิด พื้นผิวที่เป็นเอกลักษณ์ เนื้อเพลงบทกวี และจิตวิญญาณที่เป็นอิสระโดนใจคุณ Bon Iver และ Lana Del Rey เป็นวิญญาณเครือญาติของคุณ",
            image: "https://media.readthecloud.co/wp-content/uploads/2024/04/29151559/blackbeans-1-750x563.jpg" // ใส่ URL รูปภาพสำหรับแนวอินดี้
          },
          pop: {
            title: "ป๊อป/อิเล็กทรอนิกส์",
            description: "คุณคือผู้เริ่มปาร์ตี้! ตะขอที่ติดหู จังหวะที่เร้าใจ และพลังงานอันมีชีวิตชีวาช่วยให้คุณเคลื่อนไหวได้ ชาร์ตเพลงป๊อปและเพลงอิเล็กทรอนิกส์ที่กำลังมาแรงคือสิ่งที่คุณชอบ",
            image: "https://s.isanook.com/jo/0/ui/494/2473161/pixxie_tales_pr-02_0.jpg" // ใส่ URL รูปภาพสำหรับแนวป๊อป
          }
        };
  
        let genre = genreDetails[recommendedGenre];
  
        // แสดงผลลัพธ์
        Swal.fire({
            title: `ประเภทเพลงที่เหมาะกับคุณ: ${genre.title}`,
            html: `
              <img src="${genre.image}" alt="${genre.title}" style="width: 100%; max-width: 300px; margin-bottom: 20px;">
              <p>${genre.description}</p>
            `,
            icon: 'info',
            confirmButtonText: 'ตกลง'
          }).then(() => {
            // กลับไปที่หน้า index.php
            window.location.href = "index.php";
          });
          
      }
    });
  });