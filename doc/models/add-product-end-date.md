
# Add Product End Date

## Structure

`AddProductEndDate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `endDateCondition` | [`?string(EndDateConditionEnum)`](../../doc/models/end-date-condition-enum.md) | Optional | enum values are "Subscription_End" "Fixed_Period" "Specific_End_Date" | getEndDateCondition(): ?string | setEndDateCondition(?string endDateCondition): void |
| `specificEndDate` | `?string` | Optional | - | getSpecificEndDate(): ?string | setSpecificEndDate(?string specificEndDate): void |
| `upToPeriods` | `?float` | Optional | - | getUpToPeriods(): ?float | setUpToPeriods(?float upToPeriods): void |
| `upToPeriodsType` | `?string` | Optional | - | getUpToPeriodsType(): ?string | setUpToPeriodsType(?string upToPeriodsType): void |

## Example (as JSON)

```json
{
  "endDateCondition": "Fixed_Period",
  "specificEndDate": "specificEndDate8",
  "upToPeriods": 47.48,
  "upToPeriodsType": "upToPeriodsType2"
}
```

