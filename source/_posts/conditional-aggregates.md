---
extends: _layouts.post
section: content
title: Conditional Aggregates
date: 2021-02-08
description: Using conditional aggregates with MySQL
categories: [code]
---

Let's say in your database you have a posts table with an id column and a status column among others:

| ID | Status |
| --- | --- |
| 1  | published |
| 2  | published |
| 3  | scheduled |
| 4  | scheduled |
| 5  | drafted |

In an admin panel, if we wanted to show the count of the posts with a particular status, we could write separate queries for each status like this.

```sql
select count(*) from posts where status = 'published';
select count(*) from posts where status = 'scheduled';
select count(*) from posts where status = 'drafted';
```

A better approach would be to perform a single query using Conditional Aggregates. In MySQL, you can use a `case` statement inside the parenthesis of the `count` function.

```sql
select
    count(case status when 'published' then 1 end) as published,
    count(case status when 'scheduled' then 1 end) as scheduled,
    count(case status when 'drafted' then 1 end) as drafted
from posts;
```

The results should show the count of each status in a separate column.

| published | scheduled | drafted |
| --- | --- | --- |
| 2 | 2 | 1|

The `as` keyword at the end of the count function is aliasing it as the name of the status for convenience. If you don't include it, the name of each column would be the entire `count()` function call.
