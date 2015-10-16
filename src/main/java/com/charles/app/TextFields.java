package com.charles.app;

import java.io.FileOutputStream;
import java.io.IOException;
 
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Element;
import com.itextpdf.text.ExceptionConverter;
import com.itextpdf.text.Rectangle;
import com.itextpdf.text.pdf.AcroFields;
import com.itextpdf.text.pdf.PdfBorderDictionary;
import com.itextpdf.text.pdf.PdfContentByte;
import com.itextpdf.text.pdf.PdfFormField;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPCellEvent;
import com.itextpdf.text.pdf.PdfReader;
import com.itextpdf.text.pdf.PdfStamper;
import com.itextpdf.text.pdf.PdfWriter;
import com.itextpdf.text.pdf.TextField;
 
public class TextFields implements PdfPCellEvent {
 
    public static final String RESULT1 = "1040.pdf";//原始文件
    public static final String RESULT2 = "1040result.pdf";//目标文件
    protected int tf;

    public TextFields(int tf) {
        this.tf = tf;
    }

    public void manipulatePdf(String src, String dest, personalInformation pi) throws IOException, DocumentException {
        PdfReader reader = new PdfReader(src);
        PdfStamper stamper = new PdfStamper(reader, new FileOutputStream(dest));
        AcroFields form = stamper.getAcroFields();
        form.setField(PdfNameReader.al.get(0), pi.getFirstName());
        form.setField(PdfNameReader.al.get(1), pi.getLastName());
        form.setField(PdfNameReader.al.get(2), pi.getIdNumber());
        form.setField(PdfNameReader.al.get(3),pi.getPresentHomeAdd());
        form.setField(PdfNameReader.al.get(4), pi.getPresentHomeAdd2());
        form.setField(PdfNameReader.al.get(5), pi.getForeignCountryName());
        form.setField(PdfNameReader.al.get(6), pi.getForeignProvince());
        form.setField(PdfNameReader.al.get(7), pi.getForeignPostCode());
        stamper.close();
        reader.close();
    }

    public void cellLayout(PdfPCell cell, Rectangle rectangle, PdfContentByte[] canvases) {
        PdfWriter writer = canvases[0].getPdfWriter();
        TextField text = new TextField(writer, rectangle,
                String.format("text_%s", tf));
       // text.setBackgroundColor(new GrayColor(0.75f));
        switch(tf) {
        case 1:
            text.setBorderStyle(PdfBorderDictionary.STYLE_BEVELED);
            text.setFontSize(0);
            text.setAlignment(Element.ALIGN_CENTER);
            text.setOptions(TextField.REQUIRED);
            break;
        case 2:
            text.setBorderStyle(PdfBorderDictionary.STYLE_BEVELED);
            text.setFontSize(0);
            text.setAlignment(Element.ALIGN_CENTER);
            text.setOptions(TextField.REQUIRED);
            break;
        case 3:
            text.setBorderStyle(PdfBorderDictionary.STYLE_BEVELED);
            text.setFontSize(0);
            text.setAlignment(Element.ALIGN_CENTER);
            text.setOptions(TextField.REQUIRED);
            break;
        case 4:
            text.setBorderStyle(PdfBorderDictionary.STYLE_BEVELED);
            text.setFontSize(0);
            text.setAlignment(Element.ALIGN_CENTER);
            text.setOptions(TextField.REQUIRED);
            break;
        case 5:
            text.setBorderStyle(PdfBorderDictionary.STYLE_BEVELED);
            text.setFontSize(0);
            text.setAlignment(Element.ALIGN_CENTER);
            text.setOptions(TextField.REQUIRED);
            break;
        case 6:
            text.setBorderStyle(PdfBorderDictionary.STYLE_BEVELED);
            text.setFontSize(0);
            text.setAlignment(Element.ALIGN_CENTER);
            break;
        case 7:
            text.setBorderStyle(PdfBorderDictionary.STYLE_BEVELED);
            text.setFontSize(0);
            text.setAlignment(Element.ALIGN_CENTER);
            break;
        case 8:
            text.setBorderStyle(PdfBorderDictionary.STYLE_BEVELED);
            text.setFontSize(0);
            text.setAlignment(Element.ALIGN_CENTER);
            break;
        }
        try {
            PdfFormField field = text.getTextField();
            writer.addAnnotation(field);
        }
        catch(IOException ioe) {
            throw new ExceptionConverter(ioe);
        }
        catch(DocumentException de) {
            throw new ExceptionConverter(de);
        }
    }

   /* public static void main(String[] args) throws DocumentException, IOException {
    	PdfNameReader.nameReader();
        TextFields example = new TextFields(0);
        //example.createPdf(RESULT1);
        example.manipulatePdf(RESULT1, RESULT2);
    }
    */
}
 