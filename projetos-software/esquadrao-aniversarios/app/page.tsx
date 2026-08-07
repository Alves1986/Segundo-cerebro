'use client';

import { useEffect, useRef, useState } from 'react';

interface Moldura {
  x: number;
  y: number;
  w: number;
  h: number;
}

interface Estado {
  zoom: number;
  x: number;
  y: number;
  arrastando: boolean;
  px: number;
  py: number;
}

// Card 2026.png = 515x918, canvas = 1080x1350, scale = 1080/515 ≈ 2.097
// Moldura de foto no card: x=187, y=218, w=302, h=351
const CARD_W = 515;
const CARD_H = 918;
const CANVAS_W = 1080;
const CANVAS_H = 1350;
const SCALE = CANVAS_W / CARD_W; // ~2.097

const molduraBase: Moldura = {
  x: Math.round(187 * SCALE),  // ~392
  y: Math.round(218 * SCALE),  // ~457
  w: Math.round(302 * SCALE),  // ~633
  h: Math.round(351 * SCALE),  // ~736
};

const modeloCard = '/artes/card_2026.png';
const logoImg = '/motoclub-icon.png';

export default function CartaoAniversario() {
  const canvasRef = useRef<HTMLCanvasElement>(null);
  const nomeInputRef = useRef<HTMLInputElement>(null);
  const fotoInputRef = useRef<HTMLInputElement>(null);
  const zoomInputRef = useRef<HTMLInputElement>(null);
  const ctxRef = useRef<CanvasRenderingContext2D | null>(null);
  const moldura = useRef<Moldura>(molduraBase);
  const fotoRef = useRef<HTMLImageElement | null>(null);
  const estadoRef = useRef<Estado>({ zoom: 1, x: 0, y: 0, arrastando: false, px: 0, py: 0 });
  const [nome, setNome] = useState('');
  const [fotoUrl, setFotoUrl] = useState<string | null>(null);
  const [modeloCarregado, setModeloCarregado] = useState<HTMLImageElement | null>(null);
  const [logoCarregada, setLogoCarregada] = useState<HTMLImageElement | null>(null);
  const [mensagem, setMensagem] = useState('');
  const [zoom, setZoom] = useState(1);
  const [botaoAtivo, setBotaoAtivo] = useState(false);

  // Carregar modelo do card
  useEffect(() => {
    const img = new Image();
    img.src = modeloCard;
    img.onload = () => setModeloCarregado(img);
  }, []);

  // Carregar logo
  useEffect(() => {
    const img = new Image();
    img.src = logoImg;
    img.onload = () => setLogoCarregada(img);
  }, []);

  // Desenhar canvas quando dependências mudarem
  useEffect(() => {
    const canvas = canvasRef.current;
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    if (!ctx) return;
    ctxRef.current = ctx;
    desenhar();
  }, [nome, fotoUrl, modeloCarregado, logoCarregada]);

  const limitarPosicao = () => {
    if (!fotoRef.current) return;
    const foto = fotoRef.current;
    const mold = moldura.current;
    const base = Math.max(mold.w / foto.width, mold.h / foto.height);
    const w = foto.width * base * estadoRef.current.zoom;
    const h = foto.height * base * estadoRef.current.zoom;
    estadoRef.current.x = Math.max(-(w - mold.w) / 2, Math.min((w - mold.w) / 2, estadoRef.current.x));
    estadoRef.current.y = Math.max(-(h - mold.h) / 2, Math.min((h - mold.h) / 2, estadoRef.current.y));
  };

  const desenharFoto = () => {
    if (!ctxRef.current || !fotoRef.current) return;
    const ctx = ctxRef.current;
    const mold = moldura.current;
    const foto = fotoRef.current;

    // Fundo branco da moldura
    ctx.fillStyle = '#fff';
    ctx.fillRect(mold.x, mold.y, mold.w, mold.h);

    limitarPosicao();

    const escala = Math.max(mold.w / foto.width, mold.h / foto.height) * estadoRef.current.zoom;
    const w = foto.width * escala;
    const h = foto.height * escala;

    ctx.save();
    ctx.beginPath();
    ctx.rect(mold.x, mold.y, mold.w, mold.h);
    ctx.clip();
    ctx.drawImage(foto, mold.x + (mold.w - w) / 2 + estadoRef.current.x, mold.y + (mold.h - h) / 2 + estadoRef.current.y, w, h);
    ctx.restore();

    // Borda dourada da moldura
    ctx.save();
    ctx.strokeStyle = '#52400b';
    ctx.lineWidth = 14;
    ctx.strokeRect(mold.x + 7, mold.y + 7, mold.w - 14, mold.h - 14);
    ctx.restore();
  };

  const desenharNome = () => {
    if (!ctxRef.current) return;
    const ctx = ctxRef.current;
    const texto = nome.trim() || 'Seu nome';
    let tamanho = Math.round(72 * SCALE); // ~151
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillStyle = '#f2f1eb'; // branco-off (cor do card)
    ctx.shadowColor = 'rgba(0, 0, 0, 0.8)';
    ctx.shadowBlur = Math.round(6 * SCALE);
    ctx.font = '700 ' + tamanho + 'px Arial, sans-serif';

    // Ajustar tamanho para caber
    const maxWidth = Math.round(400 * SCALE); // ~839
    while (ctx.measureText(texto).width > maxWidth && tamanho > 36) {
      tamanho -= 4;
      ctx.font = '700 ' + tamanho + 'px Arial, sans-serif';
    }
    // Posicao Y: abaixo da moldura, no fundo escuro
    // y=700 no card original -> 700 * SCALE ≈ 1468
    const nomeY = Math.round(700 * SCALE);
    ctx.fillText(texto, CANVAS_W / 2, nomeY);
    ctx.shadowBlur = 0;
    ctx.shadowColor = 'transparent';
  };

  const desenharLogo = () => {
    if (!ctxRef.current || !logoCarregada) return;
    const ctx = ctxRef.current;
    const logoSize = Math.round(70 * SCALE); // ~147
    const logoX = Math.round(60 * SCALE); // ~126
    const logoY = Math.round(40 * SCALE); // ~84
    ctx.save();
    ctx.globalAlpha = 0.8;
    ctx.drawImage(logoCarregada, logoX, logoY, logoSize, logoSize);
    ctx.globalAlpha = 1.0;
    ctx.restore();
  };

  const desenhar = () => {
    const canvas = canvasRef.current;
    if (!canvas || !ctxRef.current) return;
    const ctx = ctxRef.current;

    // Fundo branco
    ctx.fillStyle = '#fff';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    // Modelo base (card 2026)
    if (!modeloCarregado) {
      ctx.fillStyle = '#333';
      ctx.font = '36px Arial';
      ctx.textAlign = 'center';
      ctx.fillText('Carregando...', canvas.width / 2, canvas.height / 2);
      return;
    }

    ctx.drawImage(modeloCarregado, 0, 0, canvas.width, canvas.height);
    desenharLogo();
    desenharFoto();
    desenharNome();
  };

  const recentralizar = () => {
    estadoRef.current = { zoom: 1, x: 0, y: 0, arrastando: false, px: 0, py: 0 };
    setZoom(1);
    if (zoomInputRef.current) zoomInputRef.current.value = '1';
    if (ctxRef.current) desenhar();
  };

  const pontoCanvas = (clientX: number, clientY: number) => {
    const canvas = canvasRef.current;
    if (!canvas) return { x: 0, y: 0 };
    const rect = canvas.getBoundingClientRect();
    return {
      x: (clientX - rect.left) * canvas.width / rect.width,
      y: (clientY - rect.top) * canvas.height / rect.height
    };
  };

  const handleFotoChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const arquivo = e.target.files?.[0];
    setMensagem('');
    if (!arquivo) return;
    if (!arquivo.type.startsWith('image/') || arquivo.size > 12 * 1024 * 1024) {
      setMensagem('Escolha uma imagem JPG, PNG ou WEBP de até 12 MB.');
      e.target.value = '';
      return;
    }
    const url = URL.createObjectURL(arquivo);
    const img = new Image();
    img.onload = () => {
      fotoRef.current = img;
      setFotoUrl(url);
      setBotaoAtivo(true);
      recentralizar();
    };
    img.onerror = () => {
      URL.revokeObjectURL(url);
      setMensagem('Não foi possível abrir essa imagem.');
    };
    img.src = url;
  };

  const alterarZoom = (valor: number) => {
    estadoRef.current.zoom = valor;
    setZoom(valor);
    limitarPosicao();
    if (ctxRef.current) desenhar();
  };

  const validarCartao = () => {
    if (!nome.trim()) {
      setMensagem('Informe o nome da pessoa para continuar.');
      nomeInputRef.current?.focus();
      return false;
    }
    if (!fotoUrl) {
      setMensagem('Escolha uma foto para continuar.');
      fotoInputRef.current?.focus();
      return false;
    }
    setMensagem('');
    if (ctxRef.current) desenhar();
    return true;
  };

  const baixarCartao = () => {
    if (!validarCartao()) return;
    const canvas = canvasRef.current;
    if (!canvas) return;
    canvas.toBlob(blob => {
      if (!blob) {
        setMensagem('Não foi possível gerar o arquivo.');
        return;
      }
      const url = URL.createObjectURL(blob);
      const link = document.createElement('a');
      const nomeArquivo = 'aniversario-' + nome.trim().toLowerCase().replace(/\s+/g, '-') + '.png';
      link.download = nomeArquivo;
      link.href = url;
      link.click();
      setTimeout(() => URL.revokeObjectURL(url), 1000);
    }, 'image/png');
  };

  const compartilharWhatsApp = () => {
    if (!validarCartao()) return;
    const canvas = canvasRef.current;
    if (!canvas) return;
    canvas.toBlob(blob => {
      if (!blob) {
        setMensagem('Não foi possível compartilhar o cartão.');
        return;
      }
      const arquivo = new File([blob], 'aniversario.png', { type: 'image/png' });
      const texto = `Feliz aniversário, ${nome}!`;
      if (navigator.canShare && navigator.canShare({ files: [arquivo] })) {
        navigator.share({ title: 'Cartão de aniversário', text: texto, files: [arquivo] });
      } else {
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.download = 'aniversario.png';
        link.href = url;
        link.click();
        setTimeout(() => URL.revokeObjectURL(url), 1000);
        window.open(`https://wa.me/?text=${encodeURIComponent(texto)}`, '_blank');
        setMensagem('O cartão foi baixado. Aneque a imagem na conversa do WhatsApp.');
      }
    }, 'image/png');
  };

  const handlePointerDown = (e: React.PointerEvent<HTMLCanvasElement>) => {
    if (!fotoUrl) return;
    const p = pontoCanvas(e.clientX, e.clientY);
    const mold = moldura.current;
    if (p.x < mold.x || p.x > mold.x + mold.w || p.y < mold.y || p.y > mold.y + mold.h) return;
    estadoRef.current.arrastando = true;
    estadoRef.current.px = p.x;
    estadoRef.current.py = p.y;
    (e.currentTarget as HTMLCanvasElement).setPointerCapture(e.pointerId);
  };

  const handlePointerMove = (e: React.PointerEvent<HTMLCanvasElement>) => {
    if (!estadoRef.current.arrastando) return;
    const p = pontoCanvas(e.clientX, e.clientY);
    estadoRef.current.x += p.x - estadoRef.current.px;
    estadoRef.current.y += p.y - estadoRef.current.py;
    estadoRef.current.px = p.x;
    estadoRef.current.py = p.y;
    limitarPosicao();
    if (ctxRef.current) desenhar();
  };

  const pararArrasto = () => {
    estadoRef.current.arrastando = false;
  };

  return (
    <div className="min-h-screen bg-gray-900 text-gray-100 p-4">
      <header className="topbar flex items-center justify-center gap-3 pb-4 border-b border-gray-700">
        <img src={logoImg} alt="Logo" className="w-14 h-14" />
        <h1 className="text-2xl md:text-3xl font-bold text-gold-light">Cartão de Aniversário</h1>
      </header>

      <p className="intro text-center text-gray-400 max-w-2xl mx-auto mt-6">
        Informe o nome, ajuste a foto na moldura. Depois, baixe o cartão pronto para compartilhar.
      </p>

      <main className="maker flex flex-col lg:flex-row gap-6 mt-8 max-w-5xl mx-auto">
        {/* Prévia */}
        <div className="preview-column flex-1">
          <section className="preview relative border border-gray-600 rounded-xl bg-gray-800 p-4 shadow-xl">
            <canvas
              ref={canvasRef}
              width={CANVAS_W}
              height={CANVAS_H}
              className="w-full max-w-full h-auto cursor-grab"
              style={{ touchAction: 'none' }}
              onPointerDown={handlePointerDown}
              onPointerMove={handlePointerMove}
              onPointerUp={pararArrasto}
              onPointerCancel={pararArrasto}
            />
            <p className="hint text-gray-500 text-center mt-2 text-sm">Arraste a foto na prévia para reposicioná-la.</p>
          </section>
        </div>

        {/* Controles */}
        <section className="controls flex-1">
          <h2 className="text-2xl font-bold mb-6 text-gold-light">Personalize o cartão</h2>
          <div className="space-y-6">
            {/* Nome */}
            <div>
              <label htmlFor="nome" className="block mb-2 font-medium">Nome da pessoa</label>
              <input
                id="nome"
                ref={nomeInputRef}
                type="text"
                maxLength={40}
                value={nome}
                onChange={(e) => setNome(e.target.value)}
                placeholder="Ex.: Soares"
                className="w-full px-3 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-gold"
              />
            </div>

            {/* Foto */}
            <div>
              <label htmlFor="foto" className="block mb-2 font-medium">Escolha a foto</label>
              <input
                id="foto"
                ref={fotoInputRef}
                type="file"
                accept="image/jpeg,image/png,image/webp"
                onChange={handleFotoChange}
                className="w-full text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-gold-light file:text-gray-900 hover:file:bg-gold cursor-pointer"
              />
            </div>

            {/* Zoom */}
            {botaoAtivo && (
              <div>
                <label htmlFor="zoom" className="block mb-2 font-medium">Zoom da foto</label>
                <input
                  id="zoom"
                  ref={zoomInputRef}
                  type="range"
                  min="1"
                  max="3"
                  value={zoom}
                  step="0.01"
                  onChange={(e) => alterarZoom(Number(e.target.value))}
                  className="w-full accent-gold"
                />
              </div>
            )}

            {/* Ações */}
            <div className="grid grid-cols-2 gap-3 mt-6">
              <button
                onClick={recentralizar}
                disabled={!botaoAtivo}
                className="px-4 py-3 bg-gray-800 hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed rounded-lg font-medium transition-colors"
              >
                Recentralizar
              </button>
              <button
                onClick={baixarCartao}
                disabled={!botaoAtivo}
                className="px-4 py-3 bg-gold-light text-gray-900 hover:bg-gold disabled:opacity-50 disabled:cursor-not-allowed rounded-lg font-bold transition-colors"
              >
                Baixar cartão
              </button>
              <button
                onClick={compartilharWhatsApp}
                disabled={!botaoAtivo}
                className="col-span-2 px-4 py-3 bg-green-600 hover:bg-green-500 disabled:opacity-50 disabled:cursor-not-allowed rounded-lg font-medium transition-colors flex items-center justify-center gap-2"
              >
                <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20.52 3.48A11.94 11.94 0 0012 0C5.373 0 0 5.373 0 12c0 2.125.81 4.292 2.175 5.92C.627 18.369 0 16.862 0 14.788V12c0-1.381.77-2.579 1.964-3.202.282-1.178 1.155-2.043 2.298-2.24-.874-.988-1.403-2.178-1.403-3.402 0-2.622 2.128-4.75 4.75-4.75.68 0 1.322.178 1.877.493.29.153.63.46 1.005.81.376.35.703.74.876 1.156.173.418.173.878-.021 1.25-.173.376-.453.675-.77.877-.317.202-.678.318-1.03.318-.268 0-.53-.06-.766-.172-.502-.228-.912-.613-1.097-1.15-.232-.695-.078-1.512.411-1.857.04-.025.082-.052.124-.077.114-.066.236-.058.344.02.02.01.04.02.06.02.138.315.56.723 1.276.555 1.18 1.433 1.958 2.125 2.101.28.068.573.1 1.52-.37.318-.185.6-.4.896-.617.323-.229.64-.466.957-.69.152-.107.313-.182.484-.232.178-.108.25-.223.24-.352-.001-.106-.03-.21-.08-.302-.076-.122-.167-.215-.273-.298-.103-.08-.212-.12.34-.12.166 0 .31.022.472.066.672.08.165.135.34.212.51.212.51.05.107.07.25.07.37.017.116-.028.222-.088.303-.066.116.2"/>
                </svg>
                WhatsApp
              </button>
            </div>

            {/* Mensagem */}
            {mensagem && (
              <p className="message text-sm text-amber-400 mt-2">{mensagem}</p>
            )}

            {/* Privacidade */}
            <p className="privacy text-xs text-gray-600 mt-4">
              Sua foto é processada somente neste navegador e não é enviada nem armazenada no servidor.
            </p>
          </div>
        </section>
      </main>
    </div>
  );
}
