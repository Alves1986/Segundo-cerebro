---
tipo: video-youtube-wiki
video_id: IImHwv3H8Dw
titulo: Achei uma API brasileira para enriquecer qualquer CNPJ (dados dos sócios)
canal: Victor Baggio | IA para Vendas
url: https://youtube.com/watch?v=IImHwv3H8Dw
data_publicacao: 2026-07-15
duracao: 15m 53s
views: 17668
tags: [enriquecimento-de-dados, cnpj, prospeccao-b2b, api-brasileira, n8n, mcp]
criado_em: 2026-07-24
origem_raw: conhecimento/raw/2026-07-24_IImHwv3H8Dw_achei-uma-api-brasileira-para-enriquecer.md
---

# Resumo do conhecimento: Kipflow (API de enriquecimento de CNPJ)

## O problema que a API resolve
Enriquecer dados de empresas B2B no Brasil era caro e furado com ferramentas gringas (Clay, Apollo). Elas cobram em dolar e nao estao adaptadas aos bancos nacionais (Receita Federal, dados de CNPJ), comprometendo a qualidade do pacote de dados.

## A solucao: Kipflow
API 100% brasileira que acessa dados locais e enriquece empresas para prospeccao comercial.
- Modelo pague por uso (sem mensalidade, sem cartao de credito para comecar).
- Tem R$ 200 de credito gratis via link de afiliado do autor.
- Credito gasto por requisicao, entao voce paga so o que usa.

## O que a API consegue devolver por CNPJ ou dominio
- E-mail e telefone do negocio (com inteligencia para desviar dados de contabilidade e trazer o da empresa real).
- Lista de decisores com cargo e LinkedIn, e-mail corporativo validado e score de tomador de decisao (0 a 100).
- Porte da empresa, numero de funcionarios, faturamento anual estimado.
- Numero de processos judiciais e valor da divida ativa com a Uniao.
- Regime tributario, filiais, ramos de atividade, presenca digital (redes sociais atreladas ao CNPJ).
- Lista dos socios.
- Dados de vertical especifica: fiscal, agro, e-commerce, frota (quantos caminhoes a empresa tem), saude, licitacao.

## Diferenciais vs ferramentas gringas
- Dados de frota, licitacao e processos judiciais sao exclusivos de bancos nacionais, impossiveis em API estrangeira.
- Qualificacao por porte e faturamento estimado nao existe em outras APIs.
- Node de comunidade para N8N (instala e usa sem ficar no HTTP request cru).
- MCP proprietario: conecta na LLM (GPT/Claude) e enriquece dados so mandando prompt.

## Casos de uso demonstrados no video
1. Extracao a partir do URL do perfil da empresa (exemplo: Magazine Luiza) - dados, telefones do negocio, e-mails dos socios.
2. Descobrir decisores por cargo a partir do LinkedIn da empresa (exemplo: diretora comercial com score 100).
3. Enriquecimento de inbound no CRM (Pipedrive): quando um lead entra, o Kipflow puxa o dominio do e-mail, enriquece a empresa, gera e-mails de outros decisores e devolve ao CRM com score de qualificacao por faturamento.
4. Geracao de listas de leads por filtros (estado, municipio, segmento, porte, faixa de faturamento, matriz/filial, so ativa). Cuidado: lista grande consome credito mais rapido.
5. Analise de risco comercial por divida ativa (situacao cadastral, faturamento, funcionarios, compliance, nota de risco).

## Como acessar
- N8N (com node de comunidade), cloud, codigo, Codex, ou MCP ligado direto na LLM (pode conectar num agente de WhatsApp ou aplicacao).

## Utilidade pro seu ecossistema
- Encaixa direto no seu stack de prospeccao (portfolio-prospeccao): o chatbot ja coleta o lead, o Kipflow enriquece CNPJ/Instagram e o Mini-CRM (wacrm) recebe decisores + faturamento.
- Pode alimentar a Fase 1 (descoberta) dos master prompts com dados reais da empresa do lead.
- Creditos: R$ 200 gratis via link do video (plataform.kipflow.io/signup?c=victorbaggio).

## Pontos pra estudar
- [ ] Testar o enriquecimento de um CNPJ real via N8N usando os R$ 200 de credito.
- [ ] Avaliar se o MCP do Kipflow substitui parte do Agente 0 (descoberta) do seu portfólio-prospeccao.
- [ ] Ver integracao Kipflow + wacrm para preencher automaticamente o Mini-CRM de leads.
