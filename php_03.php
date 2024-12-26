<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">แสดงตารางสูตรคูณ</h2>
        
        <form method="POST" class="mb-4">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="number" id="number" name="number" class="form-control" placeholder="ใส่ตัวเลข" required>
                        <button type="submit" class="btn btn-primary">แสดงตารางสูตรคูณ</button>
                    </div>
                </div>
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $number = (int) $_POST['number'];

            echo "<h3 class='text-center'>ตารางสูตรคูณของเลข $number</h3>";
            echo "<table class='table table-bordered table-striped table-hover mt-4'>";
            echo "<thead class='table-dark'><tr><th>สูตรคูณ</th><th>ผลลัพธ์</th></tr></thead>";
            echo "<tbody>";

            for ($i = 1; $i <= 12; $i++) {
                $result = $number * $i;
                echo "<tr>";
                echo "<td>$number x $i</td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
