```php
$data = file_get_contents('data.txt');
$decoded = json_decode($data, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo 'Error decoding JSON: ' . json_last_error_msg();
}

// Accessing a non-existent key
echo $decoded['nonExistentKey'];
```