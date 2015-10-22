package com.charles.app;

public class Person {
	
	private static String firstName;
	private static String lastName;
	private static String idNumber;
	private static String presentHomeAdd;
	private static String foreignCountryName;
	private static String foreignProvince;
	private static String foreignPostCode; 
	
	public void personlInformation(String firstName, String lastName, String idNumber, String presentHomeAdd, 
			String presentHomeAdd2, String foreignCountryName, String foreignProvince, String foreignPostCode){
		Person.firstName = firstName;
		Person.lastName = lastName;
		Person.idNumber = idNumber;
		Person.presentHomeAdd = presentHomeAdd;
		Person.foreignCountryName = foreignCountryName;
		Person.foreignProvince = foreignProvince;
		Person.foreignPostCode = foreignPostCode;
	}

	public Person(String firstName, String lastName, String idNumber, String presentHomeAdd, String presentHomeAdd2) {
		super();
		Person.firstName = firstName;
		Person.lastName = lastName;
		Person.idNumber = idNumber;
		Person.presentHomeAdd = presentHomeAdd;
	}
	public Person(){
		
	}
	public String getFirstName() {
		return firstName;
	}
	public void setFirstName(String firstName) {
		Person.firstName = firstName;
	}
	public String getLastName() {
		return lastName;
	}
	public void setLastName(String lastName) {
		Person.lastName = lastName;
	}
	public String getIdNumber() {
		return idNumber;
	}
	public void setIdNumber(String idNumber) {
		Person.idNumber = idNumber;
	}
	public String getPresentHomeAdd() {
		return presentHomeAdd;
	}
	public void setPresentHomeAdd(String presentHomeAdd) {
		Person.presentHomeAdd = presentHomeAdd;
	}
	public String getForeignCountryName() {
		return foreignCountryName;
	}
	public void setForeignCountryName(String foreignCountryName) {
		Person.foreignCountryName = foreignCountryName;
	}
	public String getForeignProvince() {
		return foreignProvince;
	}
	public void setForeignProvince(String foreignProvince) {
		Person.foreignProvince = foreignProvince;
	}
	public String getForeignPostCode() {
		return foreignPostCode;
	}
	public void setForeignPostCode(String foreignPostCode) {
		Person.foreignPostCode = foreignPostCode;
	}
}
