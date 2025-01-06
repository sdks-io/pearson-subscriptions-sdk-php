
# Product

## Structure

`Product`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `isbn` | `?string` | Optional | product isbn number | getIsbn(): ?string | setIsbn(?string isbn): void |
| `ppid` | `?string` | Optional | product ppid number | getPpid(): ?string | setPpid(?string ppid): void |
| `duration` | `?float` | Optional | Duration of the entitlement in days for this product | getDuration(): ?float | setDuration(?float duration): void |
| `endDate` | `?string` | Optional | end date for the entitlement. in yyyy-MM-dd'T'HH:mm:ss.SSSZ format. | getEndDate(): ?string | setEndDate(?string endDate): void |
| `tax` | `?float` | Optional | Cost of tax on the product | getTax(): ?float | setTax(?float tax): void |
| `price` | `?float` | Optional | Cost of the product | getPrice(): ?float | setPrice(?float price): void |

## Example (as JSON)

```json
{
  "isbn": "isbn8",
  "ppid": "ppid0",
  "duration": 117.0,
  "endDate": "endDate6",
  "tax": 72.48
}
```

