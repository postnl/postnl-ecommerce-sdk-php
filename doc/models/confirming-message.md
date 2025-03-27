
# Confirming Message

## Structure

`ConfirmingMessage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `messageID` | `string` | Required | ID of the message<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `12` | getMessageID(): string | setMessageID(string messageID): void |
| `messageTimeStamp` | `string` | Required | Date/time of sending the message. Format: dd-mm-yyyy hh:mm:ss<br>**Constraints**: *Pattern*: `^[0-3]\d-[01]\d-[12]\d{3}\s[0-2]\d:[0-5]\d:[0-5]\d$` | getMessageTimeStamp(): string | setMessageTimeStamp(string messageTimeStamp): void |

## Example (as JSON)

```json
{
  "MessageID": "1",
  "MessageTimeStamp": "29-06-2016 12:00:00"
}
```

