# PDF Converter Web Application

Introducing PDF Converter website project for CAT201 Assignment 1!
- This project is a simple web-based application designed to convert PDF files to TXT files and vice versa
- The web application is built using  'HTML', 'CSS', 'JavaScript', 'PHP', and 'Java'
- The app uses the 'Apache PDFBox' library, a free tool for handling PDF documents.

<p align="center">
  <img width="800" alt="Screenshot 2024-08-19 at 12 35 28 AM" src="https://github.com/user-attachments/assets/cfcbe130-99eb-41cd-a40a-72affd3c9636">
</p>

<p style="color: red; text-align: center;">
  If the image doesn't appear immediately, it may take a bit longer the first time you visit.
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


# QuantumCharge - CAT201 Assignment 2

<img alt="Logo" align="right" src="./quantum-charge-app/src/assets/images/quantum-charge-logo.png" width="20%" />

Welcome to the QuantumCharge website project for Assignment 2!

- This project is built using React.js with CSS for styling.

- This project was bootstrapped with [Create React App](https://github.com/facebook/create-react-app).

## Previews

[![Preview QuantumCharge Website GIF](https://github.com/JackyChung2003/CAT201-Assignment-2/blob/main/QuantumCharge-website-preview.gif)](https://jackychung2003.github.io/CAT201-Assignment-2/)

*If the GIF is not displayed, please be patient as it might be loading. The first time loading may take longer than usual.*

## Deployment

The QuantumCharge website is live and can be accessed at https://jackychung2003.github.io/CAT201-Assignment-2/.

## Prerequisites

Before diving into QuantumCharge, make sure you have the following tools set up on your machine:

- [Node.js](https://nodejs.org/): Ensure Node.js is installed to empower the project with its runtime environment.

- [Git](https://git-scm.com/): Git is essential for version control and repository management.

## Installation

To get started, clone this repository:

```bash
git clone https://github.com/jackychung2003/CAT201-Assignment-2.git
```

Navigate to the project directory:

```
cd CAT201-Assignment-2\quantum-charge-app
```

Install the necessary dependencies:

```bash
npm install
```

## Usage

To run the project, use the following command:

```bash
npm start
```

This will start the development server, and you can view the website at http://localhost:3000 in your browser.

## Screenshot

![QuantumCharge](https://github.com/JackyChung2003/CAT201-Assignment-2/assets/116894695/b0c2272c-e04a-4b55-86a9-e0a5122b3758)

