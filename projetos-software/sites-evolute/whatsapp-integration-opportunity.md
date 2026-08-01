# Integração Hermes WhatsApp V2 - Evolute

## 📋 Contexto
**Projeto**: sites-evolute (Next.js)  
**Status**: Documentado, não implementado  
**Base**: Vídeo sobre Hermes WhatsApp V2 - https://youtu.be/DLCSnYFrEfw  

## 🔍 Oportunidade Identificada
Baseado no pipeline de 7 decisões do Hermes WhatsApp V2, o site Evolute pode integrar:
- Atendimento 24/7 para consultas online
- Classificação automática de leads (cliente/amigo/família)
- Status personalizado (avisa quando profissional está disponível)
- Memória persistente via GitHub

## 🛠️ Próximos Passos
1. [ ] Configurar variáveis de ambiente (.env.local)
   - SERVER_K, GOOGLE_API_K, WHATSAPP_ENABLE, WHATSAPP_OWNER_NUMBER
2. [ ] Integrar formulário de contato do site → WhatsApp
3. [ ] Customizar mensagens para psicologia/odontologia
4. [ ] Testar fluxo completo via Portainer/Docker

## 📚 Referências
- Pipeline técnico completo: 
  [`conhecimento/whatsapp-autovoice/hermes-v2-whatsapp-pipeline.md`](/home/ubuntu/Segundo-cerebro/conhecimento/whatsapp-autovoice/hermes-v2-whatsapp-pipeline.md)
- Skill frontend-design instalada
- Stack: Next.js + TypeScript + Supabase

## 💡 Anotação Anderson
> "Nesse site o WhatsApp pode servir tanto pra nutricao de leads da psicologia quanto odontologia... mas vamos ver como fica o layout primeiro"
