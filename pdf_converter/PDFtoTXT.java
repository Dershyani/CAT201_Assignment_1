import java.io.File;
import java.io.IOException;
import java.io.PrintWriter;
import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;

public class PDFtoTXT {
    public static void main(String[] args) {
        try {
            // Load the PDF document
            PDDocument document = PDDocument.load(new File("uploads/test.pdf"));

            // Initialize PDF text stripper
            PDFTextStripper pdfStripper = new PDFTextStripper();

            // Extract text from the PDF document
            String pdfText = pdfStripper.getText(document);

            document.close();

            // Write the extracted text to a TXT file
            try (PrintWriter writer = new PrintWriter("output/test_output.txt")) {
                writer.print(pdfText);
            }

            System.out.println("Conversion from PDF to TXT successful.");

        } catch (IOException e) {
            // Handle exceptions
            e.printStackTrace();
        }
    }
}

