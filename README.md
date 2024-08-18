# PDF Converter Web Application

This project is a PDF to TXT & TXT to PDF converter using PHP, Apache web server, Ubuntu, Docker, Java, and PDFBox.

## Prerequisites

- Docker installed on your system.

## Features

- **PDF to TXT Conversion**
- **TXT to PDF Conversion**
- **File Validation**: Checks file type, size, and integrity.
- **Multiple File Upload**: Allows uploading one or more files at a time.

## Usage

1. **Download the repository:**
   ```bash
   git clone https://github.com/Lithia22/pdf_converter.git
2. **Enter the project folder::**
   ```bash
   cd pdf_converter
3. **Launch the Docker container:**
   ```bash
   docker run -d -p 8000:80 --name PDF_converter -v "$(pwd)":/var/www/html php:apache
4. Open the converter:
Access localhost:80 in your web browser to start converting PDFs to TXT and vice versa.

## Video Tutorial

https://github.com/user-attachments/assets/d53a4f7c-5dfd-4bd1-8779-a6fc579ad9ad


