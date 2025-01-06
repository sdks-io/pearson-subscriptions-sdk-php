
# Cancel Req Type

## Structure

`CancelReqType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | `string` | Required | Subscription id | getSubscriptionId(): string | setSubscriptionId(string subscriptionId): void |
| `subscriptionSource` | [`string(SubscriptionSourceEnum)`](../../doc/models/subscription-source-enum.md) | Required | Internal or external | getSubscriptionSource(): string | setSubscriptionSource(string subscriptionSource): void |
| `cancelReason` | `string` | Required | Reason for subscription cancel | getCancelReason(): string | setCancelReason(string cancelReason): void |
| `cancelDate` | `string` | Required | cancellation date | getCancelDate(): string | setCancelDate(string cancelDate): void |

## Example (as JSON)

```json
{
  "subscriptionId": "urn:pearson:gps:subs:649e7109fc57341ba129e23",
  "subscriptionSource": "Internal",
  "cancelReason": "No longer need service",
  "cancelDate": "2023-06-30"
}
```

