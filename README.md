# Thông tin về Tác giả
Mã sinh viên: D20198
Họ tên: Hà Văn Linh

# Hướng dẫn cách sử dụng dự án
## Step 1: Clone source dự án
Thực thi câu lệnh sau:
```
git clone <link đường dẫn github>
```

## Step 2: Khởi tạo, kết nối database
Hiệu chỉnh file .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

## Step 3: Tạo database, thực hiện migrate
- Tạo database <tengido>, chuẩn bảng mã `utf8mb4_unicode_ci`
- database: laravel
- Thực thi câu lệnh khởi tạo cấu trúc bảng
```
php artisan migrate
```

## Step 4: tạo dữ liệu mẫu
- Thực thi câu lệnh
```
php artisan db:seed
```

## Step 5: tạo domain ảo
- Tạo domain ảo với <tengido.local>
- Ten miền ảo: http://cacanh.local/
## Step 6: thông tin tài khoản truy cập hệ thống
Tài khoản Admin:
qt@gmail.com / 12345678

Tài khoản Quản lý kho:
qlk@gmail.com / 12345678

Tài khoản Khách hàng:
kh@gmail.com / 12345678
...
