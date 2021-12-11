+++
author = "James Rampton"
date = 2021-05-10T17:11:41Z
description = "A test post with some common elements"
draft = true
featured_image = "https://picsum.photos/1920/600"
featured_image_alt_text = "An example image"
title = "Hello, world!"
+++
Donec sed _odio_ dui. Praesent commodo [cursus](https://example.com) magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum.

## Curabitur blandit tempus porttitor

Maecenas faucibus **mollis** interdum. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui.

- Lorem
- ipsum
- dolor
  
1) sit
2) amet

> Consectetur adipiscing elit.

### Maecenas faucibus mollis interdum

Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed diam eget risus varius blandit sit amet non magna.

```rust
use std::ffi::{OsStr, OsString};
use std::path::Path;
use std::process::Command;
use std::thread;
use std::time::{Duration, SystemTime};

/// # Panics
///
/// Panics if the python commands could not be spawned
pub fn run(port: u16, lint: Option<&str>) -> ! {
    let mut url = Some(match lint {
        None => format!("http://localhost:{}", port),
        Some(lint) => format!("http://localhost:{}/#{}", port, lint),
    });

    loop {
        if mtime("util/gh-pages/lints.json") < mtime("clippy_lints/src") {
            Command::new("cargo")
                .arg("collect-metadata")
                .spawn()
                .unwrap()
                .wait()
                .unwrap();
        }
        if let Some(url) = url.take() {
            thread::spawn(move || {
                Command::new("python3")
                    .arg("-m")
                    .arg("http.server")
                    .arg(port.to_string())
                    .current_dir("util/gh-pages")
                    .spawn()
                    .unwrap();
                // Give some time for python to start
                thread::sleep(Duration::from_millis(500));
                // Launch browser after first export.py has completed and http.server is up
                let _result = opener::open(url);
            });
        }
        thread::sleep(Duration::from_millis(1000));
    }
}

fn mtime(path: impl AsRef<Path>) -> SystemTime {
    let path = path.as_ref();
    if path.is_dir() {
        path.read_dir()
            .into_iter()
            .flatten()
            .flatten()
            .map(|entry| mtime(&entry.path()))
            .max()
            .unwrap_or(SystemTime::UNIX_EPOCH)
    } else {
        path.metadata()
            .and_then(|metadata| metadata.modified())
            .unwrap_or(SystemTime::UNIX_EPOCH)
    }
}

#[allow(clippy::missing_errors_doc)]
pub fn validate_port(arg: &OsStr) -> Result<(), OsString> {
    match arg.to_string_lossy().parse::<u16>() {
        Ok(_port) => Ok(()),
        Err(err) => Err(OsString::from(err.to_string())),
    }
}
```

Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
