# Arquitetura Técnica — Plataforma de IA para Vídeos Virais

## 1. Objetivo técnico
Construir uma arquitetura modular, simples de manter e fácil de escalar para novas funcionalidades de conteúdo e imagem.

## 2. Componentes
### 2.1 Frontend
- Interface web responsiva.
- Editor de roteiro.
- Visualização do dashboard.
- Histórico de projetos.
- Exportação.

### 2.2 Backend
- API de autenticação.
- API de projetos.
- API de geração de roteiro.
- API de geração de imagens.
- API de exportação.

### 2.3 Serviços de IA
- Serviço de prompts para roteiros.
- Serviço de prompts para imagens.
- Serviço de reescrita.
- Serviço de classificação de estilo.

### 2.4 Persistência
- Banco de dados para usuários, projetos e versões.
- Armazenamento de arquivos gerados.
- Logs de uso.

## 3. Modelo modular
A plataforma deve separar claramente:
- Camada de entrada do usuário.
- Camada de orquestração.
- Camada de IA.
- Camada de persistência.
- Camada de exportação.

## 4. Fluxo de processamento
1. Frontend envia dados do projeto.
2. Backend valida o input.
3. Serviço de roteiro gera saídas.
4. Serviço de imagem gera direção visual.
5. Resultados são salvos.
6. Usuário revisa e exporta.

## 5. Modelo de dados mínimo
### Project
- id
- user_id
- title
- theme
- goal
- platform
- tone
- audience
- duration
- created_at
- updated_at

### ScriptVersion
- id
- project_id
- hook
- script_body
- cta
- style
- variant_label
- created_at

### VisualVersion
- id
- project_id
- palette
- typography
- layout_notes
- image_prompts
- preview_url
- created_at

## 6. Requisitos de engenharia
- Rate limiting.
- Cache para respostas repetidas.
- Versionamento de prompts.
- Observabilidade por logs e eventos.
- Estrutura pronta para múltiplos modelos de IA.

## 7. Segurança
- Sanitização de entrada.
- Proteção contra abuso de prompts.
- Controle de acesso por usuário.
- Armazenamento seguro de dados.

## 8. Escalabilidade
A arquitetura deve permitir trocar o modelo de IA sem refazer o produto inteiro. Também deve suportar expansão para novos tipos de conteúdo no futuro.
