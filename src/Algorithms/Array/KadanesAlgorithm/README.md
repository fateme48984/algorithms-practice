# Kadane’s Algorithm – Maximum Subarray Sum

**Category:** Arrays – Kardane's Algorithm
🔗 [Problem Link](https://www.geeksforgeeks.org/largest-sum-contiguous-subarray/)

---
## ❓ Problem Statement
Find the maximum sum of any contiguous subarray in a given array. The array may contain negative numbers.

**Input**
```php
$arr = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
```

**Output**
```php
6 (subarray: [4, -1, 2, 1])
```

## 🧠 Approach

- At each index, decide whether to:
  - Start a new subarray
  - Continue the previous subarray

Formula:
```php
currentMax = max(arr[i], currentMax + arr[i]);
maxSoFar = max(maxSoFar, currentMax);
```
---
* Time Complexity: O(n)
* Space Complexity: O(1)

