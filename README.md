# 1. XAMPP
Download and install XAMPP from https://sourceforge.net/projects/xampp/files/

# 2. Git
Download and install Git from https://git-scm.com/download/win
Clone the project repository
git clone https://github.com/AymanDasa/JIMP.git

# 3. AdminLTE
Download and extract AdminLTE
curl https://github.com/ColorlibHQ/AdminLTE/archive/refs/tags/v3.2.0.zip -o adminlte.zip
Expand-Archive -Path adminlte.zip -DestinationPath C:\xampp\hdocs\adminlte

# 4. Font Awesome
Download and extract Font Awesome
curl https://use.fontawesome.com/releases/v6.5.1/fontawesome-free-6.5.1-web.zip -o fontawesome-free6.zip
Expand-Archive -Path fontawesome-free6.zip -DestinationPath C:\xampp\hdocs\adminlte\plugins\fontawesome-free6

# 5. PHP QR Code
Download PHP QR Code from https://sourceforge.net/projects/phpqrcode/files/
Place the contents in C:\xampp\hdocs\

# 6. Database Setup
Import the MySQL database using the provided SQL file data_2.sql

# 7. DomPDF
Clone DomPDF repository and install dependencies
git clone https://github.com/dompdf/dompdf
cd dompdf
composer install
Copy Font and src directories to the project

# 8. Password Archive
Extract the password archive
Expand-Archive -Path passord.zip -DestinationPath c:\wow\passord\
