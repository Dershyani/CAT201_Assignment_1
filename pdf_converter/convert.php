<?php
// Check submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileToConvert'])) {
    $filePath = 'uploads/' . basename($_FILES['fileToConvert']['name']);

    // Uploaded file to uploads folder
    if (move_uploaded_file($_FILES['fileToConvert']['tmp_name'], $filePath)) {
        echo 'File uploaded successfully to ' . $filePath;

        $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);

        $javaPath = '/usr/bin/java';

        // Check file type and performs conversion
        if ($fileExtension == 'pdf') {
            // Convert from PDF to TXT
            exec($javaPath . ' -cp /home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/fontbox-2.0.24.jar:/home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/pdfbox-2.0.24.jar:/home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/pdfbox-tools-2.0.24.jar:/home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/preflight-2.0.24.jar:/home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/preflight-app-2.0.24.jar:/home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/xmpbox-2.0.24.jar:. PDFtoTXT ' . escapeshellarg($filePath) . ' ' . escapeshellarg($filePath . '.txt') . ' 2>&1');
        }
        elseif ($fileExtension == 'txt') {
            // Convert from TXT to PDF
            exec($javaPath . ' -cp /home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/fontbox-2.0.24.jar:/home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/pdfbox-2.0.24.jar:/home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/pdfbox-tools-2.0.24.jar:/home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/preflight-2.0.24.jar:/home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/preflight-app-2.0.24.jar:/home/parallels/pdf_converter/PdfConvertToTXT/PDFBox/xmpbox-2.0.24.jar:. TXTtoPDF ' . escapeshellarg($filePath) . ' ' . escapeshellarg($filePath . '.pdf') . ' 2>&1');
        }

        // Generated file to the output folder
        $outputFileName = basename($_FILES['fileToConvert']['name']);
        $outputFilePath = 'output/' . $outputFileName;

        echo '<script>window.location.href = "convert.html?file=' . urlencode($outputFileName) . '";</script>';
        exit; 
    } 
} 
?>



