---
title: "Opening files in a huge codebase"
date: 2024-02-25T07:05:52Z
draft: false
summary: "More command line incantations for finding files and opening them at the right place."
---

It occurs to me that my last two posts ([1]({{< ref "/posts/piping-files-into-helix-with-nushell" >}}), [2]({{< ref "/posts/finding-files-in-a-huge-codebase" >}})) could be quite useful together. So here's a little one liner that will open the results of a search in helix at the correct line number:

``` shell
  hx (rg . -n | sk | cut -d : -f1,2)
```

`sk` will display each result with the filename, line, number, and text of the line, all separated by a colon. `cut -d : -f1,2` splits the output of `sk` by the `:` character and returns the first and second fields, which are the file name and line number. Helix can interpret this as a direction to open the file at that line.

Handy. Now if only there was a Rust equivalent of `cut`...
