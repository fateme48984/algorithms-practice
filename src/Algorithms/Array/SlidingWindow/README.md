# Sliding Window – Maximum Sum Subarray of Size K

**Category:** Arrays – Sliding window  
🔗 [Problem Link](https://www.geeksforgeeks.org/window-sliding-technique/)

---

## ❓ Problem Statement

Given an array and a number `K`, find the maximum sum of any contiguous subarray of size K.

---
**Input**
```php
$arr = [2, 1, 5, 1, 3, 2];
$k = 3;
```

**Output**
```php
9 (subarray: [5, 1, 3])

```

## 🧠 Approach

- Calculate sum of first K elements
- Slide the window forward:
  - Subtract the element going out
  - Add the element coming in
- Track the max at each step.

---
* Time Complexity: O(n)
* Space Complexity: O(1)

