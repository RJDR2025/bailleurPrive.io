<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Simulation Bailleur Privé - {{ $prenom }} {{ $nom }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @page {
            margin: 12mm 10mm 12mm 10mm;
            size: A4;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            font-size: 9pt;
            line-height: 1.4;
            color: #18181b;
            background: white;
        }

        /* Cards */
        .card {
            background: white;
            border: 1px solid #e4e4e7;
            border-radius: 10px;
            padding: 16px;
            margin-bottom: 12px;
        }

        /* Header */
        .header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 14px;
        }

        .header-icon {
            width: 32px;
            height: 32px;
            background: #18181b;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-icon svg {
            width: 16px;
            height: 16px;
            color: white;
        }

        .header-title {
            font-size: 11pt;
            font-weight: 700;
            color: #18181b;
            margin-bottom: 2px;
        }

        .header-subtitle {
            font-size: 8pt;
            color: #71717a;
        }

        /* Logo header */
        .logo-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 14px;
            margin-bottom: 14px;
            border-bottom: 1px solid #e4e4e7;
        }

        .logo-header-left {
            font-size: 18pt;
            font-weight: 800;
            color: #18181b;
        }

        .logo-header-right {
            text-align: right;
            font-size: 8pt;
            color: #71717a;
        }

        .logo-header-right strong {
            color: #18181b;
        }

        /* Recommendation box */
        .recommendation-box {
            padding: 18px;
            border-radius: 10px;
            margin-bottom: 14px;
            background: #18181b;
            color: white;
        }

        .recommendation-label {
            font-size: 7pt;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 4px;
            color: #a1a1aa;
        }

        .recommendation-title {
            font-size: 14pt;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .recommendation-badge {
            display: inline-block;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 7pt;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-left: 8px;
            background: #27272a;
            color: #a1a1aa;
        }

        .recommendation-text {
            font-size: 9pt;
            line-height: 1.5;
            padding: 12px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.05);
            color: rgba(255, 255, 255, 0.9);
        }

        .recommendation-text strong {
            font-weight: 700;
            color: white;
        }

        .recommendation-text .highlight {
            color: #4ade80;
            font-weight: 700;
        }

        /* Results grid */
        .results-grid {
            display: table;
            width: 100%;
            margin-bottom: 14px;
        }

        .results-grid-row {
            display: table-row;
        }

        .result-box {
            display: table-cell;
            padding: 6px;
            vertical-align: top;
            width: 50%;
        }

        .result-box-inner {
            padding: 14px;
            border-radius: 10px;
            height: 100%;
        }

        .result-box-inner.light {
            background: #fafafa;
            border: 1px solid #e4e4e7;
        }

        .result-box-inner.dark {
            background: #09090b;
            color: white;
        }

        .result-label {
            font-size: 7pt;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 6px;
        }

        .result-box-inner.light .result-label {
            color: #a1a1aa;
        }

        .result-box-inner.dark .result-label {
            color: rgba(74, 222, 128, 0.8);
        }

        .result-value {
            font-size: 20pt;
            font-weight: 700;
            font-family: ui-monospace, monospace;
        }

        .result-box-inner.light .result-value {
            color: #18181b;
        }

        .result-box-inner.dark .result-value {
            color: white;
        }

        .result-unit {
            font-size: 10pt;
            font-weight: 700;
            margin-left: 2px;
        }

        .result-box-inner.light .result-unit {
            color: #a1a1aa;
        }

        .result-box-inner.dark .result-unit {
            color: rgba(74, 222, 128, 0.6);
        }

        /* Parameters badges */
        .params-grid {
            display: table;
            width: 100%;
            padding: 12px;
            background: #fafafa;
            border: 1px solid #f4f4f5;
            border-radius: 8px;
        }

        .params-grid-row {
            display: table-row;
        }

        .param-item {
            display: table-cell;
            padding: 6px;
        }

        .param-label {
            font-size: 7pt;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #71717a;
            margin-bottom: 4px;
        }

        .param-badge {
            display: inline-block;
            padding: 4px 8px;
            background: white;
            border: 1px solid #e4e4e7;
            border-radius: 4px;
            font-size: 8pt;
            font-weight: 600;
            color: #18181b;
        }

        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th {
            padding: 10px 6px;
            font-size: 7pt;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid #e4e4e7;
        }

        .data-table th.left {
            text-align: left;
            color: #18181b;
        }

        .data-table th.right {
            text-align: right;
            color: #a1a1aa;
        }

        .data-table th.right.dark {
            color: #18181b;
        }

        .data-table td {
            padding: 8px 6px;
            font-size: 8pt;
            border-bottom: 1px solid #f4f4f5;
        }

        .data-table td.left {
            text-align: left;
        }

        .data-table td.right {
            text-align: right;
            font-family: ui-monospace, monospace;
        }

        .data-table td.muted {
            color: #a1a1aa;
        }

        .data-table td.bold {
            font-weight: 700;
            color: #18181b;
        }

        .data-table td.name {
            font-weight: 600;
            color: #18181b;
        }

        .data-table tfoot tr {
            background: #09090b;
        }

        .data-table tfoot td {
            padding: 10px 6px;
            color: white;
            font-weight: 700;
            border-bottom: none;
        }

        .data-table tfoot td.label {
            color: white;
        }

        .data-table tfoot td.value {
            text-align: right;
            font-family: ui-monospace, monospace;
        }

        /* Info box */
        .info-box {
            background: #f4f4f5;
            border-radius: 8px;
            padding: 12px 14px;
            margin-top: 12px;
        }

        .info-box-title {
            font-size: 8pt;
            font-weight: 700;
            color: #18181b;
            margin-bottom: 6px;
        }

        .info-box-content {
            font-size: 8pt;
            color: #52525b;
            line-height: 1.5;
        }

        /* Disclaimer */
        .disclaimer {
            margin-top: 14px;
            padding: 12px;
            background: #fef3c7;
            border: 1px solid #fde68a;
            border-radius: 6px;
            font-size: 8pt;
            color: #92400e;
            line-height: 1.5;
        }

        /* Footer */
        .footer {
            margin-top: 20px;
            padding-top: 14px;
            border-top: 1px solid #e4e4e7;
            text-align: center;
            font-size: 8pt;
            color: #71717a;
        }

        .footer strong {
            color: #18181b;
        }

        .contact-badge {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            background: #18181b;
            color: white;
            border-radius: 6px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    {{-- Logo Header --}}
    <div class="logo-header">
        <div class="logo-header-left">BailleurPrive.io</div>
        <div class="logo-header-right">
            <div>Simulation générée le <strong>{{ $date }}</strong></div>
            <div>Pour <strong>{{ $prenom }} {{ $nom }}</strong></div>
        </div>
    </div>

    {{-- Recommendation Box --}}
    <div class="recommendation-box">
        <div class="recommendation-label">Statut du Bailleur Privé</div>
        <div class="recommendation-title">
            Votre économie d'impôt estimée
            <span class="recommendation-badge">2026-2034</span>
        </div>
        <div class="recommendation-text">
            Grâce au <strong>Statut du Bailleur Privé</strong>, vous pourrez amortir votre bien immobilier et
            <strong>déduire jusqu'à {{ number_format($resultats['amortissementAnnuel'], 0, ',', ' ') }} € par an</strong>
            de vos revenus locatifs.
            Sur <strong>9 ans</strong>, cela représente une économie d'impôt de
            <span class="highlight">{{ number_format($resultats['economieTotale'], 0, ',', ' ') }} €</span>.
        </div>
    </div>

    {{-- Results Grid --}}
    <div class="card">
        <div class="header">
            <div class="header-icon">
                <svg fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>
            </div>
            <div>
                <div class="header-title">Synthèse de votre simulation</div>
                <div class="header-subtitle">Économie fiscale sur 9 ans</div>
            </div>
        </div>

        <table class="results-grid">
            <tr class="results-grid-row">
                <td class="result-box">
                    <div class="result-box-inner light">
                        <div class="result-label">Économie annuelle</div>
                        <span class="result-value">{{ number_format($resultats['economieAnnuelle'], 0, ',', ' ') }}</span>
                        <span class="result-unit">€</span>
                    </div>
                </td>
                <td class="result-box">
                    <div class="result-box-inner dark">
                        <div class="result-label">Économie sur 9 ans</div>
                        <span class="result-value">{{ number_format($resultats['economieTotale'], 0, ',', ' ') }}</span>
                        <span class="result-unit">€</span>
                    </div>
                </td>
            </tr>
        </table>

        {{-- Parameters --}}
        <table class="params-grid">
            <tr class="params-grid-row">
                <td class="param-item">
                    <div class="param-label">Type de bien</div>
                    <span class="param-badge">{{ $typeBien === 'neuf' ? 'Neuf RE2020' : 'Ancien rénové' }}</span>
                </td>
                <td class="param-item">
                    <div class="param-label">Niveau de loyer</div>
                    <span class="param-badge">{{ ucfirst(str_replace('_', ' ', $niveauLoyer)) }}</span>
                </td>
                <td class="param-item">
                    <div class="param-label">TMI</div>
                    <span class="param-badge">{{ $tmi }}%</span>
                </td>
                <td class="param-item">
                    <div class="param-label">Taux amort.</div>
                    <span class="param-badge">{{ $resultats['taux'] }}%</span>
                </td>
            </tr>
        </table>
    </div>

    {{-- Détail du bien --}}
    <div class="card">
        <div class="header">
            <div class="header-icon">
                <svg fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                </svg>
            </div>
            <div>
                <div class="header-title">Détail du calcul</div>
                <div class="header-subtitle">Amortissement et économie fiscale</div>
            </div>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th class="left">Élément</th>
                    <th class="right dark">Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="name">Prix d'achat du bien</td>
                    <td class="right bold">{{ number_format($prixBien, 0, ',', ' ') }} €</td>
                </tr>
                <tr>
                    <td class="name">Surface habitable</td>
                    <td class="right">{{ $surface }} m²</td>
                </tr>
                <tr>
                    <td class="name">Base amortissable (80% du prix)</td>
                    <td class="right">{{ number_format($resultats['baseAmortissable'], 0, ',', ' ') }} €</td>
                </tr>
                <tr>
                    <td class="name">Taux d'amortissement</td>
                    <td class="right">{{ $resultats['taux'] }}%</td>
                </tr>
                <tr>
                    <td class="name">Amortissement brut annuel</td>
                    <td class="right">{{ number_format($resultats['amortissementBrut'], 0, ',', ' ') }} €</td>
                </tr>
                @if($resultats['estPlafonne'])
                <tr>
                    <td class="name" style="color: #f59e0b;">Plafond applicable</td>
                    <td class="right" style="color: #f59e0b;">{{ number_format($resultats['plafond'], 0, ',', ' ') }} €</td>
                </tr>
                @endif
                <tr>
                    <td class="name">Amortissement annuel retenu</td>
                    <td class="right bold">{{ number_format($resultats['amortissementAnnuel'], 0, ',', ' ') }} €</td>
                </tr>
                <tr>
                    <td class="name">Votre TMI (Tranche Marginale d'Imposition)</td>
                    <td class="right">{{ $tmi }}%</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td class="label">Économie d'impôt annuelle</td>
                    <td class="value">{{ number_format($resultats['economieAnnuelle'], 0, ',', ' ') }} €</td>
                </tr>
            </tfoot>
        </table>

        <div class="info-box">
            <div class="info-box-title">Formule de calcul</div>
            <div class="info-box-content">
                <strong>Économie annuelle</strong> = Amortissement annuel × TMI<br>
                {{ number_format($resultats['economieAnnuelle'], 0, ',', ' ') }} € = {{ number_format($resultats['amortissementAnnuel'], 0, ',', ' ') }} € × {{ $tmi }}%
            </div>
        </div>
    </div>

    {{-- Disclaimer --}}
    <div class="disclaimer">
        <strong>Simulation indicative :</strong> Ces résultats sont donnés à titre indicatif et ne constituent pas un conseil fiscal personnalisé.
        Consultez un professionnel (expert-comptable, conseiller en gestion de patrimoine) pour valider votre situation et optimiser votre stratégie d'investissement.
    </div>

    {{-- Footer --}}
    <div class="footer">
        <p><strong>BailleurPrive.io</strong> — Plateforme d'information sur le Statut du Bailleur Privé</p>
        <p>Dispositif fiscal 2026-2034 | contact@bailleurprive.io</p>
        <div class="contact-badge">Appelez-nous : 03 74 47 20 18</div>
    </div>
</body>

</html>
