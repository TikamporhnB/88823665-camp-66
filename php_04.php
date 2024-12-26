<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เลขคู่หรือเลขคี่</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">แสดงเลขคู่และเลขคี่ในช่วงที่กำหนด</h2>

        <form method="POST" class="mb-4">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <label for="start" class="form-label">กรอกตัวเลขเริ่มต้น:</label>
                    <input type="number" id="start" name="start" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="end" class="form-label">กรอกตัวเลขสิ้นสุด:</label>
                    <input type="number" id="end" name="end" class="form-control" required>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">แสดงผล</button>
                </div>
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $start = (int) $_POST['start'];
            $end = (int) $_POST['end'];

            if ($start > $end) {
                echo "<div class='alert alert-danger text-center'>กรุณากรอกค่าตัวเลขเริ่มต้นให้น้อยกว่าหรือเท่ากับค่าตัวเลขสิ้นสุด</div>";
            } else {
                echo "<h3 class='text-center'>ผลลัพธ์จาก $start ถึง $end</h3>";
                echo "<table class='table table-bordered table-striped table-hover mt-4'>";
                echo "<thead class='table-dark'><tr><th>ตัวเลข</th><th>ประเภท</th></tr></thead>";
                echo "<tbody>";

                for ($i = $start; $i <= $end; $i++) {
                    $type = ($i % 2 === 0) ? 'เลขคู่' : 'เลขคี่';
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$type</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
