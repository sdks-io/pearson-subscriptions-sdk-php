
# Invalid Req Type Error

## Structure

`InvalidReqTypeError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | Error codes | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | Error message. | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "code": "400",
  "message": "object has missing required properties ([\\\"orderNumber\\\"])"
}
```

