
# Account

The information of the new account to be created with the order. Note
that this actually specifies the invoice owner account of the
subscriptions included in this order. To create the new account,
either a **creditCard** structure or the
**hpmCreditCardPaymentMethodId** field (but not both) should be
provided. The one provided becomes the default payment method for this
account. If the credit card information is declined or can't be
verified, then the account is not created.

## Structure

`Account`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | **Constraints**: *Maximum Length*: `70` | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `additionalEmailAddresses` | `?string` | Optional | List of additional email addresses to receive emailed invoices. Values should be a comma-separated list of email addresses.<br>**Constraints**: *Maximum Length*: `1200` | getAdditionalEmailAddresses(): ?string | setAdditionalEmailAddresses(?string additionalEmailAddresses): void |
| `customerServiceRepName` | `?string` | Optional | Name of the account's customer service representative, if applicable.<br>**Constraints**: *Maximum Length*: `50` | getCustomerServiceRepName(): ?string | setCustomerServiceRepName(?string customerServiceRepName): void |
| `purchaseOrderNumber` | `?string` | Optional | The number of the purchase order associated with this account. Purchase order information generally comes from customers.<br>**Constraints**: *Maximum Length*: `100` | getPurchaseOrderNumber(): ?string | setPurchaseOrderNumber(?string purchaseOrderNumber): void |
| `salesRep` | `?string` | Optional | The name of the sales representative associated with this account, if applicable.<br>**Constraints**: *Maximum Length*: `50` | getSalesRep(): ?string | setSalesRep(?string salesRep): void |
| `sequenceSetId` | `?string` | Optional | The ID of the billing document sequence set to assign to the customer account.<br><br>The billing documents to generate for this account will adopt the prefix and starting document number configured in the sequence set. | getSequenceSetId(): ?string | setSequenceSetId(?string sequenceSetId): void |
| `allowInvoiceEdit` | `?bool` | Optional | Indicates if associated invoices can be edited.<br>Values are:<br><br>* `true`<br>* `false` (default)<br>**Default**: `false` | getAllowInvoiceEdit(): ?bool | setAllowInvoiceEdit(?bool allowInvoiceEdit): void |
| `name` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getName(): ?string | setName(?string name): void |
| `currency` | `?string` | Optional | 3 uppercase character currency code | getCurrency(): ?string | setCurrency(?string currency): void |
| `billCycleDay` | `?int` | Optional | Day of the month that the account prefers billing periods to begin on. If set to 0, the bill cycle day will be set as "AutoSet".<br>**Constraints**: `>= 0`, `<= 31` | getBillCycleDay(): ?int | setBillCycleDay(?int billCycleDay): void |
| `invoiceDeliveryPrefsPrint` | `?bool` | Optional | Specifies whether to turn on the invoice delivery method 'Print' for the new account.<br>Values are:<br><br>* `true`. Turn on the invoice delivery method 'Print' for the new account.<br>* `false` (default). Turn off the invoice delivery method 'Print' for the new account.<br>**Default**: `false` | getInvoiceDeliveryPrefsPrint(): ?bool | setInvoiceDeliveryPrefsPrint(?bool invoiceDeliveryPrefsPrint): void |
| `invoiceDeliveryPrefsEmail` | `?bool` | Optional | Specifies whether to turn on the invoice delivery method 'Email' for the new account.<br>Values are:<br><br>* `true` (default). Turn on the invoice delivery method 'Email' for the new account.<br>* `false`. Turn off the invoice delivery method 'Email' for the new account.<br>**Default**: `false` | getInvoiceDeliveryPrefsEmail(): ?bool | setInvoiceDeliveryPrefsEmail(?bool invoiceDeliveryPrefsEmail): void |
| `autoPay` | `?bool` | Optional | Specifies whether future payments are to be automatically billed when they are due. Possible values are `true`, `false`.<br>**Default**: `true` | getAutoPay(): ?bool | setAutoPay(?bool autoPay): void |
| `paymentTerm` | `?string` | Optional | - | getPaymentTerm(): ?string | setPaymentTerm(?string paymentTerm): void |
| `communicationProfileId` | `?string` | Optional | aaa. | getCommunicationProfileId(): ?string | setCommunicationProfileId(?string communicationProfileId): void |
| `batch` | `?string` | Optional | Organizes your customer accounts into groups to optimize your billing and payment operations. | getBatch(): ?string | setBatch(?string batch): void |
| `invoiceTemplateId` | `?string` | Optional | Invoice template ID, configured in Billing Settings. | getInvoiceTemplateId(): ?string | setInvoiceTemplateId(?string invoiceTemplateId): void |
| `debitMemoTemplateId` | `?string` | Optional | The unique ID of the debit memo template, configured in Billing Settings. | getDebitMemoTemplateId(): ?string | setDebitMemoTemplateId(?string debitMemoTemplateId): void |
| `creditMemoTemplateId` | `?string` | Optional | The unique ID of the credit memo template, configured in Billing Settings. | getCreditMemoTemplateId(): ?string | setCreditMemoTemplateId(?string creditMemoTemplateId): void |
| `billToContact` | [`?BillToContactPostOrder`](../../doc/models/bill-to-contact-post-order.md) | Optional | - | getBillToContact(): ?BillToContactPostOrder | setBillToContact(?BillToContactPostOrder billToContact): void |
| `soldToContact` | [`?BillToContactPostOrder`](../../doc/models/bill-to-contact-post-order.md) | Optional | - | getSoldToContact(): ?BillToContactPostOrder | setSoldToContact(?BillToContactPostOrder soldToContact): void |

## Example (as JSON)

```json
{
  "accountNumber": "1234567890",
  "additionalEmailAddresses": "sample@email.com",
  "customerServiceRepName": "Alex Cutter",
  "purchaseOrderNumber": "q12345",
  "salesRep": "Alex Cutter",
  "sequenceSetId": "1",
  "allowInvoiceEdit": false,
  "name": "Demo test Account",
  "currency": "USD",
  "invoiceDeliveryPrefsPrint": false,
  "invoiceDeliveryPrefsEmail": false,
  "autoPay": true,
  "paymentTerm": "Due Upon Receipt",
  "communicationProfileId": "c123",
  "batch": "b1",
  "invoiceTemplateId": "in1",
  "debitMemoTemplateId": "dm1",
  "creditMemoTemplateId": "cm1"
}
```

