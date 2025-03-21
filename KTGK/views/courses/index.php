<?php ob_start(); ?>

<div class="container mt-5">
    <div class="card shadow-lg p-4 mb-4 bg-black rounded">
        <div class="card-header bg-gradient-primary text-white text-center">
            <h2 class="fw-bold text-uppercase">📌 Danh sách học phần</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover text-center">
                <thead class="bg-light">
                    <tr>
                        <th class="text-primary text-uppercase fw-bold">📖 Mã học phần</th>
                        <th class="text-primary text-uppercase fw-bold">📚 Tên học phần</th>
                        <th class="text-primary text-uppercase fw-bold">🎓 Số tín chỉ</th>
                        <th class="text-primary text-uppercase fw-bold">⚡ Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td class="fw-bold text-dark text-uppercase"> <?php echo $row['MaHP']; ?> </td>
                            <td class="text-dark text-uppercase fw-bold"> <?php echo $row['TenHP']; ?> </td>
                            <td class="text-dark text-uppercase fw-bold"> <?php echo $row['SoTinChi']; ?> </td>
                            <td>
                                <a href="index.php?controller=registration&action=register&id=<?php echo $row['MaHP']; ?>" 
                                   class="btn btn-success btn-sm shadow-sm fw-bold text-uppercase"><i class="fas fa-user-plus"></i> Đăng ký</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-center bg-light">
            <a href="index.php" class="btn btn-outline-secondary shadow-sm fw-bold text-uppercase"><i class="fas fa-arrow-left"></i> Quay lại</a>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require 'views/layout.php';
?>
