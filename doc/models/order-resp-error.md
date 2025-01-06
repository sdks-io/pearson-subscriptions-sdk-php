
# Order Resp Error

## Structure

`OrderRespError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | [`?string(CodeEnum)`](../../doc/models/code-enum.md) | Optional | Error codes. | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | Error message. | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "message": "Subscription Already Exists.",
  "code": "E41"
}
```

