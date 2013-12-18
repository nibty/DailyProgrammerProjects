/**
 * Nuts & Bolts
 * http://www.reddit.com/r/dailyprogrammer/comments/1sob1e/121113_challenge_144_easy_nuts_bolts/
 */

import java.util.HashMap;
import java.util.Scanner;

public class NutsAndBolts {

	public static void main(String[] args)
	{
        Scanner userInput = new Scanner(System.in);
        int size = userInput.nextInt();
        HashMap<String, Integer> price = new HashMap<String, Integer>();

        for (int i = 0; i < size; i++) {
        	price.put(userInput.next(), userInput.nextInt());
        }

        System.out.print("\n\nPrice Changes:\n");

        for (int i = 0; i < size; i++) {
        	String item = userInput.next();
        	int firstPrice  = price.get(item);
        	int secondPrice = userInput.nextInt();
        	int priceChange = secondPrice - firstPrice;

        	if (priceChange != 0) {
	        	System.out.print(item + " ");
	        	if (priceChange > 0) {
	        		 System.out.print("+");
	        	}

	        	System.out.println(priceChange);
        	}
         }
	}
}