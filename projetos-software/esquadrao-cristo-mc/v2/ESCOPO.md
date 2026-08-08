---
tags: [ecmc, esquadrao-cristo, escopo, v2, remodelagem]
tipo: documento-escopo
status: em-andamento
criado: 2026-08-07
---

# ECMC V2 — Sistema de Gestão Nacional (Escopo)

> Reconstrução do sistema de gestão do Esquadrão de Cristo MC. Nova versão do zero, em pasta `v2/`, com identidade do site oficial e layout moderno. A extração do legado (`estrutura-extraida/`) e o `servidor/` permanecem **INTOCADOS** como referência.

## Fontes analisadas

| Fonte | Papel |
|---|---|
| **Site oficial** `esquadraodecristo.org.br` | Identidade visual + tom + seções. **NÃO SERÁ MODIFICADO** — é só base de identidade. O **domínio oficial pode ser usado** para o sistema de gestão (ex.: subpasta ou subdomínio `sistema.esquadraodecristo.org.br`). |
| **Sistema legado** (MC 2.0 / daltoinfo) | Profundidade funcional de módulos (membros, eventos, presença, pedidos, patrimônio, cadastros, relatórios) — homologação, NÃO layout |
| **Sistema atual** (`sistema.ecmc.com.br`, login 01234567890/Caio0703@) | Referência do modelo de dados real que já existe no ECMC (perfil, membros por base, dependentes, fases, títulos, documentos) |

> **NOTA ESTRUTURAL PENDENTE:** O Anderson indicou que a estrutura da `v2/` **(que estava em 4 níveis: Público/Membro/Base/Nacional) precisará ser REMODELADA**. Aguardando a visão dele sobre como dividir áreas/menus (provavelmente por área funcional filtrável por base/nacional, ou outra organização). Não reestruturar com base em chute — confirmar com ele antes.

## Diagnóstico do sistema atual (ECMC base)
- **Raso p/ gestão nacional**: painel mostra só membros por base + totais; perfil de base só vê "Dashboard" e "Meus Dados".
- **Layout ruim**: interface pouco clara, sem hierarquia visual, sem divisão nacional/base.
- **Falta profundidade**: eventos, presença, relatórios, municipais (fases/títulos/dependentes) não organizados por papel/base.

## Objetivo da v2
Sistema de **gestão nacional multi-base** com identidade do ECMC, enxuto e confiável: cada base vê o que importa; **Presidência/Direção Nacional** vê o geral.

## Princípios (não negociáveis)
1. **NÃO modificar** `estrutura-extraida/`, `servidor/`, `index.md`. Nova versão em `v2/`.
2. Layout limpo, moderno, com identidade ECMC (logo, paleta, tipografia do site oficial).
3. **Dividido por base** (multitenancy): escopo restrito por base; nacional vê tudo.
4. **Enxugar**: só o necessário vai pra tela; o resto fica guardado (campos/registros inativos na tela quando fizer sentido).
5. Remover duplicatas que poluem (presença = check-in, mural público = eventos públicos).
6. Stack: **Next.js 16 + Tailwind v4 + Supabase (Auth + RLS) + Vercel**.

## Paleta / identidade (site oficial)
- Logo: `logo-ecmc.svg` (baixada em `v2/referencia-identidade/`; Anderson vai fornecer a oficial — usar esta como fallback)
- Cores extraídas: `#F5EDE0` (bege claro), `#241D2B` (quase preto), `#6A6072` (cinza-roxo), `#8A7BB5` (lilás)
- Tom: "Fé · Estrada · Propósito", "Ninguém roda sozinho", "Cristo é o centro"

---

## MÓDULOS PROPOSTOS (v2)

### Nível Público (visitante, sem login)
| Módulo | Descrição | Necessário? |
|---|---|---|
| Home institucional | Reino estrada (identidade ECMC) | SIM |
| Mural de eventos públicos | Próximos eventos da nacional e por base | SIM |
| Mapa de bases | Bases ativas do Brasil | SIM |
| Galeria | Álbuns por ano/evento | SIM |
| Cartão de aniversário | Gerador de cartão (recurso do legado) | SIM |
| Quero ser membro / Fale conosco | Captação de interesse | SIM |

### Nível Membro (logado, por base)
| Módulo | Descrição |
|---|---|
| Meus eventos / calendário da minha base | Só eventos da base |
| Presença / Check-in | Registrar e ver presença nos eventos |
| Meus dados + dependentes + fases + títulos | Ficha atualizável (só o seu) |
| Pasta de documentos | CNH, docs pessoais |

### Nível Base (dirigente da base)
| Módulo | Descrição |
|---|---|
| Membros da minha base | CRUD + fases + títulos + dependentes |
| Eventos da base | CRUD + presença/check-in |
| Relatórios da base | Frequência, membros por status |
| Pedidos (itens/magens) | Itens da base |
| Patrimônio da base | Itens, empréstimos, manutenções |
| Prospectos / candidatos | Fase o conceito de membro |

### Nível Nacional (Presidência/Direção)
| Módulo | Descrição |
|---|---|
| Todas as bases (painel nacional) | Indicadores agregados |
| Gestão de bases | CRUD bases + liderança |
| Cargos + Diretoria/Mandato | Estrutura organizacional |
| Usuários e perfis/permissões | Controle de acesso |
| Relatórios consolidados | Frequência nacional, evento por ano, ranking |
| Parâmetros nacionais | Categorias, tipos de evento, etc |
| Cards de aniversário / artes | Geração de cartões |

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

### Patrimônio / Pedidos
(idem legado, refinado por base)

### Usuário / Perfil
usuário, senha (via Supabase Auth), base, perfil/permissões por tela

---

## Decisões PENDENTES para validar com Anderson
- [ ] Confirmar se `v2/` começa.via com todos os módulos OU MVP enxuto (recomendo MVP: Público + Membro + Base; Nacional depois)
- [ ] Definir fases do membro (qual o fluxo prospect→membro)
- [ ] Tipos de evento (aniversário, motoculto, passeio, chá, ação social...)
- [ ] Confirmar a reestruturação dos relatórios nacionais vs por base
- [ ] Autenticação: CPF + senha (como o atual)

---

## Próximos passos
1. Validar este escopo (o Anderson revisa)
2. Seed do projeto `v2/`: Next.js 16 + Tailwind v4 + Supabase
3. Schema Supabase (auth + RLS por base/nível)
4. Design system (logo/paleta ECMC)
5. Implementar MVP: Público → Membro → Base → Nacional