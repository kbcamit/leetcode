package com.kbc.leetcode;

public class Leetcode_35 {

	public static int searchInsert(int[] nums, int target) {

		int insertedIndex = 0;

		for (int i = 0; i < nums.length; i++) {

			if (nums[i] == target) {
				return i;
			}

			if (target < nums[i]) {
				insertedIndex = i;
				break;
			} else {
				insertedIndex = i + 1;
			}

		}

		return insertedIndex;

	}

}
