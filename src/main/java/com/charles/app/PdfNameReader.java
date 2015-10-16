package com.charles.app;

import java.io.FileOutputStream;
import java.io.IOException;
import java.util.ArrayList;

import com.itextpdf.text.DocumentException;
import com.itextpdf.text.pdf.AcroFields;
import com.itextpdf.text.pdf.PdfReader;
import com.itextpdf.text.pdf.PdfStamper;

public class PdfNameReader {
	public static ArrayList<String> al = new ArrayList<String>();
	public static void nameReader() throws IOException, DocumentException{
		PdfReader reader = new PdfReader("1040.pdf"); 
		PdfStamper stamp = new PdfStamper(reader, new FileOutputStream("registered_flat.pdf")); 
		AcroFields form = stamp.getAcroFields();
		java.util.Iterator<String> it = form.getFields().keySet().iterator();
		while (it .hasNext()) { 
			String str = it.next();
			//System.out.println(str);
			al.add(str);
		} 
	}
	public static void main4(String[] args) throws IOException, DocumentException{
		nameReader();
	}
}
