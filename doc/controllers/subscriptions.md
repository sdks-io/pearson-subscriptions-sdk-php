# Subscriptions

```php
$subscriptionsController = $client->getSubscriptionsController();
```

## Class Name

`SubscriptionsController`

## Methods

* [Aggregate Subscription](../../doc/controllers/subscriptions.md#aggregate-subscription)
* [Update Subscription](../../doc/controllers/subscriptions.md#update-subscription)
* [Cancel Subscription](../../doc/controllers/subscriptions.md#cancel-subscription)
* [Expire Subscriptions](../../doc/controllers/subscriptions.md#expire-subscriptions)


# Aggregate Subscription

```php
function aggregateSubscription(
    string $xUserId,
    string $xAuthorization,
    OrderRequestType $body,
    ?string $xTransactionId = null
): OrderRespType
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xUserId` | `string` | Header, Required | UserId of an user who bought a subscription. This will be an IES userId |
| `xAuthorization` | `string` | Header, Required | This will be an IES system token |
| `body` | [`OrderRequestType`](../../doc/models/order-request-type.md) | Body, Required | Data |
| `xTransactionId` | `?string` | Header, Optional | Unique ID for a transaction |

## Response Type

[`OrderRespType`](../../doc/models/order-resp-type.md)

## Example Usage

```php
$xUserId = 'X-UserId4';

$xAuthorization = 'X-Authorization6';

$body = OrderRequestTypeBuilder::init()
    ->orderNumber('10034567')
    ->description('Sample description of the API')
    ->subscriptionModelName('Mojo')
    ->storeCode('US')
    ->swapTitle(false)
    ->sendEmail(true)
    ->orderRequestTypeProducts(
        [
            OrderRequestTypeProductBuilder::init()
                ->isbn('4280134085545')
                ->ppid('A101702992101')
                ->build(),
            OrderRequestTypeProductBuilder::init()
                ->isbn('4280134085546')
                ->ppid('A101702992102')
                ->build()
        ]
    )
    ->customFields(
        [
            CustomFieldBuilder::init()
                ->name('paymentMethod__c')
                ->value('CREDIT CARD')
                ->build(),
            CustomFieldBuilder::init()
                ->name('paymentInfo__c')
                ->value('CREDIT CARD')
                ->build(),
            CustomFieldBuilder::init()
                ->name('paymentToken__c')
                ->value('4111111111111111')
                ->build(),
            CustomFieldBuilder::init()
                ->name('iesId__c')
                ->value('ea9mmnj1qe2tghnb3')
                ->build(),
            CustomFieldBuilder::init()
                ->name('hybrisAccountNumber__c')
                ->value('456')
                ->build(),
            CustomFieldBuilder::init()
                ->name('tepAccountNumber__c')
                ->value('c123')
                ->build(),
            CustomFieldBuilder::init()
                ->name('institutionId__c')
                ->value('5678')
                ->build(),
            CustomFieldBuilder::init()
                ->name('tepPartyId__c')
                ->value('GH6789')
                ->build(),
            CustomFieldBuilder::init()
                ->name('campaignName__c')
                ->value('test val')
                ->build(),
            CustomFieldBuilder::init()
                ->name('promoCode__c')
                ->value('PM10')
                ->build(),
            CustomFieldBuilder::init()
                ->name('couponCode__c')
                ->value('BA10')
                ->build(),
            CustomFieldBuilder::init()
                ->name('discountCodeStartDate__c')
                ->value('2021-09-21')
                ->build(),
            CustomFieldBuilder::init()
                ->name('discountCodeEndDate__c')
                ->value('2021-11-21')
                ->build(),
            CustomFieldBuilder::init()
                ->name('amountBeforeTax__c')
                ->value('9.99')
                ->build(),
            CustomFieldBuilder::init()
                ->name('discountedAmountBeforeTax__c')
                ->value('9.99')
                ->build(),
            CustomFieldBuilder::init()
                ->name('subscriptionSource__c')
                ->value('channel_partner')
                ->build(),
            CustomFieldBuilder::init()
                ->name('upFrontPayment__c')
                ->value('true')
                ->build(),
            CustomFieldBuilder::init()
                ->name('embeddedPromoCode__c')
                ->value('string')
                ->build(),
            CustomFieldBuilder::init()
                ->name('discountCodeDescription__c')
                ->value('string')
                ->build()
        ]
    )
    ->build();

$result = $subscriptionsController->aggregateSubscription(
    $xUserId,
    $xAuthorization,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`InvalidReqTypeException`](../../doc/models/invalid-req-type-exception.md) |
| 401 | Unauthorized | [`AuthErrorTypeException`](../../doc/models/auth-error-type-exception.md) |
| 500 | Error | [`OrderRespTypeErrorException`](../../doc/models/order-resp-type-error-exception.md) |


# Update Subscription

```php
function updateSubscription(
    string $xUserId,
    string $xAuthorization,
    UpdateSubscription $body,
    ?string $xTransactionId = null
): OrderRespType
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xUserId` | `string` | Header, Required | UserId of an user who bought a subscription. This will be an IES userId |
| `xAuthorization` | `string` | Header, Required | This will be an IES system token |
| `body` | [`UpdateSubscription`](../../doc/models/update-subscription.md) | Body, Required | Data |
| `xTransactionId` | `?string` | Header, Optional | Unique ID for a transaction |

## Response Type

[`OrderRespType`](../../doc/models/order-resp-type.md)

## Example Usage

```php
$xUserId = 'X-UserId4';

$xAuthorization = 'X-Authorization6';

$body = UpdateSubscriptionBuilder::init(
    OrderTypeEnum::UPGRADE
)
    ->orderNumber('10034567')
    ->description('Sample description of the API')
    ->existingAccountNumber('A000000001')
    ->updateSubscriptionProducts(
        [
            ProductBuilder::init()
                ->isbn('20045634128')
                ->ppid('A101702992101')
                ->endDate('2021-05-14T07:12:27.152-0500')
                ->build(),
            ProductBuilder::init()
                ->isbn('10045634128')
                ->ppid('A101702992102')
                ->endDate('2021-05-14T07:12:27.152-0500')
                ->build()
        ]
    )
    ->customFields(
        [
            CustomFieldBuilder::init()
                ->name('paymentMethod__c')
                ->value('CREDIT CARD')
                ->build(),
            CustomFieldBuilder::init()
                ->name('paymentInfo__c')
                ->value('CREDIT CARD')
                ->build(),
            CustomFieldBuilder::init()
                ->name('paymentToken__c')
                ->value('4111111111111111')
                ->build(),
            CustomFieldBuilder::init()
                ->name('iesId__c')
                ->value('ea9mmnj1qe2tghnb3')
                ->build(),
            CustomFieldBuilder::init()
                ->name('hybrisAccountNumber__c')
                ->value('456')
                ->build(),
            CustomFieldBuilder::init()
                ->name('tepAccountNumber__c')
                ->value('c123')
                ->build(),
            CustomFieldBuilder::init()
                ->name('institutionId__c')
                ->value('5678')
                ->build(),
            CustomFieldBuilder::init()
                ->name('tepPartyId__c')
                ->value('GH6789')
                ->build(),
            CustomFieldBuilder::init()
                ->name('campaignName__c')
                ->value('test val')
                ->build(),
            CustomFieldBuilder::init()
                ->name('promoCode__c')
                ->value('PM10')
                ->build(),
            CustomFieldBuilder::init()
                ->name('couponCode__c')
                ->value('BA10')
                ->build(),
            CustomFieldBuilder::init()
                ->name('discountCodeStartDate__c')
                ->value('2021-09-21')
                ->build(),
            CustomFieldBuilder::init()
                ->name('discountCodeEndDate__c')
                ->value('2021-11-21')
                ->build(),
            CustomFieldBuilder::init()
                ->name('amountBeforeTax__c')
                ->value('9.99')
                ->build(),
            CustomFieldBuilder::init()
                ->name('discountedAmountBeforeTax__c')
                ->value('9.99')
                ->build(),
            CustomFieldBuilder::init()
                ->name('subscriptionSource__c')
                ->value('channel_partner')
                ->build(),
            CustomFieldBuilder::init()
                ->name('upFrontPayment__c')
                ->value('true')
                ->build(),
            CustomFieldBuilder::init()
                ->name('embeddedPromoCode__c')
                ->value('string')
                ->build(),
            CustomFieldBuilder::init()
                ->name('discountCodeDescription__c')
                ->value('string')
                ->build()
        ]
    )
    ->build();

$result = $subscriptionsController->updateSubscription(
    $xUserId,
    $xAuthorization,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`InvalidReqTypeException`](../../doc/models/invalid-req-type-exception.md) |
| 401 | Unauthorized | [`AuthErrorTypeException`](../../doc/models/auth-error-type-exception.md) |
| 500 | Error | [`OrderErrorTypeException`](../../doc/models/order-error-type-exception.md) |


# Cancel Subscription

Cancel subscription for a given subscription ID

```php
function cancelSubscription(
    string $userId,
    string $xAuthorization,
    CancelReqType $body,
    ?string $xTransactionId = null,
    ?string $origin = null
): CancelResType
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Header, Required | UserId of an user who bought a subscription. This will be an IES userId |
| `xAuthorization` | `string` | Header, Required | This will be an IES system token |
| `body` | [`CancelReqType`](../../doc/models/cancel-req-type.md) | Body, Required | Data |
| `xTransactionId` | `?string` | Header, Optional | Unique ID for a transaction |
| `origin` | `?string` | Header, Optional | Originating System |

## Response Type

[`CancelResType`](../../doc/models/cancel-res-type.md)

## Example Usage

```php
$userId = 'userId0';

$xAuthorization = 'X-Authorization6';

$body = CancelReqTypeBuilder::init(
    'urn:pearson:gps:subs:649e7109fc57341ba129e23',
    SubscriptionSourceEnum::INTERNAL,
    'No longer need service',
    '2023-06-30'
)->build();

$result = $subscriptionsController->cancelSubscription(
    $userId,
    $xAuthorization,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`InvalidReqTypeException`](../../doc/models/invalid-req-type-exception.md) |
| 401 | Unauthorized | [`AuthErrorTypeException`](../../doc/models/auth-error-type-exception.md) |
| 500 | Error | [`OrderErrorTypeException`](../../doc/models/order-error-type-exception.md) |


# Expire Subscriptions

Expire subscription for all past enddate internal and IA subscriptions

```php
function expireSubscriptions(): CancelResType
```

## Response Type

[`CancelResType`](../../doc/models/cancel-res-type.md)

## Example Usage

```php
$result = $subscriptionsController->expireSubscriptions();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`InvalidReqTypeException`](../../doc/models/invalid-req-type-exception.md) |
| 401 | Unauthorized | [`AuthErrorTypeException`](../../doc/models/auth-error-type-exception.md) |
| 500 | Error | [`OrderErrorTypeException`](../../doc/models/order-error-type-exception.md) |

