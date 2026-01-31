<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow-lg rounded-4">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">📦 Danh sách sản phẩm</h3>
            <a href="index.php?page=product-add" class="btn btn-light fw-semibold">
                ➕ Thêm mới
            </a>
        </div>

        <div class="card-body">

            <table class="table table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                        <th>Hành động</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($products as $p): ?>
                        <tr>
                            <td class="fw-bold"><?= $p['id'] ?></td>

                            <td class="text-start">
                                <?= htmlspecialchars($p['name']) ?>
                            </td>

                            <td class="text-danger fw-semibold">
                                <?= number_format($p['price']) ?> đ
                            </td>

                            <td>
                                <?php if (!empty($p['image'])): ?>
                                    <img src="<?= $p['image'] ?>"
                                         class="rounded shadow-sm"
                                         width="70"
                                         height="70"
                                         style="object-fit: cover;">
                                <?php else: ?>
                                    <span class="text-muted fst-italic">Không có ảnh</span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <a href="index.php?page=product-detail&id=<?= $p['id'] ?>"
                                   class="btn btn-info btn-sm mb-1">
                                    👁 Chi tiết
                                </a>

                                <a href="index.php?page=product-edit&id=<?= $p['id'] ?>"
                                   class="btn btn-warning btn-sm mb-1 text-white">
                                    ✏️ Sửa
                                </a>

                                <a href="index.php?page=product-delete&id=<?= $p['id'] ?>"
                                   class="btn btn-danger btn-sm mb-1"
                                   onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')">
                                    🗑 Xóa
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>
