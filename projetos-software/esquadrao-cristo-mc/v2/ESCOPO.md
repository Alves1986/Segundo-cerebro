---
tags: [ecmc, esquadrao-cristo, escopo, v2, remodelagem]
tipo: documento-escopo
status: em-andamento
criado: 2026-08-07
---

# ECMC V2 — Sistema de Gestão Nacional (Escopo)

> Reconstrução do sistema de gestão do Esquadrão de Cristo MC como **webapp** para gestão por base. Nova versão do zero, em pasta `v2/`, com identidade do site oficial e layout moderno. A extração do legado (`estrutura-extraida/`) e o `servidor/` permanecem **INTOCADOS** como referência.

## Fontes analisadas

| Fonte | Papel |
|---|---|
| **Site oficial** `esquadraodecristo.org.br` | Identidade visual + tom + seções. **INTOCÁVEL — não será modificado** (já reformulado recentemente). Serve só de base de identidade e **domínio oficial disponível** para o sistema de gestão (ex.: subpasta ou subdomínio `sistema.esquadraodecristo.org.br`). |
| **Sistema legado** (MC 2.0 / daltoinfo) | Profundidade funcional de módulos (membros, eventos, presença, pedidos, patrimônio, cadastros, relatórios) — homologação, NÃO layout |
| **Sistema atual** (`sistema.ecmc.com.br`, login 01234567890/Caio0703@) | Referência do modelo de dados real que já existe no ECMC (perfil, membros por base, dependentes, fases, títulos, documentos) |

## Diagnóstico do sistema atual (ECMC base)
- **Raso p/ gestão nacional**: painel mostra só membros por base + totais; perfil de base só vê "Dashboard" e "Meus Dados".
- **Layout ruim**: interface pouco clara, sem hierarquia visual, sem divisão nacional/base.
- **Falta profundidade**: eventos, presença, relatórios, municipais (fases/títulos/dependentes) não organizados por papel/base.

## Objetivo da v2
Webapp de **gestão nacional multi-base**: cada base (estado/região) gerencia a sua; **Direção Nacional/Presidencial** vê tudo que as bases fazem. Acesso controlado por **perfil**.

## Princípios (não negociáveis)
1. **NÃO modificar** `estrutura-extraida/`, `servidor/`, `index.md`. Nova versão em `v2/`.
2. Layout limpo, moderno, com identidade ECMC (logo, paleta, tipografia do site oficial).
3. **Acesso por perfil** (o que cada papel vê), com escopo por base (multitenancy).
4. **Enxugar**: só o necessário vai pra tela; o resto fica guardado (campos/registros inativos na tela quando fizer sentido).
5. Remover duplicatas que poluem (presença = check-in, mural público = eventos públicos).
6. Stack: **Next.js 16 + Tailwind v4 + Supabase (Auth + RLS) + Vercel**.

## Paleta / identidade (site oficial)
- Logo: `logo-ecmc.svg` (baixada em `v2/referencia-identidade/`; Anderson vai fornecer a oficial — usar esta como fallback)
- Cores extraídas: `#F5EDE0` (bege claro), `#241D2B` (quase preto), `#6A6072` (cinza-roxo), `#8A7BB5` (lilás)
- Tom: "Fé · Estrada · Propósito", "Ninguém roda sozinho", "Cristo é o centro"

---

## ESTRUTURA DA V2 (por perfil de acesso)

> A navegação é a MESMA plataforma; o que muda é **o que cada perfil vê** conforme o papel. Nada de telas duplicadas por nível.

### PERFIL 1 — MEMBRO (não é diretoria)
Acesso: informações necessárias, porém **muito informativas**, restritas ao que lhe diz respeito.
| Área | O que vê |
|---|---|
| **Meu Painel** | Meus eventos, minhas presenças, comunicados da base |
| **Meus Dados** | Ficha completa (dados, dependentes, fases, títulos, pasta de documentos) — edita o próprio |
| **Eventos** | Calendário/eventos da própria base + presença/check-in |
| **Cards/Artes** | ABA UNIVERSAL de geração de cards (ver seção própria) |

### PERFIL 2 — DIRETORIA DE BASE (diretores por estado/região)
Acesso: gestão COMPLETA da própria base.
| Área | O que vê |
|---|---|
| **Painel da Base** | Indicadores da base (membros, eventos, pendências) |
| **Membros** | CRUD da base + fases + títulos + dependentes + prospects |
| **Eventos** | CRUD da base + presença/check-in + mural |
| **Relatórios** | Frequência, membros por status, resumo mensal da base |
| **Financeiro da base** | (a mapear no legado) entradas/saídas da base |
| **Inventário/Patrimônio** | Itens, empréstimos, manutenções da base |
| **Pedidos** | Itens/magens da base |
| **Cards/Artes** | ABA UNIVERSAL de geração de cards (ver seção própria) |

### PERFIL 3 — DIREÇÃO NACIONAL (diretoria presidencial)
Acesso: **geral — vê tudo que as bases estão fazendo**.
| Área | O que vê |
|---|---|
| **Painel Nacional** | Indicadores consolidados de todas as bases |
| **Bases** | CRUD de bases + liderança por base |
| **Membros (todas as bases)** | Visão geral por base + indicadores |
| **Eventos (nacional)** | Todos os eventos + presença consolidada |
| **Financeiro (nacional)** | Visão geral do financeiro das bases (a mapear no legado) |
| **Relatórios mensais** | Relatórios consolidados das bases |
| **Inventário (nacional)** | Visão geral de patrimônio |
| **Estrutura** | Cargos, diretoria/mandato, usuários, perfis/permissões |
| **Parâmetros nacionais** | Tipos de evento, categorias, etc. |
| **Cards/Artes** | ABA UNIVERSAL de geração de cards (ver seção própria) |

---

## ABA UNIVERSAL — CARDS / ARTES OFICIAIS DO ECMC (todos os perfis)

> Funcionalidade **geral para todos**: gerar os cards oficiais de comunicação do ECMC.

**Objetivo:** as artes oficiais de comunicação do ECMC ficam centralizadas nesta aba; as bases editam e usam para divulgação (eventos, campanhas, datas, etc.).

**Fluxo (v1 da aba):**
1. **Galeria de artes oficiais** — lista das artes-modelo do ECMC (por tipo: evento, campanha, data comemorativa, aniversário, etc.)
2. **Selecionar arte** → **editor** (edição de texto/informações sobre a arte: nome, data, local, horário, QR, etc.)
3. **Pré-visualização em tempo real**
4. **Download** da arte final (PNG) para divulgação

**STATUS: PENDENTE de implementar o editor de edição/adicionar informações nas artes.** Aguardando o Anderson **coletar as imagens oficiais** (artes-modelo) para entender como criar o sistema de edição e adição de informações nelas e posteriormente o download.

**O que já pode ser feito agora:** estrutura da aba (navegação, galeria, seleção, esqueleto do editor + download). A integração com as artes reais fica pendente.

---

## Modelo de dados central (das telas do sistema atual + legado)

### Membro
CPF, matrícula, nome completo, road name (apelido), gênero, data nascimento, fator RH, estado civil, celular, email, CNH (número, categoria, validade), endereço (CEP/logradouro/cidade), profissão, habilidades, igreja que congrega, ministério no ECM, base, cargo/função de apoio, foto, status (ativo/desligado/licança), data entrada

### Dependente
id_membro, nome, parentesco, data nascimento, documento

### Fases / Títulos do membro
fases (prospect, etc.) e títulos — grade celular

### Base
nome, cidade, estado, tipo (base/representação), liderança, status

### Evento
nome, descricao, data, hora, local, base, tipo, status (aberto/finalizado/pendente), presença (check-in por membro)

### Financeiro (A MAPEAR)
O Anderson citou financeiro no nível nacional — verificar no legado/atual se existe módulo financeiro e como modelar (por base, consolidado nacional)

### Inventário / Patrimônio
Itens, categorias, locais, empréstimos, manutenções (idem legado, por base)

### Pedidos
Itens/magens por base

### Cards / Artes
Arte-modelo (imagem), tipo, campos editáveis (posição de textos), base, status — **pendente de definição com as imagens oficiais**

### Usuário / Perfil
usuário, senha (via Supabase Auth), base, perfil/permissões por tela

---

## Decisões PENDENTES para validar com Anderson
- [ ] **Financeiro**: existe no sistema atual? Como modelar (entradas/saídas por base, consolidado nacional)?
- [ ] Definir fases do membro (qual o fluxo prospect→membro)
- [ ] Tipos de evento (aniversário, motoculto, passeio, chá, ação social...)
- [ ] Relatórios mensais: o que cada base deve enviar (formato)?
- [ ] Autenticação: CPF + senha (como o atual)
- [ ] **Cards/Artes**: Anderson coleta as imagens oficiais → define campos editáveis → implementa editor
- [ ] MVP: começar com (Público + Membro + Base) e Nacional depois, ou tudo junto?

---

## Próximos passos
1. Validar este escopo (o Anderson revisa)
2. Seed do projeto `v2/`: Next.js 16 + Tailwind v4 + Supabase
3. Schema Supabase (auth + RLS por perfil/base)
4. Design system (logo/paleta ECMC)
5. Implementar MVP: Público → Membro → Base → Nacional
6. Aba Cards/Artes: estrutura pronta; editor real após receber as imagens oficiais