---
title: "Piping files into helix with nushell"
date: 2024-01-19T11:40:50+00:00
draft: false
summary: "rust's `if let` syntax is not so confusing"
tags: ["programming", "shell", "tips"]
---

I'm fairly new to [nushell](https://www.nushell.sh)'s syntax and this took a few minutes to figure out. This really serves as a note to self until it's in my muscle memory.

## Scenario

> I want to search for a bunch of files in a project and open them all in my text editor.

The incantation to use is:

```shell
hx ...(rg -l term | split row "\n")
```

Breaking down this command:

`rg -l term` finds all files matching `term` in the current directory with [ripgrep](https://github.com/BurntSushi/ripgrep). The `-l` flag lists only the file names, not the locations of the matches.

`split row "\n"` turns the output into a nushell datatable, the rows for which are delimited by the newline character.

We use string interpolation to turn this into arguments for helix with `(` and `)`. And finally, we use the spread operator (`...`) to denote this is a list that we're interpolating.

