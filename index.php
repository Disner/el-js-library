<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>el() - JS Library - Documentação Interativa</title>
<meta name="description" content="el() + wrap() — Mini-biblioteca JS de manipulação DOM sem dependências. Documentação interativa com exemplos executáveis.">
<meta name="keywords" content="el, wrap, DOM, JavaScript, manipulação DOM, biblioteca JS, zero dependências, chaining, frontend">
<meta name="author" content="Elton Disner">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#0a0a0a">
<link rel="canonical" href="https://disner.com.br/demo-el-js-library">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="el() - JS Library - Documentação Interativa">
<meta property="og:description" content="Mini-biblioteca de manipulação DOM sem dependências. Cada exemplo executa código real no browser.">
<meta property="og:url" content="https://disner.com.br/demo-el-js-library">
<meta property="og:site_name" content="el() + wrap()">
<meta property="og:locale" content="pt_BR">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="el() - JS Library - Documentação Interativa">
<meta name="twitter:description" content="Mini-biblioteca de manipulação DOM sem dependências. Cada exemplo executa código real no browser.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&family=Syne:wght@400;600;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/el-demo.css">
</head>
<body>
<div class="page">

  <header>
    <div class="badge">Documentação interativa</div>
    <h1><span>el()</span> + wrap()</h1>
    <p class="subtitle">
      Mini-biblioteca JS de manipulação DOM sem dependências.<br>
      Cada exemplo abaixo executa código real no browser.
    </p>
  </header>

  <!-- ===== CSS ===== -->
  <div class="group-label">Estilo e aparência</div>

  <div class="section">
    <div class="section-header">
      <span class="method-name">.css()</span>
      <span class="method-sig">css(prop) → valor | css(prop, value) → wrap</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// Leitura</span>
<span class="kw">const</span> cor = <span class="fn">el</span>(<span class="str">'#box-css'</span>)
  .<span class="fn">css</span>(<span class="str">'backgroundColor'</span>);

<span class="cmt">// Escrita (chaining)</span>
<span class="fn">el</span>(<span class="str">'#box-css'</span>)
  .<span class="fn">css</span>(<span class="str">'width'</span>, <span class="str">'120px'</span>)
  .<span class="fn">css</span>(<span class="str">'borderRadius'</span>, <span class="str">'50%'</span>)
  .<span class="fn">css</span>(<span class="str">'transform'</span>, <span class="str">'rotate(45deg)'</span>);</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-css-read">Ler cor</button>
          <button class="btn-demo" id="btn-css-write">Aplicar estilo</button>
          <button class="btn-demo" id="btn-css-reset">Resetar</button>
        </div>
        <br>
        <div class="demo-label">Output</div>
        <div class="output" id="out-css"></div>
      </div>
      <div class="demo-area">
        <div class="demo-label">Elemento #box-css</div>
        <div id="box-css"></div>
      </div>
    </div>
  </div>

  <!-- ===== HTML / TEXT ===== -->
  <div class="section">
    <div class="section-header">
      <span class="method-name">.html() e .text()</span>
      <span class="method-sig">html() / text() → conteúdo | html(v) / text(v) → wrap</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// .html() interpreta tags</span>
<span class="fn">el</span>(<span class="str">'#alvo-html'</span>)
  .<span class="fn">html</span>(<span class="str">'&lt;strong&gt;Negrito&lt;/strong&gt;'</span>);

<span class="cmt">// .text() é seguro contra XSS</span>
<span class="fn">el</span>(<span class="str">'#alvo-html'</span>)
  .<span class="fn">text</span>(<span class="str">'&lt;strong&gt;Isso não vira tag&lt;/strong&gt;'</span>);</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-html">Inserir HTML</button>
          <button class="btn-demo" id="btn-text">Inserir como texto</button>
        </div>
      </div>
      <div class="demo-area">
        <div class="demo-label">Elemento #alvo-html</div>
        <div id="alvo-html" style="font-family:'IBM Plex Mono',monospace;font-size:13px;color:var(--text);min-height:40px;padding:8px;background:var(--surface2);border-radius:4px;border:1px solid var(--border);">Clique em um dos botões ao lado.</div>
      </div>
    </div>
  </div>

  <!-- ===== ATTR / DATA ===== -->
  <div class="group-label">Atributos e dados</div>

  <div class="section">
    <div class="section-header">
      <span class="method-name">.attr()</span>
      <span class="method-sig">attr(name) → valor | attr(name, value) → wrap</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// Ler atributo src atual</span>
<span class="kw">const</span> src = <span class="fn">el</span>(<span class="str">'#img-attr'</span>)
  .<span class="fn">attr</span>(<span class="str">'src'</span>);

<span class="cmt">// Trocar para outra imagem</span>
<span class="fn">el</span>(<span class="str">'#img-attr'</span>)
  .<span class="fn">attr</span>(<span class="str">'src'</span>, novaUrl)
  .<span class="fn">attr</span>(<span class="str">'alt'</span>, <span class="str">'Paisagem alternativa'</span>);</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-attr-read">Ler src</button>
          <button class="btn-demo" id="btn-attr-write">Trocar imagem</button>
        </div>
        <br>
        <div class="demo-label">Output</div>
        <div class="output" id="out-attr"></div>
      </div>
      <div class="demo-area">
        <div class="demo-label">Elemento img#img-attr</div>
        <img id="img-attr"
          src="https://picsum.photos/seed/el1/300/300"
          alt="Imagem de exemplo"
          style="width:100%;height:290px;border-radius:4px;object-fit:cover;border:1px solid var(--border);">
      </div>
    </div>
  </div>

  <div class="section">
    <div class="section-header">
      <span class="method-name">.data()</span>
      <span class="method-sig">data(name) → valor | data(name, value) → wrap</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// Escrever no dataset</span>
<span class="fn">el</span>(<span class="str">'#data-box'</span>)
  .<span class="fn">data</span>(<span class="str">'usuario'</span>, <span class="str">'elton'</span>)
  .<span class="fn">data</span>(<span class="str">'role'</span>, <span class="str">'admin'</span>);

<span class="cmt">// Ler do dataset</span>
<span class="kw">const</span> u = <span class="fn">el</span>(<span class="str">'#data-box'</span>)
  .<span class="fn">data</span>(<span class="str">'usuario'</span>);</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-data-write">Gravar dados</button>
          <button class="btn-demo" id="btn-data-read">Ler dados</button>
        </div>
        <br>
        <div class="demo-label">Output</div>
        <div class="output" id="out-data"></div>
      </div>
      <div class="demo-area">
        <div class="demo-label">Inspecione o elemento abaixo</div>
        <div id="data-box"
          style="padding:14px;background:var(--surface2);border:1px solid var(--border);border-radius:4px;font-family:'IBM Plex Mono',monospace;font-size:12px;color:var(--text-dim);">
          Nenhum dataset gravado ainda.
        </div>
      </div>
    </div>
  </div>

  <!-- ===== CLASSES ===== -->
  <div class="group-label">Manipulação de classes</div>

  <div class="section">
    <div class="section-header">
      <span class="method-name">.addClass() .removeClass() .toggleClass()</span>
      <span class="method-sig">Todos retornam wrap para chaining</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="fn">el</span>(<span class="str">'#toggle-box'</span>)
  .<span class="fn">toggleClass</span>(<span class="str">'ativo'</span>);

<span class="fn">el</span>(<span class="str">'#toggle-box'</span>)
  .<span class="fn">addClass</span>(<span class="str">'ativo'</span>);

<span class="fn">el</span>(<span class="str">'#toggle-box'</span>)
  .<span class="fn">removeClass</span>(<span class="str">'ativo'</span>);</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-toggle">toggleClass</button>
          <button class="btn-demo" id="btn-add-class">addClass</button>
          <button class="btn-demo danger" id="btn-rem-class">removeClass</button>
        </div>
      </div>
      <div class="demo-area">
        <div class="demo-label">Elemento #toggle-box</div>
        <div id="toggle-box">Estado: sem .ativo</div>
      </div>
    </div>
  </div>

  <!-- ===== HAS CLASS ===== -->
  <div class="section">
    <div class="section-header">
      <span class="method-name">.hasClass()</span>
      <span class="method-sig">hasClass(cls) → boolean</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// Retorna true/false — não faz chaining</span>
<span class="kw">const</span> ativo = <span class="fn">el</span>(<span class="str">'#hasclass-box'</span>)
  .<span class="fn">hasClass</span>(<span class="str">'destaque'</span>);

<span class="cmt">// Útil para lógica condicional</span>
<span class="kw">if</span> (<span class="fn">el</span>(<span class="str">'#hasclass-box'</span>).<span class="fn">hasClass</span>(<span class="str">'destaque'</span>)) {
  <span class="fn">el</span>(<span class="str">'#hasclass-box'</span>).<span class="fn">text</span>(<span class="str">'Classe presente'</span>);
}</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-hasclass-toggle">Alternar .destaque</button>
          <button class="btn-demo" id="btn-hasclass-check">Verificar</button>
        </div>
        <br>
        <div class="demo-label">Output</div>
        <div class="output" id="out-hasclass"></div>
      </div>
      <div class="demo-area">
        <div class="demo-label">Elemento #hasclass-box</div>
        <div id="hasclass-box">sem .destaque</div>
      </div>
    </div>
  </div>

  <!-- ===== APPEND / REMOVE ===== -->
  <div class="group-label">Inserir e remover</div>

  <div class="section">
    <div class="section-header">
      <span class="method-name">.append()</span>
      <span class="method-sig">append(string | Node) → wrap</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// Append com HTML string</span>
<span class="fn">el</span>(<span class="str">'#lista-append'</span>)
  .<span class="fn">append</span>(<span class="str">`
    &lt;div class="item-append"&gt;
      Item ${<span class="num">Date.now()</span>}
    &lt;/div&gt;
  `</span>);

<span class="cmt">// Append com Node real</span>
<span class="kw">const</span> node = document.<span class="fn">createElement</span>(<span class="str">'div'</span>);
node.textContent = <span class="str">'Via Node'</span>;
<span class="fn">el</span>(<span class="str">'#lista-append'</span>).<span class="fn">append</span>(node);</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-append-str">Append string</button>
          <button class="btn-demo" id="btn-append-node">Append Node</button>
        </div>
      </div>
      <div class="demo-area" style="min-height:120px;">
        <div class="demo-label">Contêiner #lista-append</div>
        <div id="lista-append">
          <div class="item-append">Item inicial</div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== PREPEND ===== -->
  <div class="section">
    <div class="section-header">
      <span class="method-name">.prepend()</span>
      <span class="method-sig">prepend(string | Node) → wrap</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// Insere no início (oposto de .append())</span>
<span class="fn">el</span>(<span class="str">'#lista-prepend'</span>)
  .<span class="fn">prepend</span>(<span class="str">`&lt;div class="item-append"&gt;
  Novo topo — ${<span class="num">Date.now()</span>}
&lt;/div&gt;`</span>);

<span class="cmt">// Também aceita Node real</span>
<span class="kw">const</span> node = document.<span class="fn">createElement</span>(<span class="str">'div'</span>);
node.textContent = <span class="str">'Via Node'</span>;
<span class="fn">el</span>(<span class="str">'#lista-prepend'</span>).<span class="fn">prepend</span>(node);</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-prepend-str">Prepend string</button>
          <button class="btn-demo" id="btn-prepend-node">Prepend Node</button>
        </div>
      </div>
      <div class="demo-area" style="min-height:120px;">
        <div class="demo-label">Contêiner #lista-prepend</div>
        <div id="lista-prepend">
          <div class="item-append">Item inicial</div>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="section-header">
      <span class="method-name">.remove()</span>
      <span class="method-sig">remove() → wrap</span>
    </div>
    <div class="section-body">
      <pre><span class="cmt">// Remove o próprio elemento do DOM</span>
<span class="fn">el</span>(<span class="str">'.remove-item'</span>)
  .<span class="fn">first</span>()
  .<span class="fn">remove</span>();

<span class="cmt">// Ou com evento interno + .closest()</span>
<span class="fn">el</span>(<span class="str">'.remove-item'</span>).<span class="fn">on</span>(<span class="str">'click'</span>, e => {
  <span class="fn">el</span>(e.target)
    .<span class="fn">closest</span>(<span class="str">'.remove-item'</span>)
    .<span class="fn">remove</span>();
});</pre>
      <div class="demo-label" style="margin-top:12px;">Clique em "Remover" em cada item</div>
      <div id="remove-list">
        <div class="remove-item">Linha A <button>Remover</button></div>
        <div class="remove-item">Linha B <button>Remover</button></div>
        <div class="remove-item">Linha C <button>Remover</button></div>
        <div class="remove-item">Linha D <button>Remover</button></div>
      </div>
    </div>
  </div>

  <!-- ===== FIND ===== -->
  <div class="group-label">Busca e seleção</div>

  <div class="section">
    <div class="section-header">
      <span class="method-name">.find()</span>
      <span class="method-sig">find(selector) → wrap com filhos encontrados</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// Busca scoped: só dentro do pai</span>
<span class="fn">el</span>(<span class="str">'#find-container'</span>)
  .<span class="fn">find</span>(<span class="str">'span'</span>)
  .<span class="fn">addClass</span>(<span class="str">'highlighted'</span>);

<span class="cmt">// Combina com outros métodos</span>
<span class="kw">const</span> txt = <span class="fn">el</span>(<span class="str">'#find-container'</span>)
  .<span class="fn">find</span>(<span class="str">'.titulo'</span>)
  .<span class="fn">first</span>()
  .<span class="fn">text</span>();</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-find-spans">Destacar spans</button>
          <button class="btn-demo" id="btn-find-reset">Limpar</button>
        </div>
        <br>
        <div class="demo-label">Output .find('.titulo').first().text()</div>
        <div class="output" id="out-find"></div>
      </div>
      <div class="demo-area">
        <div class="demo-label">Container #find-container</div>
        <div id="find-container" style="display:flex;flex-direction:column;gap:8px;">
          <div class="card">
            <strong style="font-size:12px;color:var(--text);font-family:'IBM Plex Mono',monospace;" class="titulo">Produto A</strong>
            <span>Categoria: software</span>
            <span>Preço: R$ 99</span>
          </div>
          <div class="card">
            <strong style="font-size:12px;color:var(--text);font-family:'IBM Plex Mono',monospace;" class="titulo">Produto B</strong>
            <span>Categoria: hardware</span>
            <span>Preço: R$ 249</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== CLOSEST ===== -->
  <div class="section">
    <div class="section-header">
      <span class="method-name">.closest()</span>
      <span class="method-sig">closest(selector) → wrap com ancestral mais próximo</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// Delegação de evento: clique em qualquer</span>
<span class="cmt">// filho sobe até o card pai</span>
<span class="fn">el</span>(<span class="str">'#closest-container'</span>).<span class="fn">on</span>(<span class="str">'click'</span>, e => {
  <span class="fn">el</span>(<span class="str">'.closest-card'</span>)
    .<span class="fn">removeClass</span>(<span class="str">'selected'</span>);
  <span class="fn">el</span>(e.target)
    .<span class="fn">closest</span>(<span class="str">'.closest-card'</span>)
    .<span class="fn">addClass</span>(<span class="str">'selected'</span>);
});</pre>
        <br>
        <div class="demo-label">Output — título do card clicado</div>
        <div class="output" id="out-closest">Clique em qualquer parte de um card.</div>
      </div>
      <div class="demo-area">
        <div class="demo-label">Cards #closest-container</div>
        <div id="closest-container" style="display:flex;flex-direction:column;gap:8px;">
          <div class="closest-card">
            <strong class="closest-title">Notificação A</strong>
            <span class="closest-sub">Sistema atualizado com sucesso.</span>
          </div>
          <div class="closest-card">
            <strong class="closest-title">Notificação B</strong>
            <span class="closest-sub">Novo usuário cadastrado.</span>
          </div>
          <div class="closest-card">
            <strong class="closest-title">Notificação C</strong>
            <span class="closest-sub">Backup concluído.</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== LENGTH + IS ===== -->
  <div class="section">
    <div class="section-header">
      <span class="method-name">.length &nbsp; .is()</span>
      <span class="method-sig">.length → número | .is(sel) → boolean</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// .length: quantos elementos selecionados</span>
<span class="kw">const</span> total = <span class="fn">el</span>(<span class="str">'.tag-item'</span>).length;

<span class="cmt">// .is(): o 1º elemento bate com o seletor?</span>
<span class="fn">el</span>(<span class="str">'#tag-destaque'</span>)
  .<span class="fn">is</span>(<span class="str">'.destaque'</span>); <span class="cmt">// true</span>
<span class="fn">el</span>(<span class="str">'#tag-destaque'</span>)
  .<span class="fn">is</span>(<span class="str">'button'</span>);    <span class="cmt">// false</span></pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-length-count">Contar tags</button>
          <button class="btn-demo" id="btn-length-add">Adicionar tag</button>
          <button class="btn-demo" id="btn-is-check">Verificar .is()</button>
        </div>
        <br>
        <div class="demo-label">Output</div>
        <div class="output" id="out-length"></div>
      </div>
      <div class="demo-area">
        <div class="demo-label">Tags .tag-item</div>
        <div class="tags-container" id="tags-container">
          <span class="tag-item">JavaScript</span>
          <span class="tag-item destaque" id="tag-destaque">DOM</span>
          <span class="tag-item">CSS</span>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== EQ / FIRST / LAST ===== -->
  <div class="section">
    <div class="section-header">
      <span class="method-name">.eq() .first() .last()</span>
      <span class="method-sig">Retornam wrap com um único elemento</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// .eq(i) por índice (zero-based)</span>
<span class="fn">el</span>(<span class="str">'.eq-item'</span>)
  .<span class="fn">eq</span>(<span class="num">2</span>)
  .<span class="fn">addClass</span>(<span class="str">'selected'</span>);

<span class="fn">el</span>(<span class="str">'.eq-item'</span>).<span class="fn">first</span>()
  .<span class="fn">addClass</span>(<span class="str">'selected'</span>);

<span class="fn">el</span>(<span class="str">'.eq-item'</span>).<span class="fn">last</span>()
  .<span class="fn">addClass</span>(<span class="str">'selected'</span>);</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-first">first()</button>
          <button class="btn-demo" id="btn-last">last()</button>
          <button class="btn-demo" id="btn-eq2">eq(2)</button>
          <button class="btn-demo danger" id="btn-eq-reset">Limpar</button>
        </div>
      </div>
      <div class="demo-area">
        <div class="demo-label">Itens .eq-item</div>
        <div class="eq-list">
          <div class="eq-item">Item 0</div>
          <div class="eq-item">Item 1</div>
          <div class="eq-item">Item 2</div>
          <div class="eq-item">Item 3</div>
          <div class="eq-item">Item 4</div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== EACH ===== -->
  <div class="section">
    <div class="section-header">
      <span class="method-name">.each()</span>
      <span class="method-sig">each(fn(el, i)) → wrap</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// Iterar com índice disponível</span>
<span class="fn">el</span>(<span class="str">'.bar'</span>).<span class="fn">each</span>((bar, i) => {
  <span class="kw">const</span> h = (i + <span class="num">1</span>) * <span class="num">15</span>;
  bar.style.height = h + <span class="str">'px'</span>;
  bar.style.opacity = (<span class="num">0.3</span> + i * <span class="num">0.1</span>);
});

<span class="cmt">// Destacar item com delay</span>
<span class="fn">el</span>(<span class="str">'.bar'</span>).<span class="fn">each</span>((bar, i) => {
  <span class="fn">setTimeout</span>(() =>
    bar.<span class="fn">classList</span>.<span class="fn">add</span>(<span class="str">'highlighted'</span>),
    i * <span class="num">100</span>
  );
});</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-each-height">Ajustar alturas</button>
          <button class="btn-demo" id="btn-each-wave">Animar em onda</button>
        </div>
      </div>
      <div class="demo-area">
        <div class="demo-label">Barras .bar</div>
        <div class="each-bar">
          <div class="bar" style="height:20px;"></div>
          <div class="bar" style="height:20px;"></div>
          <div class="bar" style="height:20px;"></div>
          <div class="bar" style="height:20px;"></div>
          <div class="bar" style="height:20px;"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== ON ===== -->
  <div class="group-label">Eventos</div>

  <div class="section">
    <div class="section-header">
      <span class="method-name">.on()</span>
      <span class="method-sig">on(event, fn) → wrap</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// Múltiplos alvos de uma vez</span>
<span class="fn">el</span>(<span class="str">'.ev-btn'</span>).<span class="fn">on</span>(<span class="str">'click'</span>, e => {
  <span class="fn">el</span>(<span class="str">'#log-eventos'</span>)
    .<span class="fn">html</span>(<span class="str">`Clicou: ${e.target.dataset.nome}`</span>);
});

<span class="cmt">// Detectar foco em campos</span>
<span class="fn">el</span>(<span class="str">'.ev-input'</span>)
  .<span class="fn">on</span>(<span class="str">'focus'</span>, e => {
    <span class="fn">el</span>(e.target).<span class="fn">css</span>(<span class="str">'borderColor'</span>, <span class="str">'var(--accent)'</span>);
  })
  .<span class="fn">on</span>(<span class="str">'blur'</span>, e => {
    <span class="fn">el</span>(e.target).<span class="fn">css</span>(<span class="str">'borderColor'</span>, <span class="str">'var(--border)'</span>);
  });</pre>
      </div>
      <div class="demo-area" style="gap:12px;">
        <div class="demo-label">Clique em qualquer botão</div>
        <div class="btn-row">
          <button class="btn-demo ev-btn" data-nome="Alpha">Alpha</button>
          <button class="btn-demo ev-btn" data-nome="Beta">Beta</button>
          <button class="btn-demo ev-btn" data-nome="Gamma">Gamma</button>
        </div>
        <div class="demo-label">Log</div>
        <div class="output" id="log-eventos">Aguardando clique...</div>
        <div class="demo-label" style="margin-top:4px;">Campos com foco detectado via .on()</div>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
          <input class="ev-input" placeholder="Campo 1" style="flex:1;padding:8px 12px;background:var(--surface2);border:1px solid var(--border);border-radius:4px;color:var(--text);font-family:'IBM Plex Mono',monospace;font-size:12px;outline:none;transition:border-color .2s;">
          <input class="ev-input" placeholder="Campo 2" style="flex:1;padding:8px 12px;background:var(--surface2);border:1px solid var(--border);border-radius:4px;color:var(--text);font-family:'IBM Plex Mono',monospace;font-size:12px;outline:none;transition:border-color .2s;">
        </div>
      </div>
    </div>
  </div>

  <!-- ===== OFF ===== -->
  <div class="section">
    <div class="section-header">
      <span class="method-name">.off()</span>
      <span class="method-sig">off(event, fn) → wrap</span>
    </div>
    <div class="section-body two-col">
      <div>
        <pre><span class="cmt">// Guardar referência para poder remover</span>
<span class="kw">const</span> handler = () => {
  contador++;
};

<span class="fn">el</span>(<span class="str">'#off-target'</span>).<span class="fn">on</span>(<span class="str">'click'</span>, handler);

<span class="cmt">// Remove o listener específico</span>
<span class="fn">el</span>(<span class="str">'#off-target'</span>).<span class="fn">off</span>(<span class="str">'click'</span>, handler);</pre>
        <br>
        <div class="btn-row">
          <button class="btn-demo" id="btn-off-on">Ligar listener</button>
          <button class="btn-demo danger" id="btn-off-off">Desligar</button>
        </div>
      </div>
      <div class="demo-area" style="gap:12px;">
        <div class="demo-label">Alvo — clique para contar</div>
        <div id="off-target">Listener inativo — clique não conta</div>
        <div class="demo-label">Log</div>
        <div class="output" id="out-off">0 cliques registrados</div>
      </div>
    </div>
  </div>

  <footer>
    el() + wrap() &nbsp;|&nbsp; zero dependências &nbsp;|&nbsp; ~65 linhas
    &nbsp;|&nbsp; por <a href="https://elton.disner.com.br" target="_blank" style="color:var(--text-dim);text-decoration:none;border-bottom:1px solid var(--border);">Elton Disner</a>
  </footer>

</div>

<script src="js/el.min.js"></script>
<script src="js/el-demo.js"></script>
</body>
</html>
