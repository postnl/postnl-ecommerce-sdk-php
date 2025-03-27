
# Amount

## Structure

`Amount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amountType` | `string` | Required | Amount type. Please see [Amount types](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/amount-types) for the available types.<br>**Constraints**: *Pattern*: `^\d{2}$` | getAmountType(): string | setAmountType(string amountType): void |
| `accountName` | `?string` | Optional | Name of bank account owner<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getAccountName(): ?string | setAccountName(?string accountName): void |
| `bIC` | `?string` | Optional | BIC number,optional for COD shipments (mandatory for bank account number other than originating in The Netherlands)<br>**Constraints**: *Minimum Length*: `8`, *Maximum Length*: `11` | getBIC(): ?string | setBIC(?string bIC): void |
| `currency` | `?string` | Optional | Currency code. only EUR, GBP, USD and CNY are allowed.<br>**Constraints**: *Pattern*: `^[A-Z]{3}$` | getCurrency(): ?string | setCurrency(?string currency): void |
| `iBAN` | `?string` | Optional | IBAN bank account number,mandatory for COD shipments. Dutch IBAN numbers are 18 characters<br>**Constraints**: *Minimum Length*: `15`, *Maximum Length*: `31` | getIBAN(): ?string | setIBAN(?string iBAN): void |
| `reference` | `?string` | Optional | Personal payment reference<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getReference(): ?string | setReference(?string reference): void |
| `transactionNumber` | `?string` | Optional | Transaction number<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getTransactionNumber(): ?string | setTransactionNumber(?string transactionNumber): void |
| `value` | `float` | Required | Money value in EUR (unless value Currency is specified for another currency). Value format (N6.2): #####0.00 (2 digits behind decimal dot). Mandatory for COD, Insured products (with the exception of certain productcodes with a standard insured amount).<br>**Constraints**: `>= 0` | getValue(): float | setValue(float value): void |

## Example (as JSON)

```json
{
  "AmountType": "01",
  "AccountName": "C. de Ruiter",
  "BIC": "RABONL2UXXX",
  "Currency": "EUR",
  "IBAN": "NL00RABO0123456789",
  "Reference": "1234-5678",
  "TransactionNumber": "1234",
  "Value": 20.35
}
```

