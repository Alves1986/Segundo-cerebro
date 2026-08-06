# Métricas e Analytics — Plataforma de IA para Vídeos Virais

## 1. Objetivo
Medir uso, qualidade das saídas e impacto do produto na velocidade de criação de conteúdo.

## 2. Métricas de produto
- Número de projetos criados.
- Número de roteiros gerados.
- Número de dashboards visuais gerados.
- Taxa de exportação.
- Taxa de retorno do usuário.

## 3. Métricas de qualidade
- Aprovação do roteiro gerado.
- Número de reescritas por projeto.
- Tempo até a primeira saída útil.
- Frequência de uso de variações.

## 4. Métricas de engajamento
- Tempo médio na plataforma.
- Conclusão do fluxo.
- Cliques em exportar.
- Salvamentos por projeto.

## 5. Eventos recomendados
- project_created
- script_generated
- script_variant_selected
- visual_generated
- export_clicked
- project_saved
- project_duplicated

## 6. Dashboard interno
Deve mostrar:
- Funil de uso.
- Projetos por período.
- Taxa de sucesso por etapa.
- Estilos mais usados.
- Plataformas mais escolhidas.

## 7. Interpretação
Se o usuário gera muito roteiro mas exporta pouco, o problema pode estar na qualidade da saída ou na usabilidade da revisão. Se a taxa de reescrita for alta, o prompt-base ou os parâmetros precisam ser ajustados.
