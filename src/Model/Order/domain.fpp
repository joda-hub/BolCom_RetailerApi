namespace BolCom\RetailerApi\Model\Order {
    data OrderId = String deriving(FromString, ToString);

    data Order = Order {
        OrderId $orderId,
        \BolCom\RetailerApi\Model\DateTime $dateTimeOrderPlaced,
        OrderCustomerDetails $customerDetails,
        OrderItem[] $orderItems,
    } deriving (FromArray);

    data OrderList = OrderList {
        Order[] $orders
    } deriving (FromArray);

    data OrderCustomerDetails = OrderCustomerDetails {
        AddressDetails $shipmentDetails,
        AddressDetails $billingDetails,
    } deriving (FromArray);

    data AddressDetails = AddressDetails {
        string $salutationCode,
        string $firstName,
        string $surName,
        string $streetName,
        string $houseNumber,
        string $houseNumberExtended,
        string $addressSupplement,
        string $extraAddressInformation,
        string $zipCode,
        string $city,
        string $countryCode,
        string $email,
        string $company,
        string $vatNumber,
        string $deliveryPhoneNumber
    } deriving (FromArray);

    data OrderItemId = String deriving (FromString, ToString);

    data Quantity = Int deriving(FromScalar, ToScalar);

    data OrderItem = OrderItem {
        OrderItemId $orderItemId,
        string $orderReference,
        \BolCom\RetailerApi\Model\Offer\Ean $ean,
        string $title,
        Quantity $quantity,
        \BolCom\RetailerApi\Model\CurrencyAmount $offerPrice,
        float $transactionFee,
        \BolCom\RetailerApi\Model\Date $latestDeliveryDate,
        \BolCom\RetailerApi\Model\Offer\Condition $offerCondition,
        string $cancelRequest,
        \BolCom\RetailerApi\Model\Shipment\FulfilmentMethod $fulfilmentMethod,
        SelectedDeliveryWindow $selectedDeliveryWindow
    } deriving (FromArray);

    data SelectedDeliveryWindow = SelectedDeliveryWindow {
        \BolCom\RetailerApi\Model\Date $date,
        \BolCom\RetailerApi\Model\DateTime $start,
        \BolCom\RetailerApi\Model\DateTime $end
    } deriving (FromArray);

    data CancellationReason = OUT_OF_STOCK | REQUESTED_BY_CUSTOMER | BAD_CONDITION | HIGHER_SHIPCOST | INCORRECT_PRICE | NOT_AVAIL_IN_TIME | NO_BOL_GUARANTEE | ORDERED_TWICE | RETAIN_ITEM | TECH_ISSUE | UNFINDABLE_ITEM | OTHER deriving(Enum);
}

namespace BolCom\RetailerApi\Model\Order\Query {
    data GetOrder = GetOrder {
        \BolCom\RetailerApi\Model\Order\OrderId $orderId
    } deriving (Query);

    data GetAllOpenOrders = GetAllOpenOrders {
        int $page,
        \BolCom\RetailerApi\Model\Shipment\FulfilmentMethod $shipmentsMethod
    } deriving (Query);
}

namespace BolCom\RetailerApi\Model\Order\Command {
    data CancelOrder = CancelOrder {
        \BolCom\RetailerApi\Model\Order\OrderItemId $orderItemId,
        ?\BolCom\RetailerApi\Model\DateTime $dateTime,
        ?\BolCom\RetailerApi\Model\Order\CancellationReason $reasonCode
    } deriving (Query);

    data ShipOrderItem = ShipOrderItem {
        \BolCom\RetailerApi\Model\Order\OrderItemId $orderItemId,
        ?string $shipmentReference,
        ?string $shippingLabelCode,
        ?\BolCom\RetailerApi\Model\Transport\TransportInstruction $transportInstruction
    } deriving (Query);
}
