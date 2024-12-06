---
title: Custom Ordering Algorithm
description: Using a custom ordering algorithm in MySQL.
pubDate: 2021-05-15
---

One approach to ordering data in MySQL would be to add an order by clause at the end of your query such as `ORDER BY id ASC`. This works perfectly fine for simple queries, but it doesn't give you much control over the ordering. To get around this, we can use an expression instead of a column.

For example, let's say we have a table of posts like this:

| ID | Title | Status |
| --- | --- | --- |
| 1 | Title 1  | published |
| 2 | Title 2  | drafted |
| 3 | Title 3  | scheduled |
| 4 | Title 4  | scheduled |
| 5 | Title 5  | published |

If we used the column approach, our query could be like this which would show the scheduled posts followed by the published and then the drafted posts.

```sql
select * from posts order by status desc;
```

| ID | Title | Status |
| --- | --- | --- |
| 3 | Title 3 | scheduled |
| 4 | Title 4 | scheduled |
| 1 | Title 1 | published |
| 5 | Title 5 | published |
| 2 | Title 2 | drafted |

What if we wanted to show the published posts first followed by the scheduled posts and then the drafted posts? We can use an expression in place of the column in the order by clause. Our query can then become this.

```sql
select *
from posts
order by case status
    when 'published' then 1
    when 'scheduled' then 2
    when 'drafted' then 3
end;
```

| ID | Title | Status |
| --- | --- | --- |
| 1 | Title 1 | published |
| 5 | Title 5 | published |
| 3 | Title 3 | scheduled |
| 4 | Title 4 | scheduled |
| 2 | Title 2 | drafted |

Much better! Now we have more granular control over the ordering of the data.
