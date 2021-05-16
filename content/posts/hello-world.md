+++
author = "James Rampton"
date = 2021-05-10T17:11:41Z
description = "A test post with some common elements"
draft = true
featured_image = "/uploads/stags.jpg"
featured_image_alt_text = "Stags resting in the woods"
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

```python
# Cache the hostname, but do it lazily: socket.getfqdn() can take a couple of seconds, which slows down the restart of the server.
class CachedDnsName(object):
    def __str__(self):
        return self.get_fqdn()

    def get_fqdn(self):
        if not hasattr(self, '_fqdn'):
            self._fqdn = socket.getfqdn()
        return self._fqdn
```

Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.