<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Products - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            padding: 20px;
        }
        .import-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .upload-area {
            border: 2px dashed #ddd;
            padding: 40px;
            text-align: center;
            border-radius: 8px;
            margin: 20px 0;
            transition: all 0.3s;
        }
        .upload-area:hover {
            border-color: #007bff;
            background-color: #f8f9fa;
        }
        .file-info {
            margin-top: 15px;
            padding: 10px;
            background: #e9ecef;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="import-container">
        <h1 class="mb-4">Import Products from Excel</h1>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <h5>Excel File Format</h5>
            </div>
            <div class="card-body">
                <p>The Excel file should have the following columns:</p>
                <ul>
                    <li><strong>name</strong> - Product name (required)</li>
                    <li><strong>category</strong> - Category name</li>
                    <li><strong>sku</strong> - Product SKU (auto-generated if not provided)</li>
                    <li><strong>slug</strong> - URL slug (auto-generated if not provided)</li>
                    <li><strong>short_description</strong> - Short description</li>
                    <li><strong>description</strong> - Full description</li>
                    <li><strong>price</strong> - Product price</li>
                    <li><strong>sale_price</strong> - Sale price (optional)</li>
                    <li><strong>images</strong> - Comma-separated image paths</li>
                    <li><strong>specifications</strong> - JSON string or key-value pairs</li>
                    <li><strong>features</strong> - Product features</li>
                    <li><strong>stock_quantity</strong> - Stock quantity</li>
                    <li><strong>in_stock</strong> - 1 for in stock, 0 for out of stock</li>
                    <li><strong>is_featured</strong> - 1 for featured, 0 for not featured</li>
                    <li><strong>status</strong> - 1 for active, 0 for inactive</li>
                    <li><strong>meta_title</strong> - SEO meta title</li>
                    <li><strong>meta_description</strong> - SEO meta description</li>
                </ul>
            </div>
        </div>

        <form action="{{ route('admin.products.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="upload-area">
                <input type="file" name="file" id="fileInput" class="d-none" accept=".xlsx,.xls,.csv" required>
                <label for="fileInput" class="btn btn-primary btn-lg">
                    <i class="bi bi-upload"></i> Choose Excel File
                </label>
                <p class="mt-3 text-muted">Supported formats: .xlsx, .xls, .csv</p>
                <div id="fileInfo" class="file-info d-none">
                    <strong>Selected file:</strong> <span id="fileName"></span>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success btn-lg">
                    <i class="bi bi-upload"></i> Import Products
                </button>
                <a href="{{ route('admin.products.import') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('fileInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                document.getElementById('fileName').textContent = file.name;
                document.getElementById('fileInfo').classList.remove('d-none');
            }
        });
    </script>
</body>
</html>

