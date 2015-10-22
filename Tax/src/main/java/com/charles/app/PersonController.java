package com.charles.app;

import java.io.IOException;

import org.springframework.context.ApplicationContext;
import org.springframework.context.support.FileSystemXmlApplicationContext;
import org.springframework.http.HttpHeaders;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.ResponseStatus;

import com.itextpdf.text.DocumentException;


@Controller
public class PersonController {
    
    @SuppressWarnings("resource")
	@RequestMapping(value="/pb", method=RequestMethod.GET)
    @ResponseStatus(value = HttpStatus.OK)
	public void CreatePerson() throws IOException, DocumentException {
    	ApplicationContext ac =
			    new FileSystemXmlApplicationContext(
			        "newbean.xml"
			    );
    	personalInformation pi = (personalInformation) ac.getBean("personalInfo");
    	Blanks blank = (Blanks)ac.getBean("tax");
    	PdfNameReader.nameReader();
        TextFields example = new TextFields(0);
        //example.createPdf(RESULT1);
        example.manipulatePdf(TextFields.RESULT1, TextFields.RESULT2,pi,blank);
    }
    
    @SuppressWarnings("resource")
	@RequestMapping(value = "/test",method = RequestMethod.POST,consumes = "application/xml")
    public ResponseEntity<String> processXml(@RequestBody String requestBody){   	    
    		try {
    			System.out.println(requestBody);
    			stringToDom(requestBody);
    			ApplicationContext ac =
    				    new FileSystemXmlApplicationContext(
    				        "newbean.xml"
    				    );				
		    	personalInformation pi = (personalInformation) ac.getBean("personalInfo");
		    	Blanks blank = (Blanks)ac.getBean("tax");
		    	System.out.println(pi.getFirstName());
		    	PdfNameReader.nameReader();
		        TextFields example = new TextFields(0);
		        example.manipulatePdf(TextFields.RESULT1, TextFields.RESULT2,pi,blank);
				
			} catch (IOException | DocumentException e) {
				e.toString();
			}    		
    		return new ResponseEntity<String>(
    	      "Handled application/xml request. Request body was: " 
    	      + requestBody, 
    	      new HttpHeaders(), 
    	      HttpStatus.OK);
    }
    
    public static void stringToDom(String xmlSource) 
            throws IOException {
        java.io.FileWriter fw = new java.io.FileWriter("newbean.xml");
        fw.write(xmlSource);
        fw.close();
    }

}
