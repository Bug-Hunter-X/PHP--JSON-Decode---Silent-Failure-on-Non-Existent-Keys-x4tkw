# PHP: JSON Decode - Silent Failure on Non-Existent Keys

This example demonstrates a common yet subtle error in PHP when handling JSON data.  Even if you check `json_last_error()`, attempting to access a non-existent key in the decoded JSON array will only produce a Notice, potentially leading to unexpected behavior or application crashes in production.  The solution shows how to robustly handle such scenarios. 

## Bug
The `bug.php` file shows the problem:  The code checks for JSON decoding errors but fails to handle the case where a key is missing, resulting in a PHP Notice instead of a controlled error handling.