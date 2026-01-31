<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">

            <div class="card shadow-lg rounded-4">
                <div class="card-header bg-primary text-white text-center rounded-top-4">
                    <h3 class="mb-0">➕ Thêm sản phẩm mới</h3>
                </div>

                <div class="card-body p-4">

                    <form method="POST" action="index.php?page=product-store">

                        <div class="mb-3">
                            <label class="form-label fw-semibold fs-5">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control form-control-lg" placeholder="Nhập tên sản phẩm">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold fs-5">Giá</label>
                            <input type="number" name="price" class="form-control form-control-lg" placeholder="Nhập giá">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold fs-5">Hình ảnh (URL)</label>
                            <input type="text" name="image" class="form-control form-control-lg" placeholder="https://...">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold fs-5">Mô tả</label>
                            <textarea name="description" rows="4" class="form-control form-control-lg" placeholder="Mô tả sản phẩm"></textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="index.php?page=product-list" class="btn btn-outline-secondary btn-lg">
                                ⬅ Quay lại
                            </a>
                            <button type="submit" class="btn btn-primary btn-lg px-4">
                                💾 Lưu sản phẩm
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
