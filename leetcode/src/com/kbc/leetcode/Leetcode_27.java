package com.kbc.leetcode;

public class Leetcode_27 {

	public static int removeElement(int[] nums, int val) {
		
		int pointer = 0;
		
		for (int i = 0; i < nums.length; i++) {
			// { 0, 1, 2, 2, 3, 0, 4, 2 }
			if(nums[i] != val) {
				nums[pointer] = nums[i];
				pointer++;
			}
		}
		
		//1,2
		
		// {0,1,}
//		System.out.println(Arrays.toString(nums));
		
		return pointer;

	}

}
