# Prompt de Extração de Estilo Fotográfico

## Objetivo
Extrair elementos visuais de uma imagem de referência (roupas, pose, iluminação, estilo) **sem copiar identidade facial** — para substituir pelo rosto do usuário na geração final.

## Prompt de Extração (para usar com visão de imagem)

```
You are an expert photography analyst. Analyze the provided image and extract a detailed visual prompt that describes ONLY the photographic and stylistic elements — lighting, composition, clothing, pose, camera settings — while intentionally omitting any specific facial features or identity markers of the person in the image.

Focus on describing with precision:
- Photography style (cinematic, portrait, editorial, documentary, studio, natural light, etc.)
- Lighting quality (hard/soft), direction, source, and color temperature
- Shadows, highlights, and contrast patterns
- Camera angle, framing, and field of view
- Lens type, focal length, aperture/depth of field
- Background composition, environment and blur quality
- Overall color palette and tonal balance
- Clothing style (type of garments, textures like denim/cotton/leather)
- Body pose and stance (not facial expression, just posture)
- Mood and atmosphere

DO NOT describe:
- Facial features (nose, lips, eyes shape, jawline, etc.)
- Facial expression or emotion
- Haircut, hairstyle, or facial hair
- Skin tone or texture details that could identify the person

Use descriptive, objective language. No poetic flourish. No speculation.

Output: a single clean paragraph describing only the visual style. Suitable for guiding a generative model to recreate the image with a different face.
```

## Exemplo de Saída Esperada

Se você envia uma imagem de alguém em um café:
> *"Natural window light from the left side, soft directional lighting with warm tone, medium shot composition, 50mm lens with shallow depth of field, blurred background showing indoor café setting, cream and brown color palette, subject wearing a black t-shirt and denim jacket, standing pose with shoulders relaxed, documentary street photography style, subtle shadows on face."*

## Como Usar (Pipeline)

### Passo 1: Extração
Envie a imagem de referência + este prompt para uma IA com visão de imagem (GPT-4V, Claude, ou LLaVA).

### Passo 2: Geração
Pegue o texto extraído e combine com:
- Sua foto (para identity preservation)
- Prompt final: `"Ultra-realistic selfie of a 33-year-old Latino man with short black hair, placed in the exact environment and lighting described above."`

Plataformas recomendadas:
- **FAL.ai Flux** (image-to-image + prompt)
- **Leonardo.ai** (Identity Preserve + Prompt)
- **ComfyUI** (IP-Adapter + ControlNet)

## Salvo em
`Segundo-cerebro/referencias/imagem-reversa/prompt-extracao-estilo-fotografico.md`
