# Project Installation Guide

Follow these step-by-step instructions to set up the project environment.

## 1. XAMPP 
### Download and install XAMPP
Download the latest version of XAMPP from [XAMPP](https://sourceforge.net/projects/xampp/files/).
Ensure to follow the installation instructions for your operating system.

## 2. Composer 
### Download and install Composer
Download Composer from [Composer](https://getcomposer.org/download/).
Follow the installation instructions for your operating system.
Composer is a dependency manager for PHP, and it is necessary for managing project dependencies.



 

## 3. Git
### Download and install Git
Download and install Git from [Git](https://git-scm.com/download/win).
This is required for version control and cloning the project repository.
Clone the project repository using the following command:
```bash
git clone https://github.com/AymanDasa/JIMP.git
```


## 4. AdminLTE
### Download and extract AdminLTE
Download the AdminLTE template from [AdminLTE](https://github.com/ColorlibHQ/AdminLTE/archive/refs/tags/v3.2.0.zip).
Extract the contents and place them in the `C:\xampp\hdocs\adminlte` directory.


## 5. Font Awesome
### Download and extract Font Awesome
Download Font Awesome from [Font Awesome 6](https://use.fontawesome.com/releases/v6.5.1/fontawesome-free-6.5.1-web.zip).
Extract the contents and place them in `C:\xampp\hdocs\adminlte\plugins\fontawesome-free6` directory.


## 6. PHP QR Code
### Download PHP QR Code
Download PHP QR Code from [PHP QR Code](https://sourceforge.net/projects/phpqrcode/files/).
Place the contents in `C:\xampp\hdocs\`.


## 7. Database Setup
### Import MySQL Database
Import the MySQL database using the provided SQL file `data_2.sql`.
This step is essential for setting up the project database.


## 8. DomPDF
### Clone DomPDF repository and install dependencies
Clone the DomPDF repository using the following commands:
```bash
git clone https://github.com/dompdf/dompdf
cd dompdf
composer install
```
Copy the `Font` and `src` directories from DomPDF to your project.

## 9. Password Archive
### Extract the Password Archive
Extract the password archive using the following command:
```
Expand-Archive -Path passord.zip -DestinationPath c:\wow\passord\
```
Note: Ensure that you adjust paths and commands based on your system configuration.

Now, your environment should be set up for the project. If you encounter any issues, refer to the project documentation or seek assistance from the community.
