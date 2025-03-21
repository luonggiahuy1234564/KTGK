<?php ob_start(); ?>

<div class="container mt-5">
    <div class="card shadow-lg p-4 mb-4 bg-white rounded">
        <div class="card-header bg-primary text-white text-center">
            <h2>Chi tiết Sinh viên</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    <?php if($student['Hinh']): ?>
                        <img src="uploads/<?php echo $student['Hinh']; ?>" class="img-fluid rounded shadow" alt="Student Image">
                    <?php else: ?>
                        <div class="alert alert-info">Không có ảnh</div>
                    <?php endif; ?>
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <th class="bg-light">Mã sinh viên:</th>
                            <td><?php echo $student['MaSV']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg-light">Họ và Tên:</th>
                            <td><?php echo $student['HoTen']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg-light">Giới tính:</th>
                            <td><?php echo $student['GioiTinh']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg-light">Ngày sinh:</th>
                            <td><?php echo date('d/m/Y', strtotime($student['NgaySinh'])); ?></td>
                        </tr>
                        <tr>
                            <th class="bg-light">Ngành học:</th>
                            <td><?php echo $student['TenNganh']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="index.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Quay lại</a>
            <a href="index.php?action=edit&id=<?php echo $student['MaSV']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Chỉnh sửa</a>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require 'views/layout.php';
?>