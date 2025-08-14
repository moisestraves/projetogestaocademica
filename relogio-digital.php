<?php
// Salve este arquivo como "relogio-digital.php" e coloque no seu servidor PHP.
// Você pode incluir em outras páginas com: include 'relogio-digital.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Relógio Digital</title>
  <style>
    :root {
      --bg: #0f172a;        /* slate-900 */
      --fg: #e2e8f0;        /* slate-200 */
      --accent: #22d3ee;    /* cyan-400 */
    }
    * { box-sizing: border-box; }
    body {
      margin: 0; min-height: 100vh; display: grid; place-items: center; background: radial-gradient(1000px 600px at 70% 20%, #111827, var(--bg)); font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";
      color: var(--fg);
    }
    .clock-card {
      display: inline-flex; flex-direction: column; align-items: center; gap: .5rem; padding: 1.25rem 1.5rem; border-radius: 1.25rem; background: rgba(255,255,255,.04); backdrop-filter: blur(8px); box-shadow: 0 10px 30px rgba(0,0,0,.35), inset 0 1px 0 rgba(255,255,255,.05);
    }
    .time {
      font-variant-numeric: tabular-nums; letter-spacing: .04em; font-size: clamp(2.4rem, 8vw, 4.5rem); font-weight: 800; line-height: 1; text-shadow: 0 2px 10px rgba(34,211,238,.18);
    }
    .time .sep { color: var(--accent); animation: pulse 1.2s ease-in-out infinite; }
    .date { opacity: .9; font-size: clamp(.95rem, 2.2vw, 1.05rem); }
    .tz { opacity: .6; font-size: .85rem; }
    @keyframes pulse { 0%,100% { opacity: .6 } 50% { opacity: 1 } }
    /* Ajustes quando embutido em outro layout */
    .embed { min-height: auto; background: transparent; }
  </style>
</head>
<body>
  <div class="clock-card" role="timer" aria-live="polite">
    <div id="time" class="time" aria-label="Horário atual">--:--:--</div>
    <div id="date" class="date">Carregando…</div>
    <div id="tz" class="tz">Fuso: America/Sao_Paulo</div>
  </div>

  <noscript>Este relógio precisa de JavaScript ativo.</noscript>

  <script>
    (function(){
      // === CONFIGURAÇÕES RÁPIDAS ===
      const timeZone = 'America/Sao_Paulo'; // Troque o fuso se quiser (ex.: 'UTC', 'America/Manaus', 'Europe/Lisbon')
      const use24h = true;                   // true = 24 horas | false = 12 horas

      const $time = document.getElementById('time');
      const $date = document.getElementById('date');
      const $tz   = document.getElementById('tz');
      $tz.textContent = 'Fuso: ' + timeZone;

      function pad(n){ return String(n).padStart(2,'0'); }

      function formatTime(d){
        let h = d.getHours(), m = d.getMinutes(), s = d.getSeconds();
        if(!use24h){
          const ampm = h >= 12 ? ' PM' : ' AM';
          h = h % 12 || 12; // 12h
          return pad(h)+"<span class='sep'>:</span>"+pad(m)+"<span class='sep'>:</span>"+pad(s)+ampm;
        }
        return pad(h)+"<span class='sep'>:</span>"+pad(m)+"<span class='sep'>:</span>"+pad(s);
      }

      function tick(){
        // Usa Intl com timeZone para garantir horário consistente do servidor ao cliente
        const now = new Date(new Date().toLocaleString('en-US', { timeZone }));
        $time.innerHTML = formatTime(now);
        $date.textContent = now.toLocaleDateString('pt-BR', {
          weekday: 'long', year: 'numeric', month: 'long', day: '2-digit', timeZone
        });
      }

      tick();
      setInterval(tick, 1000);
    })();
  </script>
</body>
</html>
