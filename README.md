SetUp môi trường:
  // build docker
  > docker-compose build 
  // Khởi dộng docker
  > docker-compose up -d
  // cài node modul cho project
  npm install
  //cài composer cho project
  > composer install
  // Chỉnh sửa file .env
  // chạy migrate(docker exec -it php sh)
  > php artisan migrate
  // Kiểm tra databases (docker exec -it mysql bash > mysql -uroot -p)
  // Tạo key:generate
  > php artisan key:generate
  // KHởi dộng serve
  > php artisan serve --port=8080


Repository pattern:
Repository đóng vai trò là một lớp kết nối giữa tầng Business và Model của ứng dụng.
Thay vì viết code xử lý trong controller thì ta tạo ra 1 thư mục là Repository rồi viết code xử lý. Sau đó chỉ việc inject vào thông qua __construct.
repository thông qua interface: Để đảm bảo cho code chuẩn và dễ dàng maintain bằng cách implements interface vào repository
