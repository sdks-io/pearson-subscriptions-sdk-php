
# Subscribe to Rate Plan

## Structure

`SubscribeToRatePlan`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productRatePlanId` | `?string` | Optional | This is unique Product Rate Plan id which signifies the subscription type,entitlementLevel,maxEntitlements,numEntitlements etc.<br>**Constraints**: *Minimum Length*: `1` | getProductRatePlanId(): ?string | setProductRatePlanId(?string productRatePlanId): void |
| `subscribeToRatePlansChargeOverrides` | [`?(SubscribeToRatePlansChargeOverride[])`](../../doc/models/subscribe-to-rate-plans-charge-override.md) | Optional | - | getSubscribeToRatePlansChargeOverrides(): ?array | setSubscribeToRatePlansChargeOverrides(?array subscribeToRatePlansChargeOverrides): void |

## Example (as JSON)

```json
{
  "productRatePlanId": "productRatePlanId4",
  "subscribeToRatePlansChargeOverrides": [
    {
      "productRatePlanChargeId": "productRatePlanChargeId8",
      "customerFacingCustomFields": {
        "customerFacing__c": "customerFacing__c0"
      },
      "ratePlanPricing": {
        "discount": {
          "discountAmount": 252.52,
          "discountPercentage": 13.42
        },
        "recurringFlatFee": {
          "listPrice": 233.52
        }
      },
      "ratePlanEndDate": {
        "endDateCondition": "Specific_End_Date",
        "specificEndDate": "2016-03-13",
        "upToPeriods": 187.74,
        "upToPeriodsType": "Billing_Periods"
      }
    }
  ]
}
```

