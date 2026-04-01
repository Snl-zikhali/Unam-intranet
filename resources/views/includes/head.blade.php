<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href=<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
:root {
  --red: #ee3124; --red-dark: #EE3124; --red-light: rgba(200,16,46,0.07);
  --gold: #F5A623; --white: #f3f1f1; --off-white: #f0eded;
  --text: #464343; --text-muted: #5a5a5a; --border: #e5e1dc;
  --sidebar-w: 210px; --ease: cubic-bezier(.4,0,.2,1);
}
body { font-family: 'DM Sans', sans-serif; background: var(--off-white); color: var(--text); display: flex; min-height: 100vh; }

/* SIDEBAR */
aside { width: var(--sidebar-w); background: var(--red); display: flex; flex-direction: column; position: fixed; top: 0; left: 0; height: 100vh; z-index: 100; overflow-y: auto; }
.logo-area { padding: 26px 20px 20px; border-bottom: 1px solid rgba(255,255,255,0.15); }
.logo-svg { width: 62px; height: 62px; }
.logo-wordmark { color:#fff; font-size:22px; font-weight:700; letter-spacing:2px; font-family:'DM Sans',sans-serif; line-height:1; margin-top:8px; }
.logo-sub { color:rgba(255,255,255,0.6); font-size:8px; letter-spacing:2px; text-transform:uppercase; margin-top:3px; }
nav { padding: 16px 0; flex: 1; }
nav a { display:flex; align-items:center; gap:9px; padding:10px 20px; color:rgba(255,255,255,0.75); text-decoration:none; font-size:11.5px; font-weight:500; letter-spacing:0.8px; text-transform:uppercase; border-left:3px solid transparent; transition:all 0.18s; }
nav a:hover { background:rgba(255,255,255,0.1); color:#fff; border-left-color:rgba(245,166,35,0.6); }
nav a.active { background:rgba(255,255,255,0.14); color:#fff; border-left-color:var(--gold); font-weight:600; }
nav a svg { opacity:0.65; flex-shrink:0; }
nav a.active svg, nav a:hover svg { opacity:1; }
.nav-div { height:1px; background:rgba(255,255,255,0.12); margin:6px 16px; }
.sidebar-footer { padding:14px 20px; border-top:1px solid rgba(255,255,255,0.15); }
.tagline { color:rgba(255,255,255,0.45); font-size:9px; letter-spacing:2.5px; text-transform:uppercase; font-style:italic; }

/* MAIN */
main { margin-left: var(--sidebar-w); flex:1; padding: 46px 56px; min-height:100vh; }
.page-header { margin-bottom:36px; padding-bottom:24px; border-bottom:2px solid var(--border); }
.breadcrumb { font-size:11px; color:var(--text-muted); letter-spacing:1px; text-transform:uppercase; margin-bottom:8px; }
.breadcrumb span { color:var(--red); }
.page-title { font-family:'DM Sans',sans-serif; font-size:34px; font-weight:700; letter-spacing:-0.5px; }
.page-title em { font-style:normal; color:var(--red); }

/* CARDS */
.card { background:var(--white); border-radius:10px; border:1px solid var(--border); padding:32px 36px; margin-bottom:22px; box-shadow:0 2px 12px rgba(0,0,0,0.04); transition:box-shadow 0.2s; }
.card:hover { box-shadow:0 4px 22px rgba(0,0,0,0.07); }
.sec-label { display:flex; align-items:center; gap:10px; margin-bottom:20px; }
.sec-label .bar { width:4px; height:20px; background:var(--red); border-radius:2px; }
.sec-label h2 { font-family:'DM Sans',sans-serif; font-size:19px; font-weight:600; }

/* ACCORDION */
.acc { display:flex; flex-direction:column; gap:10px; }
.ai { background:var(--white); border:1px solid var(--border); border-radius:9px; overflow:hidden; transition:box-shadow 0.2s; }
.ai:hover { box-shadow:0 2px 14px rgba(0,0,0,0.06); }
.ai.open { box-shadow:0 3px 18px rgba(0,0,0,0.08); border-color:#d6cfc9; }
.ah { display:flex; align-items:center; justify-content:space-between; padding:16px 22px; cursor:pointer; user-select:none; transition:background 0.18s; }
.ah:hover, .ai.open .ah { background:#fdfcfb; }
.ai.open .ah { border-bottom:1px solid var(--border); }
.ah-l { display:flex; align-items:center; gap:12px; }
.aic { width:32px; height:32px; background:var(--red-light); border-radius:7px; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
.aic svg { color:var(--red); }
.at { font-size:14px; font-weight:600; color:var(--text); }
.asub { font-size:11.5px; color:var(--text-muted); margin-top:1px; }
.achev { transition:transform 0.25s var(--ease); color:var(--text-muted); flex-shrink:0; }
.ai.open .achev { transform:rotate(180deg); color:var(--red); }
.ab { max-height:0; overflow:hidden; transition:max-height 0.35s var(--ease); }
.ab-in { padding:18px 22px; }
.ab-in p { font-size:14px; line-height:1.75; color:#444; }
.ab-in ul { list-style:none; display:flex; flex-direction:column; gap:5px; margin-top:6px; }
.ab-in ul li { display:flex; align-items:center; gap:10px; font-size:13.5px; color:#444; padding:7px 10px; border-radius:6px; transition:background 0.15s; cursor:pointer; }
.ab-in ul li:hover { background:var(--red-light); color:var(--red-dark); }
.ab-in ul li svg { color:var(--red); flex-shrink:0; }
.pcnt { display:inline-flex; align-items:center; justify-content:center; width:20px; height:20px; background:var(--red); color:#fff; border-radius:50%; font-size:10px; font-weight:700; flex-shrink:0; margin-left:auto; }

/* DOC ROWS */
.dlist { display:flex; flex-direction:column; gap:0; }
.drow { display:flex; align-items:center; justify-content:space-between; padding:10px 14px; background:var(--off-white); border:1px solid var(--border); border-radius:7px; transition:background 0.15s; cursor:pointer; margin-bottom:6px; }
.drow:hover { background:#f0ece8; }
.drow-l { display:flex; align-items:center; gap:10px; font-size:13.5px; color:var(--text); font-weight:500; }
.drow-l svg { color:var(--red); }
.dtag { font-size:11.5px; color:var(--text-muted); }

/* SEARCH */
.search-form { display:flex; flex-direction:column; gap:12px; max-width:560px; }
.ig { display:flex; flex-direction:column; gap:5px; }
.ig label { font-size:11px; font-weight:600; letter-spacing:0.8px; text-transform:uppercase; color:var(--text-muted); }
.sf input { width:100%; padding:12px 16px; border:1.5px solid var(--border); border-radius:7px; font-size:14.5px; font-family:'Source Sans 3',sans-serif; color:var(--text); background:var(--off-white); transition:border-color 0.18s,box-shadow 0.18s; outline:none; }
.sf input:focus { border-color:var(--red); box-shadow:0 0 0 3px rgba(200,16,46,0.1); background:#fff; }
.srow { display:grid; grid-template-columns:1fr 1fr; gap:12px; }
.btn-p { display:inline-flex; align-items:center; gap:8px; background:var(--red); color:#fff; border:none; border-radius:7px; padding:11px 26px; font-size:13px; font-weight:600; letter-spacing:0.8px; text-transform:uppercase; cursor:pointer; transition:background 0.18s,transform 0.1s; align-self:flex-start; margin-top:4px; }
.btn-p:hover { background:var(--red-dark); }
.stip { font-size:12.5px; color:var(--text-muted); margin-top:10px; }
.stip span { color:var(--red); font-weight:600; }
.empty-state { text-align:center; padding:36px 20px; color:var(--text-muted); border:1.5px dashed var(--border); border-radius:8px; }
.empty-state svg { opacity:0.3; margin-bottom:10px; }
.empty-state p { font-size:14px; }

/* STAT CARDS */
.sgrid { display:grid; grid-template-columns:repeat(2,1fr); gap:12px; margin-bottom:14px; }
.sc { background:var(--off-white); border:1px solid var(--border); border-radius:8px; padding:18px 16px; text-align:center; }
.snum { font-family:'DM Sans',sans-serif; font-size:28px; font-weight:700; color:var(--red); line-height:1; }
.slbl { font-size:11px; color:var(--text-muted); letter-spacing:0.4px; text-transform:uppercase; margin-top:3px; font-weight:500; }

/* CALENDAR */
.cal-cta { display:inline-flex; align-items:center; gap:8px; background:var(--red); color:#fff; border-radius:8px; padding:11px 22px; font-size:13px; font-weight:600; letter-spacing:0.5px; cursor:pointer; border:none; transition:background 0.18s; margin-bottom:28px; }
.cal-cta:hover { background:var(--red-dark); }
.sem-title { font-family:'DM Sans',sans-serif; font-size:16px; font-weight:600; margin-bottom:14px; display:flex; align-items:center; gap:8px; }
.sem-title::after { content:''; flex:1; height:1px; background:var(--border); }
.cal-entries { display:flex; flex-direction:column; margin-bottom:28px; }
.cal-row { display:flex; align-items:flex-start; border-bottom:1px solid var(--border); padding:11px 6px; transition:background 0.15s; border-radius:4px; }
.cal-row:last-child { border-bottom:none; }
.cal-row:hover { background:var(--red-light); }
.cal-date { min-width:120px; font-size:13.5px; font-weight:600; color:var(--red-dark); }
.cal-event { font-size:14px; color:#333; line-height:1.5; }
.ctag { display:inline-block; font-size:10px; font-weight:600; padding:1px 7px; border-radius:10px; margin-left:8px; vertical-align:middle; }
.ctag.brk { background:#fff3e0; color:#e65100; }
.ctag.imp { background:#fce8eb; color:var(--red-dark); }
.ctag.inf { background:#e8f4fd; color:#1565c0; }

/* FORMS GRID */
.fgrid { display:grid; grid-template-columns:1fr 1fr; gap:10px; }
.fcat { background:var(--white); border:1px solid var(--border); border-radius:9px; overflow:hidden; transition:box-shadow 0.2s; }
.fcat:hover { box-shadow:0 3px 16px rgba(0,0,0,0.07); }
.fch { display:flex; align-items:center; justify-content:space-between; padding:14px 18px; cursor:pointer; transition:background 0.18s; }
.fch:hover, .fcat.open .fch { background:#fdfcfb; }
.fcat.open .fch { border-bottom:1px solid var(--border); }
.fct { display:flex; align-items:center; gap:10px; font-size:13px; font-weight:600; color:var(--text); }
.fci { width:28px; height:28px; background:var(--red-light); border-radius:6px; display:flex; align-items:center; justify-content:center; }
.fci svg { color:var(--red); }
.fcchev { transition:transform 0.25s; color:var(--text-muted); }
.fcat.open .fcchev { transform:rotate(180deg); color:var(--red); }
.fcb { max-height:0; overflow:hidden; transition:max-height 0.35s var(--ease); }
.fcb-in { padding:10px 14px 14px; }
.ff { display:flex; align-items:center; gap:8px; padding:7px 8px; border-radius:6px; font-size:12.5px; color:#444; cursor:pointer; transition:background 0.15s; }
.ff:hover { background:var(--red-light); color:var(--red-dark); }
.ff svg { color:var(--red); flex-shrink:0; }

/* VACANCY */
.vbadge { display:inline-block; background:var(--red); color:#fff; font-size:10px; font-weight:600; letter-spacing:0.5px; padding:2px 8px; border-radius:20px; margin-left:8px; vertical-align:middle; }
.vmeta { display:flex; gap:12px; margin-top:10px; flex-wrap:wrap; }
.mtag { display:flex; align-items:center; gap:5px; font-size:12px; color:var(--text-muted); background:var(--off-white); border:1px solid var(--border); padding:3px 10px; border-radius:20px; }
.abtn { display:inline-flex; align-items:center; gap:6px; background:var(--red); color:#fff; border:none; border-radius:6px; padding:8px 18px; font-size:12.5px; font-weight:600; cursor:pointer; transition:background 0.18s; margin-top:14px; }
.abtn:hover { background:var(--red-dark); }
.tcon { background:var(--off-white); border:1px solid var(--border); border-radius:7px; padding:11px 15px; font-size:13px; color:var(--text-muted); display:flex; align-items:center; gap:8px; margin-top:10px; }

/* MISC */
.callout { background:linear-gradient(135deg,#fff6f7,#fff); border:1px solid #f0c8ce; border-left:4px solid var(--red); border-radius:8px; padding:16px 20px; }
.callout p { font-size:14px; color:var(--text); line-height:1.7; }
.chip { display:inline-flex; align-items:center; gap:5px; background:#fff; border:1px solid #e5c2c7; border-radius:20px; padding:4px 12px 4px 9px; font-size:13px; font-weight:600; color:var(--red-dark); }
.dept-tag { display:inline-block; background:var(--red); color:#fff; font-size:11px; font-weight:600; padding:2px 8px; border-radius:4px; margin-bottom:8px; }
.chk-circle { width:20px; height:20px; background:var(--red); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:2px; }
.highlight { background:linear-gradient(120deg,rgba(200,16,46,0.07),rgba(200,16,46,0.03)); border-left:3px solid var(--red); padding:12px 16px; border-radius:0 6px 6px 0; margin-top:16px; font-size:14px; color:var(--text); font-style:italic; }

/* SHARED JS ACCORDION */
</style>
