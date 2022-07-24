package com.kbc.leetcode;

import java.util.*;

public class Leetcode_315 {

	private static Map<Integer, Integer> count = new HashMap<Integer, Integer>();

	private static void merge(int[] inputArray, int[] leftHalf, int[] rightHalf) {
		
		System.out.println("Inputed left array " + Arrays.toString(leftHalf));
		System.out.println("Inputed right array " + Arrays.toString(rightHalf));

		int leftSize = leftHalf.length;
		int rightSize = rightHalf.length;

		int i = 0, j = 0, k = 0, rightCounter = 0;

		while (i < leftSize && j < rightSize) {
			if (leftHalf[i] < rightHalf[j]) {
				inputArray[k] = leftHalf[i];
				int newValue = count.get(leftHalf[i]) + rightCounter; 
				count.put(leftHalf[i], newValue);
				i++;
			} else {
				inputArray[k] = rightHalf[j];
				rightCounter++;
				j++;
			}
			k++;
		}

		while (i < leftSize) {
			System.out.println("Bhoom " + leftHalf[i]);
			inputArray[k] = leftHalf[i];
			int newValue = count.get(leftHalf[i]) + rightCounter; 
			count.put(leftHalf[i], newValue);
			i++;
			k++;
		}

		while (j < rightSize) {
			inputArray[k] = rightHalf[j];
			j++;
			k++;
		}

		System.out.println("Final array " + Arrays.toString(inputArray));
		System.out.println("counting array " + count);
	}

	private static void mergeSort(int[] inputArray) {
		int inputArrLength = inputArray.length;

		if (inputArrLength == 1)
			return;

		int midIndex = inputArrLength / 2;

		int[] leftHalf = new int[midIndex];
		int[] rightHalf = new int[inputArrLength - midIndex];

		for (int i = 0; i < midIndex; i++) {
			leftHalf[i] = inputArray[i];
		}

		for (int i = midIndex; i < inputArrLength; i++) {
			rightHalf[i - midIndex] = inputArray[i];
		}

		System.out.println("Input array " + Arrays.toString(inputArray));
		System.out.println("Left half " + Arrays.toString(leftHalf));
		System.out.println("Right half " + Arrays.toString(rightHalf));

		mergeSort(leftHalf);
		mergeSort(rightHalf);

		merge(inputArray, leftHalf, rightHalf);
	}

	public static List<Integer> countSmaller(int[] nums) {

		List<Integer> result = new ArrayList<Integer>();

		for (int i = 0; i < nums.length; i++) {
			count.put(nums[i], 0);
		}

		/*
		 * if (nums.length == 1) { result.add(0); } else { for (int i = 0; i <
		 * nums.length; i++) { int countSmaller = 0; for (int j = i + 1; j <
		 * nums.length; j++) { if (nums[j] < nums[i]) { countSmaller++; } }
		 * result.add(countSmaller); } }
		 */

		mergeSort(nums);
		
		System.out.println(count);

		return result;

	}

}
