# ValidateEmail
Bước 1: Tạo Pattern

Chúng ta có Email Regular Expression Pattern như sau:

Mô tả



Bước 2: Tạo phương thức để sử dụng mẫu trên.

^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$;
Bước 3:Xây dựng mẫu mail hợp lệ/không hợp lệ cho việc kiểm thử.

Xây dựng mẫu email hợp lệ

a@gmail.com
ab@yahoo.com
abc@hotmail.com
Xây dựng mẫu email Không hợp lệ

@gmail.com
ab@gmail.
@#abc@gmail.com
Bước 4: Tạo chương trình kiểm thử
