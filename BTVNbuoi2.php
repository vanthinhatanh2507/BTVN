<?php
    // 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
    function kiemTraChanLe($so) {
        if ($so % 2 == 0) {
            echo "1. Số $so là số chẵn.";
        } else {
            echo "1. Số $so là số lẻ.";
        }
    }
    kiemTraChanLe(6);
    echo "<br>";
    // 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
    function tinhTong($n){
        $ketqua=0;
        for ($i=1; $i<= $n; $i++){
            $ketqua+= $i;
        }
        return $ketqua;
    }
    $n= 3;
    $ketQua = tinhTong($n);
    echo "2. Tong cac so tu 1 den $n la: " . $ketQua;
    echo "<br>";
    // 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
    function printMultiplicationTable($n) {
        for ($i = 1; $i <= 10; $i++) {
            $result = $n * $i;
            echo "$n x $i = $result<br>";
        }
    }
    echo "3. Bảng cửu chương: <br>";
    printMultiplicationTable(2);
    echo "<br>";
    // 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
    function kiemTra($chuoi, $tu) {
        if (strpos($chuoi, $tu) !== false) {
            echo "4. Chuỗi '$chuoi' chứa từ '$tu'.";
        } else {
            echo "4. Chuỗi '$chuoi' không chứa từ '$tu'.";
        }
    }
    kiemTra('Day la NA ne', 'NA');
    echo "<br>";
    // 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
    function timGTLN($mang) {
        $LN = $mang[0];
        foreach ($mang as $giaTri) {
            if ($giaTri > $LN) {
                $LN = $giaTri;
            }
        }
        return $LN;
    }
    function timGTNN($mang) {
        $NN = $mang[0];
        foreach ($mang as $giaTri) {
            if ($giaTri < $NN) {
                $NN = $giaTri;
            }
        }
        return $NN;
    }
    $mang = [5, 2, 9, 1, 7];
    $GTLN = timGTLN($mang);
    $GTNN = timGTNN($mang);
    echo "5. Giá trị lớn nhất trong mảng là: $GTLN <br>";
    echo "Giá trị nhỏ nhất trong mảng là: $GTNN <br>";

    // 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
    function sapXepMangTangDan($mang) {
        sort($mang);
        return $mang;
    }
    $mang = [5, 6, 10, 1, 25];
    $mangDaSapXep = sapXepMangTangDan($mang);
    echo "6. Mảng sau khi được sắp xếp tăng dần: ";
    print_r($mangDaSapXep);
    echo "<br>";
    // 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
    function tinhGiaiThua($n) {
        if ($n === 0 || $n === 1) {
            return 1;
        } else {
            return $n * tinhGiaiThua($n - 1);
        }
    }
    $soCanTinh = 5;
    $giaiThua = tinhGiaiThua($soCanTinh);
    echo "7. Giai thừa của $soCanTinh là: $giaiThua";
    echo "<br>";
    // 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
    function kiemTraSNT($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }
    function timSoNTTrongKhoang($start, $end) {
        echo "8. Các số nguyên tố trong khoảng từ $start đến $end là: ";
        for ($i = $start; $i <= $end; $i++) {
            if (kiemTraSNT($i)) {
                echo $i . " ";
            }
        }
    }
    $batDau = 10;
    $ketThuc = 30;
    timSoNTTrongKhoang($batDau, $ketThuc);
    echo "<br>";
    // 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
    function tinhTongMang($mang) {
        $tong = array_sum($mang);
        return $tong;
    }
    $mang = [10, 20, 30, 40, 50];
    $tong = tinhTongMang($mang);
    echo "9. Tổng của các số trong mảng là: " . $tong;
    echo "<br>";
    // 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
    function inFibonacciTrongKhoang($start, $end) {
        $first = 0;
        $second = 1;
        if ($start <= 0) {
            echo $first . " ";
            echo $second . " ";
        }
        $next = $first + $second;
        while ($next <= $end) {
            if ($next >= $start) {
                echo $next . " ";
            }
            $first = $second;
            $second = $next;
            $next = $first + $second;
        }
    }
    $batDau = 10;
    $ketThuc = 100;
    echo "10. Các số Fibonacci trong khoảng từ $batDau đến $ketThuc là: ";
    inFibonacciTrongKhoang($batDau, $ketThuc); 
    echo "<br>";
    // 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
    // Số Armstrong là số mà tổng các lũy thừa bậc k của các chữ số của nó bằng chính nó
    function laSoArmstrong($number) {
        $total = 0;
        $num = $number;
        $digits = strlen($number);
    
        while ($num != 0) {
            $digit = $num % 10;
            $total += pow($digit, $digits);
            $num = (int)($num / 10);
        }
        return $total === $number;
    }
    $soCanKiemTra = 153;
    if (laSoArmstrong($soCanKiemTra)) {
        echo "11. Số $soCanKiemTra là số Armstrong.";
    } else {
        echo "11. Số $soCanKiemTra không phải là số Armstrong.";
    }
    echo "<br>";
    // 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
    function chenPhanTu($mang, $phanTu, $viTri) {
        array_splice($mang, $viTri, 0, $phanTu);
        return $mang;
    }
    $mangBanDau = [1, 2, 3, 4, 5];
    $phanTuCanChen = 10;
    $viTriChen = 2;
    $mangMoi = chenPhanTu($mangBanDau, $phanTuCanChen, $viTriChen);
    echo "12. Mảng sau khi chèn phần tử là: ";
    print_r($mangMoi);
    echo "<br>";
    // 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
    function loaiBoTrung($mang) {
        $mangLoaiBoTrung = array_unique($mang);
        return $mangLoaiBoTrung;
    }
    $mang = [1, 2, 2, 3, 4, 4, 5];
    $mangSauKhiLoaiBo = loaiBoTrung($mang);
    echo "13. Mảng sau khi loại bỏ các phần tử trùng lặp: ";
    print_r($mangSauKhiLoaiBo);
    echo "<br>";
    // 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
    function timViTriPhanTuTrongMang($mang, $phanTuCanTim) {
        $viTri = array_search($phanTuCanTim, $mang);
        return $viTri !== false ? $viTri : 'Không tìm thấy';
    }
    $mang = [10, 20, 30, 40, 50];
    $phanTu = 30;
    $viTri = timViTriPhanTuTrongMang($mang, $phanTu);
    echo "14. Vị trí của phần tử $phanTu trong mảng là: $viTri <br>";
    // 15. Viết chương trình PHP để đảo ngược một chuỗi.
    function daoNguocChuoi($chuoi) {
        return strrev($chuoi);
    }
    $chuoiCanDao = "Hello, world!";
    $chuoiDao = daoNguocChuoi($chuoiCanDao);
    echo "15. Chuỗi ban đầu: " . $chuoiCanDao . "<br>";
    echo "Chuỗi sau khi đảo ngược: " . $chuoiDao;
    echo "<br>";
    // 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
    function tinhSoLuong($array){
        return count($array);
    }
    $Mang = [25, 4, 2023];
    $soluong = tinhSoLuong($Mang);
    echo "16. So luong phan tu trong mang la: $soluong";
    echo "<br>";
    // 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
    // Palindrome hay còn gọi là xâu đối xứng, xâu đối xứng là tên gọi của những xâu kí tự mà khi viết từ phải qua trái hay từ trái qua phải thì xâu đó không thay đổi. 
    function laChuoiPalindrome($chuoi) {
        $chuoiDaLoaiBoKhoangTrang = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $chuoi));
        $chuoiDao = strrev($chuoiDaLoaiBoKhoangTrang);
        return $chuoiDaLoaiBoKhoangTrang === $chuoiDao;
    }
    $chuoiCanKiemTra = "A man, a plan, a canal, Panama";
    if (laChuoiPalindrome($chuoiCanKiemTra)) {
        echo "17. Chuỗi '$chuoiCanKiemTra' là chuỗi Palindrome.";
    } else {
        echo "17. Chuỗi '$chuoiCanKiemTra' không phải là chuỗi Palindrome.";
    }
    echo "<br>";
    // 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
    function demSoLanXuatHien($mang, $phanTuCanDem) {
        $soLanXuatHien = array_count_values($mang);
        return isset($soLanXuatHien[$phanTuCanDem]) ? $soLanXuatHien[$phanTuCanDem] : 0;
    }
    $mang = [1, 2, 2, 3, 2, 4, 2, 5];
    $phanTu = 2;
    $soLan = demSoLanXuatHien($mang, $phanTu);
    echo "18. Số lần xuất hiện của phần tử $phanTu trong mảng là: " . $soLan;
    echo "<br>";
    // 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
    function sapXepMangGiamDan($mang) {
        rsort($mang);
        return $mang;
    }
    $mang = [22, 4, 7, 25, 3];
    $mangDaSapXep = sapXepMangGiamDan($mang);
    echo "19. Mảng sau khi được sắp xếp giảm dần: ";
    print_r($mangDaSapXep);
    echo "<br>";
    // 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
    function themVaoCuoi($mang, $phanTu) {
        $mang[] = $phanTu;
        return $mang;
    }
    $mangBanDau = [1, 2, 3];
    $phanTuCanThem = 4;
    $mangMoi = themVaoCuoi($mangBanDau, $phanTuCanThem);
    echo "20. Mảng sau khi thêm vào cuối là: ";
    print_r($mangMoi);
    echo "<br>";
    // 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
    function timSoLonThuHai($mang) {
        $max = PHP_INT_MIN;
        $secondMax = PHP_INT_MIN;
    
        foreach ($mang as $so) {
            if ($so > $max) {
                $secondMax = $max;
                $max = $so;
            } elseif ($so > $secondMax && $so != $max) {
                $secondMax = $so;
            }
        }
        return $secondMax !== PHP_INT_MIN ? $secondMax : "Không có số lớn thứ hai";
    }
    $mang = [10, 20, 30, 40, 50];
    $soLonThuHai = timSoLonThuHai($mang);
    echo "21. Số lớn thứ hai trong mảng là: " . $soLonThuHai;
    echo "<br>";
    // 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
    function timUSCLN($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }
    function timBSCNN($a, $b) {
        return ($a * $b) / timUSCLN($a, $b);
    }
    $so1 = 24;
    $so2 = 36;
    $uscln = timUSCLN($so1, $so2);
    $bscnn = timBSCNN($so1, $so2);
    echo "22. USCLN của $so1 và $so2 là: " . $uscln . "<br>";
    echo "BSCNN của $so1 và $so2 là: " . $bscnn;
    echo "<br>";
    // 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
    // Một số hoàn hảo là một số nguyên dương mà tổng của tất cả các ước số thực sự của nó (không kể chính nó) bằng chính nó. 
    function laSoHoanHao($number) {
        if ($number <= 1) {
            return false;
        }
        $sum = 1; // Khởi tạo với 1 vì 1 là ước số của mọi số nguyên dương
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i === 0) {
                $sum += $i;
                if ($i * $i !== $number) {
                    $sum += $number / $i;
                }
            }
        }
        return $sum === $number;
    }
    $soCanKiemTra = 28;
    if (laSoHoanHao($soCanKiemTra)) {
        echo "23. Số $soCanKiemTra là số hoàn hảo.";
    } else {
        echo "23. Số $soCanKiemTra không phải là số hoàn hảo.";
    }
    echo "<br>";
    // 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
    function timSoLeLN($MANG) {
        $LN = $MANG[0];
        foreach ($MANG as $giatri) {
            if ($giatri > $LN && $giatri %2 !==0) {
                $LN = $giatri;
            }
        }
        return $LN;
    }
    $MANG = [5, 2, 9, 1, 7];
    $soLeLN = timSoLeLN($MANG);
    echo "24. Số lẻ lớn nhất trong mảng là: $soLeLN <br>";
    // 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
    function soNguyenTo($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }
    $soCanKiemTra = 17;
    if (soNguyenTo($soCanKiemTra)) {
        echo "25. Số $soCanKiemTra là số nguyên tố.";
    } else {
        echo "25. Số $soCanKiemTra không phải là số nguyên tố.";
    }
    echo "<br>";
    // 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
    function timSoDuongLN($Array) {
        $soduongLN = $Array[0];
        foreach ($Array as $Giatri) {
            if ($Giatri > $soduongLN && $Giatri > 0) {
                $soduongLN = $Giatri;
            }
        }
        return $soduongLN;
    }
    $Array = [5, 2, 29, 1, -7];
    $soDuongLN = timSoDuongLN($Array);
    echo "26. Số dương lớn nhất trong mảng là: $soDuongLN <br>";
    // 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
    function timSoAmLN($ARRAY) {
        $soamLN = null;
        foreach ($ARRAY as $GiaTri) {
            if ($GiaTri <0){
            if ($GiaTri > $soamLN) {
                $soamLN = $GiaTri;
            }
        }
        }
        return $soamLN;
    }
    $ARRAY = [5, -2, -29, 1, -1];
    $soAmLN = timSoAmLN($ARRAY);
    echo "27. Số âm lớn nhất trong mảng là: $soAmLN <br>";
    // 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
    function tinhTongSoLe($n){
        $tong=0;
        for ($i=1; $i<= $n; $i++){
            if($i%2 !== 0){
                $tong+= $i;
            }
        }
        return $tong;
    }
    $n= 5;
    $tinhTong = tinhTongSoLe($n);
    echo "28. Tong cac so le tu 1 den $n la: " . $tinhTong;
    echo "<br>";
    // 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
    function timSoChinhPhuong($batDau, $ketThuc) {
        echo "29. Các số chính phương trong khoảng từ $batDau đến $ketThuc là: ";
        for ($i = $batDau; $i <= $ketThuc; $i++) {
            if (sqrt($i) == (int)sqrt($i)) {
                echo $i . " ";
            }
        }
    }
    $batDau = 1;
    $ketThuc = 50;
    timSoChinhPhuong($batDau, $ketThuc);
    echo "<br>";
    // 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
    function laChuoiCon($chuoiChinh, $chuoiCanKiemTra) {
        if (strpos($chuoiChinh, $chuoiCanKiemTra) !== false) {
            return true;
        }
        return false;
    }
    $chuoiGoc = "Đây là NA nè                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ";
    $chuoiCanKiemTra = "NHĐ";
    if (laChuoiCon($chuoiGoc, $chuoiCanKiemTra)) {
        echo "30. '$chuoiCanKiemTra' là chuỗi con của '$chuoiGoc'.";
    } else {
        echo "30. '$chuoiCanKiemTra' không phải là chuỗi con của '$chuoiGoc'.";
    }
    echo "<br>";
?>