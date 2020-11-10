<?php

//Thiết kế và triển khai lớp Circle (hình tròn) và lớp con của nó Cylinder (hình trụ).
// Lớp Circle có những thuộc tính mô tả bán kính, màu sắc,
// các getter/setter cho các thuộc tính đó, và những thuộc tính liên đới như diện tích.
// Lớp Cylinder mở rộng lớp Circle bằng cách bổ sung thuộc tính chiều cao cũng như có thể có thêm phương thức lấy thể tích.
//
//Cả hai lớp đều phải cài đè phương thức toString để in ra thông tin chi tiết các thuộc tính của đổi tượng.
//
//Hãy vẽ giản đồ UML cho hai lớp trên, với mô tả về các thuộc tính,
// các phương thức khởi tạo cần thiết, cũng như các phương thức tính ra các thuộc tính đặc trưng của mỗi lớp.
//
//Hãy viết mã triển khai các lớp đó THEO NHƯ BẢN VẼ ĐÃ THIẾT KẾ.
//
//Viết chương trình sử dụng tới hai lớp đối tượng kia với mục đích kiểm thử

include "Circle.php";
include "Cylinder.php";

$circle = new Circle(10, "red");
echo $circle->toString() . "<br>";


$cylinder = new Cylinder(15, "yellow", 20);
echo $cylinder->toString() . "<br>";
