$(document).ready(function() {
  //รับค่า input จาก form และแสดงผลในนี้ โดยจะมีค่าที่เป็น name q1-14 แสดงใน console.log
  $('#submit-btn').click(function() {
  let result = [];
  let answers = [];
  let inputValue = [];


  for(let i = 1; i <= 14; i++) {

      if(i === 7 || i === 8)
      {
          inputValue = $(`input[name="q${i}"]`).val();
          result.push(inputValue);
      }
      else
      {
          answers = $(`input[name="q${i}"]:checked`).val();
          result.push(answers);
      }
      
  }

  //check ว่ายังไม่ได้ตอบคำถามไหนบ้าง ให้บอกมาเป็น ข้อๆ แล้วแจ้งมาทีเดียว ตั้งแต่ ข้อที่ 1-14
  let question = [];
  for(let i = 0; i < result.length; i++) {
      if(result[i] === undefined || result[i] === "") {
          question.push(i+1);
      }
  }

  if(question.length > 0) {
      alert(`คุณยังไม่ได้ตอบคำถามที่ ${question}`);
  }else{
      
      alert('ขอบคุณที่ทำแบบสอบถามของเรา');
      


  }


  });

});