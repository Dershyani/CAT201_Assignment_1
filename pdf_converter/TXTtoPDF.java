import java.io.File;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;
import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.pdmodel.PDPage;
import org.apache.pdfbox.pdmodel.PDPageContentStream;
import org.apache.pdfbox.pdmodel.font.PDType1Font;

public class TXTtoPDF {
    public static void main(String[] args) {
        try {
            // Read content from the text file
            String txtContent = new String(Files.readAllBytes(Paths.get("uploads/test.txt")));

            // Create a PDDocument object
            PDDocument document = new PDDocument();
            PDPage page = new PDPage();
            document.addPage(page);

            try (PDPageContentStream contentStream = new PDPageContentStream(document, page)) {
                // Set font and font size
                contentStream.setFont(PDType1Font.HELVETICA, 12);

                // Split content into lines and write to PDF
                String[] lines = txtContent.split("\\r?\\n");
                float yPosition = 700; // Adjust the starting y-position
                for (String line : lines) {
                    contentStream.beginText();
                    contentStream.newLineAtOffset(10, yPosition);
                    contentStream.showText(line);
                    contentStream.endText();
                    yPosition -= 12; 
                }
            }

            document.save("output/test_output.pdf");
            document.close();

            System.out.println("Conversion from TXT to PDF successful.");

        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}

