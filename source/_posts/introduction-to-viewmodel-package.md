---
extends: _layouts.post
section: content
title: Introduction to ViewModel Package
date: 2020-01-20
description: Introduction to a ViewModel package for Laravel
categories: [coding]
---

While working on a side project, I had a couple of pieces of presentational logic but didn't exactly know where put them. Originally, I had them as getters on the model similar to this:

```php
class Post extends Model
{
    // ...

    public function getShortTitleAttribute()
    {
        return substr($this->title, 0, 50);
    }
}
```

Then, in my blade template I called them like `{{ $post->short_title }}`.

That solution was fine for a little bit but I didn't like mixing the presentational logic in with the rest of the methods on the model. I started doing some research and found a couple of other packages that did something similar, but I still wasn't happy with the implementation for one reason or another.

Which got me to start thinking about how I would want the package to function. I liked the idea of using a trait that can be added to a model similar to the traits on the base [Eloquent Model](https://github.com/laravel/framework/blob/master/src/Illuminate/Database/Eloquent/Model.php#L22) class.

Then after some tinkering around, I came up with [this package](https://github.com/jaytyrrell13/view-model).

Which works by intercepting any property or method calls on the model and checking if they exist in the corresponding view model class. If they do, then that gets return and if not, then it simply passes the call off to Eloquent.

There is a `make:view-model` Artisan command included to help easily scaffold a view model class that includes a `--test` or `-t` option to scaffold a test class.

If you have any questions or comments, please either [email me](mailto:jay@jaytyrrell.co) or open an issue on the [repository](https://github.com/jaytyrrell13/view-model).
