---
tags: [projeto, motoclube, esquadrao-cristo, remodelagem, estrutura-extraida]
tipo: projeto-software
status: em-andamento
criado: 2026-08-07
---

# Esquadrão de Cristo MC — Remodelagem

> Reconstrução do sistema de gestão de motoclube (atualmente "Motoclub Presença 2.0" em PHP no daltoinfo.com.br/mc) para o **Esquadrão de Cristo MC**, em stack moderna (Next.js).

## Objetivo

Reconstruir o sistema **do zero no front-end** reaproveitando a estrutura/layout extraída do sistema original. **O backend será construído à parte** (não será usado o PHP original, nem o banco dele).

## Estrutura extraída

```
esquadrao-cristo-mc/
├── estrutura-extraida/          # HTML de todas as telas (painel + publicas)
│   ├── dashboard/               # Dashboard executivo (superadmin)
│   ├── membros/                 # Lista, novo membro, prospects, diretoria, perfil
│   ├── eventos/                 # Lista, novo evento, mural, check-in
│   ├── presencas/               # Resumo de presenças
│   ├── pedidos/                 # Itens, tipos, pedidos por membro
│   ├── patrimonio/              # Dashboard, itens, empréstimos, manutenções
│   ├── cadastros/               # Bases, cargos, usuários, perfis, parametrizações
│   ├── relatorios/              # Central, eventos/ano, ranking presença
│   ├── detalhes/                # Editar evento/membro, presença evento, cartão aniversário
│   ├── publico/                 # Login, mural, bases, galeria (sem autenticação)
│   └── galeria/                 # Mosaico Google Drive
└── assets/                      # CSS/JS do sistema
    ├── css/app.css              # Design system custom MC (variáveis CSS)
    ├── css/theme-esquadrao.css  # Tema overlay p/ Esquadrão (ja existe!)
    ├── js/app.js                # JS custom do app
    ├── build/                   # Tema Gentelella (custom.min.css/js)
    ├── vendors/                 # Bootstrap, jQuery, Select2, FontAwesome, etc.
    └── imagens/                 # Logo motoclub + artes de aniversario (M/F)
```

## Mapa de telas (32 páginas do painel + páginas públicas)

### Módulos principais (menu lateral)
| Módulo | Telas |
|---|---|
| Dashboard | `dashboard.php` — executivo, superadmin |
| Membros | `membros.php`, `novo_membro.php`, `prospects.php`, `diretoria.php` |
| Eventos | `eventos.php`, `novo_evento.php`, `mural_eventos.php` |
| Presenças | `presencas.php`, `presenca_evento.php`, `checkin_evento.php` |
| Pedidos | `pedidos.php`, `pedido_tipos.php`, `novo_pedido_item.php`, `novo_pedido_membro.php`, `pedidos_membro.php` |
| Patrimônio | `patrimonio_dashboard.php`, `patrimonio_itens.php`, `novo_patrimonio.php`, `patrimonio_emprestimos.php`, `patrimonio_manutencoes.php`, `patrimonio_relatorios.php`, `patrimonio_categorias.php`, `patrimonio_locais.php` |
| Cadastros | `bases.php`, `cargos.php`, `fases_membro.php`, `artes_aniversario.php`, `usuarios.php`, `perfis.php`, `parametrizacoes.php` |
| Relatórios | `relatorios.php`, `relatorio_eventos_ano.php`, `relatorio_ranking_presenca.php` |

### Páginas públicas (sem login)
- `index.php` — Login + resumo do mês
- `mural_eventos.php` — Mural de eventos (calendário mensal)
- `bases_publico.php` — Mapa com 29 bases em 13 estados
- `galeria_publica.php` — Galeria de álbuns por ano (2016–2026)
- `cartao_aniversario.php` — Gerador de cartão de aniversário (editor canvas)

## Modelo de dados (extraído dos formulários)

### Membro
nome, apelido, sexo, data_nascimento, telefone, email, foto, id_base, id_cargo, id_membro_responsavel, data_entrada, tipo_vinculo, observacao, status

### Evento
nome, descricao, data_evento, hora_evento, local_evento, id_base, id_tipo_evento, status (Aberto/Finalizado/Pendente), evento_oficial, foto_evento, latitude, longitude, raio_checkin_metros, link_google_drive, link_instagram, link_youtube

### Patrimônio
nome, descricao, id_base, id_categoria, id_local, id_membro_responsavel, marca, modelo, numero_serie, quantidade, unidade_medida, valor_unitario, data_aquisicao, forma_aquisicao, estado_conservacao, situacao, tipo_controle, documento, foto, observacoes

### Pedido/Item
nome, descricao, id_tipo, imagem, pdf, status + modelos[] (nome, descricao, preco); pedido: id_membro, id_item, modelos, observacoes

### Usuário
usuario, nome, email, senha, foto, nivel, id_bases[], id_membro, status

### Perfil
nome, descricao, paginas[] (permissões por tela), usuarios[], administrador, status

### Base / Cargo / Mandato
- Base: nome, cidade, status
- Cargo: nome, descricao, diretoria, status
- Mandato: nome, descricao, id_base, data_inicio, data_fim, csrf_token

## Stack alvo (remodelagem)

- **Next.js** (App Router) + TypeScript — stack padrão (ver CLAUDE.md)
- **Tailwind CSS** para o redesign (ou manter Gentelella no primeiro release)
- **Supabase** (Postgres + Auth + RLS) como backend
- Deploy: **Vercel**
- Reaproveitar: design system do `app.css` (variáveis `--mc-*`), tema esquadrao, artes de aniversário, logo

## Design system original (app.css)

```css
--mc-primary: #2A3F54;      /* azul-escuro (sidebar/tabelas) */
--mc-accent: #1ABB9C;       /* verde-turquesa (botões/destaques) */
--mc-accent-dark: #169F85;
--mc-bg: #F7F7F7;
--mc-surface: #FFFFFF;
--mc-border: #E6E9ED;
--mc-text: #73879C;
--mc-heading: #34495E;
--mc-danger: #E74C3C;
--mc-warning: #F0AD4E;
```

Para o Esquadrão de Cristo MC: manter a estrutura, trocar a identidade (logo, cores se desejado). O `theme-esquadrao.css` já é um overlay pronto.

## Comportamento JS custom (app.js)

- **Select2**: todo `<select class="form-control">` vira busca pesquisável (disparado no load + ao injetar via `mcInitSearchableSelects`).
- **Sidebar**: submenus com `ul.child_menu` (slideDown/Up); apenas uma seção aberta por vez.
- **Menu mobile** (`max-width: 991px`): `#menu_toggle` adiciona classe `mc-mobile-menu-open` no `<body>`; fecha ao clicar num link, fora da área, ou resize.
- O sistema usa o tema **Gentelella** (gentellela admin template, Bootstrap 3) com overlay custom `app.css`.

## Próximos passos

- [ ] Decidir escopo do MVP (módulos prioritários)
- [ ] Setup do projeto Next.js + Supabase
- [ ] Autenticação (login com perfil/permissões)
- [ ] Módulo Membros + Eventos + Presenças (núcleo)
- [ ] Demais módulos (Pedidos, Patrimônio, Cadastros, Relatórios)
- [ ] Páginas públicas (mural, bases, galeria, cartão aniversário)
