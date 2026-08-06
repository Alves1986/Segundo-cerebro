# Sistema de Gestão para Salão de Beleza — Base Reutilizável

## Nichos aplicáveis
- Salão de beleza
- Barbearia
- Nail designer / nail studio
- Estética facial/corporal
- Clínica de beleza multisserviço

## Stack oficial
- Next.js 14 App Router + TypeScript + Tailwind
- Supabase: PostgreSQL + Auth + RLS + Realtime
- Vercel deploy + CI/CD via GitHub
- Evolution API: confirmação, lembrete, avaliação, reengajamento
- Pagamento online: Stripe/Pix quando necessário

## Regras de acesso
### App do Cliente
- Sem login obrigatório
- Identificação por telefone/nome para acompanhar agendamentos
- Pode ver serviços, profissionais, agenda pública e confirmar agendamentos

### Painel de Gestão
- Acesso exclusivo via Supabase Auth
- Perfis:
  - Admin: acesso total
  - Recepção: agenda, clientes, financeiro
  - Profissional: própria agenda, clientes atendidos

## Segurança
- RLS obrigatória em todas as tabelas
- App do cliente só lê dados públicos: serviços, profissionais, agenda pública
- Cliente vê apenas seus próprios agendamentos
- Painel de gestão visível apenas para authenticated users com role correspondente

## Banco de dados
- migrations em `supabase/migrations/`
- tipos em `src/lib/database.types.ts`
- cliente Supabase em `src/lib/supabase.ts`
- helpers de sessão em `src/lib/auth.ts`

## Fluxo do cliente
1. Acessa link do app público
2. Informa nome + telefone
   - telefone já cadastrado -> carrega histórico
   - telefone novo -> cadastro rápido
3. Lista de serviços por categoria
4. Escolhe profissional ou sistema sugere
5. Escolhe data/horário disponível
6. Confirma agendamento
7. Recebe confirmação no WhatsApp
8. Acompanha em "Meus Agendamentos"
9. Após atendimento, recebe avaliação

## Status
- Documento-base criado
- Pronto para gerar repo e implementar MVP por nicho
