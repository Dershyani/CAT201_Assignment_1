# PDF Converter Web Application

Check out the PDF Converter for CAT201 Assignment 1!

- Converts PDFs to TXT and vice versa.
- Built with `HTML`, `CSS`, `JavaScript`, `PHP`, and `Java`.
- Utilizes the Apache PDFBox library for PDF handling.

<p align="center">
  <img width="800" alt="Screenshot 2024-08-19 at 12 35 28 AM" src="https://github.com/user-attachments/assets/cfcbe130-99eb-41cd-a40a-72affd3c9636">
</p>

## Features

- **PDF to TXT Conversion**
- **TXT to PDF Conversion**
- **File Validation**: Checks file type, size, and integrity.
- **Multiple File Upload**: Allows uploading one or more files at a time.

## Prerequisites

- Docker installed on your system. <a href="https://youtu.be/TDLKQWsrSyk?si=bcv0J37m7tACiZW_" target="_blank">Watch a YouTube tutorial on installing Docker</a>

## How To Use

1. **Pull the Docker images:**
   
   ```bash
   docker pull httpd
   docker pull php:apache
   ```

2. **Download the repository:**
   
   ```bash
   git clone https://github.com/Lithia22/CAT201_pdf_converter.git
   ```
   
3. **Enter the project folder::**
   
   ```bash 
   cd pdf_converter
   ```
   
4. **Launch the Docker container:**
   
   ```bash
   docker run -d -p 8000:80 --name PDF_converter -v "$(pwd)":/var/www/html php:apache
   ```
   
5. **Verify the container is running:**
   
   ```bash
   docker ps
   ```
   
6. Access the application at localhost:8000 to start converting PDFs and TXT files.

## Video Tutorial

https://github.com/user-attachments/assets/d53a4f7c-5dfd-4bd1-8779-a6fc579ad9ad

