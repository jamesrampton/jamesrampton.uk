---
title: "Finding files in a huge codebase"
date: 2024-02-24T16:43:36Z
draft: false
summary: "Finding stuff when you don't know where to look."
tags: ["programming", "shell", "tips"]
---

I was just now inspired by [this video](https://www.youtube.com/watch?v=TVwXzK0IaeI) from Luke Pighetti on how he manages to get around a 380k loc codebase. In it, he pipes `ag` into `fzf` for a full search including file names and contents. I'm not sure why I've never though to do that before.

I don't have `ag` installed, and anyway, I'm a bit of a rust fan, so here's what I'd use:

``` shell
rg . -n | sk
```

The `-n` flag to `rg` makes sure line numbers pop up in search results. I could say `sk --case=respect` if I want non-smart case search, and use `'` before a term to disable fuzzy matching on the fly.

Neat.
