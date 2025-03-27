
# Method Not Allowed Only Post Exception

## Structure

`MethodNotAllowedOnlyPostException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |
| `httpStatusCode` | `?float` | Optional | - | getHttpStatusCode(): ?float | setHttpStatusCode(?float httpStatusCode): void |

## Example (as JSON)

```json
{
  "message": "Only POST requests allowed",
  "http_status_code": 405.0
}
```

