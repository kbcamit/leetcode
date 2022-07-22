package com.kbc.main;

import java.util.*;

public class RemoveDuplicate {

	public static int removeDuplicates(int[] nums) {
		int count = 1;

		for (int i = 0; i < nums.length - 1; i++) {
			if(nums[i] != nums[i + 1]) {
				nums[count] = nums[i + 1];
				count++;
			}
		}

		System.out.println(count);
		System.out.println(Arrays.toString(nums));

		return count;
	}

	public static void main(String[] args) {

		int[] nums = new int[] { 0, 0, 1, 1, 1, 2, 2, 3, 3, 4 };

		int expectedNums = removeDuplicates(nums);

//		System.out.println(expectedNums);
//		
//		for (int i : nums) {
//			System.out.println(i);
//		}

	}

}
