package com.charles.app;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;

public class CalculateTax {
	
	final static String fileLocation = "1040NREZ(new).txt";
	public static String[] splitLine = null;
	public static BufferedReader inputFileBR;
	public static String str;
	public static double taxableIncome;
	public static double lowerLimit;
	public static double upperLimit;
	
	public static String calculateTax(double taxableIncome) throws IOException{
		
		File inputFile = new File(fileLocation);
		
		try {
			inputFileBR = new BufferedReader(new FileReader(inputFile));
			while((str = inputFileBR.readLine())!=null){
				splitLine = str.split(" ");
				lowerLimit = Double.parseDouble(splitLine[0]);
				upperLimit = Double.parseDouble(splitLine[1]);
				if((lowerLimit <= taxableIncome) && (taxableIncome < upperLimit)){
					return splitLine[2];
				}
			}
		} catch (FileNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return null;
	}
	
/*
	public static void main(String[] args) throws IOException {
		System.out.println("Please input your taxable income and press enter.");
		Scanner scannerTaxableIncome = new Scanner(System.in);
		taxableIncome = scannerTaxableIncome.nextDouble();
		calculateTax(taxableIncome);
		scannerTaxableIncome.close();
	}
*/
}