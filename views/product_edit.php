<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">

            <div class="card shadow-lg rounded-4">
                <div class="card-header bg-warning text-white text-center rounded-top-4">
                    <h3 class="mb-0">✏️ Sửa sản phẩm</h3>
                </div>

                <div class="card-body p-4">

                    <form method="POST" action="index.php?page=product-update&id=<?= $product['id'] ?>">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Tên sản phẩm</label>
                            <input type="text"
                                   name="name"
                                   class="form-control form-control-lg"
                                   value="<?= htmlspecialchars($product['name']) ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Giá (VND)</label>
                            <input type="number"
                                   name="price"
                                   class="form-control form-control-lg"
                                   value="<?= $product['price'] ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Mô tả</label>
                            <textarea name="description"
                                      rows="4"
                                      class="form-control"><?= htmlspecialchars($product['description']) ?></textarea>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="index.php?page=product-list"
                               class="btn btn-outline-secondary btn-lg">
                                ❌ Hủy
                            </a>

                            <button class="btn btn-warning btn-lg text-white">
                                💾 Cập nhật
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
