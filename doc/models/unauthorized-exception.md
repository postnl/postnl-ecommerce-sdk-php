
# Unauthorized Exception

## Structure

`UnauthorizedException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |
| `httpStatusCode` | `?float` | Optional | - | getHttpStatusCode(): ?float | setHttpStatusCode(?float httpStatusCode): void |

## Example (as JSON)

```json
{
  "message": "Failed to resolve API Key variable 'request.header.apikey'",
  "http_status_code": 401.0
}
```

