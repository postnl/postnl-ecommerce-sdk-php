
# Opening Hours

The standard opening hours of the pickup location

## Structure

`OpeningHours`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `monday` | [`?OpeningHoursPerDay`](../../doc/models/opening-hours-per-day.md) | Optional | - | getMonday(): ?OpeningHoursPerDay | setMonday(?OpeningHoursPerDay monday): void |
| `tuesday` | [`?OpeningHoursPerDay`](../../doc/models/opening-hours-per-day.md) | Optional | - | getTuesday(): ?OpeningHoursPerDay | setTuesday(?OpeningHoursPerDay tuesday): void |
| `wednesday` | [`?OpeningHoursPerDay`](../../doc/models/opening-hours-per-day.md) | Optional | - | getWednesday(): ?OpeningHoursPerDay | setWednesday(?OpeningHoursPerDay wednesday): void |
| `thursday` | [`?OpeningHoursPerDay`](../../doc/models/opening-hours-per-day.md) | Optional | - | getThursday(): ?OpeningHoursPerDay | setThursday(?OpeningHoursPerDay thursday): void |
| `friday` | [`?OpeningHoursPerDay`](../../doc/models/opening-hours-per-day.md) | Optional | - | getFriday(): ?OpeningHoursPerDay | setFriday(?OpeningHoursPerDay friday): void |
| `saturday` | [`?OpeningHoursPerDay`](../../doc/models/opening-hours-per-day.md) | Optional | - | getSaturday(): ?OpeningHoursPerDay | setSaturday(?OpeningHoursPerDay saturday): void |
| `sunday` | [`?OpeningHoursPerDay`](../../doc/models/opening-hours-per-day.md) | Optional | - | getSunday(): ?OpeningHoursPerDay | setSunday(?OpeningHoursPerDay sunday): void |

## Example (as JSON)

```json
{
  "Monday": {
    "From": "From0",
    "To": "To0"
  },
  "Tuesday": {
    "From": "From2",
    "To": "To2"
  },
  "Wednesday": {
    "From": "From4",
    "To": "To4"
  },
  "Thursday": {
    "From": "From0",
    "To": "To0"
  },
  "Friday": {
    "From": "From6",
    "To": "To4"
  }
}
```

