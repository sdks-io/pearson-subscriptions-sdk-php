
# Order Request Type

## Structure

`OrderRequestType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orderNumber` | `?string` | Optional | Hybris/PMC/OASIS Order Number.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `50` | getOrderNumber(): ?string | setOrderNumber(?string orderNumber): void |
| `orderDate` | `?DateTime` | Optional | The date when the order is signed. All the order actions under this order will use this order date as the contract effective date if the contract effective date field is skipped or its value is left as null. | getOrderDate(): ?\DateTime | setOrderDate(?\DateTime orderDate): void |
| `description` | `?string` | Optional | A description of the order.<br>**Constraints**: *Maximum Length*: `500` | getDescription(): ?string | setDescription(?string description): void |
| `subscriptionModelName` | `?string` | Optional | Subscription Model Name.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `50` | getSubscriptionModelName(): ?string | setSubscriptionModelName(?string subscriptionModelName): void |
| `storeCode` | `?string` | Optional | store identifier<br>**Constraints**: *Maximum Length*: `20` | getStoreCode(): ?string | setStoreCode(?string storeCode): void |
| `swapTitle` | `?bool` | Optional | Use for swapTitle.If swaptitle than value will be true. | getSwapTitle(): ?bool | setSwapTitle(?bool swapTitle): void |
| `sendEmail` | `?bool` | Optional | send email to the user | getSendEmail(): ?bool | setSendEmail(?bool sendEmail): void |
| `account` | [`?Account`](../../doc/models/account.md) | Optional | - | getAccount(): ?Account | setAccount(?Account account): void |
| `orderRequestTypeSubscriptions` | [`?(OrderRequestTypeSubscription[])`](../../doc/models/order-request-type-subscription.md) | Optional | new account details required to create subscription. This block is mandate for new customer | getOrderRequestTypeSubscriptions(): ?array | setOrderRequestTypeSubscriptions(?array orderRequestTypeSubscriptions): void |
| `orderRequestProcessingOptions` | [`?OrderRequestProcessingOptions`](../../doc/models/order-request-processing-options.md) | Optional | Invoice or Payment. | getOrderRequestProcessingOptions(): ?OrderRequestProcessingOptions | setOrderRequestProcessingOptions(?OrderRequestProcessingOptions orderRequestProcessingOptions): void |
| `orderRequestTypeProducts` | [`?(OrderRequestTypeProduct[])`](../../doc/models/order-request-type-product.md) | Optional | - | getOrderRequestTypeProducts(): ?array | setOrderRequestTypeProducts(?array orderRequestTypeProducts): void |
| `customFields` | [`?(CustomField[])`](../../doc/models/custom-field.md) | Optional | Information about the payment related fields. | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `paymentCapture` | `?array` | Optional | - | getPaymentCapture(): ?array | setPaymentCapture(?array paymentCapture): void |

## Example (as JSON)

```json
{
  "orderNumber": "10034567",
  "description": "Sample description of the API",
  "subscriptionModelName": "Mojo",
  "storeCode": "US",
  "swapTitle": false,
  "sendEmail": true,
  "orderRequestTypeProducts": [
    {
      "isbn": "4280134085545",
      "ppid": "A101702992101"
    },
    {
      "isbn": "4280134085546",
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
  "orderDate": "2016-03-13"
}
```

