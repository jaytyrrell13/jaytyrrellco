---
extends: _layouts.post
section: content
title: Time zones and date strings
date: 2021-07-02
description: Learn about a recent issue I was having with time zones and date strings using express validator.
categories: [code]
---

Recently, I ran into an issue with time zones and date strings. I was running an [Express app](https://expressjs.com/) and the `toDate` sanitizer from [validator.js](https://github.com/validatorjs/validator.js) via [express validator](https://express-validator.github.io/docs/).

Just for illustrative purposes, let's say I want to delete the oldest users that fall within a specific date range by making a request like this.

```js
axios.delete('/users', {
  startDate: '2020-06-01',
  endDate: '2020-09-01'
})
```

My route definition could look like this.

```js
app.delete('/users',
  body('startDate').toDate(),
  body('endDate').toDate(),
  (req, res) => {
    const startDate = req.body.startDate
    const endDate = req.body.endDate

    // Delete all users where their created_at
    // is between startDate and endDate
  }
)
```

Then, I can expect `startDate` and `endDate` to be instances of the [Date](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date) object. If you console log them you should see this.

```js
startDate 2020-06-01T00:00:00.000Z
endDate 2020-08-01T00:00:00.000Z
```

Since there was no time portion in the request, the Date object interpreted it as midnight UTC. If there were any users that have a `created_at` column of 05/31/2020 at 9:00pm Eastern, they would be incorrectly deleted. The reason is because their `created_at` timestamp would be stored in the database as `2020-06-01T01:00:00.000Z` UTC.

One solution to this problem would be to pass the timezone in the request like this.

```js
axios.delete('/users', {
  startDate: '2020-06-01',
  endDate: '2020-09-01',
  timezone: 'America/New_York'
})
```

Then, to remove the `toDate` sanitizers.

```js
app.delete('/users',
  (req, res) => {
    // ...
  }
)
```

You can manually parse the dates using a library like [Luxon](https://moment.github.io/luxon/).

```js
import { DateTime } from 'luxon'

app.delete('/users', (req, res) => {
  const timezone = req.body.timezone
  const startDate = DateTime.fromFormat(req.body.startDate, 'yyyy-MM-dd', { zone: timezone })
    .startOf('day')
    .toUTC()
    .toJSDate()
  const endDate = DateTime.fromFormat(req.body.endDate, 'yyyy-MM-dd', { zone: timezone })
    .startOf('day')
    .toUTC()
    .toJSDate()

  // ...
})
```

Now if you console log the start and end date, you should get the correct times.

```js
startDate 2020-06-01T04:00:00.000Z
endDate 2020-08-01T04:00:00.000Z
```
