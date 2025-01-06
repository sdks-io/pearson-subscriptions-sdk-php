
# Renewal Term

## Structure

`RenewalTerm`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `period` | `?int` | Optional | Duration of the renewal term in months, years, days, or weeks, depending on the value of the `periodType` field. | getPeriod(): ?int | setPeriod(?int period): void |
| `periodType` | [`?string(PeriodTypeEnum)`](../../doc/models/period-type-enum.md) | Optional | Unit of time that the renewal term is measured in. | getPeriodType(): ?string | setPeriodType(?string periodType): void |

## Example (as JSON)

```json
{
  "period": 102,
  "periodType": "Day"
}
```

