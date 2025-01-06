
# Update Subscription

## Structure

`UpdateSubscription`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orderType` | [`string(OrderTypeEnum)`](../../doc/models/order-type-enum.md) | Required | Order Type .<br>**Constraints**: *Maximum Length*: `50` | getOrderType(): string | setOrderType(string orderType): void |
| `orderNumber` | `?string` | Optional | Hybris Order Number.<br>**Constraints**: *Maximum Length*: `50` | getOrderNumber(): ?string | setOrderNumber(?string orderNumber): void |
| `orderDate` | `?string` | Optional | The date when the order is signed. All the order actions under this order will use this order date as the contract effective date if the contract effective date field is skipped or its value is left as null. | getOrderDate(): ?string | setOrderDate(?string orderDate): void |
| `description` | `?string` | Optional | A description of the order.<br>**Constraints**: *Maximum Length*: `500` | getDescription(): ?string | setDescription(?string description): void |
| `existingAccountNumber` | `?string` | Optional | The account number that this order will be created under. It can be either the accountNumber or the account info provided.<br>**Constraints**: *Maximum Length*: `70` | getExistingAccountNumber(): ?string | setExistingAccountNumber(?string existingAccountNumber): void |
| `account` | [`?Account`](../../doc/models/account.md) | Optional | - | getAccount(): ?Account | setAccount(?Account account): void |
| `updateSubscriptionSubscriptions` | [`?(UpdateSubscriptionSubscription[])`](../../doc/models/update-subscription-subscription.md) | Optional | Each item includes a set of order actions, which will be applied to the same base subscription. | getUpdateSubscriptionSubscriptions(): ?array | setUpdateSubscriptionSubscriptions(?array updateSubscriptionSubscriptions): void |
| `updateSubscriptionProcessingOptions` | [`?UpdateSubscriptionProcessingOptions`](../../doc/models/update-subscription-processing-options.md) | Optional | Invoice or Payment. | getUpdateSubscriptionProcessingOptions(): ?UpdateSubscriptionProcessingOptions | setUpdateSubscriptionProcessingOptions(?UpdateSubscriptionProcessingOptions updateSubscriptionProcessingOptions): void |
| `updateSubscriptionProducts` | [`?(Product[])`](../../doc/models/product.md) | Optional | - | getUpdateSubscriptionProducts(): ?array | setUpdateSubscriptionProducts(?array updateSubscriptionProducts): void |
| `customFields` | [`?(CustomField[])`](../../doc/models/custom-field.md) | Optional | Information about the payment related fields. | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `paymentCapture` | `?array` | Optional | - | getPaymentCapture(): ?array | setPaymentCapture(?array paymentCapture): void |

## Example (as JSON)

```json
{
  "orderType": "UPGRADE",
  "orderNumber": "10034567",
  "description": "Sample description of the API",
  "existingAccountNumber": "A000000001",
  "updateSubscriptionProducts": [
    {
      "isbn": "20045634128",
      "endDate": "2021-05-14T07:12:27.152-0500",
      "ppid": "A101702992101"
    },
    {
      "isbn": "10045634128",
      "endDate": "2021-05-14T07:12:27.152-0500",
      "ppid": "A101702992102"
    }
  ],
  "customFields": [
    {
      "name": "paymentMethod__c",
      "value": "CREDIT CARD"
    },
    {
      "name": "paymentInfo__c",
      "value": "CREDIT CARD"
    },
    {
      "name": "paymentToken__c",
      "value": "4111111111111111"
    },
    {
      "name": "iesId__c",
      "value": "ea9mmnj1qe2tghnb3"
    },
    {
      "name": "hybrisAccountNumber__c",
      "value": "456"
    },
    {
      "name": "tepAccountNumber__c",
      "value": "c123"
    },
    {
      "name": "institutionId__c",
      "value": "5678"
    },
    {
      "name": "tepPartyId__c",
      "value": "GH6789"
    },
    {
      "name": "campaignName__c",
      "value": "test val"
    },
    {
      "name": "promoCode__c",
      "value": "PM10"
    },
    {
      "name": "couponCode__c",
      "value": "BA10"
    },
    {
      "name": "discountCodeStartDate__c",
      "value": "2021-09-21"
    },
    {
      "name": "discountCodeEndDate__c",
      "value": "2021-11-21"
    },
    {
      "name": "amountBeforeTax__c",
      "value": "9.99"
    },
    {
      "name": "discountedAmountBeforeTax__c",
      "value": "9.99"
    },
    {
      "name": "subscriptionSource__c",
      "value": "channel_partner"
    },
    {
      "name": "upFrontPayment__c",
      "value": "true"
    },
    {
      "name": "embeddedPromoCode__c",
      "value": "string"
    },
    {
      "name": "discountCodeDescription__c",
      "value": "string"
    }
  ],
  "orderDate": "orderDate6",
  "account": {
    "accountNumber": "accountNumber8",
    "additionalEmailAddresses": "additionalEmailAddresses0",
    "customerServiceRepName": "customerServiceRepName4",
    "purchaseOrderNumber": "purchaseOrderNumber0",
    "salesRep": "salesRep0"
  }
}
```

