
# Order Resp Type

## Structure

`OrderRespType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Optional | message description once subscription creation is sucess. | getMessage(): ?string | setMessage(?string message): void |
| `orderNumber` | `?string` | Optional | order number. | getOrderNumber(): ?string | setOrderNumber(?string orderNumber): void |
| `subscriptionNumber` | `?string` | Optional | subscription id. | getSubscriptionNumber(): ?string | setSubscriptionNumber(?string subscriptionNumber): void |

## Example (as JSON)

```json
{
  "message": "sucess",
  "orderNumber": "10034567",
  "subscriptionNumber": "S12345"
}
```

