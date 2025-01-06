
# Billing Options

## Structure

`BillingOptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `documentDate` | `?DateTime` | Optional | - | getDocumentDate(): ?\DateTime | setDocumentDate(?\DateTime documentDate): void |
| `targetDate` | `?DateTime` | Optional | For REDEMPTION, it is end of term date | getTargetDate(): ?\DateTime | setTargetDate(?\DateTime targetDate): void |

## Example (as JSON)

```json
{
  "documentDate": "2016-03-13",
  "targetDate": "2016-03-13"
}
```

