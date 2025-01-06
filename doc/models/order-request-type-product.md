
# Order Request Type Product

## Structure

`OrderRequestTypeProduct`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `isbn` | `?string` | Optional | product isbn value<br>**Constraints**: *Minimum Length*: `1` | getIsbn(): ?string | setIsbn(?string isbn): void |
| `ppid` | `?string` | Optional | product ppid value<br>**Constraints**: *Minimum Length*: `1` | getPpid(): ?string | setPpid(?string ppid): void |
| `duration` | `?float` | Optional | Duration of the entitlement in days for this product | getDuration(): ?float | setDuration(?float duration): void |
| `tax` | `?float` | Optional | Cost of tax on the product | getTax(): ?float | setTax(?float tax): void |
| `price` | `?float` | Optional | Cost of the product | getPrice(): ?float | setPrice(?float price): void |

## Example (as JSON)

```json
{
  "isbn": "isbn2",
  "ppid": "ppid6",
  "duration": 32.56,
  "tax": 244.04,
  "price": 147.92
}
```

