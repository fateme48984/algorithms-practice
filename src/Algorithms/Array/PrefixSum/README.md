# Prefix Sum – Range Sum Query

**Category:** Arrays – Prefix
🔗 [Problem Link](https://www.geeksforgeeks.org/prefix-sum-array-implementation-applications-competitive-programming/)


## ❓ Problem Statement
Given an array and indices `L` and `R`, find the sum of elements between index L and R inclusive.

**Input**
```php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$l = 2;
$r = 5;
```

**Output**
```php
18 (3 + 4 + 5 + 6)
```

## 🧠 Approach

- Precompute prefix[i] = sum of arr[0] to arr[i]
- For any query L to R:
  - prefix[R] - prefix[L-1]

---
* Time Complexity 
    - Preprocessing: O(n)
    - Query: O(1)
* Space Complexity: O(n)

