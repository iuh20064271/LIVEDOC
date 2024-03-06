<?php
function build_calendar($month, $year)
{
    $calendar = '<table class="table table-bordered">';

    // Tiêu đề của lịch
    $calendar .= '<thead class="bg-primary text-light"><tr><th>Thứ 2</th><th>Thứ 3</th><th>Thứ 4</th><th>Thứ 5</th><th>Thứ 6</th><th>Thứ 7</th><th>Chủ nhật</th></tr></thead>';

    // Lấy ngày đầu tiên của tháng
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

    // Lấy số ngày trong tháng
    $daysInMonth = date('t', $firstDayOfMonth);

    // Lấy thông tin về ngày đầu tiên (dữ liệu trong mảng)
    $firstDayInfo = getdate($firstDayOfMonth);

    // Xác định ngày đầu tiên của tháng trong tuần
    $dayOfWeek = $firstDayInfo['wday'];

    // Bắt đầu một hàng mới
    $calendar .= '<tr>';

    // Tạo các ô trống cho các ngày trước ngày đầu tiên của tháng
    for ($i = 0; $i < $dayOfWeek; $i++) {
        $calendar .= '<td></td>';
    }

    $currentDay = 1;

    // Tạo các ô cho các ngày trong tháng
    while ($currentDay <= $daysInMonth) {
        // Nếu là Chủ Nhật, bắt đầu hàng mới
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= '</tr><tr>';
        }

        // Tạo ô cho ngày hiện tại
        if (isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])) {
            if($_GET['day'] == $currentDay ){
            $calendar .= '<td class="text-center bg-success"><a class="text-primary" href="?day=' . $currentDay . '&month=' . $month . '&year=' . $year . '">' . $currentDay . '</a></td>';
            }else {
                $calendar .= '<td class="text-center"><a class="text-primary" href="?day=' . $currentDay . '&month=' . $month . '&year=' . $year . '">' . $currentDay . '</a></td>';
    
            }
        }else {
            $calendar .= '<td class="text-center"><a class="text-primary" href="?day=' . $currentDay . '&month=' . $month . '&year=' . $year . '">' . $currentDay . '</a></td>';

        }

      

        // Tăng ngày và ngày trong tuần
        $currentDay++;
        $dayOfWeek++;
    }

    // Hoàn thành hàng cuối cùng nếu cần
    while ($dayOfWeek < 7) {
        $calendar .= '<td></td>';
        $dayOfWeek++;
    }

    $calendar .= '</tr></table>';

    return $calendar;
}

// Lấy tháng và năm từ tham số hoặc mặc định là tháng và năm hiện tại
$month = isset($_GET['month']) ? max(1, min(12, $_GET['month'])) : date('n');
$year = isset($_GET['year']) ? max(1, $_GET['year']) : date('Y');

// Xử lý trường hợp khi Previous Month là tháng 0 (tháng 12 của năm trước đó)
$prevMonth = $month - 1;
$prevYear = $year;
if ($prevMonth == 0) {
    $prevMonth = 12;
    $prevYear = $year - 1;
}

// Xử lý trường hợp khi Next Month là tháng 13 (tháng 1 của năm sau đó)
$nextMonth = $month + 1;
$nextYear = $year;
if ($nextMonth == 13) {
    $nextMonth = 1;
    $nextYear = $year + 1;
}
?>

<!-- Hiển thị nút điều hướng -->
<div class="container mt-4">

    <a href="?month=<?= $prevMonth ?>&year=<?= $prevYear ?>" class="bg-info text-light rounded-2" style="font-size: 14px; padding: 5px 20px;"><i class="bi bi-chevron-left"></i>Trở về</a>

    <a href="?month=<?= date('n') ?>&year=<?= date('Y') ?>" class="bg-info text-light rounded-2" style="font-size: 14px; padding: 5px 20px;"><i class="bi bi-calendar-check"></i> Hiện tại</a>


    <a href="?month=<?= $nextMonth ?>&year=<?= $nextYear ?>" class="bg-info text-light rounded-2" style="font-size: 14px; padding: 5px 20px;">Tiếp<i class="bi bi-chevron-right"></i></a>



</div>

<!-- Hiển thị lịch cho tháng và năm đã chọn -->
<div class="container mt-4">
    <?php echo build_calendar($month, $year) ?>
</div>