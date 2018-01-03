package automateMyForm;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.firefox.FirefoxDriver;

public class automateMyForm {
	public static void main(String[] args) throws InterruptedException{
		
		String names[] = {"Abby","Rehana"};
		
		String dep[] = {"Mech","EMT"};
		
		System.setProperty("webdriver.gecko.driver","/home/devteam/Documents/AllDrivers/geckodriver");
		
		WebDriver driver = new FirefoxDriver();
		
		String baseURL = "http://localhost/task1/web/index.php?r=student/insert";
		
		driver.get(baseURL);
		
		for(int i=0; i<names.length; i++){
		
			WebElement id = driver.findElement(By.id("student-name"));
			id.sendKeys(names[i]);
		
			Thread.sleep(2000);
			
			WebElement dept = driver.findElement(By.id("student-dept"));
			dept.sendKeys(dep[i]);
			
			Thread.sleep(2000);
		}
		driver.findElement(By.id("sub")).click();
		
	}
}
