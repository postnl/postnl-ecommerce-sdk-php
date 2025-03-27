
# Too Many Requests Exception

## Structure

`TooManyRequestsException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |
| `httpStatusCode` | `?float` | Optional | - | getHttpStatusCode(): ?float | setHttpStatusCode(?float httpStatusCode): void |

## Example (as JSON)

```json
{
  "message": "Too many requests. Rate limit exceeded!",
  "http_status_code": 429.0
}
```

