# T-Translate

Package sử dụng curl tạo request đến https://translate.google.com/m để dịch và lấy về kết quả.

Created by: Nguyễn Văn Ước

<img src="https://res.cloudinary.com/nguyenuoc/image/upload/v1599797603/t-translate.png" max-width="100%">

## Cài đặt

composer require uocnv/text-translate

- Đường dẫn: {yourdomain}/text-translate/translate

- Config:

php artisan vendor:publish --provider="Uocnv\TextTranslate\TextTranslateServiceProvider" --tag="config"

"translate_target" => "vi" - là ngôn ngữ muốn dịch sang.


