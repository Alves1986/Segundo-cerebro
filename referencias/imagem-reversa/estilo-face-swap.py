#!/usr/bin/env python3
"""
Script: estilo-face-swap.py
Objetivo: Extrair estilo fotográfico da imagem de referência e aplicar no seu rosto.

Uso:
  python3 estilo-face-swap.py --referencia img_referencia.jpg --identidade minha_foto.jpg --output resultado.png

Requisitos:
  pip install fal-client pillow requests
  Exportar: export FAL_KEY="sua-chave-fal-ai"
"""
import argparse
import sys

EXTRACAO_PROMPT = """
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
"""

def extrair_estilo():
    print("📸 1. Extraia o estilo visual da sua imagem de referência:")
    print("Copie e cole este prompt em uma ferramenta com visão de imagem (GPT-4V, Claude, etc):")
    print("="*60)
    print(EXTRACAO_PROMPT.strip())
    print("="*60)
    print("\nPegue o texto de saída e cole no prompt final abaixo:")

    estilo = input("\n📋 Cole o texto extraído do estilo fotográfico: ").strip()
    if not estilo:
        print("❌ Você precisa colar o texto extraído.")
        sys.exit(1)

    prompt_final = (
        estilo + ", "
        "Ultra-realistic selfie of a 33-year-old Latino man with short black hair, placed "
        "naturally in this exact environment and lighting, identity preserved."
    )

    print("\n🎨 3. Prompt final para geração (use com FAL.ai ou Leonardo.ai):")
    print("="*60)
    print(prompt_final)
    print("="*60)

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description="Extrai estilo de imagem e gera com seu rosto")
    parser.add_argument("--extrair", action="store_true", help="Mostra prompt de extração")
    args = parser.parse_args()
    if args.extrair or True:
        extrair_estilo()
