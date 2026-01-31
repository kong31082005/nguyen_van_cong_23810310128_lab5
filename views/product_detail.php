<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-8">

            <div class="card shadow-lg rounded-4">
                <div class="card-header bg-success text-white text-center rounded-top-4">
                    <h3 class="mb-0">📦 Chi tiết sản phẩm</h3>
                </div>

                <div class="card-body p-4">

                    <div class="row mb-4">
                        <div class="col-md-4 text-center">
                            <img 
                                src="<?= $product['image'] ?>" 
                                class="img-fluid rounded shadow-sm"
                                alt="<?= $product['name'] ?>"
                                style="max-height: 220px;"
                            >
                        </div>

                        <div class="col-md-8">
                            <h4 class="fw-bold mb-3"><?= $product['name'] ?></h4>

                            <p class="fs-5">
                                <span class="badge bg-primary">ID: <?= $product['id'] ?></span>
                            </p>

                            <p class="fs-4 text-danger fw-semibold">
                                <?= number_format($product['price']) ?> VND
                            </p>

                            <p class="text-muted">
                                <?= nl2br($product['description']) ?>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=product-list" class="btn btn-outline-secondary btn-lg">
                            ⬅ Quay lại danh sách
                        </a>

                        <a href="index.php?page=product-edit&id=<?= $product['id'] ?>" 
                           class="btn btn-warning btn-lg text-white">
                            ✏️ Sửa sản phẩm
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
