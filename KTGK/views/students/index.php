<?php ob_start(); ?>

<div class="container mt-5">
    <div class="card shadow-lg p-4 bg-light rounded">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="text-primary fw-bold">Danh sách Sinh viên</h2>
            <a href="index.php?action=create" class="btn btn-primary">
                <i class="fas fa-plus-circle me-2"></i> Thêm mới
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover text-center align-middle">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Mã số</th>
                        <th>Họ và tên</th>
                        <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>Hình ảnh</th>
                        <th>Ngành học</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) : ?>
                        <tr class="table-light">
                            <td class="fw-bold"><?php echo $row['MaSV']; ?></td>
                            <td class="text-start fw-semibold"><?php echo $row['HoTen']; ?></td>
                            <td>
                                <?php if ($row['GioiTinh'] == 'Nam') : ?>
                                    <span class="badge bg-info text-dark">Nam</span>
                                <?php else : ?>
                                    <span class="badge bg-danger">Nữ</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo date('d/m/Y', strtotime($row['NgaySinh'])); ?></td>
                            <td>
                                <?php if ($row['Hinh']) : ?>
                                    <img src="uploads/<?php echo $row['Hinh']; ?>" class="rounded shadow-sm border" width="80">
                                <?php else : ?>
                                    <span class="text-muted fst-italic">Không có ảnh</span>
                                <?php endif; ?>
                            </td>
                            <td class="fw-semibold"><?php echo $row['TenNganh']; ?></td>
                            <td>
                                <a href="index.php?action=detail&id=<?php echo $row['MaSV']; ?>" class="btn btn-info btn-sm text-white">
                                    <i class="fas fa-eye"></i> Xem
                                </a>
                                <a href="index.php?action=edit&id=<?php echo $row['MaSV']; ?>" class="btn btn-warning btn-sm text-white">
                                    <i class="fas fa-edit"></i> Sửa
                                </a>
                                <a href="index.php?action=delete&id=<?php echo $row['MaSV']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">
                                    <i class="fas fa-trash"></i> Xóa
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require 'views/layout.php';
?>
