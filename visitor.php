<?php
// กำหนดตำแหน่งไฟล์ที่ใช้เก็บจำนวนผู้เข้าชม
$visitorFile = 'visitor_count.txt';

// ถ้าไฟล์ยังไม่มีการสร้าง ก็จะสร้างไฟล์ขึ้นมาด้วยจำนวนเริ่มต้นเป็น 0
if (!file_exists($visitorFile)) {
    file_put_contents($visitorFile, 0);
}

// อ่านข้อมูลจำนวนผู้เข้าชมจากไฟล์
$visitorCount = (int)file_get_contents($visitorFile);

// เพิ่มจำนวนผู้เข้าชมขึ้น 1
$visitorCount++;

// บันทึกจำนวนผู้เข้าชมกลับลงในไฟล์
file_put_contents($visitorFile, $visitorCount);

// แสดงผลจำนวนผู้เข้าชม
echo "จำนวนคนเข้าชมในวันนี้: " . $visitorCount;
?>