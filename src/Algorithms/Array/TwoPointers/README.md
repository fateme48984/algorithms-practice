# 🔍 Find a Pair with the Given Sum

**Category:** Arrays – Two Pointers  
🔗 [Problem Link](https://www.geeksforgeeks.org/two-pointers-technique/)

---

## ❓ Problem Statement

Given a sorted array and a target sum, determine if any two numbers add up to the target.

---
**Input**
```php
$arr = [1, 4, 6, 8, 10, 45];
$target = 16;
```

**Output**
```php
true (because 6 + 10 = 16)
```

## 🧠 Approach

Use **two pointers**:
- One at the beginning, one at the end.
- If sum > target → move right pointer left
- If sum < target → move left pointer right
- If sum == target → return true

---
* Time Complexity: O(n)
* Space Complexity: O(1)

