# el() + wrap()

Mini-biblioteca de manipulação DOM sem dependências. ~65 linhas, zero build step, funciona em qualquer browser moderno.

**[→ Demo interativa](https://disner.com.br/demo-el-js-library)**

---

## Uso

Copie `js/el.min.js` para o seu projeto e inclua antes do seu script:

```html
<script src="js/el.min.js"></script>
```

```js
// Seleciona um ou vários elementos
el('#meu-id').css('color', 'red');
el('.cards').addClass('ativo');

// Chaining
el('#box')
  .css('width', '200px')
  .addClass('destaque')
  .on('click', () => console.log('clicou'));
```

---

## API

### Seleção

| Método | Retorna | Descrição |
|--------|---------|-----------|
| `el(selector)` | `wrap` | Seleciona elementos via CSS selector, Node, NodeList ou Array |
| `.find(sel)` | `wrap` | Busca descendentes dentro do set atual |
| `.closest(sel)` | `wrap` | Sobe na árvore até encontrar o ancestral mais próximo |
| `.eq(i)` | `wrap` | Elemento pelo índice (zero-based) |
| `.first()` | `wrap` | Primeiro elemento do set |
| `.last()` | `wrap` | Último elemento do set |
| `.length` | `number` | Quantidade de elementos no set |

### Estilos

| Método | Retorna | Descrição |
|--------|---------|-----------|
| `.css(prop)` | `string` | Lê o valor computado da propriedade |
| `.css(prop, value)` | `wrap` | Aplica o estilo inline |

### Conteúdo

| Método | Retorna | Descrição |
|--------|---------|-----------|
| `.html()` | `string` | Lê o innerHTML |
| `.html(value)` | `wrap` | Define o innerHTML (interpreta tags) |
| `.text()` | `string` | Lê o textContent |
| `.text(value)` | `wrap` | Define o textContent (seguro contra XSS) |

### Atributos e dados

| Método | Retorna | Descrição |
|--------|---------|-----------|
| `.attr(name)` | `string` | Lê o atributo |
| `.attr(name, value)` | `wrap` | Define o atributo |
| `.data(name)` | `string` | Lê `dataset[name]` |
| `.data(name, value)` | `wrap` | Define `dataset[name]` |

### Classes

| Método | Retorna | Descrição |
|--------|---------|-----------|
| `.addClass(cls)` | `wrap` | Adiciona a classe |
| `.removeClass(cls)` | `wrap` | Remove a classe |
| `.toggleClass(cls)` | `wrap` | Alterna a classe |
| `.hasClass(cls)` | `boolean` | Verifica se a classe está presente |
| `.is(sel)` | `boolean` | Verifica se o 1º elemento bate com o seletor |

### DOM

| Método | Retorna | Descrição |
|--------|---------|-----------|
| `.append(content)` | `wrap` | Insere HTML string ou Node no final |
| `.prepend(content)` | `wrap` | Insere HTML string ou Node no início |
| `.remove()` | `wrap` | Remove os elementos do DOM |

### Eventos

| Método | Retorna | Descrição |
|--------|---------|-----------|
| `.on(event, fn)` | `wrap` | Adiciona listener (aplica em todos do set) |
| `.off(event, fn)` | `wrap` | Remove listener (requer mesma referência de função) |
| `.each(fn(el, i))` | `wrap` | Itera sobre os elementos do set |

---

## Estrutura do repositório

```
el-library/
├── index.php       # Documentação interativa
├── css/
│   └── el-demo.css    # Estilos da demo
└── js/
    ├── el.min.js  # A biblioteca
    └── el-demo.js     # Código dos exemplos interativos
```

---

## Autor

Feito por [Elton Disner](https://elton.disner.com.br)

## Licença

MIT
