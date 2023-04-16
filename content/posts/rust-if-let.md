---
title: "Learning Point: if let in rust"
date: 2023-04-16T06:50:48+01:00
draft: false
summary: "rust's `if let` syntax is not so confusing"
tags: ["programming", "rust"]
mastodon_link: "https://mastodon.social/@jamesrampton/110207353366084608"
---
Take this example of rust's `if let` syntax:
```rust
if let Some(x) = my_fn() {
  println!("{}", x);
}
```
Many explanations I've seen of this go something like:

> To make this easy to understand: if the expression on the right hand side of the `=` matches `Some(x)` do something with `x` inside the `if` block.

While this is true, I wondered why, if we're doing pattern matching, there is only one `=` (instead of, maybe the comparison operator, `==`). Overall, this wasn't cemented for me until thinking about it in the following way:

> Matching is destructuring, but for when you don't know if the destructuring will succeed.

With that in mind, let's recap on what destructuring is:

```rust
fn main() {
    let (x, y, z) = my_tuple_fn();
    println!("{}", x);
    println!("{}", y);
    println!("{}", z);
}

fn my_tuple_fn() -> (i32, i32, i32) {
    (1, 2, 3)
}
```

This evaluates the expression `my_tuple_fn()` and binds `x`, `y`, and `z` to the result. We're not left with a tuple, we've _bound_ the contents of the tuple to three variable names.

Now imagine we want to do something like this (it won't compile):

```rust
fn main() {
    let Some(x) = my_option_fn();
    println!("{}", x);
}

fn my_option_fn() -> Option<i32> {
    Some(1)
}
```

The compiler gives us this helpful message:

```rust
❯ cargo run
   Compiling if_let v0.1.0 (/Users/jr/code/learning/if_let)
error[E0005]: refutable pattern in local binding
 --> src/main.rs:2:9
  |
2 |     let Some(x) = my_option_fn();
  |         ^^^^^^^ pattern `None` not covered
  |
  = note: `let` bindings require an "irrefutable pattern", like a `struct` or an `enum` with only one variant
  = note: for more information, visit https://doc.rust-lang.org/book/ch18-02-refutability.html
  = note: the matched value is of type `Option<i32>`
help: you might want to use `let else` to handle the variant that isn't matched
  |
2 |     let Some(x) = my_option_fn() else { todo!() };
  |                                  ++++++++++++++++

For more information about this error, try `rustc --explain E0005`.
error: could not compile `if_let` due to previous error
```

Ok, makes sense. If we can't be sure that `my_option_fn` will evaluate to the `Some` variant, then we need to handle — or ignore — the case where it doesn't. The compiler is suggesting we can fix this using `let else`, which is perhaps for another time. For the purposes of this article, though, this experiment really helped me understand why `if let` is written the way it is. We must try the destructuring and `if` it succeeds, we can do someting with the value bound to the destructured variable name.