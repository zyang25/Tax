package com.charles.app;

public class personalInformation {
	private static String firstName;
	private static String lastName;
	private static String idNumber;
	private static String presentHomeAdd;
	private static String presentHomeAdd2;
	private static String foreignCountryName;
	private static String foreignProvince;
	private static String foreignPostCode; 
	public void personlInformation(String firstName, String lastName, String idNumber, String presentHomeAdd, 
			String presentHomeAdd2, String foreignCountryName, String foreignProvince, String foreignPostCode){
		personalInformation.firstName = firstName;
		personalInformation.lastName = lastName;
		personalInformation.idNumber = idNumber;
		personalInformation.presentHomeAdd = presentHomeAdd;
		personalInformation.presentHomeAdd2 = presentHomeAdd2;
		personalInformation.foreignCountryName = foreignCountryName;
		personalInformation.foreignProvince = foreignProvince;
		personalInformation.foreignPostCode = foreignPostCode;
	}

	public personalInformation(String firstName, String lastName, String idNumber, String presentHomeAdd, String presentHomeAdd2) {
		super();
		personalInformation.firstName = firstName;
		personalInformation.lastName = lastName;
		personalInformation.idNumber = idNumber;
		personalInformation.presentHomeAdd = presentHomeAdd;
		personalInformation.presentHomeAdd2 = presentHomeAdd2;
	}
	public personalInformation(){
		
	}
	public String getFirstName() {
		return firstName;
	}
	public void setFirstName(String firstName) {
		personalInformation.firstName = firstName;
	}
	public String getLastName() {
		return lastName;
	}
	public void setLastName(String lastName) {
		personalInformation.lastName = lastName;
	}
	public String getIdNumber() {
		return idNumber;
	}
	public void setIdNumber(String idNumber) {
		personalInformation.idNumber = idNumber;
	}
	public String getPresentHomeAdd() {
		return presentHomeAdd;
	}
	public void setPresentHomeAdd(String presentHomeAdd) {
		personalInformation.presentHomeAdd = presentHomeAdd;
	}
	public void setPresentHomeAdd2(String presentHomeAdd2) {
		personalInformation.presentHomeAdd2 = presentHomeAdd2;
	}
	public String getForeignCountryName() {
		return foreignCountryName;
	}
	public void setForeignCountryName(String foreignCountryName) {
		personalInformation.foreignCountryName = foreignCountryName;
	}
	public String getForeignProvince() {
		return foreignProvince;
	}
	public void setForeignProvince(String foreignProvince) {
		personalInformation.foreignProvince = foreignProvince;
	}
	public String getForeignPostCode() {
		return foreignPostCode;
	}
	public void setForeignPostCode(String foreignPostCode) {
		personalInformation.foreignPostCode = foreignPostCode;
	}
	public String getPresentHomeAdd2() {
		return presentHomeAdd2;
	}
}
