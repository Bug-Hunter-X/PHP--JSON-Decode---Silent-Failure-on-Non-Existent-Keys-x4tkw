```php
$data = file_get_contents('data.txt');
$decoded = json_decode($data, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error decoding JSON: ' . json_last_error_msg());
}

// Robust way to access keys
if (isset($decoded['myKey'])) {
    echo $decoded['myKey'];
} else {
    echo 'Key "myKey" not found in JSON data.';
}
//Alternative using ?? operator for PHP 7.0 and later
echo $decoded['myKey'] ?? 'Key "myKey" not found in JSON data.';
```