package com.kbc.leetcode;

import java.util.Arrays;

public class Leetcode_724 {

	public static int pivotIndex(int[] nums) {
		
		int totalSum = 0;
		
		for (int i = 0; i < nums.length; i++) {
			totalSum += nums[i];
		}
		
		int leftSum = 0;
		
		for (int i = 0; i < nums.length; i++) {
			
			int rightSum = totalSum - nums[i] - leftSum;
			
			if(rightSum == leftSum) {
				return i;
			}
			
			leftSum += nums[i];
			
		}
		
		return -1;

	}
	
	public static void main(String[] args) {
		int[] nums = new int[] {1,2,3};
		System.out.println(pivotIndex(nums));
	}

}
