# el() + wrap()

Minimal DOM manipulation library with zero dependencies. ~65 lines, zero build step, works in any modern browser.

**[→ Interactive Demo](https://disner.com.br/demo-el-js-library)**

---

## Usage

Copy `js/el.min.js` to your project and include it before your script:

```html
<script src="js/el.min.js"></script>
```

```js
// Select one or more elements
el('#my-id').css('color', 'red');
el('.cards').addClass('active');

// Chaining
el('#box')
  .css('width', '200px')
  .addClass('highlight')
  .on('click', () => console.log('clicked'));
```

---

## API

### Selection

| Method | Returns | Description |
|--------|---------|-------------|
| `el(selector)` | `wrap` | Selects elements via CSS selector, Node, NodeList, or Array |
| `.find(sel)` | `wrap` | Searches descendants within the current set |
| `.closest(sel)` | `wrap` | Traverses up the tree to find the closest ancestor |
| `.eq(i)` | `wrap` | Element by index (zero-based) |
| `.first()` | `wrap` | First element in the set |
| `.last()` | `wrap` | Last element in the set |
| `.length` | `number` | Number of elements in the set |

### Styles

| Method | Returns | Description |
|--------|---------|-------------|
| `.css(prop)` | `string` | Reads the computed value of the property |
| `.css(prop, value)` | `wrap` | Applies the inline style |

### Content

| Method | Returns | Description |
|--------|---------|-------------|
| `.html()` | `string` | Reads innerHTML |
| `.html(value)` | `wrap` | Sets innerHTML (interprets tags) |
| `.text()` | `string` | Reads textContent |
| `.text(value)` | `wrap` | Sets textContent (XSS-safe) |

### Attributes & Data

| Method | Returns | Description |
|--------|---------|-------------|
| `.attr(name)` | `string` | Reads the attribute |
| `.attr(name, value)` | `wrap` | Sets the attribute |
| `.data(name)` | `string` | Reads `dataset[name]` |
| `.data(name, value)` | `wrap` | Sets `dataset[name]` |

### Classes

| Method | Returns | Description |
|--------|---------|-------------|
| `.addClass(cls)` | `wrap` | Adds the class |
| `.removeClass(cls)` | `wrap` | Removes the class |
| `.toggleClass(cls)` | `wrap` | Toggles the class |
| `.hasClass(cls)` | `boolean` | Checks if the class is present |
| `.is(sel)` | `boolean` | Checks if the first element matches the selector |

### DOM

| Method | Returns | Description |
|--------|---------|-------------|
| `.append(content)` | `wrap` | Inserts HTML string or Node at the end |
| `.prepend(content)` | `wrap` | Inserts HTML string or Node at the beginning |
| `.remove()` | `wrap` | Removes elements from the DOM |

### Events

| Method | Returns | Description |
|--------|---------|-------------|
| `.on(event, fn)` | `wrap` | Adds listener (applies to all elements in the set) |
| `.off(event, fn)` | `wrap` | Removes listener (requires same function reference) |
| `.each(fn(el, i))` | `wrap` | Iterates over elements in the set |

---

## Repository Structure

```
el-library/
├── index.php       # Interactive documentation
├── css/
│   └── el-demo.css    # Demo styles
└── js/
    ├── el.min.js  # The library
    └── el-demo.js     # Interactive examples code
```

---

## Author

Made by [Elton Disner](https://elton.disner.com.br)

## License

MIT
