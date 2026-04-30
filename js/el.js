/**
 * el() + wrap() — Mini-biblioteca de manipulação DOM
 * Autor: Elton Disner <https://elton.disner.com.br>
 * Repositório: https://github.com/Disner/el-js-library
 * Licença: MIT
 */
const wrap = nodes => {
  nodes = nodes.filter(Boolean);
  return {
    elements: nodes,
    get length() { return nodes.length; },
    each(fn) { nodes.forEach((el, i) => fn(el, i)); return this; },
    on(event, fn) { return this.each(el => el.addEventListener(event, fn)); },
    off(event, fn) { return this.each(el => el.removeEventListener(event, fn)); },
    css(prop, value) {
      if (value === undefined) return nodes[0] ? getComputedStyle(nodes[0])[prop] : undefined;
      return this.each(el => el.style[prop] = value);
    },
    html(value) {
      if (value === undefined) return nodes[0]?.innerHTML;
      return this.each(el => el.innerHTML = value);
    },
    text(value) {
      if (value === undefined) return nodes[0]?.textContent;
      return this.each(el => el.textContent = value);
    },
    attr(name, value) {
      if (value === undefined) return nodes[0]?.getAttribute(name);
      return this.each(el => el.setAttribute(name, value));
    },
    data(name, value) {
      if (value === undefined) return nodes[0]?.dataset[name];
      return this.each(el => el.dataset[name] = value);
    },
    hasClass(cls) { return nodes.length > 0 && nodes[0].classList.contains(cls); },
    addClass(cls) { return this.each(el => el.classList.add(cls)); },
    removeClass(cls) { return this.each(el => el.classList.remove(cls)); },
    toggleClass(cls) { return this.each(el => el.classList.toggle(cls)); },
    is(sel) { return nodes.length > 0 && nodes[0].matches(sel); },
    append(content) {
      if (typeof content === 'string') return this.each(el => el.insertAdjacentHTML('beforeend', content));
      return this.each((parent, i) => parent.append(i === 0 ? content : content.cloneNode(true)));
    },
    prepend(content) {
      if (typeof content === 'string') return this.each(el => el.insertAdjacentHTML('afterbegin', content));
      return this.each((parent, i) => parent.prepend(i === 0 ? content : content.cloneNode(true)));
    },
    remove() { return this.each(el => el.remove()); },
    find(sel) {
      let found = [];
      nodes.forEach(el => found.push(...el.querySelectorAll(sel)));
      return wrap(found);
    },
    closest(sel) {
      let found = [];
      nodes.forEach(el => { const c = el.closest(sel); if (c) found.push(c); });
      return wrap(found);
    },
    eq(i)   { return wrap(nodes[i] !== undefined ? [nodes[i]] : []); },
    first() { return wrap(nodes.length ? [nodes[0]] : []); },
    last()  { return wrap(nodes.length ? [nodes[nodes.length - 1]] : []); }
  };
};

const el = (selector, context = document) => {
  if (typeof selector === 'string') return wrap([...context.querySelectorAll(selector)]);
  if (selector instanceof Element || selector === window || selector === document) return wrap([selector]);
  if (selector instanceof NodeList || Array.isArray(selector)) return wrap([...selector]);
  return wrap([]);
};
