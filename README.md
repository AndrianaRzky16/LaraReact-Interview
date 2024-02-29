<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Documentation Interface API

# Categories

1.  GET all Categories

    -   Metode HTTP: GET
    -   URL Endpoint: http://127.0.0.1:8000/api/categories
    -   Body: Tidak memerlukan body.
    -   Respons JSON:

```[
    {
        "id": 1,
        "name": "Konsumsi",
        "created_at": "2024-02-28T12:00:00Z",
        "updated_at": "2024-02-28T12:00:00Z"
    },
    {
        "id": 2,
        "name": "Pembersih",
        "created_at": "2024-02-28T12:00:00Z",
        "updated_at": "2024-02-28T12:00:00Z"
    }
]
```

2. Create New Category

    - Metode HTTP: POST
    - URL Endpoint: http://127.0.0.1:8000/api/categories
    - Body:

```
{
    "name": "Perawatan Kulit"
}
```

-   Response JSON

```
{
    "id": 3,
    "name": "Perawatan Kulit",
    "created_at": "2024-02-28T12:00:00Z",
    "updated_at": "2024-02-28T12:00:00Z"
}
```

3. Get Category by ID
    - Metode HTTP: GET
    - URL Endpoint: http://127.0.0.1:8000/api/categories/{category_id}
    - Ganti {category_id} dengan ID kategori yang ingin Anda ambil.
    - Body: Tidak memerlukan body.

-   Respons JSON:

```
{
    "id": 3,
    "name": "Perawatan Kulit Updated",
    "created_at": "2024-02-28T12:00:00Z",
    "updated_at": "2024-02-28T12:00:00Z"
}

```

4. Update Category
    - Metode HTTP: PUT
    - URL Endpoint: http://127.0.0.1:8000/api/categories/{category_id}
    - Ganti {category_id} dengan ID kategori yang ingin Anda perbarui.

-   Body:

```
{
    "name": "Peralatan Mandi"
}

```

-   Response JSON

```
{
    "id": 3,
    "name": "Peralatan Mandi",
    "created_at": "2024-02-28T12:00:00Z",
    "updated_at": "2024-02-28T12:30:00Z"
}
```

5. Delete Category
    - Metode HTTP: DELETE
    - URL Endpoint: http://127.0.0.1:8000/api/categories/{category_id}
    - Ganti {category_id} dengan ID kategori yang ingin Anda hapus.
    - Body: Tidak memerlukan body.

-   Respons JSON:

```
{
    "id": 3,
    "name": "Peralatan Mandi",
    "created_at": "2024-02-28T12:00:00Z",
    "updated_at": "2024-02-28T12:30:00Z"
}
```

# Product

1.  GET all Product

    -   Metode HTTP: GET
    -   URL Endpoint: http://127.0.0.1:8000/api/products
    -   Body: Tidak memerlukan body.
    -   Respons JSON:

```
[
    {
        "id": 1,
        "name": "Kopi",
        "stock": 100,
        "created_at": "2024-02-28T12:00:00Z",
        "updated_at": "2024-02-28T12:00:00Z"
    },
    {
        "id": 2,
        "name": "Teh",
        "stock": 100,
        "created_at": "2024-02-28T12:00:00Z",
        "updated_at": "2024-02-28T12:00:00Z"
    }
]

```

2. Create New Product

    - Metode HTTP: POST
    - URL Endpoint: http://127.0.0.1:8000/api/products
    - Body:

```
{
    "name": "Sabun Cuci",
    "stock": 50
}

```

-   Response JSON

```
{
    "id": 3,
    "name": "Sabun Cuci",
    "stock": 50,
    "created_at": "2024-02-28T12:30:00Z",
    "updated_at": "2024-02-28T12:30:00Z"
}

```

3. Get Product by ID
    - Metode HTTP: GET
    - URL Endpoint: http://127.0.0.1:8000/api/products/{id}
    - Ganti {id} dengan ID product yang ingin Anda ambil.
    - Body: Tidak memerlukan body.

-   Respons JSON:

```
{
    "id": 1,
    "name": "Kopi",
    "stock": 100,
    "created_at": "2024-02-28T12:00:00Z",
    "updated_at": "2024-02-28T12:00:00Z"
}


```

4. Update Product
    - Metode HTTP: PUT
    - URL Endpoint: http://127.0.0.1:8000/api/products/{id}
    - Ganti {id} dengan ID product yang ingin Anda perbarui.

-   Body:

```
{
    "stock": 80
}


```

-   Response JSON

```
{
    "id": 3,
    "name": "Sabun Cuci",
    "stock": 80,
    "created_at": "2024-02-28T12:30:00Z",
    "updated_at": "2024-02-28T13:00:00Z"
}

```

5. Delete Product
    - Metode HTTP: DELETE
    - URL Endpoint: http://127.0.0.1:8000/api/products/{id}
    - Ganti {id} dengan ID product yang ingin Anda hapus.
    - Body: Tidak memerlukan body.

-   Respons JSON:

```
{
    "id": 3,
    "name": "Sabun Cuci",
    "stock": 80,
    "created_at": "2024-02-28T12:30:00Z",
    "updated_at": "2024-02-28T13:00:00Z"
}

```

# Transactions

1.  GET all Transaction

    -   Metode HTTP: GET
    -   URL Endpoint: http://127.0.0.1:8000/api/transactions
    -   Body: Tidak memerlukan body.
    -   Respons JSON:

```
[
    {
        "id": 1,
        "product_id": 1,
        "jumlah_terjual": 5,
        "tanggal_transaksi": "2024-02-28",
        "categories_id": 1,
        "created_at": "2024-02-28T12:00:00Z",
        "updated_at": "2024-02-28T12:00:00Z"
    },
    {
        "id": 2,
        "product_id": 2,
        "jumlah_terjual": 3,
        "tanggal_transaksi": "2024-02-28",
        "categories_id": 2,
        "created_at": "2024-02-28T12:00:00Z",
        "updated_at": "2024-02-28T12:00:00Z"
    }
]

```

2. Create New Transactions

    - Metode HTTP: POST
    - URL Endpoint: http://127.0.0.1:8000/api/transactions
    - Body:

```
{
    "product_id": 1,
    "jumlah_terjual": 2,
    "tanggal_transaksi": "2024-02-28",
    "categories_id": 1
}

```

-   Response JSON

```
{
    "transaction": {
        "id": 3,
        "product_id": 1,
        "jumlah_terjual": 2,
        "tanggal_transaksi": "2024-02-28",
        "categories_id": 1,
        "created_at": "2024-02-28T12:30:00Z",
        "updated_at": "2024-02-28T12:30:00Z"
    },
    "Product": {
        "id": 1,
        "name": "Kopi",
        "stock": 95,
        "created_at": "2024-02-28T12:00:00Z",
        "updated_at": "2024-02-28T12:30:00Z"
    }
}


```

3. Get Transactions by ID
    - Metode HTTP: GET
    - URL Endpoint: http://127.0.0.1:8000/api/transactions/{id}
    - Ganti {id} dengan ID product yang ingin Anda ambil.
    - Body: Tidak memerlukan body.

-   Respons JSON:

```
{
    "id": 1,
    "product_id": 1,
    "jumlah_terjual": 5,
    "tanggal_transaksi": "2024-02-28",
    "categories_id": 1,
    "created_at": "2024-02-28T12:00:00Z",
    "updated_at": "2024-02-28T12:00:00Z"
}

```

4. Update Transactions
    - Metode HTTP: PUT
    - URL Endpoint: http://127.0.0.1:8000/api/transactions/{id}
    - Ganti {id} dengan ID product yang ingin Anda perbarui.

-   Body:

```
{
    "product_id": 1,
    "jumlah_terjual": 3,
    "tanggal_transaksi": "2024-02-28"
}



```

-   Response JSON

```
{
    "transaction": {
        "id": 3,
        "product_id": 1,
        "jumlah_terjual": 3,
        "tanggal_transaksi": "2024-02-28",
        "categories_id": 1,
        "created_at": "2024-02-28T12:30:00Z",
        "updated_at": "2024-02-28T13:00:00Z"
    },
    "updated_product": {
        "id": 1,
        "name": "Kopi",
        "stock": 97,
        "created_at": "2024-02-28T12:00:00Z",
        "updated_at": "2024-02-28T13:00:00Z"
    }
}

```

5. Delete Transactions
    - Metode HTTP: DELETE
    - URL Endpoint: http://127.0.0.1:8000/api/transactions/{id}
    - Ganti {id} dengan ID product yang ingin Anda hapus.
    - Body: Tidak memerlukan body.

-   Respons JSON:

```
{
    "message": "Transaction deleted successfully"
}

```

6. Mengurutkan Transaksi
    - Metode HTTP: POST
    - URL Endpoint: http://127.0.0.1:8000/api/transactions/sort
    - Body:

```
{
    "sortBy": "tanggal_transaksi"
}

```

Response JSON:

```
[
    {
        "id": 2,
        "product_id": 2,
        "jumlah_terjual": 3,
        "tanggal_transaksi": "2024-02-28",
        "categories_id": 2,
        "created_at": "2024-02-28T12:00:00Z",
        "updated_at": "2024-02-28T12:00:00Z"
    },
    {
        "id": 1,
        "product_id": 1,
        "jumlah_terjual": 5,
        "tanggal_transaksi": "2024-02-28",
        "categories_id": 1,
        "created_at": "2024-02-28T12:00:00Z",
        "updated_at": "2024-02-28T12:00:00Z"
    }
]

```

7. Searching Transaksi
    - Metode HTTP: GET
    - URL Endpoint: http://127.0.0.1:8000/api/transactions/search?keyword={keyword}
    - Ganti {keyword} dengan kata kunci yang ingin Anda cari.
    - Body: Tidak memerlukan body.
    - Respons JSON:

```
[
    {
        "id": 1,
        "product_id": 1,
        "jumlah_terjual": 5,
        "tanggal_transaksi": "2024-02-28",
        "categories_id": 1,
        "created_at": "2024-02-28T12:00:00Z",
        "updated_at": "2024-02-28T12:00:00Z"
    }
]

```

8. Membandingkan Penjualan Produk
    - Metode HTTP: POST
    - URL Endpoint: http://127.0.0.1:8000/api/transactions/compare-sales
    - Body:

```
{
    "type": "highest"
}

```

-   Nilai "highest" untuk mendapatkan produk dengan penjualan tertinggi.
-   Nilai "lowest" untuk mendapatkan produk dengan penjualan terendah.

-   Response JSON:

```
{
    "product_name": "Kopi",
    "total_sales": 10
}

```

9. Membandingkan Penjualan Produk berdasarkan Tanggal
    - Metode HTTP: POST
    - URL Endpoint: http://127.0.0.1:8000/api/transactions/compare-sales-by-date
    - Body:

```
{
    "type": "highest",
    "start_date": "2024-02-01",
    "end_date": "2024-02-28"
}

```

-   Nilai "highest" untuk mendapatkan produk dengan penjualan tertinggi.
-   Nilai "lowest" untuk mendapatkan produk dengan penjualan terendah.
-   start_date dan end_date menentukan rentang tanggal untuk membandingkan penjualan.

-   Response JSON:

```
{
    "product_name": "Kopi",
    "total_sales": 8
}

```

## php artisan db:seed untuk memasukkan seeders category dan product
