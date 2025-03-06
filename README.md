# laravel-project

# Hướng Dẫn Cài Đặt Dự Án Laravel



## Cài Đặt
### 1. Clone Repository
git clone https://github.com/ten-user/ten-du-an.git
cd ten-du-an

### 2. Cài Đặt Các Thư Viện
composer install
npm install && npm run dev  # Nếu có sử dụng frontend

### 3. Cấu Hình Môi Trường
cp .env.example .env
Sau đó, mở file .env và chỉnh sửa các thông số kết nối cơ sở dữ liệu.

### 4. Tạo Khóa Ứng Dụng
php artisan key:generate

### 5. Chạy Migration & Seeder
php artisan migrate --seed

### 6. Khởi Chạy Ứng Dụng
php artisan serve
Ứng dụng sẽ chạy trên http://127.0.0.1:8000

## Cấu Trúc Thư Mục Chính
├── app/              # Chứa code chính của ứng dụng
├── bootstrap/        # Khởi tạo framework
├── config/           # Cấu hình của ứng dụng
├── database/         # Chứa migration, seeders và factories
├── public/           # Chứa file tĩnh (CSS, JS, hình ảnh...)
├── resources/        # Views, ngôn ngữ, components
├── routes/           # Định nghĩa route của ứng dụng
├── storage/          # Lưu trữ logs, cache, uploads...
├── tests/            # Chứa các file test
└── vendor/           # Thư viện bên thứ ba

## Lệnh Hữu Ích
Dưới đây là một số lệnh thường dùng trong Laravel:
# Chạy migration
php artisan migrate

# Tạo controller mới
php artisan make:controller TenController

# Tạo model mới
php artisan make:model TenModel -m

# Chạy queue worker
php artisan queue:work





