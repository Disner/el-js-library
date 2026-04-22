// =====================================================
// Helpers
// =====================================================
const flash = (id) => {
  const o = document.getElementById(id);
  if (!o) return;
  o.classList.add('flash');
  setTimeout(() => o.classList.remove('flash'), 600);
};

const setOut = (id, val) => {
  el('#' + id).text(val);
  flash(id);
};

// =====================================================
// css()
// =====================================================
el('#btn-css-read').on('click', () => {
  const cor = el('#box-css').css('backgroundColor');
  setOut('out-css', 'backgroundColor: ' + cor);
});

el('#btn-css-write').on('click', () => {
  el('#box-css')
    .css('width', '120px')
    .css('height', '120px')
    .css('borderRadius', '50%')
    .css('transform', 'rotate(45deg)')
    .css('background', 'linear-gradient(135deg,#4fffb0,#7b8cff)');
  setOut('out-css', 'Estilos aplicados via chaining.');
});

el('#btn-css-reset').on('click', () => {
  el('#box-css')
    .css('width', '80px')
    .css('height', '80px')
    .css('borderRadius', '6px')
    .css('transform', '')
    .css('background', 'var(--accent2)');
  setOut('out-css', 'Resetado.');
});

// =====================================================
// html() / text()
// =====================================================
el('#btn-html').on('click', () => {
  el('#alvo-html').html('<strong style="color:var(--accent)">Negrito</strong> via <em style="color:var(--accent2)">.html()</em> — tags interpretadas.');
});

el('#btn-text').on('click', () => {
  el('#alvo-html').text('<strong>Isso não vira tag</strong> — .text() é seguro contra XSS.');
});

// =====================================================
// attr()
// =====================================================
const imgs = [
  'https://picsum.photos/seed/el1/300/300',
  'https://picsum.photos/seed/el42/300/300',
  'https://picsum.photos/seed/el99/300/300',
];
let imgIdx = 1;

el('#btn-attr-read').on('click', () => {
  const src = el('#img-attr').attr('src');
  setOut('out-attr', 'src: ' + src);
});

el('#btn-attr-write').on('click', () => {
  const novo = imgs[imgIdx % imgs.length];
  imgIdx++;
  el('#img-attr').attr('src', novo).attr('alt', 'Imagem #' + imgIdx);
  setOut('out-attr', 'Trocado para: ' + novo);
});

// =====================================================
// data()
// =====================================================
el('#btn-data-write').on('click', () => {
  el('#data-box')
    .data('usuario', 'elton')
    .data('role', 'admin')
    .data('ts', Date.now());
  el('#data-box').text('Dados gravados. Inspecione o elemento no DevTools.');
});

el('#btn-data-read').on('click', () => {
  const u = el('#data-box').data('usuario');
  const r = el('#data-box').data('role');
  const t = el('#data-box').data('ts');
  if (u) {
    setOut('out-data', `usuario="${u}" | role="${r}" | ts="${t}"`);
  } else {
    setOut('out-data', 'Nenhum dado gravado ainda. Clique em "Gravar dados" primeiro.');
  }
});

// =====================================================
// toggleClass / addClass / removeClass
// =====================================================
el('#btn-toggle').on('click', () => {
  el('#toggle-box').toggleClass('ativo');
  const ativo = el('#toggle-box').hasClass('ativo');
  el('#toggle-box').text('Estado: ' + (ativo ? '.ativo presente' : 'sem .ativo'));
});

el('#btn-add-class').on('click', () => {
  el('#toggle-box').addClass('ativo');
  el('#toggle-box').text('Estado: .ativo presente');
});

el('#btn-rem-class').on('click', () => {
  el('#toggle-box').removeClass('ativo');
  el('#toggle-box').text('Estado: sem .ativo');
});

// =====================================================
// append()
// =====================================================
el('#btn-append-str').on('click', () => {
  el('#lista-append').append(`<div class="item-append">HTML string — ${Date.now()}</div>`);
});

el('#btn-append-node').on('click', () => {
  const node = document.createElement('div');
  node.className = 'item-append';
  node.textContent = 'Via Node real — ' + Date.now();
  el('#lista-append').append(node);
});

// =====================================================
// remove()
// =====================================================
el('#remove-list').on('click', e => {
  el(e.target).closest('.remove-item').remove();
});

// =====================================================
// find()
// =====================================================
el('#btn-find-spans').on('click', () => {
  el('#find-container').find('span').addClass('highlighted');
  const txt = el('#find-container').find('.titulo').first().text();
  setOut('out-find', txt.trim());
});

el('#btn-find-reset').on('click', () => {
  el('#find-container').find('span').removeClass('highlighted');
  setOut('out-find', '');
});

// =====================================================
// eq / first / last
// =====================================================
el('#btn-first').on('click', () => {
  el('.eq-item').removeClass('selected');
  el('.eq-item').first().addClass('selected');
});

el('#btn-last').on('click', () => {
  el('.eq-item').removeClass('selected');
  el('.eq-item').last().addClass('selected');
});

el('#btn-eq2').on('click', () => {
  el('.eq-item').removeClass('selected');
  el('.eq-item').eq(2).addClass('selected');
});

el('#btn-eq-reset').on('click', () => {
  el('.eq-item').removeClass('selected');
});

// =====================================================
// each()
// =====================================================
el('#btn-each-height').on('click', () => {
  el('.bar').each((bar, i) => {
    bar.style.height = ((i + 1) * 14) + 'px';
    bar.style.opacity = 0.3 + i * 0.14;
  });
});

let waveTimer = null;
el('#btn-each-wave').on('click', () => {
  clearTimeout(waveTimer);
  el('.bar').removeClass('highlighted');
  el('.bar').each((bar, i) => {
    setTimeout(() => {
      el('.bar').removeClass('highlighted');
      el(bar).addClass('highlighted');
    }, i * 150);
  });
  waveTimer = setTimeout(() => el('.bar').removeClass('highlighted'), el('.bar').length * 150 + 200);
});

// =====================================================
// on() — evento buttons e inputs
// =====================================================
el('.ev-btn').on('click', e => {
  el('#log-eventos').html(`Clicou: <strong style="color:var(--accent)">${e.target.dataset.nome}</strong> &nbsp;(${new Date().toLocaleTimeString()})`);
});

el('.ev-input')
  .on('focus', e => el(e.target).css('borderColor', 'var(--accent)'))
  .on('blur',  e => el(e.target).css('borderColor', 'var(--border)'));

// =====================================================
// hasClass()
// =====================================================
el('#btn-hasclass-toggle').on('click', () => {
  el('#hasclass-box').toggleClass('destaque');
  const tem = el('#hasclass-box').hasClass('destaque');
  el('#hasclass-box').text(tem ? 'com .destaque' : 'sem .destaque');
});

el('#btn-hasclass-check').on('click', () => {
  const tem = el('#hasclass-box').hasClass('destaque');
  setOut('out-hasclass', `hasClass('destaque') → ${tem}`);
});

// =====================================================
// prepend()
// =====================================================
el('#btn-prepend-str').on('click', () => {
  el('#lista-prepend').prepend(`<div class="item-append">HTML string — ${Date.now()}</div>`);
});

el('#btn-prepend-node').on('click', () => {
  const node = document.createElement('div');
  node.className = 'item-append';
  node.textContent = 'Via Node real — ' + Date.now();
  el('#lista-prepend').prepend(node);
});

// =====================================================
// closest()
// =====================================================
el('#closest-container').on('click', e => {
  const card = el(e.target).closest('.closest-card');
  if (!card.length) return;
  el('.closest-card').removeClass('selected');
  card.addClass('selected');
  setOut('out-closest', 'Card selecionado: ' + card.find('.closest-title').text().trim());
});

// =====================================================
// length + is()
// =====================================================
let tagCount = 3;

el('#btn-length-count').on('click', () => {
  setOut('out-length', `el('.tag-item').length → ${el('.tag-item').length}`);
});

el('#btn-length-add').on('click', () => {
  tagCount++;
  el('#tags-container').append(`<span class="tag-item">Tag ${tagCount}</span>`);
  setOut('out-length', `Tag adicionada. Total agora: ${el('.tag-item').length}`);
});

el('#btn-is-check').on('click', () => {
  const r1 = el('#tag-destaque').is('.destaque');
  const r2 = el('#tag-destaque').is('.tag-item');
  const r3 = el('#tag-destaque').is('button');
  setOut('out-length', `.is('.destaque')=${r1}  |  .is('.tag-item')=${r2}  |  .is('button')=${r3}`);
});

// =====================================================
// off()
// =====================================================
let offCount = 0;
let offActive = false;

const offHandler = () => {
  offCount++;
  el('#out-off').text(`${offCount} clique${offCount !== 1 ? 's' : ''} registrado${offCount !== 1 ? 's' : ''}`);
};

el('#btn-off-on').on('click', () => {
  if (offActive) return;
  offActive = true;
  el('#off-target').on('click', offHandler).addClass('ativo').text('Listener ativo — clique para contar');
});

el('#btn-off-off').on('click', () => {
  if (!offActive) return;
  offActive = false;
  el('#off-target').off('click', offHandler).removeClass('ativo').text('Listener inativo — clique não conta');
});
