package com.kbc.leetcode;

import java.util.Arrays;

public class Leetcode_1480 {

	public static int[] runningSum(int[] nums) {
		
		int[] result = new int[nums.length];
		
		int i = 0, tempSum = 0;
		
		while (i < nums.length) {
			
			tempSum += nums[i];
			System.out.println("Temp sum " + tempSum);
			
			result[i] = tempSum;
			
			i++;
			
		}
		
		System.out.println("Final array " + Arrays.toString(result));
		
		return result;

	}

}
