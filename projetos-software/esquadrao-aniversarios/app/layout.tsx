import type { Metadata } from "next";
import "./globals.css";

export const metadata: Metadata = {
  title: "Cartão de aniversário | Esquadrão de Cristo",
  description: "Crie cartões de aniversário personalizados online - sem imobiliária",
};

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <html lang="pt-br">
      <body>{children}</body>
    </html>
  );
}
