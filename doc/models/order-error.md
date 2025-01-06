
# Order Error

## Structure

`OrderError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | Error codes. | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | Error message. | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "code": "E99",
  "message": "Technical error from Aggregate API"
}
```

