# Meeting Scheduler (OOD)

## Entities:

- Scheduler
- Room
- Meeting

## Classes:

### Scheduler
- Rooms Room[]

### Room
- Name STRING
- Meetings Meeting[]

### Meeting
- Start INT
- End INT
- Room Room

--------------------------------------

From src/public folder start php local server -
./../../php/php.exe -S localhost:8080 -c ../../php/php.ini

--------------------------------------

### Test Meeting Scheduler Flow: